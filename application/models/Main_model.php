<?php 

class Main_model extends CI_Model {
			
			public function __construct() {
				parent::__construct();
			}
			
	public function can_login($username, $password)
	{

		    $this->db->where('username', $username);  
        $this->db->where('password', $password);  
           $query = $this->db->get('user_admin');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;       
           }  
	}

  public function feedback($data)
  {
    $result = $this->db->insert('feedback', $data);
    return $result;
  }

  public function online_appointment($data)
  {
    $this->db->insert('online_appointment', $data);
  }

  public function count_latest_patients()
  {
    $query = $this->db->query("SELECT `last_name`, `given_name`, `date_registered` FROM `patient_info` ORDER BY `patient_ID` LIMIT 5");
    return $query->result();
  }

  public function count_latest_infants()
  {
    $query = $this->db->query("SELECT `infant_id` `infant_last_name`, `infant_first_name`, `infant_date_of_birth` FROM `infant_info` ORDER BY `infant_id` DESC LIMIT 5");
    return $query->result();
  }

  public function count_active_cases()
  {
    $query = $this->db->query("SELECT * FROM `case` WHERE `status` = 'Active' ORDER BY `case_id` DESC LIMIT 5 "  );
    return $query->result();
  }

  public function get_first_names()
  {
    $query = $this->db->query("SELECT `given_name` FROM patient_info");
    return $query->result();
  }

  public function get_last_names()
  {
    $query = $this->db->query("SELECT `last_name` FROM patient_info");
    return $query->result();
  }

  public function count_patient()
  {
    $query = $this->db->query("SELECT * FROM patient_info");
    return $query->num_rows();
  }

  public function count_case()
  {
    $this->db->select('*');
    $this->db->from('case');
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function get_tasks()
  {
    $this->db->select('*');
    $this->db->from('tasks');
    $query = $this->db->get();
    return $query->result();
  }

  public function add_task($task_data)
  {
    $this->db->insert('tasks', $task_data);
    return TRUE;
  }

  public function get_events($start, $end)
  {
    return $this->db->where("start >=", $start)->where("end <=", $end)->get("calendar_events");
  }

  public function add_event($data)
  {
    $result = $this->db->insert("calendar_events", $data);
    return $result;
  }

  public function get_event($id)
  {
    return $this->db->where("ID", $id)->get("calendar_events");
  }
  
  public function update_event($id, $data)
  {
    $this->db->where("ID", $id)->update("calendar_events", $data);
  }

  public function delete_event($id)
  {
    $this->db->where("ID", $id)->delete("calendar_events");
  }
}