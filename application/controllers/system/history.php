<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class History extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['history'] = $this->mikrotik_api->system()->get_all_history();
		$data['main'] = 'system/history/index';
		$this->load->view('layout', $data);
	}
	
}

/* End of file history.php */
/* Location: ./application/controllers/history.php */