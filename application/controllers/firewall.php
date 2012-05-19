<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Firewall extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->spark('mikrotik_api/0.7.0');
	}

	public function index()
	{
		redirect('firewall/filter');
	}
	
	public function filter()
	{
		$data['firewall'] = $this->mikrotik_api->ip()->firewall()->get_all_firewall_filter();
		$data['main'] = 'ip/firewall/filter';
		$this->load->view('layout', $data);
	}
	
	public function nat()
	{
		$data['firewall'] = $this->mikrotik_api->ip()->firewall()->get_all_firewall_nat();
		$data['main'] = 'ip/firewall/nat';
		$this->load->view('layout', $data);
	}

	public function mangle()
	{
		$data['firewall'] = $this->mikrotik_api->ip()->firewall()->get_all_firewall_mangle();
		$data['main'] = 'ip/firewall/mangle';
		$this->load->view('layout', $data);
	}
	
	public function service()
	{
		$data['firewall'] = $this->mikrotik_api->ip()->firewall()->get_all_firewall_service_port();
		$data['main'] = 'ip/firewall/service';
		$this->load->view('layout', $data);
	}
	
	public function connection()
	{
		$data['firewall'] = $this->mikrotik_api->ip()->firewall()->get_all_firewall_connection();
		$data['main'] = 'ip/firewall/connection';
		$this->load->view('layout', $data);
	}
	
	public function address()
	{
		$data['firewall'] = $this->mikrotik_api->ip()->firewall()->get_all_firewall_address_lists();
		$data['main'] = 'ip/firewall/address';
		$this->load->view('layout', $data);
	}	
}

/* End of file firewall.php */
/* Location: ./application/controllers/firewall.php */