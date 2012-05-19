<?php

/**
 * Description of Mapi_Ip_Dhcp_Client
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Ip_Dhcp_Client extends Mapi_Query {
    /**
     *
     * @var type 
     */
    private $param;
    
    function __construct($param ) {
        $this->param = $param;
        parent::__construct($param);
    }
    
    /**
     * This method is used to add dhcp client
     * @param type $param array
     * @return type array
     */
    public function add_dhcp_client($param){
        $input = array(
                'command'      => '/ip/dhcp-client/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to disable dhcp client by id
     * @param type $id string
     * @return type array
     */
    public function disable_dhcp_client($id){
        $input = array(
                'command'       => '/ip/dhcp-client/disable',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to enable dhcp client by id
     * @param type $id string
     * @return type array
     */
    public function enable_dhcp_client($id){
         $input = array(
                'command'       => '/ip/dhcp-client/enable',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to renew dhcp client  by id
     * @param type $id string
     * @return type array
     */
    public function renew_dhcp_client($id){
         $input = array(
                'command'       => '/ip/dhcp-client/renew',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to release dhcp client by id
     * @param type $id string
     * @return type array
     */
    public function release_dhcp_client($id){
         $input = array(
                'command'       => '/ip/dhcp-client/release',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to set or edit dhcp client by id
     * @param type $param array
     * @param type $id string
     * @return type array
     */
    public function set_dhcp_client($param, $id){
        $input = array(
                'command'      => '/ip/dhcp-client/set',
                'id'           => $id
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to remove dhcp client by id
     * @param type $id string
     * @return type array
     */
    public function delete_dhcp_client($id){
         $input = array(
                'command'       => '/ip/dhcp-client/remove',
                'id'            => $id
        );
        return $this->query($input);
    }

    /**
     * This method is used to display all dhcp client
     * @return type array
     */
    public function get_all_dhcp_client(){
        return $this->query('/ip/dhcp-client/getall');
    }
    
    /**
     * This method is used to display one ip dhcp client
     * in detail based on the id
     * @param type $id string
     * @return type array
     */
    public function detail_dhcp_client($id){
          $input = array(
                   'command'    => '/ip/dhcp-client/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
}

