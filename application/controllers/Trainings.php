<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trainings extends CI_Controller {

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

		$TrainingType = $this->Global_model->getTrainingtyType();
		$data['trainingTypes'] = $TrainingType->result;

		// $this->load->view('login');
		$this->load->view('templates/sharedTemplates/header');
		// $this->load->view('templates/sharedTemplates/sidebar');
		$this->load->view('templates/sharedTemplates/sidebar_start');
		$this->load->view('templates/sharedTemplates/sidebar_emp_role');
		$this->load->view('templates/sharedTemplates/sidebar_hr_role');
		$this->load->view('templates/sharedTemplates/sidebar_end');
		
		// content view
		$this->load->view('templates/settings/trainings/index',$data);
		$this->load->view('templates/settings/trainings/form');
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
