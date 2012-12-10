<?php
class Formulaire_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function set_informations()
	{
		
		
		$data = array(
			'nom' => $this->input->post('nom'),
			'prenom' => $this->input->post('prenom'),
			'session_id' => $this->session->userdata('session_id')
		);
		
		$this->db->insert('confirmation', $data);
		$this->db->select('id_confirmation');
		$this->db->from('confirmation');
		$this->db->where('session_id', $data['session_id']);
		
		$query = $this->db->get();
		
		foreach ($query->result() as $row)
			{
			   $resultat = $row->id_confirmation;
			}
		return $resultat;
	}

	public function set_questions1()
	{
		$data = array(
		'question1' => $this->input->post('question1'),
		'question2' => $this->input->post('question2')
		);
		
		$confirm_id = $this->input->post('confirm_id');
		$this->db->where('id_confirmation', $confirm_id);
		$this->db->update('confirmation', $data);
		
		
		
	}
}

