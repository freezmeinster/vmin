<?php
class Build_vmin extends Model {

    function Build_vmin()
    {
        parent::Model();
    }
    function create($name,$context,$mem,$ip,$pass){
    $vdir = $this->config->item('vmin_dir');
    $pkg = $this->config->item('vmin_pkg');
    $vhome = $this->config->item('vmin_home');
    $home = trim($vhome);
    $dir = trim($vdir);
    $vps_dir = "$dir/etc/vservers/$name";
    $memory = $mem*250;
    $en_pass = shell_exec("openssl passwd $pass");
    $lah = trim($en_pass);
    shell_exec ("sudo $home/../script/build $name $context $ip");
    shell_exec ("sudo /sbin/installpkg -root $home/$name $pkg/*");
    shell_exec ("sudo /bin/cp /etc/resolv.conf $home/$name/etc/");
    shell_exec ("sudo /bin/cp /etc/localtime $home/$name/etc/");
    shell_exec ("sudo /bin/cp $home/../script/fstab $home/$name/etc/ ");                                                          
    shell_exec ("sudo /bin/cp $home/../script/mtab $home/$name/etc/");
    shell_exec ("sudo /usr/bin/chroot $home/$name/ ldconfig");
    shell_exec ("sudo /bin/cp $home/../script/rc $home/$name/etc/init.d/");  
    shell_exec ("sudo /usr/bin/chroot $home/$name/ usermod -p $lah root");
    shell_exec ("sudo  $home/../script/post_configure $ip $home/$name/ $memory $vps_dir");
   }
}
?>