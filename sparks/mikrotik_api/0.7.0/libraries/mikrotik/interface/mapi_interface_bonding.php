<?php

/**
 * Description of Mapi_interface_Bonding
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Interface_Bonding extends Mapi_Query {
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
     * This method is used to add interface bonding
     * 
     * Example in Mikrotik RouterOs :
     * 
     * [admin@Router1] interface bonding> add slaves=ether1,ether2
     * 
     * Exmple : 
     * 
     * $param = array(
     *                          'name'    => 'bonding1',
     *                          'slaves'  => 'ether1,ether2');
     * 
     * $this->mikrotik_api->interfaces()->bonding()->add_bonding($param);
     * 
     * The $param that you can send to Mikrotik RouterOs are :
     * 
     * 1. arp -- Address Resolution Protocol
     * 
     * 2. arp-interval -- Time in milliseconds for monitoring ARP requests
     * 
     * 3. arp-ip-targets -- IP addresses for monitoring
     * 
     * 4. comment -- Set comment for items
     * 
     * 5. copy-from -- Item number
     * 
     * 6. disabled -- Defines whether MAC Telnet Server is disabled or not
     * 
     * 7. down-delay -- Time period the interface is disabled  if a link failure has been detected
     * 
     * 8. lacp-rate -- Link Aggregation Control Protocol rate specifies how often to exchange with LACPDUs between bonding peer
     * 
     * 9. link-monitoring -- Method for monitoring the link
     * 
     * 10. mii-interval -- Time in milliseconds for monitoring mii-type link
     * 
     * 11. mode -- Interface bonding mode
     * 
     * 12. mtu -- Maximum Transmit Unit
     * 
     * 13. name -- Interface name
     * 
     * 14. primary -- Slave that will be used in active-backup mode as active link
     * 
     * 16. slaves -- Interfaces that are used in bonding
     * 
     * 17. up-delay -- Time period the interface is disabled if a link has been brought up
     * 
     * 18. up-delay -- Time period the interface is disabled if a link has been brought up
     *  
     * @param type $param array
     * @return type array
     */
     public function add_bonding($param){
        $input = array(
                    'command'       => '/interface/bonding/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to display all interface bonding
     * 
     * Example :
     * 
     * print_r($this->mikrotik_api->interfaces()->bonding()->get_all_bonding());
     * @return type array
     */
     public function get_all_bonding(){
        return $this->query('/interface/bonding/getall');
    }
    
    /**
     * This method is used to enable interface bonding by id
     * 
     * Example :
     * 
     * $this->mikrotik_api->interfaces()->bonding()->enable_bonding('*1');
     * @param type $id string
     * @return type array
     */
     public function enable_bonding($id){
        $input = array(
                    'command'       => '/interface/bonding/enable',
                    'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to disable interface bonding by id
     * 
     * Example :
     * 
     * $this->mikrotik_api->interfaces()->bonding()->disable_bonding('*1');
     * @param type $id string
     * @return type array
     */
     public function disable_bonding($id){
        $input = array(
                    'command'       => '/interface/bonding/disable',
                    'id'            => $id
        );
        return $this->query($input);
    }
      
    /**
     * This method is used to set or edit interface bonding by id
     * 
     * Example :
     * 
     * $param = array(
     *                          'name'    => 'bonding1',
     *                          'slaves'  => 'ether1,ether2');
     * 
     * $this->mikrotik_api->interfaces()->bonding()->set_bonding($param, '*1');
     * 
     * 
     * The $param that you can send to Mikrotik RouterOs are :
     * 
     * 1. arp -- Address Resolution Protocol
     * 
     * 2. arp-interval -- Time in milliseconds for monitoring ARP requests
     * 
     * 3. arp-ip-targets -- IP addresses for monitoring
     * 
     * 4. comment -- Set comment for items
     * 
     * 5. copy-from -- Item number
     * 
     * 6. disabled -- Defines whether MAC Telnet Server is disabled or not
     * 
     * 7. down-delay -- Time period the interface is disabled  if a link failure has been detected
     * 
     * 8. lacp-rate -- Link Aggregation Control Protocol rate specifies how often to exchange with LACPDUs between bonding peer
     * 
     * 9. link-monitoring -- Method for monitoring the link
     * 
     * 10. mii-interval -- Time in milliseconds for monitoring mii-type link
     * 
     * 11. mode -- Interface bonding mode
     * 
     * 12. mtu -- Maximum Transmit Unit
     * 
     * 13. name -- Interface name
     * 
     * 14. primary -- Slave that will be used in active-backup mode as active link
     * 
     * 16. slaves -- Interfaces that are used in bonding
     * 
     * 17. up-delay -- Time period the interface is disabled if a link has been brought up
     * 
     * 18. up-delay -- Time period the interface is disabled if a link has been brought up
     *  
     * @param type $param array
     * @param type $id string
     * @return type array
     */
      public function set_bonding($param, $id){
        $input = array(
                    'command'   => '/interface/bonding/set',
                    'id'        => $id
        );
        $out=array_merge($input, $param);
        return $this->query($out);
    }     
    
    /**
     * This method is used to display one interface bonding
     * in detail based on the id
     * 
     * Example :
     * 
     * $this->mikrotik_api->interfaces()->bonding()->detail_bonding('*1');
     * @param type $id string
     * @return type array
     */
     public function detail_bonding($id){
        $input = array(
                   'command'    => '/interface/bonding/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
    /**
     * This method is used to delete interface bonding by id
     * 
     * $this->mikrotik_api->interfaces()->bonding()->delete_bonding('*1');
     * @param type $id string
     * @return type array
     */
     public function delete_bonding($id){
        $input = array(
                   'command'    => '/interface/bonding/remove',
                   'id'         => $id
        );
        return $this->query($input);
    }
}