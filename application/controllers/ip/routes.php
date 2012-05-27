<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Routes extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['routes'] = $this->mikrotik_api->ip()->route()->get_all_route();
		$data['main'] = 'ip/routes/index';
		$this->load->view('layout', $data);
	}
	
	public function nexthops()
	{
		redirect('ip/routes');
	}
	
	public function rules()
	{
		redirect('ip/routes');
	}
	
	public function vrf()
	{
		redirect('ip/routes');
	}

}

/* End of file routes.php */
/* Location: ./application/controllers/routes.php */