<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$res = shell_exec("ls /");
		$data['arr'] = explode("\n" ,$res);
		$this->load->view('dashboard', $data);
	}
}