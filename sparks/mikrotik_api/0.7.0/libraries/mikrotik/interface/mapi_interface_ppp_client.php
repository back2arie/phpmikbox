<?php

/**
 * Description of Mapi_interface_ppp_client
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Interface_Ppp_Client extends Mapi_Query {
    private $param;
    function __construct($param ) {
        $this->param = $param;
        parent::__construct($param);
    }
    
    /**
     * This method used for add new interface ppp-client
     * @param type $param array
     * @return type array
     */
    public function add_ppp_client($param){
        $input = array(
            'command'       => '/interface/ppp-client/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method used for disable interface ppp-client
     * @param type $id string
     * @return type array
     */
    public function disable_ppp_client($id){
        $input = array(
            'command'       => '/interface/ppp-client/disable',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for enable interface ppp-client
     * @param type $id string
     * @return type array
     */
    public function enable_ppp_client($id){
        $input = array(
            'command'       => '/interface/ppp-client/enable',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for delete interface ppp-client
     * @param type $id string
     * @return type array
     */
    public function delete_ppp_client($id){
        $input = array(
            'command'       => '/interface/ppp-client/remove',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for detail interface ppp-client
     * @param type $id string
     * @return type array
     */
    public function detail_ppp_client($id){
        $input = array(
            'command'       => '/interface/ppp-client/print',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for set or edit interface ppp-client
     * @param type $param array
     * @param type $id string
     * @return type array
     */
    public function set_ppp_client($param, $id){
        $input = array(
            'command'       => '/interface/ppp-client/set',
            'id'            => $id
        );
        $out = array_merge($input, $param);
        return $this->query($out);    
    }
    
    /**
     * This method used for get all interface ppp-client
     * @return type array
     */
    public function get_all_ppp_client(){
        return $this->query('/interface/ppp-client/getall');
    }
}

