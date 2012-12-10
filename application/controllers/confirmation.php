<?php

class Confirmation extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('confirmation_model');
	}
	
	
	
	
	
}
