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
	function create(){
	$name = $this->input->post('name');
	$context = $this->input->post('context');
	$mem = $this->input->post('mem');
	$ip = $this->input->post('ip');
	$pass1 = $this->input->post('password1');
	$pass2 = $this->input->post('password2');
	 if ($pass1 == $pass2){
            $this->build_vmin->create($name,$context,$mem,$ip,$pass1);
	 } else redirect('vmin/create');
	}
	
	function delete(){
	$name = $this->uri->segment(3);
	$this->mod_vmin->destroy_vmin($name);
	redirect("vmin/reg");
	}
	}
?>

