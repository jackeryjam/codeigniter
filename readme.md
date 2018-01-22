# 系统自动化安装平台控制界面

### 系统要求
安装有apache及php(支持codeigniter)即可  
需要将/var/lib/tftpboot/pxelinux.cfg/default的这个文件赋予读写的权限，可以直接chmod 777 /var/lib/tftpboot/pxelinux.cfg/default就行了

### 安装步骤
将该文件克隆或者下载之后，放置在apache的根目录下(默认是/var/www/html)


### 访问
安装之后url为服务器ip+这个文件的文件名即可，如http://192.168.126.131/codeigniter/

### 更换默认安装系统
在系统版面选择要更换的系统，之后设置为默认即可，该页面为/var/ftp/pub文件目录的映射，修改默认文件只是将append initrd=initrd.img inst.stage2=ftp://10.0.1.222/pub/<b>centos7</b>/sourse ks=ftp://10.0.1.222/pub/<b>centos7</b>/ks.cfg，加黑色粗体的centos7替换相应的系统

### 上传系统
尚未完成
