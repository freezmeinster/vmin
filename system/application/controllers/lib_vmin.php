<?php

class Lib_vmin extends Controller {

	function Lib_vmin()
	{
		parent::Controller();	
	}
	function set_lang(){
	$lang = $this->uri->segment(3);
	$before = $this->uri->segment(4);
                   $name = "lang";
                   $value = $lang;
                   $expire = "86500";
                   $domain = "oss.cs.int-upi.edu";
                   $path = "/";
                   $prefix = "";

         set_cookie($name, $value, $expire, $domain, $path, $prefix);
	 redirect("vmin/$before");
	}
	}
?>

