<?php

/**
 * Description of Mapi_Interface_Pptp_Server
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Interface_Pptp_Server extends Mapi_Query {
    private $param;
    function __construct($param ) {
        $this->param = $param;
        parent::__construct($param);
    }
   /**
     * This method used for add new interface pptp-server
     * @param type $param array
     * @return type array
     */
    public function add_pptp_server($param){
        $input = array(
            'command'       => '/interface/pptp-server/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method used for disable interface pptp-server
     * @param type $id string
     * @return type array
     */
    public function disable_pptp_server($id){
        $input = array(
            'command'       => '/interface/pptp-server/disable',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for enable interface pptp-server
     * @param type $id string
     * @return type array
     */
    public function enable_pptp_server($id){
        $input = array(
            'command'       => '/interface/pptp-server/enable',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for delete interface pptp-server
     * @param type $id string
     * @return type array
     */
    public function delete_pptp_server($id){
        $input = array(
            'command'       => '/interface/pptp-server/remove',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for detail interface pptp-server
     * @param type $id string
     * @return type array
     */
    public function detail_pptp_server($id){
        $input = array(
            'command'       => '/interface/pptp-server/print',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for set or edit interface pptp-server
     * @param type $param array
     * @param type $id string
     * @return type array
     */
    public function set_pptp_server($param, $id){
        $input = array(
            'command'       => '/interface/pptp-server/set',
            'id'            => $id
        );
        $out = array_merge($input, $param);
        return $this->query($out);    
    }
    
    /**
     * This method used for get all interface pptp-server
     * @return type array
     */
    public function get_all_pptp_server(){
        return $this->query('/interface/pptp-server/getall');
    }
    
    /**
     * This method used for get all pptp-server server
     * @return type array
     */
    public function get_all_pptp_server_server(){
        return $this->query('/interface/pptp-server/server/getall');
    }
    
    /**
     * This method used for set pptp-server server
     * @param type $param array
     * @return type array
     */
    public function set_pptp_server_server($param){
        $input = array(
            'command'       => '/interface/pptp-server/server/set'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
        
    }
}
