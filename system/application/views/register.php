		
								
			</div>				
			
		<!-- content-wrap starts here -->
		
				
			<div id="main">
				<h2><?php echo $this->lang->line('reg_header');?></h2>
				<table>
				<?php 
				echo"<tr><th>";
				echo $this->lang->line('create_name');
				echo "</th><th>Context";
				echo "</th><th>";
				echo $this->lang->line('create_ip');
				echo "</th><th>";
				echo $this->lang->line('create_name');
				echo "</th></tr>";
				;?>
				
				<?php
				$nguk = $this->sysinfo->reg_list();
				foreach ($nguk as $wew) {
				    if ($wew != "." && $wew != ".."){ 
				      echo "$wew\n" ;
				     }
		                  }
				?>
                               </table> 
			</div>
		
		<!-- content-wrap ends here -->	
		</div>