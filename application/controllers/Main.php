<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
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
	public function index()
	{
		$this->load->view('index');
	}

  public function employee_login()
  {
    $this->load->view('login');
  }

	public function appointment()
	{
		$this->load->view('form');
	}

  public function Patient_login()
  {

    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $this->load->model('Main_model');
    $login_result = $this->Main_model->patient_login($username, $password);

    if($login_result)
    {
      $patient_ID = $login_result->patient_ID;
      $data['patient_information'] = $this->Main_model->get_patient_info($patient_ID);
      $session_data = array(  
                            'patient_username' => $username,
                            'patient_ID' => $patient_ID
                       );
      $this->session->set_userdata($session_data);
      redirect('Main/patient_profile');
    }
    else
    {
      $this->session->set_flashdata('login_failed', 'Error! Please input correct credentials');
      $this->load->view('form');
    }
    // if($login_result)
    // {
    //   $session_data = array(  
    //                       'patient_username' => $username,
    //                       'patient_ID' => $login_result
    //                  );
    //   $this->session->set_userdata($session_data);
    //   $this->load->view('patient_account');
    // }
    // else
    // {
    //   $this->session->set_flashdata('login_failed', 'Please insert correct username and password.');
    //   $this->load->view('Form');
    // }
  }

  public function patient_profile()
  {
    $patient_ID = $this->session->userdata('patient_ID');
    $data['checkup_count'] = $this->Main_model->count_patient_checkup($patient_ID);
    $data['m_case_count'] = $this->Main_model->count_patient_m_cases($patient_ID);
    $data['active_case'] = $this->Main_model->check_active_case($patient_ID);
    $data['patient_information'] = $this->Main_model->get_patient_info($patient_ID);
    $this->load->view('patient_profile', $data);
  }

  public function patient_logout()
  {
    $this->session->unset_userdata('patient_username');
    $this->session->unset_userdata('patient_ID');
      
      redirect('Main');
  }

  public function patient_settings()
  {
    $this->load->view('patient_setting');
  }

  public function change_patient_password()
  {
    $this->load->model('Main_model');
    $old_password = md5($this->input->post('old_password'));
    $new_password = md5($this->input->post('new_password'));
    $confirm_new = md5($this->input->post('confirm_new'));
    $patient_ID = $this->session->userdata('patient_ID');

    if($new_password === $confirm_new)
    {
      $result = $this->Main_model->check_password($old_password, $patient_ID);
      if($result)
      {
        $result1 = $this->Main_model->change_patient_password_mdl($confirm_new, $patient_ID);
        if($result1)
        {
          $this->session->set_flashdata('change_pass_success', 'Your password has been changed.');
          $this->patient_profile();
        }
      }
      else
      {
        $this->session->set_flashdata('wrong_password', 'Error! Please input correct password.');
        $this->load->view('patient_setting');
      }
    }
    else
    {
      $this->session->set_flashdata('not_identical', 'Error! New Password does not match the Confirm New Password.');
      $this->load->view('patient_setting');
    }
  }

  public function feedback()
  {
    $data = array(
                'feedback_id' => NULL,
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'company' => $this->input->post('company'),
                'message' => $this->input->post('message'),
               );
    $result = $this->Main_model->feedback($data);
    if($result)
      {
       $this->session->set_flashdata('feedback_result', 'Thank you for sending your feedback!');
       $this->load->view('index');
      }
  }

	public function login()
	{
		   $this->load->library('form_validation');  
           $this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $username = $this->input->post('username');  
                $password = md5($this->input->post('password'));  
                //model function  
                $this->load->model('Main_model');  
                if($this->Main_model->can_login($username, $password))  
                {  
                     $session_data = array(  
                          'username'     =>     $username  
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect('Main/dashboard');  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Username and Password');  
                     redirect(base_url() . 'main/employee_login');  
                }  
           }  
           else  
           {  
                //false  
                $this->login();  
           }  
      }  
      
    public function logout()
    {
    	$this->session->unset_userdata('username');
    	
    	redirect('Main');
    }	

    public function book_appointment()
    {
      $this->load->view('appt');
    }

    public function online_appointment()
    {
        $data = array(
                    'appointment_id'    => NULL,
                    'patient_ID'        => $this->input->post('patient_ID'),
                    'contact_number'    => $this->input->post('contact_number'),
                    'date'              => $this->input->post('date') ,
                    'time'              => $this->input->post('time') ,
                    'clinic_procedure'  => $this->input->post('procedure')
                    );
        $this->load->model('Main_model');
        $result = $this->Main_model->add_appointment($data);
        if($result)
        {
          $this->session->set_flashdata('appointment_success', 'You have successfully scheduled an appointment!');
          redirect('Main/book_appointment');
        }
        else
        {
          $this->session->set_flashdata('appointment_failed', 'Error');
          redirect('Main/book_appointment');
        }
    }

    public function send_confirmation_code($num)
    {
      $this->load->view('home', $num); 

    }

    public function dashboard()
    {
      $this->load->model('Main_model');
      $this->load->model('Item_model');
      $data['patient_count'] = $this->Main_model->count_patient();
      $data['total_case'] = $this->Main_model->count_case();
      $data['latest_patients'] = $this->Main_model->count_latest_patients();
      $data['latest_infants'] = $this->Main_model->count_latest_infants();
      $data['active_cases'] = $this->Main_model->count_active_cases();
      $data['recent_activities'] = $this->Main_model->get_recent_activities();
      $data['todays_appointment'] = $this->Main_model->count_todays_appointment();
      $this->load->view('dashboard', $data);
    }

    public function add_task()
    {
      $data = array(
                    'task_id' => NULL,
                    'task_content' => $this->input->post('task_name'),
                    'task_creator' => $this->session->userdata('username'),
                    'date' => date('Y-m-d'),
                    'time' => date('H:i')
                   );
      $result = $this->Main_model->add_task($data); 
    }

    public function full_calendar()
    {
      $this->load->view('full_calendar_example');
    }

    public function get_events()
    {
      $start = $this->input->get("start");
      $end = $this->input->get("end");

      $startdt = new DateTime('now'); //local time
      $startdt->setTimestamp($start); //setting the date based on timestamp
      $start_format = $startdt->format('Y-m-d H:i:s');

      $enddt = new DateTime('now');
      $enddt->setTimestamp($end);
      $end_format = $enddt->format('Y-m-d H:i:s');

      $events = $this->Main_model->get_events($start_format, $end_format);

      $data_events = array();

      foreach($events->result() as $r){
        $data_events[] = array(
          "id" => $r->ID,
          "title" => $r->title,
          "description" => $r->description,
          "end" => $r->end,
          "start" => $r->start 
        );
      }
      echo json_encode(array("events" => $data_events));
      exit();
    }

    public function get_appointments()
    {
      $start = $this->input->get("start");
      $end = $this->input->get("end");

      $startdt = new DateTime('now'); //local time
      $startdt->setTimestamp($start); //setting the date based on timestamp
      $start_format = $startdt->format('Y-m-d H:i:s');

      $enddt = new DateTime('now');
      $enddt->setTimestamp($end);
      $end_format = $enddt->format('Y-m-d H:i:s');

      $events = $this->Main_model->get_appointments($start_format, $end_format);

      $data_events = array();

      foreach($events->result() as $r){
        $data_events[] = array(
          "id" => $r->ID,
          "title" => $r->title,
          "description" => $r->description,
          "end" => $r->end,
          "start" => $r->start 
        );
      }
      echo json_encode(array("events" => $data_events));
      exit();
    }

    public function add_event()
    {
      $name = $this->input->post("name", TRUE);
      $desc = $this->input->post("description", TRUE);
      $start_date = $this->input->post("start_date", TRUE);
      $end_date = $this->input->post("end_date", TRUE);

      // if(!empty($start_date))
      // {
      //   $sd = DateTime::createFromFormat("Y/m/d H:i", $start_date);
      //   $start_date = $sd->format('Y-m-d H:i:s');
      //   $start_date_timestamp = $sd->getTimestamp();
      // }
      // else
      // {
      //   $start_date = date("Y-m-d H:i:s", time());
      //   $start_date_timestamp = time();
      // }

      // if(!empty($end_date))
      // {
      //   $ed = DateTime::createFromFormat("Y/m/d H:i", $end_date);
      //   $end_date = $ed->format('Y-m-d H:i:s');
      //   $end_date_timestamp = $ed->getTimestamp();
      // }
      // else
      // {
      //   $end_date = date("Y-m-d H:i:s", time());
      //   $end_date_timestamp = time();
      // }

      $insert_event_result = $this->Main_model->add_event(array(
          "ID" => NULL,
          "title" =>$name,
          "description" => $desc,
          "start" => $start_date,
          "end" => $end_date
        )
      );
      if($insert_event_result)
      {
        $this->session->set_flashdata('event_success', "A new Calendar Event was added");
        redirect(site_url("Main/dashboard"));
      }
      else
      {
        $this->session->set_flashdata('event_failed', "An error on inserting Calendar Event");
        redirect(site_url("Main/dashboard"));
      }
    }

    public function edit_event()
    {
      $eventid = intval($this->input->post("eventid"));
      $event = $this->Main_model->get_event($eventid);
      if($event->num_rows() == 0)
      {
        echo "Invalid event";
        exit();
      }
      $event->row();

      $name = $this->input->post("name");
      $desc = $this->input->post("description");
      $start_date = $this->input->post("start_date");
      $end_date = $this->input->post("end_date");
      $delete = intval($this->input->post("delete"));

      if(isset($_POST["delete_button"]))
      {
        $id = $this->input->post("eventid");
        $this->Main_model->delete_event($id);
        redirect(site_url('Main/dashboard'));
      }
      else
      {
        if(!empty($start_date))
        {
          $sd = DateTime::createFromFormat("Y/m/d H:i", $start_date);
          $start_date = $sd->format('Y-m-d H:i:s');
          $start_date_timestamp = $sd->getTimestamp();
        }
        else
        {
          $start_date = date("Y-m-d H:i:s", time());
          $start_date_timestamp = time();
        }
        if(!empty($end_date))
        {
          $ed = DateTime::createFromFormat("Y/m/d H:i", $end_date);
          $end_date = $ed->format('Y-m-d H:i:s');
          $end_date_timestamp = $ed->getTimestamp();
        }
        else
        {
          $end_date = date("Y-m-d H:i:s", time());
          $end_date_timestamp = time();
        }

        $data = array(
                    "title" => $name,
                    "description" => $desc,
                    "start" => $start_date,
                    "end" => $end_date,
                     );

        $this->Main_model->update_event($eventid, $data);
        redirect(site_url("main/dashboard"));
      } 
    }

  public function visitor_messages()
  {
    $this->load->model('Main_model');
    $data['vm'] = $this->Main_model->get_visitor_messages();
    $this->load->view('visitor_messages', $data);
  }

  public function test()
  {
    $this->load->view('testing');
  }
}
?>