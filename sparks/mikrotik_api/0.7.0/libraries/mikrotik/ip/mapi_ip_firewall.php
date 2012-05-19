<?php
/**
 * Description of Mapi_Ip_Firewall
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Ip_Firewall extends Mapi_Query {
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
     * This method is used to add the firewall nat
     * @param type $param array
     * @return type array
     * 
     */
    public function add_firewall_nat($param){
         $input = array(
            'command'       => '/ip/firewall/nat/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to disable firewall nat by id
     * @param type $id string
     * @return type array
     * 
     */
    public function disable_firewall_nat($id){
        $input = array(
            'command'       => '/ip/firewall/nat/disable',
            'id'            => $id
        );
        return $this->query($input);        
    }
    
    /**
     * This method is used to enable firewall nat by id
     * @param type $id string
     * @return type array
     * 
     */
    public function enable_firewall_nat($id){
        $input = array(
            'command'       => '/ip/firewall/nat/enable',
            'id'            => $id
        );
        return $this->query($input); 
    }
    
    /**
     * This method is used to change firewall nat based on the id
     * @param type $param array
     * @param type $id string
     * @return type array
     * 
     */
    public function set_firewall_nat($param, $id){
        $input = array(
                    'command'   => '/ip/firewall/nat/set',
                    'id'        => $id
        );
        $out=array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to remove firewall nat
     * @param type $id string
     * @return type array
     * 
     */
    public function delete_firewall_nat($id){
         $input = array(
                   'command'    => '/ip/firewall/nat/remove',
                   'id'         => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to display all firewall nat
     * @return type array
     * 
     */
    public function get_all_firewall_nat(){
         return $this->query('/ip/firewall/nat/getall');
    }
    
     /**
     * This method is used to display one firewall nat 
     * in detail based on the id
     * @param type $id string
     * @return type array
     * 
     */
    public function detail_firewall_nat($id){
        $input = array(
                   'command'    => '/ip/firewall/nat/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
    
    /**
     *
     * @param type $param array
     * @return type array
     * This method is used to add the firewall filter
     */
    public function add_firewall_filter($param){
        $input = array(
                    'command'   => '/ip/firewall/filter/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to display all firewall filter
     * @return type array
     * 
     */
    public function get_all_firewall_filter(){
        return $this->query('/ip/firewall/filter/getall');
    }
    
     /**
     * This method is used to enable firewall filter by id
     * @param type $id string
     * @return type array
     * 
     */
    public function enable_firewall_filter($id){
        $input = array(
                    'command'    => '/ip/firewall/filter/enable',
                    'id'         => $id
        );
        return $this->query($input);
    }
    
     /**
     * This method is used to disable firewall filter by id
     * @param type $id string
     * @return type array
     * 
     */
    public function disable_firewall_filter($id){
        $input = array(
                    'command'    => '/ip/firewall/filter/disable',
                    'id'         => $id
        );
        return $this->query($input);
    }
    
     /**
     * This method is used to remove firewall filter by id
     * @param type $id string
     * @return type array
     * 
     */
    public function delete_firewall_filter($id){
        $input = array(
                    'command'    => '/ip/firewall/filter/remove',
                    'id'         => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to change firewall nat based on the id
     * @param type $param array
     * @param type $id string
     * @return type array
     * 
     */
    public function set_firewall_filter($param, $id){
        $input = array(
                    'command'   => '/ip/firewall/filter/set',
                    'id'        => $id
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
     /**
     * This method is used to display one firewall filter
     * in detail based on the id
     * @param type $id string
     * @return type array
     * 
     */
    public function detail_firewall_filter($id){
        $input = array(
                    'command'    => '/ip/firewall/filter/print',
                    'id'         => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for add new Ip Firewall Mangle 
     * @param type $param array
     * @return type array
     */
    public function add_firewall_mangle($param){
        $input = array(
                'command'       => '/ip/firewall/mangle/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method used for disable Ip Firewall Mangle
     * @param type $id string
     * @return type array
     */
    public function disable_firewall_mangle($id){
        $input = array(
                'command'       => '/ip/firewall/mangle/disable',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for enable Ip Firewall Mangle
     * @param type $id string
     * @return type array
     */
    public function enable_firewall_mangle($id){
        $input = array(
                'command'       => '/ip/firewall/mangle/enable',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for delete Ip Firewall Mangle
     * @param type $id string
     * @return type array
     */
    public function delete_firewall_mangle($id){
        $input = array(
                'command'       => '/ip/firewall/mangle/remove',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for detail Ip Firewall Mangle
     * @param type $id string
     * @return type array
     */
    public function detail_firewall_mangle($id){
        $input = array(
                'command'       => '/ip/firewall/mangle/print',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for set or edit Ip Firewall Mangle
     * @param type $param array
     * @param type $id string
     * @return type array
     */
    public function set_firewall_mangle($param, $id){
        $input = array(
                'command'       => '/ip/firewall/mangle/set',
                'id'            => $id
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method used for get all Ip Firewall Mangle
     * @return type array
     */
    public function get_all_firewall_mangle(){
        return $this->query('/ip/firewall/mangle/getall');
        
    }
    
    /**
     * This method used for get all firewall connection
     * @return type array
     */
    public function get_all_firewall_connection(){
        return $this->query('/ip/firewall/connection/getall');
    }
    
    /**
     * This method used for delete firewall connection
     * @param type $id string
     * @return type array
     */
    public function delete_firewall_connection($id){
        $input = array(
                'command'       => '/ip/firewall/connection/remove',
                'id'            => $id
        );
        return $this->query($input);
        
    }
    
    /**
     * This method used for get all Ip Firewall Service Port
     * @return type arrray
     */
    public function get_all_firewall_service_port(){
        return $this->query('/ip/firewall/service-port/getall');
    }
    
    /**
     * This method used for disable Ip Firewall Service Port
     * @param type $id string
     * @return type array
     */
    public function disable_firewall_service_port($id){
        $input = array(
                'command'       => '/ip/firewall/service-port/disable',
                'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method used for enable Ip Firewall Service Port
     * @param type $id string
     * @return type array
     */
    public function enable_firewall_service_port($id){
       $input = array(
                'command'       => '/ip/firewall/service-port/enable',
                'id'            => $id
       ); 
       return $this->query($input);
    }
    
}


