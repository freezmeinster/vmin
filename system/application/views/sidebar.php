<div id="content-wrap">
				
			<div id="sidebar">
			
				<h3>Search Box</h3>	
				<form action="#" class="searchform">
					<p>
					<input name="search_query" class="textbox" type="text" />
  					<input name="search" class="button" value="Search" type="submit" />
					</p>			
				</form>	
					
				<h3>Information System</h3>
				<ul class="sidemenu">				
					<li> 
                                            <ul><h1>Memory</h1>
                                            <?php 
                                                 $nguk = $this->sysinfo->system(); 
                                                 echo "<li>Total Memory : ".$nguk['total_mem']."Mb </li>" ;
                                                 echo "<li>Usage Memory : ".$nguk['usage_mem']."Mb </li>" ;
                                                 echo "<li>Free Memory : ".$nguk['free_mem']."Mb </li>" ;
                                            ?></ul>
                                             <ul><h1>Vserver</h1>
                                            <?php 
                                                 echo "<li>Vserver Home: ".$nguk['vs_dir']."</li>" ;
                                                 echo "<li>Total Capacity: ".$nguk['vs_cap']."</li>" ;
                                                 echo "<li>Free Space: ".$nguk['vs_free']."</li>" ;
                                                 echo "<li>Remaining VPS: ".$nguk['vs_max']." VPS</li>" ;
                                            ?></ul>
                                            
                                        </li>
							
				</ul>	
				
			
				<h3>Links</h3>
				<ul class="sidemenu">
					<li><a href="http://www.pdphoto.org/">PDPhoto.org</a></li>
					<li><a href="http://www.squidfingers.com/patterns/">Squidfingers</a></li>
					<li><a href="http://www.alistapart.com">Alistapart</a></li>					
					<li><a href="http://www.cssremix.com">CSS Remix</a></li>
					<li><a href="http://www.cssmania.com/">CSS Mania</a></li>
				</ul>
			
				