<?php
class Systems extends CI_Model {
    public $ftp_root = "/var/ftp/pub";
    public $default = "centos7";

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }

    public function listDir() {
        $dirs = shell_exec("ls ".$ftp_root);
        $res = explode("\n" ,$dirs);
        return $res;
    }

    public function list(){
        $res = array();
        $dirs = $this->listDir();
        foreach ($dirs as $dirname) {
            var $item;
            $item->name = $dirname;
            $item->isDefault = $default == $dirname ? true : false;
            $item->desc = "描述";
            array_push($res,$item);
        }
        return $res;
    }
}