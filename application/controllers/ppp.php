<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ppp extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		redirect('ppp/profiles');
	}
	
	public function interfaces()
	{
		redirect('ppp/profiles');
	}

	public function pppoe_server()
	{
		redirect('ppp/profiles');
	}
	
	public function secrets()
	{
		$data['ppp'] = $this->mikrotik_api->ppp()->ppp_secret()->get_all_ppp_secret();
		$data['main'] = 'ppp/secrets';
		$this->load->view('layout', $data);
	}
	
	public function profiles()
	{
		$data['ppp'] = $this->mikrotik_api->ppp()->ppp_profile()->get_all_ppp_profile();
		$data['main'] = 'ppp/profiles';
		$this->load->view('layout', $data);
	}
	
	public function active()
	{
		$data['ppp'] = $this->mikrotik_api->ppp()->ppp_active()->get_all_ppp_active();
		$data['main'] = 'ppp/active';
		$this->load->view('layout', $data);
	}
}

/* End of file ppp.php */
/* Location: ./application/controllers/ppp.php */