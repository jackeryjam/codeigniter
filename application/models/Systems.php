<?php
class Systems extends CI_Model {
    public $ftp_root;
    public $default;

    public function __construct()
    {
        parent::__construct();
        $ftp_root = "/var/ftp/pub";
        $default = "centos7";
        // Your own constructor code
    }

    public function listDir() {
        $str = "ls ".$ftp_root;
        $dirs = shell_exec($str);
        $res = explode("\n" ,$dirs);
        return $res;
    }
    public function listSystems(){
        $res = array();
        $dirs = $this->listDir();
        foreach ($dirs as $dirname) {
            $item = array();
            $item['name'] = $dirname;
            if($dirname == $default){
                $item['isDefault'] = true;
            }
            else{
                $item['isDefault'] = false;
            }
            $item['desc'] = "描述"; 
            array_push($res,$item);
        }
        return $res;
    }
}