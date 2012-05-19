<?php

/**
 * Description of Mapi_Interface_Eoip
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Interface_Eoip extends Mapi_Query {
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
     * This method is used to add interface eoip
     * 
     * Example :
     * 
     * $param = array(
     *                'remote-address'  => '172.17.18.18',
     *                'tunnel-id'       => '0',
     *                'arp'             => 'disabled',
     *                'comment'         => 'krisna-eoip',
     *                'mtu'             => '0',
     *                'name'            => 'krisna',
     *                'mac-address'     => '00:00:00:00:00:00',
     *                'copy-from'       => 'krisna.txt'
     *                'disabled'        => 'no'
     *              );
     * 
     * $this->mikrotik_api->interfaces()->eoip()->add_eoip($param);
     * 
     * @param type $param array
     * @return type array
     */
     public function add_eoip($param){
        $input = array(
                    'command'       => '/interface/eoip/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to display all interface eoip
     * 
     * Example :
     * 
     * print_r($this->mikrotik_api->interfaces()->eoip()->get_all_eoip());
     * @return type array
     */
     public function get_all_eoip(){
        return $this->query('/interface/eoip/getall');
    }
    
    /**
     * This method is used to enable interface eoip by id
     * 
     * Example :
     * 
     * $this->mikrotik_api->interfaces()->eoip()->enable_eoip('*1');
     * @param type $id string
     * @return type array
     */
     public function enable_eoip($id){
        $input = array(
                    'command'       => '/interface/eoip/enable',
                    'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to disable interface eoip by id
     * 
     * Example :
     * 
     * $this->mikrotik_api->interfaces()->eoip()->disable_eoip('*1');
     * @param type $id string
     * @return type array
     */
     public function disable_eoip($id){
        $input = array(
                    'command'       => '/interface/eoip/disable',
                    'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to remove interface eoip by id
     * 
     * Example :
     * 
     * $this->mikrotik_api->interfaces()->eoip()->delete_eoip('*1');
     * @param type $id string
     * @return type array
     */
     public function delete_eoip($id){
        $input = array(
                   'command'    => '/interface/eoip/remove',
                   'id'         => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to set or edit interface eoip by id
     * 
     * Example :
     * 
     * $param = array(
     *                'remote-address'  => '172.17.18.18',
     *                'tunnel-id'       => '0',
     *                'arp'             => 'disabled',
     *                'comment'         => 'krisna-eoip',
     *                'mtu'             => '0',
     *                'name'            => 'krisna',
     *                'mac-address'     => '00:00:00:00:00:00',
     *                'copy-from'       => 'krisna.txt'
     *                'disabled'        => 'no'
     *              );
     * 
     *  $this->mikrotik_api->interfaces()->eoip()->set_eoip($param, '*1');
     * @param type $param array
     * @param type $id string
     * @return type array
     */
      public function set_eoip($param, $id){
        $input = array(
                    'command'   => '/interface/eoip/set',
                    'id'        => $id
        );
        $out=array_merge($input, $param);
        return $this->query($out);
    }     
    
    /**
     * This method is used to display one interface eoip 
     * in detail based on the id
     * 
     * Example :
     * 
     * $this->mikrotik_api->interfaces()->eoip()->detail_eoip($param, '*1');
     * @param type $id string
     * @return type array
     */
     public function detail_eoip($id){
        $input = array(
                   'command'    => '/interface/eoip/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
}
