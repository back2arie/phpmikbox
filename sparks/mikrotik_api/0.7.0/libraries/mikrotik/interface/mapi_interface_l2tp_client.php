<?php

/**
 * Description of Mapi_interface_l2tp_client
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Interface_L2tp_Client extends Mapi_Query {
    private $param;
    function __construct($param ) {
        $this->param = $param;
        parent::__construct($param);
    }
    
    /**
     * This method used for add new l2tp client
     * @param type $param array
     * @return type array
     */
    public function add_l2tp_client($param){
        $input = array(
            'command'       => '/interface/l2tp-client/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method used for disable l2tp client
     * @param type $id string
     * @return type array
     */
    public function disable_l2tp_client($id){
        $input = array(
            'command'       => '/interface/l2tp-client/disable',
            'id'            => $id
        ); 
        return $this->query($input);
    }
    
    /**
     * This method used for enable l2tp client
     * @param type $id string
     * @return type array
     */
    public function enable_l2tp_client($id){
         $input = array(
             'command'      => '/interface/l2tp-client/enable',
             'id'           => $id
         );
         return $this->query($input);
     }
     
     /**
      * This method used for delete l2tp client
      * @param type $id string
      * @return type array
      */
    public function delete_l2tp_client($id){
          $input = array(
              'command'     => '/interface/l2tp-client/remove',
              'id'          => $id
          );
          return $this->query($input);
      }
      
      /**
       * This method used for detail l2tp client
       * @param type $id string
       * @return type array
       */
    public function detail_l2tp_client($id){
        $input = array(
            'command'       => '/interface/l2tp-client/print',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for set or edit l2tp client
     * @param type $param array
     * @param type $id string
     * @return type array
     */
    public function set_l2tp_client($param, $id){
        $input = array(
            'command'       => '/interface/l2tp-client/set',
            'id'            => $id
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method used for get all l2tp client
     * @return type array
     */
    public function get_all_l2tp_client(){
        return $this->query('/interface/l2tp-client/getall');
    }
}

