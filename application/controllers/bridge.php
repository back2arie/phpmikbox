<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bridge extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->spark('mikrotik_api/0.7.0');
	}

	public function index()
	{
		$data['interfaces'] = $this->mikrotik_api->interfaces()->bridge()->get_all_bridge();
		$data['main'] = 'interfaces/bridge/index';
		$this->load->view('layout', $data);
	}
	
	public function ports()
	{
		$data['interfaces'] = $this->mikrotik_api->interfaces()->bridge()->get_all_ports();
		$data['main'] = 'interfaces/bridge/ports';
		$this->load->view('layout', $data);
	}

	public function filters()
	{
		$data['interfaces'] = $this->mikrotik_api->interfaces()->bridge()->get_all_filters();
		$data['main'] = 'interfaces/bridge/filters';
		$this->load->view('layout', $data);
	}
	
	public function nat()
	{
		$data['interfaces'] = $this->mikrotik_api->interfaces()->bridge()->get_all_bridge_nat();
		$data['main'] = 'interfaces/bridge/nat';
		$this->load->view('layout', $data);
	}
	
	public function hosts()
	{
		$data['interfaces'] = $this->mikrotik_api->interfaces()->bridge()->get_all_hosts();
		$data['main'] = 'interfaces/bridge/hosts';
		$this->load->view('layout', $data);
	}
	
}

/* End of file bridge.php */
/* Location: ./application/controllers/bridge.php */