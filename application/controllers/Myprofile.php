<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myprofile extends CI_Controller {

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

	
	public function __construct() {
		parent::__construct();

		// set_time_limit(2000000);
		set_time_limit(0); //savr 2016-01-28

		ini_set('memory_limit', '1024M'); //savr 2016-11-24
		$username = $this->session->userdata('vUserID');
		$password = $this->session->userdata('vUserPassword');

		if (($username == NULL) && ($password == NULL)) {
			echo '<script> parent.window.location=\''.base_url().'login'.'\';</script>';

		}
		
	}

	public function index()
	{
		// $this->load->view('login');
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
        //module views
		$this->load->view('templates/myprofile/profile');
		$this->load->view('templates/footer');
		
	}


	public function my_dtr()
	{
		// $this->load->view('login');
		$data['isDtr']= true;
		$data['buttonTitle']="Upload";

		// $this->load->view('templates/header');
		// $this->load->view('templates/sidebar');
		// $this->load->view('templates/myprofile/mydtr',$data);
		// $this->load->view('templates/footer');

		$this->load->view('templates/sharedTemplates/header');
		$this->load->view('templates/sharedTemplates/sidebar');
		// content view
		$this->load->view('templates/myprofile/mydtr2',$data);
		$this->load->view('templates/sharedTemplates/footer');
	}

	public function my_leave()
	{
		// $this->load->view('login');
		$data['isDtr']= true;
		$data['buttonTitle']="Upload";

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/myprofile/myleave',$data);
		$this->load->view('templates/footer');
	}

	public function my_payslip()
	{
		// $this->load->view('login');
		$data['isDtr']= true;
		$data['buttonTitle']="Upload";

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/myprofile/mypayslip',$data);
		$this->load->view('templates/footer');
	}
	
	public function my_profile()
	{
		// $this->load->view('login');
		$data['isProfile']= true;
		$data['buttonTitle']="Submit";

		// $this->load->view('templates/header');
		// $this->load->view('templates/sidebar');
		// $this->load->view('templates/myprofile/profile',$data);
		// $this->load->view('templates/footer');

		$this->load->view('templates/sharedTemplates/header');
		$this->load->view('templates/sharedTemplates/sidebar');
		// content view
		$this->load->view('templates/myprofile/profile',$data);
		$this->load->view('templates/sharedTemplates/footer');
	}
}
