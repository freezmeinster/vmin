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
	      echo "<a href=\"$site/vmin/edit/$wew\">Edit</a>  <a href=\"$site/lib_vmin/delete/$wew\">Delete</a>" ;
	      echo "</td><td></tr>";
	   }
      }
    }
    
       function start_list(){
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
	      echo "<a href=\"$site/lib_vmin/start/$wew\">Start</a>" ;
	      echo "</td><td></tr>";
	   }
      }
    }
    
     function run_list(){
    $conf_dir = $this->config->item('vmin_dir');
    $clean = trim($conf_dir);
    $dir = "$clean/var/run/vservers";
    $ava = scandir($dir);
    foreach ($ava as $wew) {
         if ($wew != "." && $wew != ".." && $wew != ".defaults" && $wew != ".distributions"){ 
              $context = shell_exec("cat $dir/$wew");
              $ip = shell_exec("cat $dir/../../../etc/vservers/$wew/interfaces/0/ip");
              $mem_pure = shell_exec("cat $dir/../../../etc/vservers/$wew/rlimits/rss.hard");
              $total_mem = floor($mem_pure/250);
              $site = site_url();
              $vps_mem = shell_exec("sudo /usr/local/sbin/vserver-stat | grep $wew | awk '{ print $4}' | cut -dM -f 1 | cut -d. -f 1");
              $up = shell_exec("sudo /usr/local/sbin/vserver-stat | grep $wew | awk '{ print $7}'");
              $mem = $total_mem-$vps_mem;
	      echo "<tr><td>";
	      echo "$wew\n" ;
	      echo "</td><td>";
	      echo "$context\n" ;
	      echo "</td><td>";
	      echo "$ip\n" ;
	      echo "</td><td>";
	      echo "$mem Mb\n";
	      echo "</td><td>";
	      echo "$up\n";
	      echo "</td><td>";
	      echo "<a href=\"$site/lib_vmin/stop/$wew\">Stop</a>" ;
	      echo "</td><td></tr>";
	   }
      }
    }
    function det_vps($name){
    $conf_dir = $this->config->item('vmin_dir');
    $clean = trim($conf_dir);
    $pure_mem = shell_exec("cat $clean/etc/vservers/$name/rlimits/rss.hard");
    $data['mem'] = floor($pure_mem/250);
    $data['ip'] = shell_exec("cat $clean/etc/vservers/$name/interfaces/0/ip");
    return $data;
    }
    }
?>