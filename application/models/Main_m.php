<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_m extends CI_Model {

	public function get_symbol()
	{
		$this->db->select('*');
		$this->db->from('symbol');
		return $this->db->get();
	}

	public function get_element_count($grup)
	{
		$this->db->select('id');
		$this->db->from('images');
		$this->db->where('grup', $grup);
		return $this->db->get();
	}

	public function get_image_last()
	{
		$this->db->select('*');
		$this->db->from('images');
		$this->db->order_by('id', 'DESC');
		$this->db->limit(1, 0);
		return $this->db->get();
	}

	public function insert_image($data)
	{
		$this->db->insert('images', $data);
	}

	public function get_images()
	{
		$this->db->select('*');
		$this->db->from('images');
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}

	public function update_image($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->set($data);
		$this->db->update('images');
	}

	public function update_image_by_element($element, $data)
	{
		$this->db->where('element', $element);
		$this->db->set($data);
		$this->db->update('images');
	}

	public function delete_image($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('images');
	}

	public function get_textbox()
	{
		$this->db->select('*');
		$this->db->from('textbox');
		return $this->db->get();
	}

	public function update_textbox_by_element($element, $data)
	{
		$this->db->where('element', $element);
		$this->db->set($data);
		$this->db->update('textbox');
	}

	

	public function production_status_check()
	{
		$this->db->select('*');
		$this->db->from('production_status');
		$this->db->where('id', '1');
		return $this->db->get();
	}

	public function production_status_change($data)
	{
		$this->db->where('id', '1');
		$this->db->set($data);
		$this->db->update('production_status');
	}

	public function get_production()
	{
		$this->db->select('*');
		$this->db->from('production');
		$this->db->where('id', '1');
		return $this->db->get();
	}

	public function update_production($data)
	{
		$this->db->where('id', '1');
		$this->db->set($data);
		$this->db->update('production');
	}

	public function get_production_images()
	{
		$this->db->select('*');
		$this->db->from('production_images');
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}

	public function update_production_image($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->set($data);
		$this->db->update('production_images');
	}

	public function update_production_by_element($element, $data)
	{
		$this->db->where('element', $element);
		$this->db->set($data);
		$this->db->update('production_images');
	}	

	public function production_line_stop_check()
	{
		$this->db->select('*');
		$this->db->from('production_status');
		$this->db->where('id', '1');
		return $this->db->get();
	}

	public function production_line_stop_change($data)
	{
		$this->db->where('id', '1');
		$this->db->set($data);
		$this->db->update('production_status');
	}

	public function production_line_stop_update($data)
	{
		$this->db->where('id', '1');
		$this->db->set('line_stop', 'line_stop + '.$data["time"], false);
		$this->db->set('eff', '((600-line_stop)/600)*100', false);
		$this->db->update('production');
	}

	//----------------------------------------------

	public function get_monitoring()
	{
		$this->db->select('*');
		$this->db->from('monitoring');
		$this->db->where('id', '1');
		return $this->db->get();
	}

	public function update_monitoring($data)
	{
		$this->db->where('id', '1');
		$this->db->set($data);
		$this->db->update('monitoring');
	}

	public function get_monitoring_images()
	{
		$this->db->select('*');
		$this->db->from('monitoring_images');
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}

	public function update_monitoring_image($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->set($data);
		$this->db->update('monitoring_images');
	}

	public function update_monitoring_by_element($element, $data)
	{
		$this->db->where('element', $element);
		$this->db->set($data);
		$this->db->update('monitoring_images');
	}

	///////////////////////////////////////////////////////////////

	public function add_benchmark_record($data)
	{
		$this->db->insert('benchmark', $data);
	}
	
}

/* End of file Tooling.php */
/* Location: ./application/models/Tooling.php */