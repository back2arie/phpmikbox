<?php
/**
 * Description of Mapi_Ip_Dhcp_Relay
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Ip_Dhcp_Relay extends Mapi_Query {
    /**
     *
     * @var type 
     */
    private $param;
    
    function __construct($param) {
        $this->param = $param;
        parent::__construct($param);
    }
    
    /**
     * This method is used to ip add dhcp relay
     * @param type $param array 
     * @return type array
     */
    public function add_dhcp_relay($param){
        $input = array(
                'command'      => '/ip/dhcp-relay/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to disable ip dhcp relay by id
     * @param type $id string
     * @return type array
     */
    public function disable_dhcp_relay($id){
        $input = array(
                'command'       => '/ip/dhcp-relay/disable',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to enable ip dhcp relay by id
     * @param type $id string
     * @return type array
     */
    public function enable_dhcp_relay($id){
          $input = array(
                'command'       => '/ip/dhcp-relay/enable',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to set or edit ip dhcp relay by id
     * @param type $param array
     * @param type $id string
     * @return type array
     */
    public function set_dhcp_relay($param, $id){
        $input = array(
                'command'       => '/ip/dhcp-relay/set',
                'id'            => $id
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to remove ip dhcp relay by id
     * @param type $id string
     * @return type array
     */
    public function delete_dhcp_relay($id){
        $input = array(
                'command'       => '/ip/dhcp-relay/remove',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to display one interface bonding
     * in detail based on the id
     * @param type $id string
     * @return type array
     */
    public function detail_dhcp_relay($id){
         $input = array(
                'command'       => '/ip/dhcp-relay/print',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to display all ip dhcp relay
     * @return type array
     */
    public function get_all_dhcp_relay(){
        return $this->query('/ip/dhcp-relay/getall');
    }
}
