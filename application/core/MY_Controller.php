<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $data = array();

	public function __construct()
	{
		parent::__construct();
		$this->data = array();
		$this->data['errors'] = array();
		$this->data['nomapp'] = config_item('web_sitio');
		$this->data['titulo'] = config_item('web_titulo');

		if (!$this->ion_auth->logged_in())	redirect('Auth/login');
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */