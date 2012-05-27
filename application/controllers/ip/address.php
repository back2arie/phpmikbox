<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Address extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['address'] = $this->mikrotik_api->ip()->address()->get_all_address();
		$data['main'] = 'ip/address/index';
		$this->load->view('layout', $data);
	}
	
}

/* End of file address.php */
/* Location: ./application/controllers/address.php */