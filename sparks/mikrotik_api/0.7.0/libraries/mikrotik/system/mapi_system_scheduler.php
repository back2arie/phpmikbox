<?php

/**
 * Description of Mapi_System_Scheduler
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_System_Scheduler extends Mapi_Query {
    private $param;
    function __construct($param) {
        $this->param = $param;
        parent::__construct($param);
    }
 /**
     * This method used for add new system scheduler
     * @param type $param array
     * @return type array
     */
    public function add_system_scheduler($param){
        $input = array(
            'command'       => '/system/scheduler/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method used for disable system scheduler
     * @param type $id string
     * @return type array
     */
    public function disable_system_scheduler($id){
        $input = array(
            'command'       => '/system/scheduler/disable',
            'id'            => $id
        ); 
        return $this->query($input);
    }
    
    /**
     * This method used for enable system scheduler
     * @param type $id string
     * @return type array
     */
    public function enable_system_scheduler($id){
         $input = array(
             'command'      => '/system/scheduler/enable',
             'id'           => $id
         );
         return $this->query($input);
     }
     
     /**
      * This method used for delete system scheduler
      * @param type $id string
      * @return type array
      */
    public function delete_system_scheduler($id){
          $input = array(
              'command'     => '/system/scheduler/remove',
              'id'          => $id
          );
          return $this->query($input);
      }
      
      /**
       * This method used for detail system scheduler
       * @param type $id string
       * @return type array
       */
    public function detail_system_scheduler($id){
        $input = array(
            'command'       => '/system/scheduler/print',
            'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for set or edit system scheduler
     * @param type $param array
     * @param type $id string
     * @return type array
     */
    public function set_system_scheduler($param, $id){
        $input = array(
            'command'       => '/system/scheduler/set',
            'id'            => $id
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method used for get all system scheduler
     * @return type array
     */
    public function get_all_system_scheduler(){
        return $this->query('/system/scheduler/getall');
    }
}
