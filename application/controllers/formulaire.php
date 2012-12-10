<?php

class Formulaire extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('formulaire_model');
	}
	
/*	public function view($formulaire = 'informations')
	{
		if ( ! file_exists('application/views/'.$formulaire.'.php'))
		{
			//la page n'existe pas
			show_404();
		}
		$data['message'] = "";
		$this->load->view('templates/header', $data);
		$this->load->view($formulaire, $data);
		$this->load->view('templates/footer', $data);
	} */
	
	
	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->session->set_userdata('logged_in', TRUE);
		
		$this->form_validation->set_rules('prenom', 'Prénom', 'required');
		$this->form_validation->set_rules('nom', 'Nom', 'required');
/*		$this->form_validation->set_rules('genre', 'Genre', 'required');
		$this->form_validation->set_rules('date_naissance', 'Date de naissance', 'required');
		$this->form_validation->set_rules('adresse', 'Adresse', 'required');
		$this->form_validation->set_rules('ville', 'Ville', 'required');
		$this->form_validation->set_rules('code_postal', 'Code postal', 'required');
		$this->form_validation->set_rules('courriel', 'Courriel', 'valid_email');
		$this->form_validation->set_rules('telephone_domicile', 'Téléphone (domicile)', 'required');
		$this->form_validation->set_rules('telephone_cellulaire', 'Téléphone (cellulaire)');
		$this->form_validation->set_rules('telephone_travail', 'Téléphone (travail)');
		$this->form_validation->set_rules('ville_audition', 'Ville d\'audition', 'required');
		$this->form_validation->set_rules('lieu_naissance', 'Lieu de naissance', 'required');
		$this->form_validation->set_rules('nom_contact', 'Nom du contact', 'required');
		$this->form_validation->set_rules('relation_contact', 'Relation avec le contact', 'required');
		$this->form_validation->set_rules('telephone_domicile_contact', 'Téléphone du contact (domicile)', 'required');
		$this->form_validation->set_rules('telephone_cellulaire_contact', 'genre');
		$this->form_validation->set_rules('telephone_travail_contact', 'genre');
		$this->form_validation->set_rules('courriel_contact', 'Courriel du contact', 'valid_email'); */
		
		
		if ($this->form_validation->run() === TRUE && $this->session->userdata('logged_in') === TRUE)
		{
			$confirm_id = $this->formulaire_model->set_informations();
	
			$data['confirm_id'] = $confirm_id;
			$this->load->view('templates/header');
			$this->load->view('questions1', $data);
			$this->load->view('templates/footer');

		}
		else
		{
			$this->load->view('templates/header');	
			$this->load->view('informations');
			$this->load->view('templates/footer');
			
			
		}
	}

	public function questions1()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['confirm_id'] = $this->input->post('confirm_id');
		$this->form_validation->set_rules('confirm_id', 'confirm_id');
		$this->form_validation->set_rules('question1', 'de la question 1', 'required');
		$this->form_validation->set_rules('question2', 'de la question 2', 'required');
			
			
		if ($this->form_validation->run() === TRUE && $this->session->userdata('logged_in') === TRUE)
		{
	
			$this->formulaire_model->set_questions1();
			$this->session->sess_destroy();
			$data['message'] = "Les informations ont été enregistrés avec succès.";
			$this->load->view('templates/header');	
			$this->load->view('informations', $data);
			$this->load->view('templates/footer');
			
		}
		else 
		{
			$this->load->view('templates/header');
			$this->load->view('questions1', $data);
			$this->load->view('templates/footer');
		}
	}
}