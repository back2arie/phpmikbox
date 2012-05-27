<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Files extends MY_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['files'] = $this->mikrotik_api->file()->get_all_file();
		$data['main'] = 'files/index';
		$this->load->view('layout', $data);
	}
	
}

/* End of file files.php */
/* Location: ./application/controllers/files.php */