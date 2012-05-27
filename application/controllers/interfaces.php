<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Interfaces extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['interfaces'] = $this->mikrotik_api->interfaces()->ethernet()->get_all_interface();
		$data['main'] = 'interfaces/index';
		$this->load->view('layout', $data);
	}
	
	public function ethernet()
	{
		$data['interfaces'] = $this->mikrotik_api->interfaces()->ethernet()->get_all_interface();
		$data['main'] = 'interfaces/ethernet';
		$this->load->view('layout', $data);
	}
	
	public function eoip()
	{
		$data['interfaces'] = $this->mikrotik_api->interfaces()->eoip()->get_all_eoip();
		$data['main'] = 'interfaces/eoip';
		$this->load->view('layout', $data);
	}

	public function ipip()
	{
		$data['interfaces'] = $this->mikrotik_api->interfaces()->ipip()->get_all_ipip();
		$data['main'] = 'interfaces/ipip';
		$this->load->view('layout', $data);
	}
	
	public function vlan()
	{
		$data['interfaces'] = $this->mikrotik_api->interfaces()->vlan()->get_all_vlan();
		$data['main'] = 'interfaces/vlan';
		$this->load->view('layout', $data);
	}
	
	public function vrrp()
	{
		$data['interfaces'] = $this->mikrotik_api->interfaces()->vrrp()->get_all_vrrp();
		$data['main'] = 'interfaces/vrrp';
		$this->load->view('layout', $data);
	}
	
	public function bonding()
	{
		$data['interfaces'] = $this->mikrotik_api->interfaces()->bonding()->get_all_bonding();
		$data['main'] = 'interfaces/bonding';
		$this->load->view('layout', $data);
	}	
}

/* End of file interfaces.php */
/* Location: ./application/controllers/interfaces.php */