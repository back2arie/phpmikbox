<?php

/**
 * Description of Mapi_interface_pptp_client
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Interface_Pptp_Client extends Mapi_Query {
    private $param;
    function __construct($param ) {
        $this->param = $param;
        parent::__construct($param);
    }
    
  /**
     * This method used for add new interface pptp-client
     * @param type $param array
     * @return type array
     */
    public function add_pptp_client($param){
        $input = array(
            'command'       => '/interface/pptp-client/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method used for disable interface pptp-client
     * @param type $id string
     * @return type array
     */
    public function disable_pptp_client($id){
        $input = array(
            'command'       => '/interface/pptp-client/disable',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for enable interface pptp-client
     * @param type $id string
     * @return type array
     */
    public function enable_pptp_client($id){
        $input = array(
            'command'       => '/interface/pptp-client/enable',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for delete interface pptp-client
     * @param type $id string
     * @return type array
     */
    public function delete_pptp_client($id){
        $input = array(
            'command'       => '/interface/pptp-client/remove',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for detail interface pptp-client
     * @param type $id string
     * @return type array
     */
    public function detail_pptp_client($id){
        $input = array(
            'command'       => '/interface/pptp-client/print',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for set or edit interface pptp-client
     * @param type $param array
     * @param type $id string
     * @return type array
     */
    public function set_pptp_client($param, $id){
        $input = array(
            'command'       => '/interface/pptp-client/set',
            'id'            => $id
        );
        $out = array_merge($input, $param);
        return $this->query($out);    
    }
    
    /**
     * This method used for get all interface pptp-client
     * @return type array
     */
    public function get_all_pptp_client(){
        return $this->query('/interface/pptp-client/getall');
    }
}


