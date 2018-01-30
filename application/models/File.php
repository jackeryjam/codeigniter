<?php
class File extends CI_Model {
	public $root = "/var/ftp/pub/";

	public function makeDir($name = ""){
		return mkdir($this->root.$name);
	}

	public function saveSystem($name, &$data) {
		$data['save_res'] = move_uploaded_file($_FILES["file"]["tmp_name"], $this->root . $path);
	}

	public function saveText(){

	}

	function saveTo($path) {
	    return move_uploaded_file($_FILES["file"]["tmp_name"], $this->root . $path);
	}

}
