<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		//Menu
		$menu['menu'] = $this->db->get('menu')->result();
		
		$this->load->view('html_header');
		$this->load->view('header', $menu);
		$this->load->view('search_home');
		$this->load->view('footer');
		$this->load->view('html_footer');			
	}

}