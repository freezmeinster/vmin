<?php

class Gui_vmin extends Model {

	function Gui_vmin()
	{
		parent::Model();	
	}
	
        function set_cookie($name,$value){
                   $name = $name;
                   $value = $value;
                   $expire = "86500";
                   $domain = "192.168.70.248";
                   $path = "/";
                   $prefix = "";

         set_cookie($name, $value, $expire, $domain, $path, $prefix);
	}
        function cek_login($user,$pass){
        $user_vmin = $this->config->item('user_vmin');
        $pass_vmin = $this->config->item('pass_vmin');
           if ( $user==$user_vmin && $pass==$pass_vmin ){
                  $newdata = array(
                      'user'  => $user,
                      'pass'     => $pass,
                      );
                  $this->session->set_userdata($newdata);
                 return 1;
              } else if ( $user==$user_vmin && $pass==$pass_vmin ) {
                 return 0;
            }
         }
        function cek_session($before){
         $user = $this->session->userdata('user');
         $pass = $this->session->userdata('pass');
         $user_vmin = $this->config->item('user_vmin');
         $pass_vmin = $this->config->item('pass_vmin');
            if ($user!=$user_vmin && $pass!=$pass_vmin){
              redirect("vmin/login/$before");
            }else if ($user==$user_vmin && $pass==$pass_vmin){
              return 1;
            }

        }
	
}
?>
