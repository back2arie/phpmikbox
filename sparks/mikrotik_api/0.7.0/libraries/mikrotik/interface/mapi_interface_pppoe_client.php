<?php

/**
 * Description of Mapi_Interface_Pppoe_Client
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Interface_Pppoe_Client extends Mapi_Query {
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
     * This method is used to add pppoe-client
     * @param type $param array
     * @return type array
     * 
     */
    public function add_pppoe_client($param){
        $input = array(
                    'command'       => '/interface/pppoe-client/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to display all pppoe-client 
     * @return type array
     * 
     */
    public function get_all_pppoe_client(){
        return $this->query('/interface/pppoe-client/getall');
    }
    
    /**
     * This method is used to enable pppoe-client by id
     * @param type $id string
     * @return type array
     * 
     */
    public function enable_pppoe_client($id){
        $input = array(
                    'command'       => '/interface/pppoe-client/enable',
                    'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to disable pppoe-client by id
     * @param type $id string
     * @return type array
     * 
     */
     public function disable_pppoe_client($id){
        $input = array(
                    'command'       => '/interface/pppoe-client/disable',
                    'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to delete pppoe-client by id
     * @param type $id string
     * @return type array
     * 
     */
     public function delete_pppoe_client($id){
        $input = array(
                   'command'    => '/interface/pppoe-client/remove',
                   'id'         => $id
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
     public function set_pppoe_client($param, $id){
        $input = array(
                    'command'   => '/interface/pppoe-client/set',
                    'id'        => $id
        );
        $out=array_merge($input, $param);
        return $this->query($out);
    }     
    
     /**
     * This method is used to display one pppoe-client
     * in detail based on the id
     * @param type $id string
     * @return type array
     */
    public function detail_pppoe_client($id){
        $input = array(
                   'command'    => '/interface/pppoe-client/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
}


