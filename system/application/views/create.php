		
								
			</div>				
			
		<!-- content-wrap starts here -->
		
				
			<div id="main">
				<h2><a href="index.html"><?php echo $this->lang->line('create_header');?></a></h2>
				<?php echo form_open('lib_vmin/create');?>
				   <table>
				   <tr><td><?php echo $this->lang->line('create_name');?></td><td>:</td><td><input type="text" name="name"/s></td></tr>
				    <tr><td><?php echo $this->lang->line('create_mem');?></td><td>:</td><td><select>
				                                      <option value="32">32 Mb</option>
				                                      <option value="64">64 Mb</option>
				                                      <option value="128">128 Mb</option>
				                                      <option value="256">256 Mb</option>
				                                      </select>
				    </td></tr>
				     <tr><td><?php echo $this->lang->line('create_cont');?></td><td>:</td><td><input type="checkbox" name="template1" value="http"/> Http Server <br/>
										  <input type="checkbox" name="template2" value="samba"/> Samba Server <br/>
										  <input type="checkbox" name="template3" value="http"/> Http Server <br/>
										  <input type="checkbox" name="template4" value="http"/> Http Server <br/>
				                                                  <input type="checkbox" name="template5" value="chat"/> Chat Server
				                                         </td></tr>
				      <tr><td colspan="2"><input type="reset" value="Reset"/></td><td><input type="submit" value="<?php echo $this->lang->line('create_build');?>"/></td></tr>
				   </table>
				</form>

			</div>
		
		<!-- content-wrap ends here -->	
		</div>