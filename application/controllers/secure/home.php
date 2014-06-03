<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()	{
		//Menu
		$menu['menu'] = $this->db->get('menu')->result();
		$this->load->view('login?error=1');
	}
	
	public function signin(){
		$formdata = $this->input->post();
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		

			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->where('status', 1);
			$resultado = $this->db->get('users')->result();
			
			if(count($resultado)>0):
				$session_data = array(
				'username'=>$user[0]->username, 
				'login'=>TRUE
				);
				$this->session->set_userdata($session_data);
				redirect('/?success=1');
				//$this->load->view('login');
			else:
				redirect('home/login?success=0');
			endif;
	}
	public function signup(){
		$this->load->view('secure/home/signup');
	}

}