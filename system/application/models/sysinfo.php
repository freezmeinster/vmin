<?php
class Sysinfo extends Model {

    function Sysinfo()
    {
        parent::Model();
    }
    function system(){
             $vs_dev=$this->config->item('vmin_dev');
             $data['total_mem'] = shell_exec("free -m | grep Mem | awk '{ print $2 }'");
             $data['free_mem'] = shell_exec("free -m | grep Mem | awk '{ print $4 }'");
             $data['usage_mem'] = shell_exec("free -m | grep Mem | awk '{ print $3 }'");
             $data['vs_free'] = shell_exec("df -h | grep $vs_dev | awk '{print $4}'");
             $data['vs_dir'] = shell_exec("vserver-info system SYSINFO | grep vserver-Rootdir | awk '{print $2}'");
             $data['vs_cap'] = shell_exec("df -h | grep $vs_dev | awk '{print $2}'");
             $freedsk=shell_exec("df -m | grep $vs_dev | awk '{print $4}'");
             $data['vs_max'] = floor($freedsk / 500);
             return $data;
        
    }
    
    function reg_list(){
    $conf_dir = $this->config->item('vmin_dir');
    $clean = trim($conf_dir);
    $dir = "$clean/etc/vservers";
    $ava = scandir($dir);
    foreach ($ava as $wew) {
         if ($wew != "." && $wew != ".." && $wew != ".defaults" && $wew != ".distributions"){ 
              $context = shell_exec("cat $dir/$wew/context");
              $ip = shell_exec("cat $dir/$wew/interfaces/0/ip");
              $mem_pure = shell_exec("cat $dir/$wew/rlimits/rss.hard");
              $mem = floor($mem_pure/250);
              $site = site_url();
	      echo "<tr><td>";
	      echo "$wew\n" ;
	      echo "</td><td>";
	      echo "$context\n" ;
	      echo "</td><td>";
	      echo "$ip\n" ;
	      echo "</td><td>";
	      echo "$mem Mb\n";
	      echo "</td><td>";
	      echo "<a href>Edit</a>  <a href=\"$site/lib_vmin/delete/$wew\">Delete</a>" ;
	      echo "</td><td></tr>";
	   }
      }
    }
}
?>