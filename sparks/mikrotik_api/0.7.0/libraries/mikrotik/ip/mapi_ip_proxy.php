<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mapi_ip_proxi
 *
 * @author krisna
 */
class Mapi_Ip_Proxy extends Mapi_Query {
    private $param;
    function __construct($param) {
        $this->param ; $param;
        parent::__construct($param);
    }
    
    /**
     * This method used for get all Ip Proxi
     * @return type array
     */
    public function get_all_proxy(){
        return $this->query('/ip/proxy/getall');
    }
    
    /**
     *
     * This method used for set Ip proxy
     * @param type $param array
     * @return type array
     */
    public function set_proxy($param){
        $input = array(
                'command'       => '/ip/proxy/set'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
        
    }
}
