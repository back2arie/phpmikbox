<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Arp extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['arp'] = $this->mikrotik_api->ip()->arp()->get_all_arp();
		$data['main'] = 'ip/arp/index';
		$this->load->view('layout', $data);
	}
	
}

/* End of file arp.php */
/* Location: ./application/controllers/arp.php */