<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Plays extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		//Menu
		$menu['menu'] = $this->db->get('menu')->result();
		
		$this->load->view('html_header');
		$this->load->view('header', $menu);
		$this->load->view('plays_home');
		$this->load->view('footer');
		$this->load->view('html_footer');			
	}
	public function view($id = null){
		//Menu
		$menu['menu'] = $this->db->get('menu')->result();
		//get content
		$this->db->where('play_id', $id);
		$resultado['resultado'] = $this->db->get('plays')->result();
			
		$this->load->view('html_header');
		$this->load->view('header', $menu);
		$this->load->view('plays_view', $resultado);
		$this->load->view('footer');
		$this->load->view('html_footer');
	}
}