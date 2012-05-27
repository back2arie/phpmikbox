<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['services'] = $this->mikrotik_api->ip()->service()->get_all_service();
		$data['main'] = 'ip/services/index';
		$this->load->view('layout', $data);
	}
	
}

/* End of file services.php */
/* Location: ./application/controllers/services.php */