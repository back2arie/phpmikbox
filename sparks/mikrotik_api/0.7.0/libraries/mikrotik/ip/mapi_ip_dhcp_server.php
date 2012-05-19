<?php
/**
 * Description of Mapi_Ip_Dhcp_Server
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Ip_Dhcp_Server extends Mapi_Query {
    /**
     *
     * @var type array
     */
    private $param;
    
    function __construct($param) {
        $this->param = $param;
        parent::__construct($param);
    }
    
    /** 
     * This methode is used to add ip dhcp server network
     * @param type $param array
     * @return type array
     */
    public function add_dhcp_server_network($param){
         $input = array(
                'command'      => '/ip/dhcp-server/network/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This methode is used to add ip dhcp server
     * @param type $param array
     * @return type \array
     */
    public function add_dhcp_server($param){
        $input = array(
                'command'      => '/ip/dhcp-server/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This methode is used to set ip dhcp server config
     * @param type $store_leases_disk string
     * @return type array
     */
    public function set_dhcp_server_config($store_leases_disk){
        $input = array(
                'command'                => '/ip/dhcp-server/config/set',
                'store-leases-disk'      => $store_leases_disk
        );
        return $this->query($input);
    }
    
    /**
     * This methode is used to set or edit ip dhcp server network
     * by id
     * @param type $param array
     * @param type $id string
     * @return type array
     */
    public function set_dhcp_server_network($param, $id){
        $input = array(
                'command'      => '/ip/dhcp-server/network/set',
                'id'           => $id
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This methode is used to display all ip dhcp server network
     * @return type array
     */
    public function get_all_dhcp_server_network(){
        return $this->query('/ip/dhcp-server/network/getall');
    }
    
    /**
     * This methode is used to delete ip dhcp server network by id
     * @param type $id string
     * @return type array
     */
    public function delete_dhcp_server_network($id){
        $input = array(
                'command'       => '/ip/dhcp-server/network/remove',
                'id'            => $id
        );
        return $this->query($input);
    }
    /**
     * This method is used to display one ip dhcp server network
     * in detail based on the id
     * @param type $id string
     * @return type array
     */
    public function detail_dhcp_server_network($id){
        $input = array(
                'command'       => '/ip/dhcp-server/network/print',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This methode is used to disable ip dhcp server by id
     * @param type $id string
     * @return type array
     */
    public function disable_dhcp_server($id){
        $input = array(
                'command'       => '/ip/dhcp-server/disable',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This methode is used to enable ip dhcp server by id
     * @param type $id string
     * @return type array
     */
    public function enable_dhcp_server($id){
        $input = array(
                'command'       => '/ip/dhcp-server/enable',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This methode is used to remove ip dhcp server by id
     * @param type $id string
     * @return type array
     */
    public function delete_dhcp_server($id){
        $input = array(
                'command'       => '/ip/dhcp-server/remove',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This methode is used to det or edit ip dhcp server by id
     * @param type $param array
     * @param type $id string
     * @return type array
     */
    public function set_dhcp_server($param, $id){
         $input = array(
                'command'      => '/ip/dhcp-server/set',
                'id'           => $id
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This methode is used to display all ip dhcp server
     * @return type array
     */
    public function get_all_dhcp_server(){
        return $this->query('/ip/dhcp-server/getall');
    }
    
    /**
     * This method is used to display one ip dhcp server
     * in detail based on the id
     * @param type $id string
     * @return type  array
     */
    public function detail_dhcp_server($id){
        $input = array(
                'command'       => '/ip/dhcp-server/print',
                'id'            => $id
        );
        return $this->query($input); 
    }
    
    public function get_all_dhcp_server_config(){
        return $this->query('/ip/dhcp-server/config/getall');
    }
    
}
