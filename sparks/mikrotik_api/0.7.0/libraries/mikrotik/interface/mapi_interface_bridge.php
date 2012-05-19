<?php

/**
 * Description of Mapi_interface_Bridge
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Interface_Bridge extends Mapi_Query {
    private $param;
    function __construct($param ) {
        $this->param = $param;
        parent::__construct($param);
    }
    
    /**
     * This method used for add new interface bridge
     * @param type $param array
     * @return type array
     */
    public function add_bridge($param){
       $input = array(
            'command'       => '/interface/bridge/add',
         );
       $out = array_merge($input, $param);
       return $this->query($out);
    }
    
    /**
     * This method used for disable interface bridge
     * @param type $id string
     * @return type array
     */
    public function disable_bridge($id){
        $input = array(
                'command'       => '/interface/bridge/disable',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for enable interface bridge
     * @param type $id string
     * @return type array
     */
    public function enable_bridge($id){
        $input = array(
                'command'       => '/interface/bridge/enable',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for delete interface bridge
     * @param type $id string
     * @return type array
     */
    public function delete_bridge($id){
        $input = array(
                'command'       => '/interface/bridge/remove',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for get all interface bridge
     * @return type array
     */
    public function get_all_bridge(){
        return $this->query('/interface/bridge/getall'); 
    }
    
    /**
     * This method used for set or edit interface bridge
     * @param type $param array
     * @param type $id string
     * @return type array
     */
    public function set_bridge($param, $id){
        $input = array(
                'command'       => '/interface/bridge/set',
                'id'            => $id
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method used for detail interface bridge
     * @param type $id string
     * @return type array
     */
    public function detail_bridge($id){
        $input = array(
                'command'       => '/interface/bridge/print',
                'id'            => $id
        );
        return $this->query($input);
    }
    
     public function add_bridge_nat($param){
       $input = array(
            'command'       => '/interface/bridge/nat/add',
         );
       $out = array_merge($input, $param);
       return $this->query($out);
    }
    
    /**
     * This method used for disable interface bridge
     * @param type $id string
     * @return type array
     */
    public function disable_bridge_nat($id){
        $input = array(
                'command'       => '/interface/bridge/nat/disable',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for enable interface bridge
     * @param type $id string
     * @return type array
     */
    public function enable_bridge_nat($id){
        $input = array(
                'command'       => '/interface/bridge/nat/enable',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for delete interface bridge
     * @param type $id string
     * @return type array
     */
    public function delete_bridge_nat($id){
        $input = array(
                'command'       => '/interface/bridge/nat/remove',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for get all interface bridge
     * @return type array
     */
    public function get_all_bridge_nat(){
        return $this->query('/interface/bridge/nat/getall'); 
    }
    
    /**
     * This method used for set or edit interface bridge
     * @param type $param array
     * @param type $id string
     * @return type array
     */
    public function set_bridge_nat($param, $id){
        $input = array(
                'command'       => '/interface/bridge/nat/set',
                'id'            => $id
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method used for detail interface bridge
     * @param type $id string
     * @return type array
     */
    public function detail_bridge_nat($id){
        $input = array(
                'command'       => '/interface/bridge/nat/print',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for set interface Bridge Settings
     * @param type $use_ip_firewall string (default : yes or no)
     * @param type $use_ip_firewall_for_vlan string (default : yes or no)
     * @param type $use_ip_firewall_for_pppoe string (default : yes or no)
     * @return type array
     */
    public function set_bridge_settings($use_ip_firewall, $use_ip_firewall_for_vlan, $use_ip_firewall_for_pppoe){
       $input = array(
                'command'                   => '/interface/bridge/settings/set',
                'use-ip-firewall'           => $use_ip_firewall,
                'use-ip-firewall-for-vlan'  => $use_ip_firewall_for_vlan,
                'use-ip-firewall-for-pppoe' => $use_ip_firewall_for_pppoe
       ); 
       return $this->query($input);
    }
    
    /**
     * This method used for get all interface Bridge Settings
     * @return type array
     */
    public function get_all_bridge_settings(){
        return $this->query('/interface/bridge/settings/getall');
    }
}

