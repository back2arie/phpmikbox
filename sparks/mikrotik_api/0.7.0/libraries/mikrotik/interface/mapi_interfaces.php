<?php

/**
 * Description of Mapi_Interfaces
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Interfaces {
    /**
     *
     * @var type array
     */
    private $param;
    
    function __construct($param = array()) {
        $this->param = $param;
    }
    
     /**
     * This method is used to call class Mapi_Interface_Ethetrnet
     * @return Mapi_Ip 
     */
    public function ethernet(){
        return new Mapi_Interface_Ethernet($this->param);
    }
    
    /**
     * This method is used to call class Mapi_Interface_Pppoe_Client
     * @return Mapi_Ip 
     */
    public function pppoe_client(){
        return new Mapi_Interface_Pppoe_Client($this->param);
    }
    
    /**
     * This method is used to call class Mapi_Interface_Pppoe_Server
     * @return Mapi_Ip 
     */
    public function pppoe_server(){
        return new Mapi_Interface_Pppoe_Server($this->param);
    }
    
    /**
     * This method is used to call class Mapi_Interface_Eoip
     * @return Mapi_Ip 
     */
    public function eoip(){
        return new Mapi_Interface_Eoip($this->param);
        
    }
    
    /**
     * This method is used to call class Mapi_Interface_Ipip
     * @return Mapi_Ip 
     */
    public function ipip(){
        return new Mapi_Interface_Ipip($this->param);
    }
    
    /**
     * This method is used to call class Mapi_Interface_Vlan
     * @return Mapi_Ip 
     */
    public function vlan(){
        return new Mapi_Interface_Vlan($this->param);
    }
    
    /**
     * This method is used to call class Mapi_Interface_Vrrp
     * @return Mapi_Ip 
     */
    public function vrrp(){
        return new Mapi_Interface_Vrrp($this->param);
    }
    
    /**
     * This method is used to call class Mapi_Interface_Bonding
     * @return Mapi_Ip 
     */
    public function bonding(){
        return new Mapi_Interface_Bonding($this->param);
    }
    
    /**
     * This method for used call class Mapi_Interface_Bridge
     * @return Mapi_Ip
     */
    public function bridge(){
        return new Mapi_Interface_Bridge($this->param);
    }
    
    /**
     * This method used call class Mapi_Interface_L2tp_Client 
     * @return Mapi_Ip
     */
    public function l2tp_client(){
        return new Mapi_Interface_L2tp_Client($this->param);
    }
    
    /**
     * This method used call class Mapi_Interface_L2tp_Server 
     * @return Mapi_Ip
     */
    public function l2tp_server(){
        return new Mapi_Interface_L2tp_Server($this->param);
    }
    
    /**
     * This method used call class Mapi_Interface_Ppp_Client 
     * @return Mapi_Ip
     */
    public function ppp_client(){
        return new Mapi_Interface_Ppp_Client($this->param);
    }
    
    /**
     * This method used call class Mapi_Interface_Ppp_Server 
     * @return Mapi_Ip
     */
    public function ppp_server(){
        return new Mapi_Interface_Ppp_Server($this->param);
    }
    
    /**
     * This method used call class Mapi_Interface_Pptp_Client 
     * @return Mapi_Ip
     */
    public function pptp_client(){
        return new Mapi_Interface_Pptp_Client($this->param);
    }
    
    /**
     * This method used call class Mapi_Interface_Pptp_Server 
     * @return Mapi_Ip
     */
    public function pptp_server(){
        return new Mapi_Interface_Pptp_Server($this->param);
    }
    
}

