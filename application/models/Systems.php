<?php
class Systems extends CI_Model {
    public $ftp_root;
    public $default;
    public $pxelinuxcfg;

    public function __construct()
    {
        parent::__construct();
        $this->ftp_root = "/var/ftp/pub";
        $this->default = "centos7";
        $this->pxelinuxcfg = "/var/lib/tftpboot/pxelinux.cfg/";
        // Your own constructor code
    }

    public function listDir() {
        $str = "ls ".$this->ftp_root;
        $dirs = shell_exec($str);
        //把最后的一个换行符去掉，否则界面会多显示一个的
        $dirs = substr($dirs, 0, strlen($dirs)-1);
        $res = explode("\n" ,$dirs);
        return $res;
    }

    public function listSystems(){
        $res = array();
        $dirs = $this->listDir();
        foreach ($dirs as $dirname) {
            $item = array();
            $item['name'] = $dirname;
            if($dirname == $this->default){
                $item['isDefault'] = TRUE;
            }
            else{
                $item['isDefault'] = FALSE;
            }
            $item['desc'] = "描述";
            array_push($res,$item);
        }
        return $res;
    }
    
    public function changeDefault($systemName){
        $file=fopen($this->pxelinuxcfg."default","r")  or exit("无法打开文件!");
        $default = "";
        echo $this->pxelinuxcfg."default"."<br>";
        while(!feof($file))
        {
            $str = fgets($file);
            echo $str."<br>";
            $default = $default.$str;
        }
        $isMatched = preg_match('{inst.stage2=ftp://.*?/pub/.*?/sourse}', $default, $matches);
        print_r($matches);echo "<br>";
        $target = '/pub/'.$systemName.'/sourse';
        $tmp = preg_replace('{/pub/.*?/sourse}', $target, $matches[0]);
        echo $tmp."<br>";
        preg_replace('{inst.stage2=ftp://.*?/pub/.*?/sourse}', $tmp, $default);
        echo $default."<br><br>";
        
        $isMatched = preg_match('{ks=ftp://.*?/pub/.*?/ks.cfg}', $default, $matches);
        $target = '/pub/'.$systemName.'/ks.cfg';
        $tmp = preg_replace('{/pub/.*?/ks.cfg}', $target, $matches[0]);
        preg_replace('{ks=ftp://.*?/pub/.*?/ks.cfg}', $tmp, $default);

        echo $default."<br><br>";

        // $myfile = fopen($this->pxelinuxcfg."default", "w") or die("Unable to open file!");
        // fwrite($myfile, $default);
        // fclose($myfile);
    }
}