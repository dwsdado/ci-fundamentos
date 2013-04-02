<?php

class Clients_model extends CI_Model {

	public function __construct()
	{
	$this->load->database();
	}


	public function findAllBySlug($slug = FALSE)
	{
		/*if ($slug === FALSE)
		{
			$query = $this->db->get('clients');
			return $query->result_array();
		}*/

		$query = $this->db->get_where('clients');
		return $query->row_array();
	}
	
	public function set_news()
	{
		$this->load->helper('url');
		
		//$slug = url_title($this->input->post('nome'), 'dash', TRUE);
		
		$data = array(
			'nome' => $this->input->post('nome'),
			//'slug' => $slug,
			'produto' => $this->input->post('produto')
		);
		
		return $this->db->insert('clients', $data);
	}

	function deletar($id){
		$this->db->where('id', $id);
		return $this->db->delete('clients');
	}

}
