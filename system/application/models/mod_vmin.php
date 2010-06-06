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
}
?>