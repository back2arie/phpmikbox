<?php

//load parent class
require 'mikrotik/core/mapi_core.php';
require 'mikrotik/core/mapi_query.php';

//load child class interface
require 'mikrotik/interface/mapi_interface_ethernet.php';
require 'mikrotik/interface/mapi_interface_pppoe_client.php';
require 'mikrotik/interface/mapi_interface_pppoe_server.php';
require 'mikrotik/interface/mapi_interface_eoip.php';
require 'mikrotik/interface/mapi_interface_ipip.php';
require 'mikrotik/interface/mapi_interface_vlan.php';
require 'mikrotik/interface/mapi_interface_vrrp.php';
require 'mikrotik/interface/mapi_interface_bonding.php';
require 'mikrotik/interface/mapi_interface_bridge.php';
require 'mikrotik/interface/mapi_interface_l2tp_client.php';
require 'mikrotik/interface/mapi_interface_l2tp_server.php';
require 'mikrotik/interface/mapi_interface_ppp_client.php';
require 'mikrotik/interface/mapi_interface_ppp_server.php';
require 'mikrotik/interface/mapi_interface_pptp_client.php';
require 'mikrotik/interface/mapi_interface_pptp_server.php';
require 'mikrotik/interface/mapi_interfaces.php';

//load child class ip
require 'mikrotik/ip/mapi_ip.php';
require 'mikrotik/ip/mapi_ip_dhcp_client.php';
require 'mikrotik/ip/mapi_ip_dhcp_relay.php';
require 'mikrotik/ip/mapi_ip_dhcp_server.php';
require 'mikrotik/ip/mapi_ip_route.php';
require 'mikrotik/ip/mapi_ip_service.php';
require 'mikrotik/ip/mapi_ip_address.php';
require 'mikrotik/ip/mapi_ip_hotspot.php';
require 'mikrotik/ip/mapi_ip_dns.php';
require 'mikrotik/ip/mapi_ip_accounting.php';
require 'mikrotik/ip/mapi_ip_arp.php';
require 'mikrotik/ip/mapi_ip_pool.php';
require 'mikrotik/ip/mapi_ip_firewall.php';
require 'mikrotik/ip/mapi_ip_proxy.php';

//load child class ppp
require 'mikrotik/ppp/mapi_ppp.php';
require 'mikrotik/ppp/mapi_ppp_profile.php';
require 'mikrotik/ppp/mapi_ppp_secret.php';
require 'mikrotik/ppp/mapi_ppp_aaa.php';
require 'mikrotik/ppp/mapi_ppp_active.php';

//load child class system
require 'mikrotik/system/mapi_system.php';
require 'mikrotik/system/mapi_system_scheduler.php';

//load child class file
require 'mikrotik/file/mapi_file.php';

/**
 * Description of Mikrotik_Api
 * @author      Virtual Think Team vthinkteam@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mikrotik_Api {
    /**
     * @access private
     * @var type Object
     */
    private $CI;
    
    /**
     * Instantiation of Class Mikrotik_Api
     * @access private
     * @var type array
     */
    private $param;
    
    function __construct($param=array()) {
        $this->CI = & get_instance();
        $param_config=$this->CI->config->item('mikrotik');
        
        if (isset($param_config) && is_array($param_config)){
            $this->param = $param_config;
        } else {
        	$this->param = $param;
        }
        
        if (isset($param['mikrotik']) && is_array($param['mikrotik']) && count($param['mikrotik']) > 0) {
             $this->param = $param['mikrotik'];
        }
    }
    
    /**
     * Initialize parameter
     * @access public
     * @var type array
     */    
    function initialize($param=array()) {
        $this->__construct($param);
    }
    
    /**
     * This method for call class Mapi IP
     * @access public
     * @return Object of Mapi_Ip 
     */
    public function ip(){
        return new Mapi_Ip($this->param);
    }
    
    /**
     * This method for call class Mapi Interface
     * @access public
     * @return Object of Mapi_Interface 
     */
    public function interfaces(){
        return new Mapi_Interfaces($this->param); 
    }
    
    /**
     * This method for call class Mapi Ppp
     * @access public
     * @return Object of Mapi_Ppp
     */
    public function ppp(){
        return new Mapi_Ppp($this->param);
    }
    
    /**
     * This method for call class Mapi_System
     * @access public
     * @return Mapi_System 
     */
    public function system(){
        return new Mapi_System($this->param);
    }
    
    /**
     * This method for call class Mapi_File
     * @access public
     * @return Mapi_File 
     */
    public function file(){
        return new Mapi_File($this->param);
    }
    
    /**
     * This metod used call class Mapi_System_Scheduler 
     * @return Mapi_System_Scheduler
     */
    public function system_scheduler(){
        return new Mapi_System_Scheduler($this->param);
    }
}

