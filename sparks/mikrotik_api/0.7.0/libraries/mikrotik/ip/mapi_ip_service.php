<?php

/**
 * Description of Mapi_Ip_Service
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Ip_Service extends Mapi_Query {
    private $param;
    function __construct($param ) {
        $this->param = $param;
        parent::__construct($param);
    }
    
    /**
     * This methode is used to display all ip service
     * @return type array
     */
    public function get_all_service(){
        return $this->query('/ip/service/getall');
    }
    
    /**
     * This methode is used to enable ip service by id
     * @param type $id string
     * @return type array
     */
    public function enable_service($id){
        $input = array(
                'command'       => '/ip/service/enable',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This methode is used to disable ip service by id
     * @param type $id string
     * @return type array
     */
    public function disable_service($id){
        $input = array(
                'command'       => '/ip/service/disable',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to display one ip service
     * in detail based on the id
     * @param type $id string
     * @return type array
     */
    public function detail_service($id){
        $input = array(
                   'command'    => '/ip/service/print',
                   'id'         => $id
        );
        return $this->query($input);
    }    
    
    public function set_service($param, $id){
        $input = array(
                'command'       => '/ip/service/set',
                'id'            => $id
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
}

