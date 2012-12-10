<?php
class Session_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function verifier()
	{
		$utilisateur =  $this->input->post('utilisateur');
		$mot_de_passe =  $this->input->post('mot_de_passe');
		$this->db->select('permissions');
		$this->db->from('utilisateurs');
		$this->db->where('utilisateur', $utilisateur);
		$this->db->where('mot_de_passe', $mot_de_passe);
		
		$query = $this->db->get();
		

		$resultat = 0;
		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
				{
				   $resultat = $row->permissions;
				}
		}
		return $resultat;
	}

}
