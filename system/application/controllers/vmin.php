<?php

class Vmin extends Controller {

	function Vmin()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->view('header');                
                $this->load->view('sidebar');
                $this->load->view('home');
                $this->load->view('footer');
	}
}
?>
