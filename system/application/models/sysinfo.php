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
    $ava = scandir($clean);
    return $ava;
    }
}
?>