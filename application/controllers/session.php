<?php

class Session extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('session_model');
	}
	
	
	public function connecter()
		{
		$data['message'] = "";
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		
		$this->form_validation->set_rules('utilisateur', 'utilisateur');
		$this->form_validation->set_rules('mot_de_passe', 'mot de passe');
		
		if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header');
				$this->load->view('login', $data);
				$this->load->view('templates/footer');
			}
		else
		{
			$lespermissions = $this->session_model->verifier();
			switch ($lespermissions) 
			{
				case 0:
						$data['message'] = "Utilisateur ou mot de passe incorrecte<br>";
						$this->load->view('templates/header');
						$this->load->view('login', $data);
						$this->load->view('templates/footer');
						break;
				case 1:
						$data['message'] = "";
						$this->load->view('templates/header');
						$this->load->view('informations', $data);
						$this->load->view('templates/footer');
						break;
				case 2:
						$this->load->view('templates/header');
						$this->load->view('confirmation');
						$this->load->view('templates/footer');
						break;
			}
		
		}
	}
}