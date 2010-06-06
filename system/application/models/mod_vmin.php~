<?php
class Mod_vmin extends Model {

    function Mod_vmin()
    {
        parent::Model();
    }
    function destroy_vmin($name){
    shell_exec ("/usr/local/sbin/vserver $name delete");
    }
}
?>