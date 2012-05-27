<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dhcp_server extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['dhcp'] = $this->mikrotik_api->ip()->dhcp_server()->get_all_dhcp_server();
		$data['main'] = 'ip/dhcp_server/index';
		$this->load->view('layout', $data);
	}
	
}

/* End of file dhcp_server.php */
/* Location: ./application/controllers/dhcp_server.php */