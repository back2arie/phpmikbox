<?php

/**
 * Description of Mapi_File
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Interface_Ethernet extends Mapi_Query {
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
      * This method is used to display all interface
      * @return type array
      */
     public function get_all_interface(){
         return $this->query('/interface/getall');
    }
    
    /**
     * This method is used to display one interface  
     * in detail based on the id
     * @param type $param array
     * @param type $id string
     * @return type array
     */
    
    public function set_interface($param, $id){
        $input = array(
            'command'       => '/interface/set',
            'id'            => $id                
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to enable interface by id
     * @param type $id string
     * @return type array
     */
    public function enable_interface($id){
        $input = array(
            'command'       => '/interface/enable',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to disable interface by id
     * @param type $id string
     * @return type array
     */
    public function disable_interface($id){
        $input = array(
            'command'       => '/interface/disable',
            'id'            => $id
        );
        return $this->query($input);
    }
    /**
     * This method is used to display one interafce 
     * in detail based on the id
     * @param type $id string
     * @return type array
     * 
     */
    public function detail_interface($id){
        $input = array(
                   'command'    => '/interface/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
}
