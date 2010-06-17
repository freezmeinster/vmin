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
	        $log = $this->gui_vmin->cek_session('create');
                if ($log=="1"){
		$data['pos'] = "create";   
		$this->load->view('header',$data); 
                $this->load->view('sidebar');
                $this->load->view('create');
                $this->load->view('footer');
                }
	}
	function reg()
	{     
	        $log = $this->gui_vmin->cek_session('create');
                if ($log=="1"){
                $data['pos'] = "reg";
		$this->load->view('header',$data);                
                $this->load->view('sidebar');
                $this->load->view('register');
                $this->load->view('footer');
                 }
                
	}
	function edit()
	{     
                $log = $this->gui_vmin->cek_session('edit');
                if ($log=="1"){
	        $data['pos'] = "edit";
	        $data['name'] = $this->uri->segment(3);
		$this->load->view('header',$data);                
                $this->load->view('sidebar');
                $this->load->view('lib/edit',$data);
                $this->load->view('footer');
                }
	}
	function template()
	{     
                $log = $this->gui_vmin->cek_session('edit');
                if ($log=="1"){
	        $data['pos'] = "edit";
	        $data['name'] = $this->uri->segment(3);
		$this->load->view('header',$data);                
                $this->load->view('sidebar');
                $this->load->view('lib/template',$data);
                $this->load->view('footer');
                }
	}
	function run()
	{
                $log = $this->gui_vmin->cek_session('run');
                if ($log=="1"){
	        $data['pos'] = "run";
		$this->load->view('header',$data);                
                $this->load->view('sidebar');
                $this->load->view('running');
                $this->load->view('footer');
                }
	}
	function login()
	{
              
	        $data['pos'] = "run";
	        $data['before'] = $this->uri->segment(3);
		$this->load->view('lib/header',$data);                
                $this->load->view('lib/sidebar');
                $this->load->view('lib/login',$data);
                $this->load->view('lib/footer');
                
	}
        /*function about(){
                $data['pos'] = "about";
                $this->load->view('header', $data);                
                $this->load->view('sidebar');
                $this->load->view('about');
                $this->load->view('footer');
                
        }*/
}
?>
