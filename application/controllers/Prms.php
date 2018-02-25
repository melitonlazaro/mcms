<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prms extends CI_Controller {
		public function __construct() {
				parent::__construct();

					}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


  public function create_case_existing($patient_ID)
  {
    //echo $patient_ID;
    $this->load->model('Prms_model');
    $last_case_id = $this->Prms_model->create_new_case($patient_ID);
    if($last_case_id)
    {
      $data['patient_ID'] = $patient_ID;
      $data['case_ID'] = $last_case_id; 
      $this->load->view('prms/medical_history', $data);
    }
    else
    {
      $error = $this->db->error();
    }
  }

  public function view_id($last_case_id)
  {
    $this->load->view('prms/profiling', $last_case_id);
  }

	public function profiling()
  {
    $this->load->model('Prms_model');
    $data['patient_names'] = $this->Prms_model->get_patient_names();
    $data['maternity_cases'] = $this->Prms_model->get_active_maternity_cases();
    $this->load->view('prms/profiling', $data);
  }

  public function process_profiling()
  {
    $this->load->model('Prms_model');
      $config['upload_path'] = './uploads/';
      $config['allowed_types']        = 'jpg|png';
      $config['max_size']             = 1000;
      $config['max_width']            = 2024;
      $config['max_height']           = 1024;
      $this->load->library('upload', $config);

      if(!$this->upload->do_upload('userfile'))
      {
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
        $error = array('error' => $this->upload->display_errors());
        print_r($error);
      }
      else
      {
        $upload_details = $this->upload->data();
        $file_name = $upload_details['file_name'];

      }


        $data = array(
                  'patient_ID'  => NULL,
                  'last_name'   => $this->input->post('last_name'),
                  'given_name'   => $this->input->post('given_name'),
                  'middle_initial'   => $this->input->post('middle_initial'),
                  'occupation'   => $this->input->post('occupation'),
                  'date_of_birth'   => $this->input->post('date_of_birth'),
                  'contact_num'   => $this->input->post('contact_num'),
                  'street_no'   => $this->input->post('street_no'),
                  'brgy'   => $this->input->post('brgy'),
                  'city'   => $this->input->post('city'),
                  'emergency_contact_name'   => $this->input->post('emergency_contact_name'),
                  'emergency_contact_num'   => $this->input->post('emergency_contact_num'),
                  'emergency_contact_address'   => $this->input->post('emergency_contact_address'),
                  'date_registered' => date('Y-m-d'),
                  'picture' => $file_name
                 );
    $patient_ID = $this->Prms_model->profiling($data);
    $patient_last_name = $this->input->post('last_name');
    $patient_given_name = $this->input->post('given_name');
    $username_check = $this->Prms_model->check_existing_username($patient_last_name, $patient_given_name);
    $default_password = md5(12345);
    if($username_check)
    {
      $username1 = "".$patient_last_name.".".$patient_given_name."";
      $account = array(
                      "patient_ID" => $patient_ID,
                      "username" => $username1,
                      "password" => $default_password
                      );
      $this->Prms_model->create_patient_account($account);

    }
    else
    {
      $username = "".$patient_last_name.".".$patient_given_name."".$patient_ID."";
      $account = array(
                      "patient_ID" => $patient_ID,
                      "username" => $username,
                      "password" => $default_password
                      );
      $this->Prms_model->create_patient_account($account);
    }

    $last_case_id = $this->Prms_model->create_new_case($patient_ID);
    $data1 = array(
                              'patient_ID' =>"$patient_ID",
                              'case_ID' =>"$last_case_id"
                             );

    $this->load->view('prms/medical_history', $data1);
  
  }

  public function medical_history()
  {
    $this->load->model('Prms_model');
    $patient_ID = $this->input->post('patient_ID');
    $data = array(
                        'Num' =>NULL,
                        'Patient_ID' => $patient_ID,
                        'case_id' => $this->input->post('case_id'),
                        'date' =>  date("Y-m-d"),
                        'heent_epilepsy_convulsion' =>  $this->input->post('epilepsy'),
                        'heent_severe_headache_dizzines' =>  $this->input->post('severeheadache'),
                        'heent_visual_disturbance' =>  $this->input->post('visualdisturbance'),
                        'heent_yellowish_discoloration' =>  $this->input->post('yellowdiscoloration'),
                        'heent_enlarged_thyroid' =>  $this->input->post('enlargedthyroid'),
                        'ch_severe_chest_pain' =>  $this->input->post('severechestpain'),
                        'ch_easy_fatigability' =>  $this->input->post('easyfatig'),
                        'ch_axillary_masses' =>  $this->input->post('axillarymasses'),
                        'ch_nipple_discharge' =>  $this->input->post('nippledischarge'),
                        'ch_systolic140_and_above' =>  $this->input->post('systolic'),
                        'ch_diastolic90_and_above' =>  $this->input->post('diastolic'),
                        'ch_family_history_of_CVA ' =>  $this->input->post('familyhistory'),
                        'abdomen_mass_in_abdomen' =>  $this->input->post('massinabdomen'),
                        'abdomen_gallbladder_disease' =>  $this->input->post('historyofgallbladder'),
                        'abdomen_liver_disease' =>  $this->input->post('historyofliver'),
                        'abdomen_previous_surgical_operation' =>  $this->input->post('prevsurgical'),
                        'extremities_severe_varicositles' =>  $this->input->post('severevaricosities'),
                        'extremities_deformities' =>  $this->input->post('deformities'),
                        'extremities_severe_pain_in_legs' => $this->input->post('swellingorsevereinlegs'),
                        'skin_yellowish_discoloration' =>  $this->input->post('yellowish'),
                        'history_smoking' =>  $this->input->post('smoking'),
                        'history_allergies' => $this->input->post('allergies'),
                        'history_drug_intake' => $this->input->post('drugintake'),
                        'history_drug_abuse' => $this->input->post('drugabuse'),
                        'history_STD' => $this->input->post('std'),
                        'history_anemia' => $this->input->post('anemia'),
                        'history_diabetes' => $this->input->post('diabetes'),
                        'oh_fullterm' => $this->input->post('fullterm'),
                        'oh_preterm' => $this->input->post('preterm'),
                        'oh_abortion' => $this->input->post('abortion'),
                        'oh_living_children' => $this->input->post('livingchildren'),
                        'oh_last_delivery_date' => $this->input->post('datelastdelivery'),
                        'oh_last_delivery_type' =>  $this->input->post('typeslastdelivery'),
                        'oh_age_of_gestation_weeks' => $this->input->post('agegestation'),
                        'oh_expected_date_of_confinement' => $this->input->post('dateconfinement'),
                        'oh_previous_CS' => $this->input->post('prevcs'),
                        'oh_3_consec_miscarriages' => $this->input->post('consecmiss'),
                        'oh_ectopic_pregnancy' => $this->input->post('ectopicpregnancy'),
                        'oh_post_partum_hemor' => $this->input->post('postpartum'),
                        'oh_forcep_delivery' => $this->input->post('forcepdelivery'),
                        'oh_pregnancy_induced_hypertension' => $this->input->post('pih'),
                );
    
        $medical_history_result = $this->Prms_model->medical_history($data); 
        if($medical_history_result)
        {
          $data1['patient_ID'] = $patient_ID;
          $data1['last_case_id'] = $this->input->post('case_id');
          $this->load->view('prms/physical_examination', $data1);

        }
        else
        {
          $error = $this->db->error();
        }
  }

  public function physical_examination()
  {
    $this->load->model('Prms_model');
    $data = array(
      'Num' => NULL,
      'Patient_ID' => $this->input->post('patient_id'),
      'case_id' => $this->input->post('case_id'),
      'date' => date('Y-m-d'), 
      'height' => $this->input->post('height'),
      'weight' => $this->input->post('weight'),
      'systolic' => $this->input->post('systolic'),
      'diastolic' => $this->input->post('diastolic'),
      'blood_type' => $this->input->post('blood_type'),
      'conjunctiva_pale' => $this->input->post('pale'),
      'conjunctiva_yellowish' => $this->input->post('yellowish'),
      'neck_enlarged_thyroid' => $this->input->post('enlargedthyroid'),
      'neck_enlarged_lymph_nodes  ' => $this->input->post('enlargedlympnodes'),
      'breast_mass  ' => $this->input->post('mass'),
      'breast_nipple_discharge  ' => $this->input->post('nippledischarged'),
      'breast_dimpling  ' => $this->input->post('skinorangepeel'),
      'breast_enlarged_axillary_lymph_nodes ' => $this->input->post('enlargedaxilarylympnodes'),
      'thorax_abnormal_cardiac_rate' => $this->input->post('abnormalheartsound'),
      'thorax_abnormal_respiratory_rate' => $this->input->post('abnormalbreathsounds'),
      'abdomen_pe_fundic_height' => $this->input->post('abdomenheight'),
      'abdomen_pe_fetal_heart_tone' => $this->input->post('fetalhearttone'),
      'abdomen_pe_fetal_movement' => $this->input->post('fetalmovement'),
      'lm_presenting_part' => $this->input->post('presentingpart'),
      'lm_position_of_fetal_back' => $this->input->post('positionfetalback'),
      'lm_fetal_parts' => $this->input->post('fetalparts'),
      'lm_presenting_part_status' => $this->input->post('statuspresenntingpart'),
      'lm_uterine_activity' => $this->input->post('urineactivity'),
      'perineum_scars' => $this->input->post('scars'),
      'perineum_warts_or_mass' => $this->input->post('wartsmass'),
      'perineum_laceration' => $this->input->post('laceration'),
      'perineum_severe_varicosities' => $this->input->post('severevaricosities'),
      'vagina_bartholins_cyst' => $this->input->post('bartholinscyst'),
      'vagina_warts_gland_discharge' => $this->input->post('wartsskenesgland'),
      'vagina_cystocele_or_rectocoele' => $this->input->post('crystocoele'),
      'vagina_purulant_discharge' => $this->input->post('purulentdischarged'),
      'vagina_erosion_or_foreign_body' => $this->input->post('eroslon'),
      'cervix_consistency' => $this->input->post('consistency'),
      'cervix_dilatation' => $this->input->post('dilation'),
      'cervix_palpable_presenting_part' => $this->input->post('palpablepresentingpart'),
      'cervix_status_BagOfWater' => $this->input->post('statusofbagofwater'),
      'impression' => $this->input->post('impression'),
      'plans' => $this->input->post('plans'),

      );
        $physical_examination_result = $this->Prms_model->physical_examination($data); 
        if($physical_examination_result)
        {
          $this->session->set_flashdata('new_case', 'New case is added!');
          redirect('Main/dashboard');
        }
        else
        {
          $error = $this->db->error();
        }
  }

  public function case_list()
  {
    $this->load->model('Prms_model');
    //$data['case_details'] = $this->Prms_model->get_patient_names();
    $data['case_details'] = $this->Prms_model->get_case_list();
    $this->load->view('prms/case_list', $data);
  }

  public function patient_list()
  {  
    $this->load->model('Prms_model');
    $data['dt_li'] = $this->Prms_model->patient_list();
    $this->load->view('prms/patient_list', $data);
  }

  public function patient_timeline($patient_ID)
  {
    $this->load->model('Prms_model');
    $data['patient_information'] = $this->Prms_model->get_patient_profile($patient_ID);
    $data['cases'] = $this->Prms_model->get_patient_cases($patient_ID);
    $this->load->view('prms/patient_profile', $data);
  }

  public function prenatal($patient_id, $case_id)
  {
    $data['patient_ID'] = $patient_id;
    $data['last_case_id']  = $case_id;
    $this->load->view('prms/physical_examination', $data);
  }

  public function drop_case($case_id)
  {
    $this->load->model('Prms_model');
    $result = $this->Prms_model->drop_case($case_id);
    if($result)
    {
      $this->session->set_flashdata('delete', 'Case successfully deleted. ');
      $this->load->view('prms/cases');
    }
  }

  public function case_timeline($case_id)
  {
    $this->load->model('Prms_model');
    $data['prenatal'] = $this->Prms_model->get_prenatal_case_timeline($case_id);
    $data['medicalhistory'] = $this->Prms_model->get_medical_history_case_timeline($case_id);
    $data['case_details'] = $this->Prms_model->get_case_details($case_id);
    $data['expected_date_of_confinement'] = $this->Prms_model->get_expected_date_of_confinement($case_id);
    $data['case_id'] = $case_id;
    $this->load->view('prms/case_timeline', $data);
  }

  public function pe_result($Num)
  {
    $this->load->model('Prms_model');
    $data['prenatal'] = $this->Prms_model->get_pe_result($Num);
    $this->load->view('prms/Physical_examination_result', $data);
  }

  public function medicalhistory_result($Num)
  {
    $this->load->model('Prms_model');
    $data['mh_result'] = $this->Prms_model->get_mh_result($Num);
    $this->load->view('prms/medical_history_result', $data);
  }

  public function datatable_example()
  {
    $this->load->model('Prms_model');
    $data['dt_ex'] = $this->Prms_model->dt_ex();
    $this->load->view('prms/datatables', $data);
  }

  public function print_report()
  {
    $this->load->model('Prms_model');
    $data['dt_re'] = $this->Prms_model->dt_re();
    $this->load->view('report/v_report', $data);
  }

  public function infant_list()
  {
    $this->load->model('Prms_model');
    $data['infants'] = $this->Prms_model->infant_list();
    $this->load->view('prms/infant_list', $data);
  }

  public function infant_profile($infant_id)
  {
    $this->load->model('Prms_model');
    $data['infant_info'] = $this->Prms_model->infant_profile($infant_id); 
    $data['consultations'] = $this->Prms_model->get_consultation($infant_id);
    $this->load->view('prms/infant_profile', $data);
  }

  public function live_seach()
  {
    $this->load->view('Prms/live_search_demo');
  }

  public function ajaxsearch()
  {

    // if(is_null($this->input->get('id')))
    // {

    // }
    // else
    // {

    //   $this->load->model('Prms_model');
    //   $data['patient_info']=$this->Prms_model->get_patient_info($this->input->get('id')); 
    //   $this->load->view('output', $data);
    // }
    $this->load->model('Prms_model');
    $keyword=$this->input->post('keyword');
        $data=$this->Prms_model->GetRow($keyword);        
        echo json_encode($data);
  }

  public function get_existing_patient_information()
  {
    echo $this->input->post('patientID');
    // $this->load->model('Prms_model');
    // $p_info = $this->input->post('search');
    // $data = $this->Prms_model->get_row($p_info);
    // echo json_encode($data);
  }

   public function print_report_all()
  {
    $this->load->model('Prms_model');
    $data['get_all'] = $this->Prms_model->report_all();
    $this->load->view('report/reporta', $data);
  }

  public function print_pe_report($Num)
    {
      $this->load->model('Prms_model');
      $data['get_pe'] = $this->Prms_model->report_pe($Num);
      $this->load->view('report/reportpe', $data);
    }

   public function print_mh_report($Num)
   {
      $this->load->model('Prms_model');
      $data['get_mh'] = $this->Prms_model->report_mh($Num);
      $this->load->view('report/reportmh', $data);
   } 
   
   public function childbirth()
   {
      $this->load->model('Prms_model');
      $data = array(
                    'infant_id' => NULL,
                    'patient_ID' => $this->input->post('patient_ID'),
                    'case_id' => $this->input->post('case_id'),
                    'infant_first_name' => $this->input->post('infant_first_name'),
                    'infant_last_name' => $this->input->post('infant_last_name'),
                    'infant_middle_initial' => $this->input->post('infant_middle_initial'),
                    'gravida' => $this->input->post('gravida'),
                    'para' => $this->input->post('para'),
                    'gender' => $this->input->post('gender'),
                    'time_of_birth' => $this->input->post('time_of_birth'),
                    'infant_date_of_birth' => $this->input->post('infant_date_of_birth'),
                    'weight' => $this->input->post('weight'),
                    'length' => $this->input->post('length'),
                    'head_circumference' => $this->input->post('head_circumference'),
                    'chest_circumference' => $this->input->post('chest_circumference'),
                    'newborn_screening' => $this->input->post('newborn_screening'),
                   );
      $query_result = $this->Prms_model->childbirth_model($data);
      if($query_result)
      {
        $case_id = $this->input->post('case_id');
        $this->Prms_model->change_maternity_case_status($case_id);
        $this->load->view('dashboard');
      }
      else
      {
        echo "error";
      }
  }


  public function activity_log()
  {
    $this->load->model('Prms_model');
    $data['activity_log'] = $this->Prms_model->get_activity_log();
    $this->load->view('activity_log', $data);
  }

  public function consultation() 
  {
    $date = date('Y-m-d');
    $this->load->model('Prms_model');
    $data = array(
                  'consultation_id' => NULL,
                  'infant_id' => $this->input->post('infant_id'), 
                  'date' => $date,
                  'weight' => $this->input->post('weight'),
                  'height' => $this->input->post('height'),
                  'pulse_rate' => $this->input->post('pulse_rate'),
                  'heart_rate' => $this->input->post('heart_rate'),
                  'chief_complaint' => $this->input->post('chief_complaint'),
                  'remarks' => $this->input->post('remarks')
                 );
    $result = $this->Prms_model->add_consultation($data);
    if($result)
    {
      $infant_id = $this->input->post('infant_id');
      $this->infant_profile($infant_id);
    }
    else
    {

    }
  }

  public function testing()
  {
    // $this->load->model('Prms_model');
    // $case_id = 1;
    // // $data = $this->Prms_model->get_case_details($case_id);
    // // print_r($data);
    // // $time = date('H:m:s');
    // // echo $time;
    // $data['pe_result'] = $this->Prms_model->get_all_pe($case_id);
    // $this->load->view('testing', $data);
    date_default_timezone_set('Asia/Manila');
    $time = date('H:m:s');
    echo $time;
  }

}