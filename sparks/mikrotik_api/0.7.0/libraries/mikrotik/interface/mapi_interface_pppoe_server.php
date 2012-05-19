<?php

/**
 * Description of Mapi_Interface_Pppoe_Server
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Interface_Pppoe_Server extends Mapi_Query {
    /**
     *
     * @var type array
     */
    private $param;
    
    function __construct($param) {
        $this->param  = $param;
        parent::__construct($param);
    }
    
    /**
     * This method is used to add pppoe-server
     * @param type $param array
     * @return type array
     * 
     */
    public function add_pppoe_server($param){
        $input = array(
            'command'       => '/interface/pppoe-server/server/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to disable pppoe-server by id
     * @param type $id string
     * @return type array
     * 
     */
    public function disable_pppoe_server($id){
        $input = array(
            'command'       => '/interface/pppoe-server/server/disable',
            'id'            => $id
        );
        return $this->query($input);        
    }
    
    /**
     * This method is used to enable pppoe-server by id
     * @param type $id string
     * @return type array
     * 
     */
    public function enable_pppoe_server($id){
        $input = array(
            'command'       => '/interface/pppoe-server/server/enable',
            'id'            => $id
        );
        return $this->query($input); 
    }
    
     /**
     * This method is used to set or edit by id
     * @param type $param array
     * @param type $id string
     * @return type array
     * 
     */
    public function set_pppoe_server($param, $id){
        $input = array(
                    'command'   => '/interface/pppoe-server/server/set',
                    'id'        => $id
        );
        $out=array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to delete pppoe-server by id
     * @param type $id string
     * @return type array
     * 
     */
    public function delete_pppoe_server($id){
         $input = array(
                   'command'    => '/interface/pppoe-server/server/remove',
                   'id'         => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to display all pppoe-server
     * @return type array
     * 
     */
    public function get_all_pppoe_server(){
         return $this->query('/interface/pppoe-server/server/getall');
    }
    
     /**
     * This method is used to display one pppoe-server 
     * in detail based on the id
     * @param type $id string
     * @return type array
     * 
     */
    public function detail_pppoe_server($id){
        $input = array(
                   'command'    => '/interface/pppoe-server/server/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
}

