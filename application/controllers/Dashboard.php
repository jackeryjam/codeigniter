<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$path = "/";
		$dirs = shell_exec("ls ".$path);
		$data['dirs'] = explode("\n" ,$dirs);
		$this->load->view('dashboard', $data);
	}
}