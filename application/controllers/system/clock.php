<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clock extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['clock'] = $this->mikrotik_api->system()->get_all_clock();
		$data['main'] = 'system/clock/index';
		$this->load->view('layout', $data);
	}
	
	public function manual_timezone()
	{
		redirect('system/clock');	
	}
	
}

/* End of file clock.php */
/* Location: ./application/controllers/clock.php */