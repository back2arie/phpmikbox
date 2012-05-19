<?php

/**
 * Description of Mapi_Ip_Dns
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Ip_Dns extends Mapi_Query {
    /**
     *
     * @var type array
     */
    private $param;
    
    function __construct($param){
        $this->param = $param;
        parent::__construct($param);
    }
    
   /**
    * This method is used to configure dns
    * @param type $servers string example : '192.168.1.1,192.168.2.1'
    * @return type array
    * 
    */
    public function set_dns($servers){
        $input = array(
                'command'       => '/ip/dns/set',
                'servers'       => $servers
        );
       return $this->query($input);
    }
    
    /**
     * This method is used to display
     * all dns
     * @return type array
     * 
     */
    public function get_all_dns(){
        return $this->query('/ip/dns/getall');
    }
     
    /**
     * This method is used to add the static dns
     * @param type $param array
     * @return type array
     * 
     */
    public function add_dns_static($param){
        $input = array(
                    'command'       => '/ip/dns/static/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
   /**
    * This method is used to display
    * all static dns
    * @return type array
    * 
    */
    public function get_all_static_dns(){
        return $this->query('/ip/dns/static/getall');
    }
    
    /**
     * This method is used to display one static dns 
     * in detail based on the id
     * @param type $id string
     * @return type array
     * 
     */
     public function detail_static_dns($id){
        $input = array(
                   'command'    => '/ip/dns/static/print',
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
    public function set_static_dns($param, $id){
        $input = array(
                   'command'    => '/ip/dns/static/set',
                   'id'         => $id
        );        
        $out = array_merge($input, $param);
        return $this->query($out);
    }

     /**
     * This method is used to display
     * all dns cache
     * @return type array
     * 
     */
    public function get_all_dns_cache(){
        return $this->query('/ip/dns/cache/getall');
    }
    
    /**
     * This method is used to display one dns cache 
     * in detail based on the id
     * @param type $id string
     * @return type array
     * 
     */
     public function detail_dns_cache($id){
        $input = array(
                   'command'    => '/ip/dns/cache/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to display
     * all dns cache all cache
     * @return type array
     * 
     */
    public function get_all_dns_cache_all(){
        return $this->query('/ip/dns/cache/all/getall');
    }
    
     /**
     * This method is used to display one dns cache all 
     * in detail based on the id
     * @param type $id string
     * @return type array
     * 
     */
     public function detail_dns_cache_all($id){
        $input = array(
                   'command'    => '/ip/dns/cache/all/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
}
