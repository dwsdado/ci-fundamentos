<?php
class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('html');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['news'] = $this->news_model->findAllBySlug();
		$data['title'] = 'News INDEX';

		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug = false){

	$data['news'] = $this->news_model->findAllBySlug($slug);

			if (empty($data['news'])){
				show_404();
			}

			$data['title'] = $data['news']['title'];

			$this->load->view('templates/header', $data);
			$this->load->view('news/view', $data);
			$this->load->view('templates/footer');
	}

	public function create()
	{
	$this->load->helper('form');
	$this->load->library('form_validation');
	
	$data['title'] = 'Create a news item';
	
	$this->form_validation->set_rules('title', 'Title', 'required');
	$this->form_validation->set_rules('text', 'text', 'required');
	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);	
			$this->load->view('news/create');
			$this->load->view('templates/footer');
			
		}
		else
		{
			$this->news_model->set_news();
			$this->load->view('news/success');
		}
	}


	public function deletar($id) 
	{
	    if ($this->news_model->deletar($id))
	    {
	        redirect('news');
	    } else {
	        log_message('error', 'Erro ao deletar...');
	    }
	}



	public function update($id)	{
		$this->load->helper('form');
		$this->db->where('id', $id);

		if (empty($_POST)) {	
				$dados['news']= $this->db->get('news')->row_array();

				$this->load->view('templates/header', $dados);
				$this->load->view('news/update', $dados);
				$this->load->view('templates/footer');				
		} else {
			$dados['title'] = $this->input->post('title');
			$dados['text'] = $this->input->post('text');

			if($this->db->update('news',$dados)){
				redirect('news');
			}else {
				log_message('error', 'erro ao editar');
			}
					
		}

	}



	public function lista(){
		$data['news'] = $this->news->get();
	}



}
