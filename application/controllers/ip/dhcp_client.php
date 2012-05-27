<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dhcp_client extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['dhcp'] = $this->mikrotik_api->ip()->dhcp_client()->get_all_dhcp_client();
		$data['main'] = 'ip/dhcp_client/index';
		$this->load->view('layout', $data);
	}
	
}

/* End of file dhcp_client.php */
/* Location: ./application/controllers/dhcp_client.php */