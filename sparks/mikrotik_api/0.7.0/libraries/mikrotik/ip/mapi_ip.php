<?php

/**
 * Description of Mapi_Ip
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Ip{
    /**
     *
     * @var type array
     */
    private $param;
    
    function __construct($param=array()) {
        $this->param = $param;
    }
    
     /**
     * This method is used toclass Mapi_Ip_Address
     * @return Object of Mapi_Ip_Address class
     */
    public function address(){
        return new Mapi_Ip_Address($this->param);
    }
    
     /**
     * This method is used toclass Mapi_Ip_Hotspot
     * @return Object of Mapi_Ip_Hotspot class
     */
    public function hotspot(){
        return new Mapi_Ip_Hotspot($this->param);
    }
    
     /**
     * This method is used toclass Mapi_Ip_Pool
     * @return Object of Mapi_Ip_Pool class
     */
    public function pool(){
        return new Mapi_Ip_Pool($this->param);
    }
    
     /**
     * This method is used toclass Mapi_Ip_Dns
     * @return Object of Mapi_Ip_Dns class
     */
    public function dns(){
        return new Mapi_Ip_Dns($this->param);
    }
    
     /**
     * This method is used toclass Mapi_Ip_Firewall
     * @return Object of Mapi_Ip_Firewall class
     */
    public function firewall(){
        return new Mapi_Ip_Firewall($this->param);
    }

     /**
     * This method is used toclass Mapi_Ip_Accounting
     * @return Object of Mapi_Ip_Accounting class
     */
    public function accounting(){
        return new Mapi_Ip_Accounting($this->param);
        
    }
    
     /**
     * This method is used toclass Mapi_Ip_Arp
     * @return Object of Mapi_Ip_Arp class
     */
    public function arp(){
        return new Mapi_Ip_Arp($this->param);
    }
    
     /**
     * This method is used toclass Mapi_Ip_Dhcp_Client
     * @return Object of Mapi_Ip _Dhcp_Client class
     */
    public function dhcp_client(){
        return new Mapi_Ip_Dhcp_Client($this->param);
    }
    
     /**
     * This method is used toclass Mapi_Ip_Dhcp_Relay
     * @return Object of Mapi_Ip_Dhcp_Relay class
     */
    public function dhcp_relay(){
        return new Mapi_Ip_Dhcp_Relay($this->param);
    }
    
     /**
     * This method is used toclass Mapi_Ip_Dhcp_Server
     * @return Object of Mapi_Ip_Dhcp_Server class
     */
    public function dhcp_server(){
        return new Mapi_Ip_Dhcp_Server($this->param);
    }
    
     /**
     * This method is used toclass Mapi_Ip_Route
     * @return Object if Mapi_Ip_Router class
     */
    public function route(){
        return new Mapi_Ip_Route($this->param);
    }
    
     /**
     * This method is used toclass Mapi_Ip_Service
     * @return Object of Mapi_Ip_Service class
     */
    public function service(){
        return new Mapi_Ip_Service($this->param);
        
    }
    
    /**
     *This method is used to class Mapi_Ip_Proxy
     * @return object of Mapi_Ip_Proxy class
     */
    public function proxy(){
        return new Mapi_Ip_Proxy($this->param);
        
    }
    
}

