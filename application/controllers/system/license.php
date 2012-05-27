<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class License extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['license'] = $this->mikrotik_api->system()->get_all_license();
		$data['main'] = 'system/license/index';
		$this->load->view('layout', $data);
	}
	
}

/* End of file license.php */
/* Location: ./application/controllers/license.php */