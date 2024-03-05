<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Education_level extends CI_Controller {

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
		// $this->load->view('login');


		$Educlevel = $this->Global_model->getEducationLevel();
		$data['educLevel'] = $Educlevel->result;


		$this->load->view('templates/sharedTemplates/header');
		$this->load->view('templates/sharedTemplates/sidebar');
		// content view
		$this->load->view('templates/settings/educational_level/index',$data);
		$this->load->view('templates/settings/educational_level/form');
		$this->load->view('templates/sharedTemplates/footer');
	}
	
	public function create()
	{
		
		$Data = json_encode(file_get_contents('php://input'), true);
		$dataOject=  stripslashes($Data) ;

		// parse to single qoutes
		$newstring = str_replace('"{', '{', $dataOject);
		$dataNewOject = str_replace('}"', '}', $newstring);
		echo $dataNewOject;
		// $this->Myprofile_model->createElgb($dataNewOject);
		
	}


	public function update()
	{
		
		$Data = json_encode(file_get_contents('php://input'), true);
		$dataOject=  stripslashes($Data) ;

		// parse to single qoutes
		$newstring = str_replace('"{', '{', $dataOject);
		$dataNewOject = str_replace('}"', '}', $newstring);
		echo $dataNewOject;
		// $this->Myprofile_model->updateElgb($dataNewOject);
		
	}
}
