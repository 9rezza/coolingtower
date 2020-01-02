<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Scada extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('main_m');
		$this->load->model('scada_m');
		$this->load->library('template');
        $this->load->library('session');
        $this->load->library('datatables');
        //$this->is_login();
	}

	// public function nav($value)
	// {
	// 	for ($i=0; $i < 3; $i++) { 
	// 		if($i == $value){
	// 			$nav[$i] = "active";
	// 		} else {
	// 			$nav[$i] = "";				
	// 		}
	// 	}
	// 	return $nav;
	// }

	public function index()
	{
		// $data['title'] = "Dashboard";
		// $data['url'] = base_url();
		// $data['circuit'] = base_url('assets/images/circuit/');
		// $this->template->display('content/index', $data);
		$this->scada_ct();
	}

	public function scada_ct()
	{
		$data['title'] = "COOLING TOWER MONITORING";
		$data['title_icon'] = "fa-home";
		$data['url'] = base_url();
		$data['hmi'] = base_url('assets/images/hmi/');
		$data['images'] = $this->scada_m->get_images()->result();
		$data['symbol'] = $this->scada_m->get_symbol()->result();
		$data['textbox'] = $this->scada_m->get_textbox()->result();
		$data['position'] = [];
		// $data['line'] = $this->scada_m->get_all_line()->result();
		foreach ($data['images'] as $s){
			array_push($data['position'], '#'.$s->element.'{left:'.$s->x.'px; top:'.$s->y.'px; z-index:'.$s->z.';}');
		}
		foreach ($data['textbox'] as $t){
			array_push($data['position'], '#'.$t->element.'{left:'.$t->x.'px; top:'.$t->y.'px; z-index:'.$t->z.'; color:'.$t->color.';}');
		}
		$this->template->display('content/scada_ct', $data);
	}

	/////////////////////////////////////////////////////////////////////////////

	public function get_motor_limit_by_id()
	{
		$id = $this->input->post('id');
		$data = $this->scada_m->get_param_limit_by_id($id)->row();
		echo json_encode($data);
	}

	public function save_motor_limit_by_id()
	{
		$id = $this->input->post('id');
		$data['temp_limit'] = $this->input->post('temp_limit');
		$data['vibe_limit'] = $this->input->post('vibe_limit');
		$this->scada_m->save_param_limit_by_id($id, $data);
		echo json_encode('success');
	}

	public function get_ct_weld_limit()
	{
		$modul = $this->input->post('modul');
		if($modul == 'in'){
			$name1 = 'ct_in_press';
			$name2 = 'ct_in_press_low';
			$name3 = 'ct_in_temp';
		} else if($modul == 'out'){
			$name1 = 'ct_out_press';
			$name2 = 'ct_out_press_low';
			$name3 = 'ct_out_temp';
		}
		$limit = $this->scada_m->get_ct_weld_limit_3name($name1, $name2, $name3)->result();
		foreach ($limit as $key => $value) {
			$data[$value->name] = $value->limit;
		}
		echo json_encode($data);
	}

	public function save_ct_param_by_2name()
	{
		$modul = $this->input->post('modul');
		$temp_name = 'ct_'.$modul.'_temp';
		$temp_limit['limit'] = $this->input->post('temp_limit');
		$press_name = 'ct_'.$modul.'_press';
		$press_limit['limit'] = $this->input->post('press_limit');

		if($this->scada_m->save_ct_param_by_name($temp_name,$temp_limit) || $this->scada_m->save_ct_param_by_name($press_name,$press_limit)){
			$feed = 'success';
		} else { 
			$feed = null; 
		}
		echo json_encode($feed);
	}

	public function save_ct_param_by_3name()
	{
		$modul = $this->input->post('modul');
		$temp_name = 'ct_'.$modul.'_temp';
		$temp_limit['limit'] = $this->input->post('temp_limit');
		$press_name = 'ct_'.$modul.'_press';
		$press_limit['limit'] = $this->input->post('press_limit');
		$press_low_name = 'ct_'.$modul.'_press_low';
		$press_low_limit['limit'] = $this->input->post('press_low_limit');

		if($this->scada_m->save_ct_param_by_name($temp_name,$temp_limit) || $this->scada_m->save_ct_param_by_name($press_name,$press_limit) || $this->scada_m->save_ct_param_by_name($press_low_name,$press_low_limit)){
			$feed = 'success';
		} else { 
			$feed = null; 
		}
		echo json_encode($feed);
	}

	////////////////////////////////////////////////////////////////////////

	public function consumption()
	{
		$data['title'] = "COOLING TOWER MONITORING";
		$data['title_icon'] = "fa-home";
		$data['url'] = base_url();
		$data['hmi'] = base_url('assets/images/hmi/');
		$data['images'] = $this->scada_m->get_images_consumption()->result();
		$data['symbol'] = $this->scada_m->get_symbol_consumption()->result();
		$data['textbox'] = $this->scada_m->get_textbox_consumption()->result();
		$data['position'] = [];

		$data['kwh_limit'] = $this->scada_m->get_kwh_limit()->row();
		$data['limit'] =$data['kwh_limit']->limit;
		// $data['line'] = $this->scada_m->get_all_line()->result();
		foreach ($data['images'] as $s){
			array_push($data['position'], '#'.$s->element.'{left:'.$s->x.'px; top:'.$s->y.'px; z-index:'.$s->z.';}');
		}
		foreach ($data['textbox'] as $t){
			array_push($data['position'], '#'.$t->element.'{left:'.$t->x.'px; top:'.$t->y.'px; z-index:'.$t->z.'; color:'.$t->color.';}');
		}
		$this->template->display('content/kwh', $data);
	}

	public function get_data_consumption()
	{
		$data = $this->scada_m->get_data_consumption()->result();
		// $data['limit'] = $this->scada_m->get_kwh_limit()->row();
		echo json_encode($data);
	}

	public function get_data_consumption_specific_month()
	{
		$month = $this->input->post('month');
		$year = $this->input->post('year');
		$data = $this->scada_m->get_data_consumption_specific_month($month, $year)->result();
		// $data['limit'] = $this->scada_m->get_kwh_limit()->row();
		echo json_encode($data);
	}

	public function kwh_limit_update()
	{
		$data = $this->input->post();
		echo json_encode($this->scada_m->kwh_limit_update($data));
	}

	//////////////////////////////////////////////////////////////////////////

	public function ct_weld()
	{
		$data['title'] = "COOLING TOWER MONITORING";
		$data['title_icon'] = "fa-home";
		$data['url'] = base_url();
		$data['hmi'] = base_url('assets/images/hmi/');
		$data['images'] = $this->scada_m->get_images_ct_weld()->result();
		$data['symbol'] = $this->scada_m->get_symbol_ct_weld()->result();
		$data['textbox'] = $this->scada_m->get_textbox_ct_weld()->result();
		$data['position'] = [];

		// $data['line'] = $this->scada_m->get_all_line()->result();
		foreach ($data['images'] as $s){
			array_push($data['position'], '#'.$s->element.'{left:'.$s->x.'px; top:'.$s->y.'px; z-index:'.$s->z.';}');
		}
		foreach ($data['textbox'] as $t){
			array_push($data['position'], '#'.$t->element.'{left:'.$t->x.'px; top:'.$t->y.'px; z-index:'.$t->z.'; color:'.$t->color.';}');
		}
		$this->template->display('content/ct_weld', $data);
	}

	public function get_data_ct_weld_spec_date()
	{
		$modul = $this->input->post('modul');
		$initial = $this->input->post('initial');
		$end = $this->input->post('end');
		$data['ct_limit'] = $this->scada_m->get_ct_weld_limit_name($modul)->row();
		$data['limit'] =$data['ct_limit']->limit;
		if($modul == "ct_in_press" || $modul == "ct_out_press"){
			$data['ct_limit_low'] = $this->scada_m->get_ct_weld_limit_name($modul."_low")->row();
			$data['limit_low'] =$data['ct_limit_low']->limit;
		} else {
			$data['limit_low'] = NULL;
		}
		$data['data'] = $this->scada_m->get_data_ct_weld_spec_date($modul, $initial, $end)->result();
		// $data['limit'] = $this->scada_m->get_kwh_limit()->row();
		echo json_encode($data);
	}

	public function ct_weld_limit_update()
	{
		$modul = $this->input->post('modul');
		$limit = $this->input->post('limit');
		if($modul == 'ct_in_press' || $modul == 'ct_out_press'){
			$modul_low = $modul.'_low';
			$limit_low = $this->input->post('limit_low');
			$this->scada_m->ct_weld_limit_update($modul_low,$limit_low);
		}
		echo json_encode($this->scada_m->ct_weld_limit_update($modul,$limit));
	}

		//////////////////////////////////////////////////////////////////////////

	public function ct_motor()
	{
		$data['title'] = "COOLING TOWER MONITORING";
		$data['title_icon'] = "fa-home";
		$data['url'] = base_url();
		$data['hmi'] = base_url('assets/images/hmi/');
		$data['images'] = $this->scada_m->get_images_ct_motor()->result();
		$data['symbol'] = $this->scada_m->get_symbol_ct_motor()->result();
		$data['textbox'] = $this->scada_m->get_textbox_ct_motor()->result();
		$data['position'] = [];

		// $data['line'] = $this->scada_m->get_all_line()->result();
		$data['kwh_limit'] = $this->scada_m->get_kwh_limit()->row();
		$data['limit'] =$data['kwh_limit']->limit;
		foreach ($data['images'] as $s){
			array_push($data['position'], '#'.$s->element.'{left:'.$s->x.'px; top:'.$s->y.'px; z-index:'.$s->z.';}');
		}
		foreach ($data['textbox'] as $t){
			array_push($data['position'], '#'.$t->element.'{left:'.$t->x.'px; top:'.$t->y.'px; z-index:'.$t->z.'; color:'.$t->color.';}');
		}
		$this->template->display('content/ct_motor', $data);
	}

	public function get_data_ct_motor_spec_date()
	{
		$modul = $this->input->post('modul');
		$initial = $this->input->post('initial');
		$end = $this->input->post('end');
		$split = explode('_',$modul);
		$limit_modul = $split[0].'_'.$split[1];
		$field = $split[2].'_limit';
		$data['ct_motor_limit'] = $this->scada_m->get_ct_motor_limit($limit_modul)->row();
		$data['limit'] =$data['ct_motor_limit']->$field;
		$data['data'] = $this->scada_m->get_data_ct_motor_spec_date($modul, $initial, $end)->result();
		echo json_encode($data);
	}

	public function ct_motor_limit_update()
	{
		$name = $this->input->post('name');
		$field = $this->input->post('field');
		$limit = $this->input->post('limit');
		echo json_encode($this->scada_m->ct_motor_limit_update($name,$field,$limit));
	}




	// public function line_5a()
	// {
	// 	// $data['title'] = "PRESS SHOP MONITORING - <span class='text-green'>Line 5A</span>";
	// 	$data['title'] = "PRESS SHOP MONITORING";
	// 	$data['title_icon'] = "fa-home";
	// 	$data['url'] = base_url();
	// 	$data['hmi'] = base_url('assets/images/hmi/');
	// 	$data['images'] = $this->scada_m->get_images_5a()->result();
	// 	$data['symbol'] = $this->scada_m->get_symbol()->result();
	// 	$data['textbox'] = $this->scada_m->get_textbox()->result();
	// 	$data['position'] = [];
	// 	$data['line'] = $this->scada_m->get_all_line()->result();
	// 	foreach ($data['images'] as $s){
	// 		array_push($data['position'], '#'.$s->element.'{left:'.$s->x.'px; top:'.$s->y.'px; z-index:'.$s->z.';}');
	// 	}
	// 	foreach ($data['textbox'] as $t){
	// 		array_push($data['position'], '#'.$t->element.'{left:'.$t->x.'px; top:'.$t->y.'px; z-index:'.$t->z.'; color:'.$t->color.';}');
	// 	}
	// 	$this->template->display('content/line_5a', $data);
	// }

	// public function line($param)
	// {
	// 	$param;
	// 	$data['title'] = "PRESS SHOP";
	// 	$data['title_icon'] = "fa-home";
	// 	$data['url'] = base_url();
	// 	$data['hmi'] = base_url('assets/images/hmi/');
	// 	$data['images'] = $this->main_m->get_images()->result();
	// 	$data['symbol'] = $this->main_m->get_symbol()->result();
	// 	$data['textbox'] = $this->main_m->get_textbox()->result();
	// 	$data['position'] = [];
	// 	foreach ($data['images'] as $s){
	// 		array_push($data['position'], '#'.$s->element.'{left:'.$s->x.'px; top:'.$s->y.'px; z-index:'.$s->z.';}');
	// 	}
	// 	foreach ($data['textbox'] as $t){
	// 		array_push($data['position'], '#'.$t->element.'{left:'.$t->x.'px; top:'.$t->y.'px; z-index:'.$t->z.'; color:'.$t->color.';}');
	// 	}
	// 	$this->template->display('content/line', $data);
	// }

	// public function alarm()
	// {
	// 	$data['title'] = "ERROR / ALARM";
	// 	$data['title_icon'] = "fa-warning text-red";
	// 	$data['url'] = base_url();
	// 	$data['hmi'] = base_url('assets/images/hmi/');
	// 	$data['images'] = $this->main_m->get_images()->result();
	// 	$data['symbol'] = $this->main_m->get_symbol()->result();
	// 	$data['textbox'] = $this->main_m->get_textbox()->result();
	// 	$data['position'] = [];
	// 	foreach ($data['images'] as $s){
	// 		array_push($data['position'], '#'.$s->element.'{left:'.$s->x.'px; top:'.$s->y.'px; z-index:'.$s->z.';}');
	// 	}
	// 	foreach ($data['textbox'] as $t){
	// 		array_push($data['position'], '#'.$t->element.'{left:'.$t->x.'px; top:'.$t->y.'px; z-index:'.$t->z.'; color:'.$t->color.';}');
	// 	}
	// 	$this->template->display('content/alarm', $data);
	// }












	public function waterpump()
	{
		$data['title'] = "Dashboard";
		$data['url'] = base_url();
		$data['hmi'] = base_url('assets/images/hmi/');
		$data['images'] = $this->main_m->get_images()->result();
		$data['symbol'] = $this->main_m->get_symbol()->result();
		$data['textbox'] = $this->main_m->get_textbox()->result();
		$data['position'] = [];
		foreach ($data['images'] as $s){
			array_push($data['position'], '#'.$s->element.'{left:'.$s->x.'px; top:'.$s->y.'px; z-index:'.$s->z.';}');
		}
		foreach ($data['textbox'] as $t){
			array_push($data['position'], '#'.$t->element.'{left:'.$t->x.'px; top:'.$t->y.'px; z-index:'.$t->z.'; color:'.$t->color.';}');
		}
		$this->template->display('content/waterpump', $data);
	}

	public function insert_image_symbol()
	{
		$input = $this->input->post();
		$grup = $this->main_m->get_element_count($input['grup'])->num_rows();

		$data = [
			'grup' => $input['grup'],
			'color' => $input['color'],
			'src' => $input['src'],
			'element' => $input['grup'].'_'.$grup,
			'x' => 0,//$input['x'], 
			'y' => 0,//$input['y'], 
		];
		$this->main_m->insert_image($data);
		$feed = $this->main_m->get_image_last()->row();
		echo json_encode($feed);
	}

	public function hmi_update_postition()
	{
		$input = $this->input->post();
		$id = $input['id'];
		$data = [
			'x' => $input['x'], 
			'y' => $input['y'], 
		];
		$this->main_m->update_image($id, $data);
		echo json_encode($input);
	}

	public function update_hmi_z_index()
	{
		$input = $this->input->post();
		$element = $input['element'];
		$data = [
			'z' => $input['z']
		];
		$this->main_m->update_image_by_element($element, $data);
		echo json_encode($input);
	}

	public function hmi_delete()
	{
		$input = $this->input->post();
		$id = $input['id'];
		$this->main_m->delete_image($id);
		echo json_encode($input);
	}

	public function textbox_update_postition()
	{
		$input = $this->input->post();
		$element = $input['element'];
		$data = [
			'x' => $input['x'], 
			'y' => $input['y'], 
		];
		$this->main_m->update_textbox_by_element($element, $data);
		echo json_encode($input);
	}

}