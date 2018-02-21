<?php 

class Prms_model extends CI_Model {
			
			public function __construct() {
				parent::__construct();
			}
			
 public function profiling($data)
  {
    $result = $this->db->insert('patient_info', $data);
    if($result)
    {
      $profiling_last_id = $this->db->insert_id();
      $date = date('Y-m-d');
      $time = date('H:m:s');
      $activity = "Profiling";
      $module = "PRMS";
      $data = array(
        'activity_log_id' => NULL,
        'activity' => $activity,
        'module' => $module,
        'date' => $date,
        'time' => $time
      );
      $this->activity_log($data);
      return $profiling_last_id;
    }
    else
    {
      return FALSE;
    }
  }

  public function check_existing_username($patient_last_name, $patient_given_name)
  {
    $username = "" . $patient_last_name. "." . $patient_given_name. "";
    $this->db->select('*');
    $this->db->where('username', $username);
    $result = $this->db->get('patient_account');

    if($result->num_rows() > 0)
    {
      return FALSE;
    }
    else
    {
      return TRUE;
    }
  }

  public function create_patient_account($account)
  {
    $this->db->insert('patient_account', $account);
      $date = date('Y-m-d');
      $time = date('H:m:s');
      $activity = "Created patient account";
      $module = "Online Appointment";
      $data = array(
        'activity_log_id' => NULL,
        'activity' => $activity,
        'module' => $module,
        'date' => $date,
        'time' => $time
      );
      $this->activity_log($data);
  }

  public function get_patient_records()
  {
    $result = $this->db->get('patient_info');
    return $result->result();
  }

  public function get_active_maternity_cases()
  {
    $this->db->select('case_id, patient_ID, status');
    $result = $this->db->get('case');
    return $result->result();
  }

  public function physical_examination($data)
  {
    $result = $this->db->insert('physicalexamination', $data);
    $date = date('Y-m-d');
      $time = date('H:m:s');
      $activity = "Added Physical Examination record";
      $module = "PRMS";
      $data = array(
        'activity_log_id' => NULL,
        'activity' => $activity,
        'module' => $module,
        'date' => $date,
        'time' => $time
      );
      $this->activity_log($data);
    return $result;
      
  }

  public function medical_history($data)
  {
    $result = $this->db->insert('medicalhistory', $data);
    return $result;
      $date = date('Y-m-d');
      $time = date('H:m:s');
      $activity = "Added Medical History record";
      $module = "PRMS";
      $data = array(
        'activity_log_id' => NULL,
        'activity' => $activity,
        'module' => $module,
        'date' => $date,
        'time' => $time
      );
      $this->activity_log($data);
  }
  public function get_patient_profile($patient_ID)
  {
    $this->db->where('patient_ID', $patient_ID);
    $result = $this->db->get('patient_info');
    return $result->row();
  }

  public function get_patient_names()
  {
    $this->db->select('patient_ID, last_name, given_name, middle_initial, date_of_birth');
    $this->db->from('patient_info');
    $query = $this->db->get();
    return $query->result();
  }

  public function get_patient_id($last_name, $first_name)
  {
    $this->db->select('patient_ID');
    $this->db->from('patient_info');
    $this->db->where('last_name', $last_name);
    $this->db->where('given_name', $first_name);
    $result = $this->db->get();
    return $result->row('patient_ID');
  }

  public function create_new_case($patient_ID)
  {
    $data = array(
                  'case_id' => NULL,
                  'patient_ID' => $patient_ID,
                  'date_start' => date('Y-m-d'),
                  'date_completed' => '',
                  'status' => 'Active'
                 );
    $result = $this->db->insert('case', $data);
    return $this->db->insert_id();
      $date = date('Y-m-d');
      $time = date('H:m:s');
      $activity = "Created new Maternity Case";
      $module = "PRMS";
      $data = array(
        'activity_log_id' => NULL,
        'activity' => $activity,
        'module' => $module,
        'date' => $date,
        'time' => $time
      );
      $this->activity_log($data);
  }

 public function count_all()
 {
  $query = $this->db->get("case");
  return $query->num_rows();
 }

 public function fetch_details($limit, $start)
 {
  $this->db->select("*");
  $this->db->from("case");
  $this->db->order_by("case_id", "ASC");
  $this->db->join('patient_info', 'patient_info.patient_ID = case.patient_ID');
  $this->db->limit($limit, $start);
  $query = $this->db->get();
  return $query;
 }

 public function count_all_patient()
 {
  $query = $this->db->get("patient_info");
  return $query->num_rows();
 }

 public function get_patient_cases($patient_ID)
 {
  $this->db->select('*');
  $this->db->from('case');
  $this->db->where('patient_id', $patient_ID);
  $query = $this->db->get();
  return $query->result();
 }

 public function get_medical_history($patient_ID)
 {
  $this->db->select('*');
  $this->db->from('medicalhistory');
  $this->db->where('patient_ID', $patient_ID);
  $query = $this->db->get();
  return $query->result();
 }

 public function get_physical_examination($patient_ID)
 {
  $this->db->select('*');
  $this->db->from('physicalexamination');
  $this->db->where('patient_ID', $patient_ID);
  $query = $this->db->get();
  return $query->result();
 }

 public function get_prenatal_case_timeline($case_id)
 {
  $this->db->select('*');
  $this->db->from('physicalexamination');
  $this->db->where('case_id', $case_id);
  $this->db->order_by('Num DESC');
  $query = $this->db->get();
  return $query->result();
 }

 public function get_case_details($case_id)
 {
  $this->db->select('*');
  $this->db->from('case');
  $this->db->where('case_id', $case_id);
  $this->db->join('patient_info', 'patient_info.patient_ID = case.patient_ID');
  $query = $this->db->get();
  return $query->result();
 }

 public function get_expected_date_of_confinement($case_id)
 {
  $this->db->select('oh_expected_date_of_confinement');
  $this->db->from('medicalhistory');
  $this->db->where('case_id', $case_id);
  $query = $this->db->get();
  return $query->row()->oh_expected_date_of_confinement;
 }

 public function get_medical_history_case_timeline($case_id)
 {
  $this->db->select('Num, Patient_ID, case_id, Date, oh_last_delivery_date, oh_age_of_gestation_weeks, oh_expected_date_of_confinement,');
  $this->db->from('medicalhistory');
  $this->db->where('case_id', $case_id);
  $query = $this->db->get();
  return $query->result();
 }

 public function get_pe_result($Num)
 {
  $this->db->select('*');
  $this->db->from('physicalexamination');
  $this->db->where('Num', $Num);
  $query = $this->db->get();
  return $query->result();
 }

 public function get_mh_result($Num)
 {
  $this->db->select('*');
  $this->db->from('medicalhistory');
  $this->db->where('Num', $Num);
  $query = $this->db->get();
  return $query->result();
 }

 public function dt_ex()
 {
  $this->db->select('*');
  $this->db->from('patient_info');
  $query = $this->db->get();
  return $query->result();
 }

 public function get_case_list()
 {
  $this->db->select('*');
  $this->db->from('case');
  $this->db->join('patient_info', 'patient_info.patient_ID = case.patient_ID');
  $query = $this->db->get();
  $case_result = $query->result();
  return $case_result;
 }
 public function patient_list()
 {
  $this->db->select('*');
  $this->db->from('patient_info');
  $query = $this->db->get();
  return $query->result();
 }

public function dt_re()
 {
  $this->db->select('*');
  $this->db->from('patient_info');
  $query = $this->db->get();
  return $query->result();
 }

 public function infant_list()
 {
  $this->db->select('*');
  $this->db->from('infant_info');
  $this->db->join('patient_info', 'patient_info.patient_ID = infant_info.patient_ID');
  $query = $this->db->get();
  return $query->result();
 }

 public function infant_profile($infant_id)
 {
  $this->db->select('*');
  $this->db->from('infant_info');
  $query = $this->db->get();
  return $query->row();
 }

 public function get_patient_info($search)
 {

        $query = $this
                ->db
                ->select('*')
                ->like('last_name',$search)
                ->or_like('given_name',$search)
                ->get('patient_info', 1);
     
        if($query->num_rows()>0)
        {
            return $query->result(); 
        }
        else
        {
            return null;
        }
    
  } 
  public function GetRow($keyword) 
  {        
    $this->db->select('*');
    $this->db->order_by('patient_ID', 'DESC');
    $this->db->like("last_name", $keyword);
    return $this->db->get('patient_info')->result_array();
  }

  public function get_row($p_info)
  {
    $this->db->select('*');
    $this->db->where("last_name", $p_info);
    return $this->db->get('patient_info')->result();
  }

  public function report_info($patient_ID)
 {
  $this->db->select('*');
  $this->db->from('patient_info');
  $this->db->where('patient_ID', $patient_ID);
  $query = $this->db->get();
  return $query->result();
 }

 public function report_pe($Num)
 {
    $this->db->select('*');
    $this->db->from('physicalexamination');
    $this->db->where('Num', $Num);
    $this->db->join('patient_info', 'patient_info.patient_ID = physicalexamination.Patient_ID');
   // $this->db->where('Num', $Num);
    $query = $this->db->get();
    return $query->result();

 }

 public function report_mh($Num)
 {
    $this->db->select('*');
    $this->db->from('medicalhistory');
    $this->db->where('Num', $Num);
    $this->db->join('patient_info', 'patient_info.patient_ID = medicalhistory.Patient_ID');
    $query = $this->db->get(); 
    return $query->result();
 }

 public function report_all()
 {
  $this->db->select('*');
  $this->db->from('patient_info');
  $query = $this->db->get();
  return $query->result();
 }

 public function childbirth_model($data)
 {
  $query_result = $this->db->insert('infant_info', $data);
  return $query_result;
      $date = date('Y-m-d');
      $time = date('H:m:s');
      $activity = "Added new Childbirth record.";
      $module = "PRMS";
      $data = array(
        'activity_log_id' => NULL,
        'activity' => $activity,
        'module' => $module,
        'date' => $date,
        'time' => $time
      );
      $this->activity_log($data);
 }

 public function change_maternity_case_status($case_id)
 {
  $new_status = "For Prenatal";
  $this->db->set('status', $new_status);
  $this->db->where('case_id', $case_id);
  $this->db->update('case');
 }

 public function get_consultation($infant_id)
 {
  $this->db->select('*');
  $this->db->from('consultation');
  $this->db->where('infant_id', $infant_id);
  $this->db->order_by('consultation_id', 'DESC');
  $query = $this->db->get();
  return $query->result();
 }

 public function activity_log($data)
 {
  $this->db->insert('activity_log', $data);
 }

 public function get_activity_log()
 {
  $this->db->select('*');
  $this->db->from('activity_log');
  $query = $this->db->get();
  return $query->result();
 }

}
?>