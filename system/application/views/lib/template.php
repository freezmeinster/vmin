		
								
			</div>				
			
		<!-- content-wrap starts here -->
		
				
			<div id="main">
			    <?php
			       $info = $this->sysinfo->det_vps($name);
			   ?>
			  
				<h2><?php echo $this->lang->line('reg_temp');?>  <?php echo $name;?></h2>
				<?php echo form_open('lib_vmin/change');?>
				   <table>
				   <input type="hidden" name="name" value="<?php echo $name;?>"/>
				   <tr><td><fieldset style="width:100px;">
                                         <legend>Http Server</legend>
                                      <table>
					  <tr><td><input type="checkbox" name="http1" value="apache" /></td><td>Apache</td></tr>
					  <tr><td><input type="checkbox" name="http2" value="php" /></td><td>Php</td></tr>
				      </table>
				    </fieldset>
				    <td>
				    <fieldset style="width:100px;">
                                         <legend>Database Server</legend>
                                      <table>
					  <tr><td><input type="checkbox" name="db1" value="mysql" /></td><td>Mysql</td></tr>
				      </table>
				    </fieldset>
				    
				    </td>
				    
				     <td>
				    <fieldset style="width:100px;">
                                         <legend>Ftp Server</legend>
                                      <table>
					  <tr><td><input type="checkbox" name="ftp1" value="lftp" /></td><td>Lftp</td></tr>
					  <tr><td><input type="checkbox" name="ftp2" value="proftpd" /></td><td>Proftpd</td></tr>
					  <tr><td><input type="checkbox" name="ftp3" value="vsftpd" /></td><td>Vsftpd</td></tr>
				      </table>
				    </fieldset>
				    
				    </td>
				     </tr><tr>
				       <td>
				    <fieldset style="width:100px;">
                                         <legend>Multimedia Server</legend>
                                      <table>
					  <tr><td><input type="checkbox" name="m1" value="openfire" /></td><td>Openfire</td></tr>
				      </table>
				    </fieldset>
				    
				    </td>
				     </tr>

				      <tr><td colspan="2"><input type="reset" value="<?php echo $this->lang->line('create_reset');?>"/></td><td><input type="submit" value="<?php echo $this->lang->line('create_edit');?>"/></td></tr>
				   </table>
				</form>

			</div>
		
		<!-- content-wrap ends here -->	
		</div>
