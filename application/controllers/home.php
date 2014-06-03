<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()	{
		//Menu
		$menu['menu'] = $this->db->get('menu')->result();
			
		$this->load->view('home',$menu);
	}
	
	public function conteudo($id = null){
		
		$arguments['content'] =  $content_type;
		$arguments['id'] =  $id;
		//get content
		$this->db->where('play_id', $id);
		$resultado['resultado'] = $this->db->get($content_type)->result();
		
		
		$this->load->view('html_header');
		$this->load->view('header');
		$this->load->view('content', $resultado);
		$this->load->view('footer');
		$this->load->view('html_footer');
	}
	
	public function login(){
			
		$this->load->view('login');
		
	}
	
}