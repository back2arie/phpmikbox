<?php
/**
 * Description of Mapi_Interface_Vrrp
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Interface_Vrrp extends Mapi_Query {
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
     * This method is used to to add vrrp
     * @param type $param array
     * @return type array
     * 
     */
     public function add_vrrp($param){
        $input = array(
                    'command'       => '/interface/vrrp/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
     
    /**
     * This method is used to display all vrrp
     * @return type array
     * 
     */
     public function get_all_vrrp(){
        return $this->query('/interface/vrrp/getall');
    }
    
     
    /**
     * This method is used to to enable vrrp by id
     * @param type $id string
     * @return type array
     * 
     */
     public function enable_vrrp($id){
        $input = array(
                    'command'       => '/interface/vrrp/enable',
                    'id'            => $id
        );
        return $this->query($input);
    }
    
     /**
     * This method is used to to disable vrrp by id
     * @param type $id string
     * @return type array
     * 
     */
     public function disable_vrrp($id){
        $input = array(
                    'command'       => '/interface/vrrp/disable',
                    'id'            => $id
        );
        return $this->query($input);
    }
    
   /**
     * This method is used to to delete vrrp by id
     * @param type $id string
     * @return type array
     * 
     */
     public function delete_vrrp($id){
        $input = array(
                   'command'    => '/interface/vrrp/remove',
                   'id'         => $id
        );
        return $this->query($input);
    }
    
     /**
     * This method is used to change based on the id
     * @param type $param array
     * @param type $id string
     * @return type array
     * 
     */
      public function set_vrrp($param, $id){
        $input = array(
                    'command'   => '/interface/vrrp/set',
                    'id'        => $id
        );
        $out=array_merge($input, $param);
        return $this->query($out);
    }     
    
    /**
     * This method is used to display one vrrp
     * in detail based on the id
     * @param type $id string
     * @return type array
     * 
     */
     public function detail_vrrp($id){
        $input = array(
                   'command'    => '/interface/vrrp/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
}