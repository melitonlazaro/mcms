<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller {
		public function __construct() {
				parent::__construct();
					}

	public function index()
	{
		$this->load->view('Form');
	}

	public function dtpicker()
	{
		$this->load->view('datetimepicker');
	}

	public function Book_appointment()
	{
		$procedure = $this->input->post('service');
		$date = $this->input->post('appt_date');
		$time = $this->input->post('app_time');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$address = $this->input->post('address');
		$contact_number = $this->input->post('contact_number');
		include "smsGateway.php";	
		 $smsGateway = new SmsGateway('melitonlazaro1@gmail.com', '09153864099');
          
          $number_code = mt_rand(10000, 99999);
          $deviceID = 70979;
          $number = $contact_number;
          $message = $number_code;
          $result = $smsGateway->sendMessageToNumber($number, $message, $deviceID); 

          $data = array(
          			"code" => $number,
          			"procedure" => $procedure,
          			"date" => $date,
          			"time" => $time,
          			"first_name" => $first_name,
          			"last_name" => $last_name,
          			"address" => $address,
          			"contact_number" => $contact_number
          				);
        $this->confirm_appointment($data);
	}

	public function confirm_appointment($data)
	{
		echo $data["contact_number"];
	}

}