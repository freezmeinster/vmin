<?php
class Build_vmin extends Model {

    function Build_vmin()
    {
        parent::Model();
    }
    
    function create($name,$mem,$ip,$pass){
                
    $vdir = $this->config->item('vmin_dir');
    $pkg = $this->config->item('vmin_pkg');
    $vhome = $this->config->item('vmin_home');
    $home = trim($vhome);
    $dir = trim($vdir);
    $vps_dir = "$dir/etc/vservers/$name";
    $memory = $mem*250;
    $en_pass = shell_exec("/usr/bin/openssl passwd $pass");
    $lah = trim($en_pass);
    /* echo "sudo /usr/local/etc/script/build $name $ip<br/>";
    echo "sudo /sbin/installpkg -root $home/$name $pkg/*<br/>";
    echo "sudo /bin/cp /etc/resolv.conf $home/$name/etc/<br/>";
    echo "sudo /bin/cp /etc/localtime $home/$name/etc/<br/>";
    echo "sudo /bin/cp /usr/local/etc/script/fstab $home/$name/etc/<br/>";
    echo "sudo /bin/cp /usr/local/etc/script/mtab $home/$name/etc/<br/>";
    echo "sudo /bin/cp /usr/local/etc/script/HOSTNAME $home/$name/etc/<br/>";
    echo "sudo /bin/cp /usr/local/etc/script/rc $home/$name/etc/init.d/<br/>";
    echo "sudo /bin/chroot $home/$name/ /usr/sbin/usermod -p \"$lah\" root<br/>";
    echo "sudo /usr/local/etc/script/post_configure $ip $home/$name/ $memory $vps_dir<br/>";*/
   shell_exec ("sudo /usr/local/etc/script/build $name $ip");
    shell_exec ("sudo /sbin/installpkg -root $home/$name $pkg/*");
    shell_exec ("sudo /bin/cp /etc/resolv.conf $home/$name/etc/");
    shell_exec ("sudo /bin/cp /etc/localtime $home/$name/etc/");
    shell_exec ("sudo /bin/cp /usr/local/etc/script/fstab $home/$name/etc/");                                                          
    shell_exec ("sudo /bin/cp /usr/local/etc/script/mtab $home/$name/etc/");
    shell_exec ("sudo /bin/cp /usr/local/etc/script/HOSTNAME $home/$name/etc/"); 
    shell_exec ("sudo /bin/cp /usr/local/etc/script/rc $home/$name/etc/init.d/");  
    shell_exec ("sudo /bin/chroot $home/$name/ /usr/sbin/usermod -p \"$lah\" root");
    shell_exec ("sudo /usr/local/etc/script/post_configure $ip $home/$name/ $memory $vps_dir");
    }
}
?>