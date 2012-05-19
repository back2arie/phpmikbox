<?php

/**
 * Description of Mapi_interface_l2tp_server
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Interface_L2tp_Server extends Mapi_Query {
    private $param;
    function __construct($param ) {
        $this->param = $param;
        parent::__construct($param);
    }
    
    /**
     * This method used for add new l2tp server
     * @param type $param array
     * @return type array
     */
    public function add_l2tp_server($param){
        $input = array(
            'command'       => '/interface/l2tp-server/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method used for disable l2tp server
     * @param type $id string
     * @return type array
     */
    public function disable_l2tp_server($id){
        $input = array(
            'command'       => '/interface/l2tp-server/disable',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for enable l2tp server
     * @param type $id string
     * @return type array
     */
    public function enable_l2tp_server($id){
        $input = array(
            'command'       => '/interface/l2tp-server/enable',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for delete l2tp server
     * @param type $id string
     * @return type array
     */
    public function delete_l2tp_server($id){
        $input = array(
            'command'       => '/interface/l2tp-server/remove',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for detail l2tp server
     * @param type $id string
     * @return type array
     */
    public function detail_l2tp_server($id){
        $input = array(
            'command'       => '/interface/l2tp-server/print',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for set or edit l2tp server
     * @param type $param array
     * @param type $id string
     * @return type array
     */
    public function set_l2tp_server($param, $id){
        $input = array(
            'command'       => '/interface/l2tp-server/set',
            'id'            => $id
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method used for get all l2tp server
     * @return type array
     */
    public function get_all_l2tp_server(){
        return $this->query('/interface/l2tp-server/getall');
    }
    
    /**
     * This method used for get all l2tp server server
     * @return type array
     */
    public function get_all_l2tp_server_server(){
        return $this->query('/interface/l2tp-server/server/getall');
    }
    
    /**
     * This method used for set l2tp server server
     * @param type $param array
     * @return type array
     */
    public function set_l2tp_server_server($param){
        $input = array(
            'command'       => '/interface/l2tp-server/server/set'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
        
    }
}


