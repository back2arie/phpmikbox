<?php

/**
 * Description of Mapi_Ip_Pool
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Ip_Pool extends Mapi_Query {
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
     * This method is used to add pool
     * @param type $param array
     * @return type array
     * 
     */
    public function add_pool($param){
        $input = array(
            'command'       => '/ip/pool/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to display
     * all pool
     * @return type array
     * 
     */
    public function get_all_pool(){
        return $this->query('/ip/pool/getall');
    }
    
    /**
     * This method is used to remove the pool by id
     * @param type $id string
     * @return type array
     * 
     */
    public function delete_pool($id){
        $input = array(
                'command'       => '/ip/pool/remove',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to change pool based on the id
     * @param type $param array
     * @param type $id string
     * @return type array
     * 
     */
    public function set_pool($param, $id){
        $input = array(
                'command'       => '/ip/pool/set',
                'id'            => $id
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
     /**
     * This method is used to display one pool 
     * in detail based on the id
     * @param type $id string
     * @return type array
     * 
     */
    public function detail_pool($id){
        $input = array(
                   'command'    => '/ip/pool/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
}

