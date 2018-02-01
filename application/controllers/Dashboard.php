<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Systems');
		$this->load->helper('url');
    }

	public function index()
	{
		$data['systemlist'] = $this->Systems->listSystems();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/sidenav');
		$this->load->view('dashboard/main', $data);
		$this->load->view('dashboard/footer');
	}

	public function upload(){
		// $data['systemlist'] = $this->Systems->listSystems();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/sidenav');
		$this->load->view('dashboard/upload');
		$this->load->view('dashboard/footer');

	}

	public function setDefaultAs($system_name)
	{
		$this->Systems->changeDefault($system_name);
	}

}