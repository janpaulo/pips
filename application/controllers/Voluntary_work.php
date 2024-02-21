<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voluntary_work extends CI_Controller {

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

	public function index()
	{
		
		$empID = $this->session->userdata('vUserID') ;
		
		$Volwork= $this->Myprofile_model->getVoluntaryWork($empID);
		$data['voluntaryList'] = $Volwork->result;

		$this->load->view('templates/sharedTemplates/header');
		$this->load->view('templates/sharedTemplates/sidebar');
		// content view
		$this->load->view('templates/myprofile/voluntaryWork/index', $data);
		$this->load->view('templates/myprofile/voluntaryWork/form');
		$this->load->view('templates/sharedTemplates/footer');
	}


}
