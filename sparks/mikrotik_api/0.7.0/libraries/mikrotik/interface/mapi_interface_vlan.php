<?php

/**
 * Description of Mapi_Interface_Vlan
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Interface_Vlan extends Mapi_Query {
    /**
     *
     * @var type array
     */
    private $param;

    function __construct($param ) {
        $this->param = $param;
        parent::__construct($param);
    }
    
    /**
     * This method is used to add vlan
     * @param type $param array
     * @return type array
     * 
     */
     public function add_vlan($param){
        $input = array(
                    'command'       => '/interface/vlan/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
     /**
     * This method is used to display all vlan
     * @return type array
     * 
     */
     public function get_all_vlan(){
        return $this->query('/interface/vlan/getall');
    }
    
     
    /**
     * This method is used to enable vlan by id
     * @param type $id string
     * @return type array
     * 
     */
     public function enable_vlan($id){
        $input = array(
                    'command'       => '/interface/vlan/enable',
                    'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to disable vlan by id
     * @param type $id string
     * @return type array
     * 
     */
     public function disable_vlan($id){
        $input = array(
                    'command'       => '/interface/vlan/disable',
                    'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to delete vlan by id
     * @param type $id string
     * @return type array
     * 
     */
     public function delete_vlan($id){
        $input = array(
                   'command'    => '/interface/vlan/remove',
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
      public function set_vlan($param, $id){
        $input = array(
                    'command'   => '/interface/vlan/set',
                    'id'        => $id
        );
        $out=array_merge($input, $param);
        return $this->query($out);
    }     
    
     /**
     * This method is used to display one vlan
     * in detail based on the id
     * @param type $id string
     * @return type array
     * 
     */
     public function detail_vlan($id){
        $input = array(
                   'command'    => '/interface/vlan/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
}

