<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dns extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		redirect('ip/dns/statics');
	}
	
	public function statics()
	{
		$data['dns'] = $this->mikrotik_api->ip()->dns()->get_all_static_dns();
		$data['main'] = 'ip/dns/static';
		$this->load->view('layout', $data);
	}
	
	public function cache()
	{
		$data['dns'] = $this->mikrotik_api->ip()->dns()->get_all_dns_cache_all();
		$data['main'] = 'ip/dns/cache';
		$this->load->view('layout', $data);
	}
	
}

/* End of file dns.php */
/* Location: ./application/controllers/dns.php */