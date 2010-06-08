<?php
class Mod_vmin extends Model {

    function Mod_vmin()
    {
        parent::Model();
    }
    function destroy_vmin($name){
    $hah = $this->config->item('vmin_dir');
    $hih = $this->config->item('vmin_home');
    $vhome = trim($hih);
    $vdir = trim($hah);
    shell_exec ("sudo /usr/local/sbin/vserver --silent $name delete ");
    }
    function start_vmin($name){
    shell_exec("sudo /usr/local/sbin/vserver $name start");
    }
    function edit_vmin($name,$mem,$ip,$pass){
    $vdir = $this->config->item('vmin_dir');
    $vhome = $this->config->item('vmin_home');
    $home = trim($vhome);
    $memory = $mem*250;
    
    if ($pass != "0"){
         $en_pass = shell_exec("/usr/bin/openssl passwd $pass");
         $lah = trim($en_pass);
         shell_exec("sudo /bin/chroot $home$name/ /usr/sbin/usermod -p \"$lah\" root");     
    } 
   shell_exec("sudo /usr/local/etc/script/edit_vps mem $memory $name");
   shell_exec("sudo /usr/local/etc/script/edit_vps ip $ip $name");
    }
    function stop_vmin($name){
    shell_exec("sudo /usr/local/sbin/vserver $name stop");
    }
}
?>