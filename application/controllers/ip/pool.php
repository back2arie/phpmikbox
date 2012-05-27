<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pool extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['pool'] = $this->mikrotik_api->ip()->pool()->get_all_pool();
		$data['main'] = 'ip/pool/index';
		$this->load->view('layout', $data);
	}
		
	public function used_addresses()
	{
		redirect('ip/pool');
	}
	
}

/* End of file pool.php */
/* Location: ./application/controllers/pool.php */