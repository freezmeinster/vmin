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
    $vps_dir = "$vdir/etc/vservers/$name/";
    $memory = $mem*250;
    $en_pass = shell_exec("openssl passwd $pass");
    shell_exec("/usr/local/sbin/vserver $name build -m skeleton --context $context --interface dummy0:$ip --flags lock,virt_mem,virt_uptime,virt_cpu,virt_load,sched_hard,hide_netif --initstyle sysv");
    shell_exec("echo \"$memory\" > $vps_dir/rlimits/rss.hard");
    shell_exec ("/sbin/installpkg -root $home/$name $pkg/*");
    shell_exec ("cp /etc/resolv.conf $home/$name/etc/");
    shell_exec ("cp /etc/localtime $home/$name/etc/");
    shell_exec ("echo /dev/hdv1 / ext2 defaults 1 1 > $home/$name/etc/fstab ");                                                          
    shell_exec ("echo /dev/hdv1 / ext2 rw 0 0 > $VPSHOME/$1/etc/mtab");
    shell_exec ("/usr/local/sbin/vserver $name exec ldconfig");
    shell_exec ("cp  $home/../script/rc $home/$name/etc/init.d/");  
    shell_exec ("/usr/local/sbin/vserver $name exec usermod -p $en_pass root");
    
    }
}
?>