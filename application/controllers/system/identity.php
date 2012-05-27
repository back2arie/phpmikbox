<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Identity extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['identity'] = $this->mikrotik_api->system()->get_all_identity();
		$data['main'] = 'system/identity/index';
		$this->load->view('layout', $data);
	}
	
}

/* End of file identity.php */
/* Location: ./application/controllers/identity.php */