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
	        
	        $data['pos'] = "vmin";
	        $this->load->view('header',$data);                
                $this->load->view('sidebar');
                $this->load->view('home');
                $this->load->view('footer');
                
	}
	function create()
	{  
	       
		$data['pos'] = "create";   
		$this->load->view('header',$data); 
                $this->load->view('sidebar');
                $this->load->view('create');
                $this->load->view('footer');
	}
	function reg()
	{     
	        $data['pos'] = "reg";
		$this->load->view('header',$data);                
                $this->load->view('sidebar');
                $this->load->view('register');
                $this->load->view('footer');
                
	}
	function run()
	{
	        $data['pos'] = "run";
		$this->load->view('header',$data);                
                $this->load->view('sidebar');
                $this->load->view('running');
                $this->load->view('footer');
                
	}
        function about(){
                $data['pos'] = "about";
                $this->load->view('header', $data);                
                $this->load->view('sidebar');
                $this->load->view('about');
                $this->load->view('footer');
                
        }
}
?>
