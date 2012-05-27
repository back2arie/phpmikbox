<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller  {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		
		// session check
		if($this->session->userdata('loggedin')==NULL) redirect('auth');
		
		$config['mikrotik'] = $this->session->userdata('mikrotik');		
		$this->load->spark('mikrotik_api/0.7.0');
		$this->mikrotik_api->initialize($config);
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */ 