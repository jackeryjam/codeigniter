<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Api extends REST_Controller{

	public function __construct()
    {
        parent::__construct();
		$this->load->helper('url');
		$this->load->model('File');
    }

	public $root = "/var/ftp/pub/";

	function upload_post(){
		$name = $this->_post_args['name'];
		$res = array();
		$data = array();
		if (mkdir($this->root.$name) == FALSE) {
			$res['code'] = 409;
			$res['msg'] = "system name exist";
			$this->response($res, 409);
		} 
		if (move_uploaded_file($_FILES["cfg"]["tmp_name"], $this->root . $name . "/ks.cfg") == FALSE){
			$res['code'] = 409;
			$res['msg'] = "save cfg fail";
			$this->response($res, 409);
		}
		$contents = $this->_post_args['desc'];
		$myfile = fopen($this->root . $name . "/desc.txt", "w");
        fwrite($myfile, $contents);
   		fclose($myfile);

		if (move_uploaded_file($_FILES["system"]["tmp_name"], $this->root . $name . "/sourse.iso") == FALSE){
			$res['code'] = 409;
			$res['msg'] = "save system fail";
			$this->response($res, 409);
		}
		mkdir($this->root.$name."/sourse");
		$str = 'mount '.$this->root.$name.'/sourse.iso  '.$this->root.$name.'/sourse';
		$data['exc'] = $str;
		$data['mount_res0'] = shell_exec($str);
		sleep(1);
		$data['mount_res1'] = shell_exec('mount /var/ftp/pub/test1/sourse.iso /var/ftp/pub/test1/sourse');
		$data['mount_res2'] = shell_exec('mount --help');
		$res['code'] = 200;
		$res['msg'] = "success to save system"; 
		$res['data'] = $data;
		$this->response($res, 200);
	}

}
