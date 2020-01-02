<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Scada_m extends CI_Model {
                        
    public function get_all_line()
    {
        $this->db->select('*');
        $this->db->from('line');
        return $this->db->get();                                    
    }
                        
    public function get_avg_last_120($initial, $end, $modul)
    {
        $this->db->select('avg(cur_1) as cur_1, avg(cur_2) as cur_2, avg(cur_3) as cur_3, avg(cur_avg) as cur_avg, avg(power_app) as power_app, avg(power_real) as power_real');
        $this->db->from($modul);
        $this->db->where('timestamp >=', $initial);
        $this->db->where('timestamp <=', $end);
        return $this->db->get();                                    
    }
                        
    public function store($data, $modul)
    {
        $this->db->insert($modul, $data);                                
	}

	///////////////////////////////////////////////////////////////////////////////////////////
                        
    public function get_param_limit_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('motor_limit');
        $this->db->where('id', $id);
        return $this->db->get();
    }
                        
    public function save_param_limit_by_id($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('motor_limit', $data);
    }
                        
    public function get_ct_weld_limit_2name($name1,$name2)
    {
        $this->db->select('*');
        $this->db->from('ct_weld_limit');
        $this->db->where('name',$name1);
        $this->db->or_where('name',$name2);
        return $this->db->get();
    }
                        
    public function get_ct_weld_limit_3name($name1,$name2,$name3)
    {
        $this->db->select('*');
        $this->db->from('ct_weld_limit');
        $this->db->where('name',$name1);
        $this->db->or_where('name',$name2);
        $this->db->or_where('name',$name3);
        return $this->db->get();
    }
                        
    public function save_ct_param_by_name($name, $data)
    {
        $this->db->where('name', $name);
        $this->db->update('ct_weld_limit', $data);
    }

	///////////////////////////////////////////////////////////////////////////////////////////

	public function get_textbox_consumption()
	{
		$this->db->select('*');
		$this->db->from('textbox_consumption');
		return $this->db->get();
	}
	
	public function get_symbol_consumption()
	{
		$this->db->select('*');
		$this->db->from('symbol');
		return $this->db->get();
	}

	public function get_images_consumption()
	{
		$this->db->select('*');
		$this->db->from('images_consumption');
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}
	
    public function get_data_consumption($initial = null, $end = null)
    {
        $this->db->select('*');
        $this->db->from('consumption');
        $this->db->where('month(date)', date('m'), false);
        $this->db->where('year(date)', date('Y'), false);
        return $this->db->get();
    }
                        
    public function get_data_consumption_specific_month($month, $year)
    {
        $this->db->select('*');
        $this->db->from('consumption');
        $this->db->where('month(date)', $month, false);
        $this->db->where('year(date)', $year, false);
        return $this->db->get();
    }
                        
    public function get_kwh_limit()
    {
        $this->db->select('*');
        $this->db->from('kwh_limit');
        $this->db->where('id','1');
        return $this->db->get();
    }
                        
    public function kwh_limit_update($data)
    {
        $this->db->where('id','1');
        $this->db->update('kwh_limit',$data);
    }
    
	///////////////////////////////////////////////////////////////////////////////////////////    

	public function get_textbox_ct_weld()
	{
		$this->db->select('*');
		$this->db->from('textbox_ct_weld');
		return $this->db->get();
	}
	
	public function get_symbol_ct_weld()
	{
		$this->db->select('*');
		$this->db->from('symbol');
		return $this->db->get();
	}

	public function get_images_ct_weld()
	{
		$this->db->select('*');
		$this->db->from('images_ct_weld');
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}
	
    public function get_data_ct_weld_spec_date($modul, $initial, $end)
    {
        $this->db->select('*');
        $this->db->from($modul);
        $this->db->where('datetime >=', '"'.$initial.'"', false);
        $this->db->where('datetime <', '"'.$end.'"', false);
        return $this->db->get();
    }
                        
    public function get_ct_weld_limit_name($name)
    {
        $this->db->select('*');
        $this->db->from('ct_weld_limit');
        $this->db->where('name',$name);
        return $this->db->get();
    }
                        
    public function ct_weld_limit_update($name,$limit)
    {
		$this->db->where('name', $name);		
		$this->db->set('limit', $limit);
        $this->db->update('ct_weld_limit');
    }
    
	///////////////////////////////////////////////////////////////////////////////////////////    

	public function get_textbox_ct_motor()
	{
		$this->db->select('*');
		$this->db->from('textbox_ct_motor');
		return $this->db->get();
	}
	
	public function get_symbol_ct_motor()
	{
		$this->db->select('*');
		$this->db->from('symbol');
		return $this->db->get();
	}

	public function get_images_ct_motor()
	{
		$this->db->select('*');
		$this->db->from('images_ct_motor');
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}
	
    public function get_data_ct_motor_spec_date($modul, $initial, $end)
    {
        $this->db->select('*');
        $this->db->from($modul);
        $this->db->where('datetime >=', '"'.$initial.'"', false);
        $this->db->where('datetime <', '"'.$end.'"', false);
        return $this->db->get();
    }
                        
    public function get_ct_motor_limit($name)
    {
        $this->db->select('*');
        $this->db->from('motor_limit');
        $this->db->where('name', $name);
        return $this->db->get();
    }
                        
    public function ct_motor_limit_update($name,$field,$limit)
    {
		$this->db->where('name', $name);		
		$this->db->set($field, $limit);
        $this->db->update('motor_limit');
    }
    
	///////////////////////////////////////////////////////////////////////////////////////////  



    






    // public function get_latest_120($initial, $end, $modul)
    // {
    //     $this->db->select('*');
    //     $this->db->from($modul);
    //     $this->db->where('timestamp >=', $initial);
    //     $this->db->where('timestamp <=', $end);
    //     return $this->db->get();                                    
    // }
                        
    

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

	public function get_images_5a()
	{
		$this->db->select('*');
		$this->db->from('images_5a');
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
}
                        
/* End of file Cron_model.php */
    
                        