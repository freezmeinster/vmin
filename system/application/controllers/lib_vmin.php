<?php

class Lib_vmin extends Controller {

	function Lib_vmin()
	{
		parent::Controller();	
		$lang = get_cookie('lang');
		$this->lang->load('link', $lang);
		$this->lang->load('content', $lang);
	}
	function set_lang(){
	$lang = $this->uri->segment(3);
	$before = $this->uri->segment(4);
                   $name = "lang";
                   $value = $lang;
                   $expire = "86500";
                   $domain = "192.168.70.248";
                   $path = "/";
                   $prefix = "";

         set_cookie($name, $value, $expire, $domain, $path, $prefix);
	 redirect("vmin/$before");
	}
	function create(){

	$name = $this->input->post('name');
	$mem = $this->input->post('mem');
	$ip = $this->input->post('ip');
	$pass1 = $this->input->post('pass1');
	$pass2 = $this->input->post('pass2');
	 if ($pass1 == $pass2){
	    $pass = $pass1;
	 } else redirect('vmin/create');
            $this->build_vmin->create($name,$mem,$ip,$pass1);
         redirect('vmin/reg');
	 }
	 
	function change(){
	$name = $this->input->post('name');
	$mem = $this->input->post('mem');
	$ip = $this->input->post('ip');
	$old_ip = $this->input->post('old_ip');
	$old_mem = $this->input->post('old_mem');
	$pass1 = $this->input->post('pass1');
	$pass2 = $this->input->post('pass2');
	
	if ($pass1 == $pass2 && $pass1 != "default" && $pass2 != "default"){
            $pass = $pass1;	
	   }
	else if ($pass1 == "default" && $pass2 == "default"){
	     $pass = "0";
	   }
	
	$this->mod_vmin->edit_vmin($name,$mem,$old_mem,$ip,$old_ip,$pass);
	redirect("vmin/reg");
	}
	
	function delete(){
	$name = $this->uri->segment(3);
	$this->mod_vmin->destroy_vmin($name);
	redirect("vmin/reg");
	}
	
	function login(){
	$pass= $this->input->post('pass');
	$user= $this->input->post('user');
	
	$newdata = array(
                   'username'  => 'johndoe',
                   'email'     => 'johndoe@some-site.com',
               );
        $this->session->set_userdata($newdata);
	}
	
	function start(){
	$name = $this->uri->segment(3);
	$this->mod_vmin->start_vmin($name);
	redirect("vmin/run");
	}
	
	function stop(){
	$name = $this->uri->segment(3);
	$this->mod_vmin->stop_vmin($name);
	redirect("vmin/run");
	}
	
	}
?>

