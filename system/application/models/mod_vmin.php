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
    function edit_vmin($name,$mem,$old_mem,$ip,$old_ip,$pass){
    $vdir = $this->config->item('vmin_dir');
    $vhome = $this->config->item('vmin_home');
    $home = trim($vhome);
    $memory = $mem*250;
    
    if ($pass != "0"){
         $en_pass = shell_exec("/usr/bin/openssl passwd $pass");
         $lah = trim($en_pass);
         shell_exec ("sudo /bin/chroot $home/$name/ /usr/sbin/usermod -p \"$lah\" root");     
    } 
    
    if ($old_mem != $mem){
    shell_exec("sudo /usr/local/etc/script/edit_vps 1 $memory $name");
    }
    
    if ($old_ip != $ip) {
    shell_exec("sudo /usr/local/etc/script/edit_vps 2 $ip $old_ip $name");
    }
    }
    
    function stop_vmin($name){
    shell_exec("sudo /usr/local/sbin/vserver --silent $name stop &");
    shell_exec("sudo exit");
    }
}
?>
