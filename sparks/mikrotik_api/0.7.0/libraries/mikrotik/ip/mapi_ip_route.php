<?php
/**
 * Description of Mapi_Ip_Route
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Ip_Route extends Mapi_Query {
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
     * This method is used to display all ip route
     * @return type array
     */
    public function get_all_route(){
        return $this->query('/ip/route/getall');
    }
    
    /**
     * This method is used to add ip route gateway
     * @param type $param array
     * @return type array
     */
    public function add_route_gateway($param){
        $input = array(
                'command'   => '/ip/route/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * Can change or disable only static routes
     * @param type $id is not array 
     * 
     */
    public function disable_route($id){
        $input = array(
            'command'       => '/ip/route/disable',
            'id'            => $id
        );
        return $this->query($input); 
    }
    
    /**
     * Can change or enable only static routes
     * @param type $id string
     * @return type array
     * 
     */
    public function enable_route($id){
        $input = array(
            'command'       => '/ip/route/enable',
            'id'            => $id
        );
        return $this->query($input); 
    }
    
    /**
     * Can change or remove only static routes
     * @param type $id string
     * @return type array
     * 
     */
    public function delete_route($id){
        $input = array(
            'command'       => '/ip/route/remove',
            'id'            => $id
        );
        return $this->query($input); 
    }
    
    /**
     * Can change only static routes
     * @param type $param array
     * @param type $id string
     * @return type array
     * 
     */
    public function set_route($param, $id){
        $input = array(
                    'command'   => '/ip/route/set',
                    'id'        => $id
        );
        $out=array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to display one ip route
     * in detail based on the id
     * @param type $id string
     * @return type array
     * 
     */
    public function detail_route($id){
         $input = array(
                   'command'    => '/ip/route/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
}

