<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Symptom extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('main_model');
		$this->load->model('symptom_model');
		$this->load->library('template');
        $this->load->library('session');
        $this->load->library('datatables');
        //$this->is_login();
	}

	public function index()
	{
		$this->symptom();
	}

	public function symptom($tag = false)
	{
		$data['title'] = "SYMPTOM";
		$data['title_icon'] = "fa-bar-chart";
		$data['url'] = base_url();
		$data['hmi'] = base_url('assets/images/hmi/');
		$data['images'] = $this->main_model->get_images()->result();
		$data['symbol'] = $this->main_model->get_symbol()->result();
		$data['textbox'] = $this->main_model->get_textbox()->result();
		$data['position'] = [];
		foreach ($data['images'] as $s){
			array_push($data['position'], '#'.$s->element.'{left:'.$s->x.'px; top:'.$s->y.'px; z-index:'.$s->z.';}');
		}
		foreach ($data['textbox'] as $t){
			array_push($data['position'], '#'.$t->element.'{left:'.$t->x.'px; top:'.$t->y.'px; z-index:'.$t->z.'; color:'.$t->color.';}');
		}

		$data['line'] = $this->symptom_model->get_all_line()->result();
		if($tag){
			$split = str_split($tag);
			if(count($split) == 4){
				$data['tag'] = true;
				$data['selected_line'] = $split[0].$split[1];
				$data['selected_machine'] = $split[2].$split[3];
			}else{
				$data['tag'] = false;
			}
		} else {
			$data['tag'] = false;
		}
		$this->template->display('content/symptom', $data);
	}

	public function get_data_today()
	{
		$modul = $this->input->post('modul');
		// $initial = date("2019-08-24 06:00:00");
		// $end = date("2019-08-27 06:00:00", strtotime('+1 day'));
		$today = date("Y-m-d h:i:s", strtotime('-6 hours'));
		$initial = date("Y-m-d 06:00:00", strtotime($today));
		$end = date("Y-m-d 06:00:00", strtotime($today.'+1 day'));
		$data["motor_1"] = $this->symptom_model->get_data_today($modul."1",$initial,$end)->result();
		$data["motor_2"] = $this->symptom_model->get_data_today($modul."2",$initial,$end)->result();
		$data["motor_3"] = $this->symptom_model->get_data_today($modul."3",$initial,$end)->result();
		$data["motor_4"] = $this->symptom_model->get_data_today($modul."4",$initial,$end)->result();
		echo json_encode($data);
	}

	public function get_data()
	{
		$modul = $this->input->post('modul');
		// $initial = date("2019-08-24 06:00:00");
		// $end = date("2019-08-27 06:00:00", strtotime('+1 day'));
		$date = date("Y-m-d h:i:s", strtotime($this->input->post('date')));
		$initial = date("Y-m-d 06:00:00", strtotime($date));
		$end = date("Y-m-d 06:00:00", strtotime($date.'+1 day'));
		$data["motor_1"] = $this->symptom_model->get_data_today($modul."1",$initial,$end)->result();
		$data["motor_2"] = $this->symptom_model->get_data_today($modul."2",$initial,$end)->result();
		$data["motor_3"] = $this->symptom_model->get_data_today($modul."3",$initial,$end)->result();
		$data["motor_4"] = $this->symptom_model->get_data_today($modul."4",$initial,$end)->result();
		echo json_encode($data);
	}

	public function get_machine_line()
	{
		$line_id = $this->input->post("line_id");
		$feed = $this->symptom_model->get_machine_line($line_id)->result();
		echo json_encode($feed);
	}

	public function upload_standard()
	{
        $config = array(
            'upload_path' => "./uploads/",
            'allowed_types' => "xlsx",
            'overwrite' => TRUE,
            'max_size' => "5120000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
        );
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
		if($this->upload->do_upload('standardFile')) {
			$data = [];
			$file_data = $this->upload->data();
			$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
			$spreadsheet = $reader->load($file_data['full_path']);
			$sheetData = $spreadsheet->getActiveSheet()->toArray();
			foreach($sheetData as $key=>$row){
				if($key > 0){
					array_push($data, array(
					'code'=>$row[0],
					'temperature_warning'=>$row[1],
					'temperature_alarm'=>$row[2],
					'vibration_warning'=>$row[3],
					'vibration_alarm'=>$row[4],
					));
				}
			}
			if($this->symptom_model->upload_standard($data)){
				$data["status"] = "success";
				$data["message"] = "success";
				echo json_encode($data);
			} else {
				$data["status"] = "error";
				$data["message"] = "File is broken or wrong format";
				echo json_encode($data);
			}
		} else {
			$data["status"] = "error";
			$data["message"] = $this->upload->display_errors();
			echo json_encode($data);
		}
		
	}

}