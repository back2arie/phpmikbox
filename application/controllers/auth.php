<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		if($this->session->userdata('loggedin')) redirect('/');
		
		$data['main'] = 'auth/index';
		$this->load->view('auth/layout', $data);
	}
	
	public function login()
	{
		$config['mikrotik']['host'] = $this->input->post('address');
		$config['mikrotik']['port'] = '8728';
		$config['mikrotik']['username'] = $this->input->post('username');
		$config['mikrotik']['password'] = $this->input->post('password');
		$config['mikrotik']['debug'] = FALSE;
		$config['mikrotik']['attempts'] = 3;
		$config['mikrotik']['delay'] = 2;
		$config['mikrotik']['timeout'] = 2;
		$this->session->set_userdata($config);
		$this->session->set_userdata('loggedin', TRUE);
		redirect('/');
	}
	
	public function logout()
	{
		$this->session->unset_userdata('mikrotik');
		$this->session->unset_userdata('loggedin');
		redirect('auth');
	}
	
}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */