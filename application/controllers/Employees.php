<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employees extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		// set_time_limit(2000000);
		set_time_limit(0); //savr 2016-01-28

		ini_set('memory_limit', '1024M'); //savr 2016-11-24
		$username = $this->session->userdata('vUserID');
		$password = $this->session->userdata('vUserPassword');

		if (($username == NULL) && ($password == NULL)) {
			echo '<script> parent.window.location=\'' . base_url() . 'login' . '\';</script>';
		}
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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{


		$hrisID = $this->input->post("hrisID");
		$phicCode = $this->input->post("officeID");
		$lname = $this->input->post("lname");
		$fname = $this->input->post("fname");

		if ($hrisID != "" ||  $phicCode != "" || $lname != "" || $fname != "") {


			$employeeSearchResult = $this->Employees_model->searchEmployees($hrisID, $phicCode, $lname,  $fname);
			if ($employeeSearchResult->success) {
				$data['getemployee'] = $employeeSearchResult;
			} else {
				$data['getemployee'] = json_decode('{"message" : "no record found", "success": false, "result": "[]"}');
			}
		} else {
			$data['getemployee'] = json_decode('{"message" : "no record found", "success": false, "result": "[]"}');
		}


		$data['vHrisID'] = $hrisID;
		$data['vPhicCode'] = $phicCode;
		$data['vLname'] = $lname;
		$data['vFname'] = $fname;


		$this->load->view('templates/sharedTemplates/header');
		$this->load->view('templates/sharedTemplates/sidebar');
		// content view
		$this->load->view('templates/employees/employees_table', $data);
		$this->load->view('templates/sharedTemplates/footer');
	}


	public function create()
	{
		$data['isCreate'] = true;


		$this->load->view('templates/sharedTemplates/header');
		$this->load->view('templates/sharedTemplates/sidebar');
		// content view
		$this->load->view('templates/employees/create');
		$this->load->view('templates/sharedTemplates/footer');


		// $this->load->view('templates/header');
		// $this->load->view('templates/sidebar');
		// $this->load->view('templates/employees/create');
		// // $this->load->view('templates/employees/create_employee',$data);
		// // $this->load->view('templates/sharedTable/table');
		// $this->load->view('templates/footer');
	}
}
