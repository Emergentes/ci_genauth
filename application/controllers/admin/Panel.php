<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['contenido'] = 'admin/panel/index';
		$this->load->view('admin/template',$this->data);
	}

}

/* End of file Panel.php */
/* Location: ./application/controllers/admin/Panel.php */