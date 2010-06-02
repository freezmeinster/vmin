<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta name="Description" content="System Administrator" />
<meta name="Keywords" content="your, keywords" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Distribution" content="Global" />
<meta name="Author" content="Bramandityo Prabowo, freez_meinster@yahoo.co.id" />
<meta name="Robots" content="index,follow" />

<link rel="stylesheet" href="<?php echo $this->config->item('vmin_url'); ?>images/Envision.css" type="text/css" />

<title><?php echo $this->config->item('vmin_name'); ?></title>
	
</head>

<body>
<!-- wrap starts here -->
<div id="wrap">
		
		<!--header -->
		<div id="header">			
				
			<h1 id="logo-text"><a href="index.html"><?php echo $this->lang->line('site'); ?></a></h1>		
			<p id="slogan"><?php echo $this->lang->line('slogan'); ?></p>	
			<div id="header-links">
			<p>
				<a href="<?php echo site_url();?>/lib_vmin/set_lang/english">English</a> | 
				<a href="<?php echo site_url();?>/lib_vmin/set_lang/indonesia">Endonesia</a> 			
			</p>		
		</div>	
			
		</div>
		
		<!-- menu -->	
		<div  id="menu">
			<ul>
			       <?php
			        $site = site_url();
			        if ( $current="home" ){
			           $now_home="current";
			           }
			        if ( $current="create"){
			           $now_create="current";
			        }
			         if ( $current="reg"){
			           $now_reg="current";
			        }
			         if ( $current="run"){
			           $now_run="current";
			        }
			         if ( $current="about"){
			           $now_about="current";
			        }
			        
				echo "<li id=\"$now_home\"><a href=\"index.html\">".$this->lang->line('home')."</a></li>\n";
				echo "<li id=\"$now_create\"><a href=\"index.html\">".$this->lang->line('create')."S</a></li>\n";
				echo "<li id=\"$now_reg\"><a href=\"index.html\">".$this->lang->line('reg')."</a></li>\n";
				echo "<li id=\"$now_run\"><a href=\"$site/vmin/about\">".$this->lang->line('run')."</a></li>\n";
				echo "<li id=\"$now_about\"><a href=\"$site/vmin/about\">".$this->lang->line('about')."</a></li>\n";
				
				?>
			</ul>
		</div>	