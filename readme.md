# 系统自动化安装平台控制界面

### 系统要求
*   安装有apache及php(支持codeigniter)即可  
*   调整php.ini文件(一般是在/etc/php.ini，没有的话通过whereis php.ini找)，修改其对上传文件大小以及上传时间的限制
    *   max_execution_time = 3600
    *   upload_max_filesize = 10240M
    *   post_max_size = 10240M 
    *   max_input_time = 3600
    *   memory_limit = 1024M
    参考http://blog.csdn.net/gb4215287/article/details/50709246
*   安装php ssh2扩展
    参考 http://blog.csdn.net/github_26672553/article/details/50407639

### 安装步骤
*   将该文件克隆或者下载之后，放置在apache的根目录下(默认是/var/www/html) 
*   最后需要在application/conrollers/Api 里面的$pass改成所在linux的账号和密码，用于ssh2登录，最好是root的账号和密码
*   需要将/var/lib/tftpboot/pxelinux.cfg/default的这个文件赋予读写的权限，可以直接chmod 777 /var/lib/tftpboot/pxelinux.cfg/default就行了


### ftp文件目录
默认目录为 /var/ftp/pub, 里面文件的存放形式为  
*   systemname  
    *   sourse   
    *   ks.cfg  
    *   desc.txt

### 访问
安装之后url为服务器ip+这个文件的文件名即可，如http://192.168.126.131/codeigniter/

### ftp文件目录
默认目录为 /var/ftp/pub, 里面文件的存放形式为  
*   systemname  
    *   sourse   
    *   ks.cfg  
    *   desc.txt

### 更换默认安装系统
在系统版面选择要更换的系统，之后设置为默认即可，该页面为/var/ftp/pub文件目录的映射，修改默认文件只是将append initrd=initrd.img inst.stage2=ftp://10.0.1.222/pub/<b>centos7</b>/sourse ks=ftp://10.0.1.222/pub/<b>centos7</b>/ks.cfg，加黑色粗体的centos7替换相应的系统

