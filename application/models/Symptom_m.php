<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Symptom_model extends CI_Model {
                        
    public function get_all_line()
    {
        $this->db->select('*');
        $this->db->from('line');
        $this->db->where('id','1');
        return $this->db->get();                                    
    }
                        
    public function get_data_today($modul, $initial, $end)
    {
        $this->db->select('*');
        $this->db->from($modul);
        $this->db->where('timestamp >=', $initial);
        $this->db->where('timestamp <=', $end);
        return $this->db->get();                                    
    }
                        
    public function get_machine_line($line_id)
    {
        $this->db->select('*');
        $this->db->from('machine');
        $this->db->where('`line.id`', $line_id, false);
        return $this->db->get();                                    
    }
                        
    public function store($data, $modul)
    {
        $this->db->insert($modul, $data);                                
    }

	public function upload_standard($data)
	{
		if($this->db->on_duplicate('dies', $data)){
			return true;
		}
	}
                        
    // public function get_latest_120($initial, $end, $modul)
    // {
    //     $this->db->select('*');
    //     $this->db->from($modul);
    //     $this->db->where('timestamp >=', $initial);
    //     $this->db->where('timestamp <=', $end);
    //     return $this->db->get();                                    
    // }
                        
                            
                        
}
                        
/* End of file Cron_model.php */
    
                        