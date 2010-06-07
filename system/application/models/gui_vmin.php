<?php

class Gui_vmin extends Model {

	function Gui_vmin()
	{
		parent::Model();	
	}
	
        function set_cookie($name,$value){
                   $name = $name;
                   $value = $value;
                   $expire = "86500";
                   $domain = "192.168.70.248";
                   $path = "/";
                   $prefix = "";

         set_cookie($name, $value, $expire, $domain, $path, $prefix);
	}
	
}
?>