<?php

class Vmin extends Controller {
        
	function Vmin()
	{
		parent::Controller();
		$lang = get_cookie('lang');
		$this->lang->load('link', $lang);
		$this->lang->load('content', $lang);
	}
	
	function index()
	{
	        
		$this->load->view('header');                
                $this->load->view('sidebar');
                $this->load->view('home');
                $this->load->view('footer');
	}
	function create()
	{
	        
		$this->load->view('header');                
                $this->load->view('sidebar');
                $this->load->view('create');
                $this->load->view('footer');
	}
        function about(){
                $data['current']= "about";
		$this->load->view('header', $data);                
                $this->load->view('sidebar');
                $this->load->view('home');
                $this->load->view('footer');
        }
}
?>
