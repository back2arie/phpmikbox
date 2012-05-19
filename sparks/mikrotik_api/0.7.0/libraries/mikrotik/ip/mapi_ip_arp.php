<?php
/**
 * Description of Mapi_File
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Ip_Arp extends Mapi_Query {
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
     * This method is used to add arp
     * @param type $param array
     * @return type array
     * j
     */
    public function add_arp($param){
        $input = array(
                'command'       => '/ip/arp/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
     /**
     * This method is used to delete arp by id
     * @param type $id string
     * @return type array
     * 
     */
    public function delete_arp($id){
        $input = array(
            'command'       => '/ip/arp/remove',
            'id'            => $id
        );
        return $this->query($input);
    }
    
     /**
     * This method is used to enable arp by id
     * @param type $id string
     * @return type array
     * 
     */
    public function enable_arp($id){
        $input = array(
                'command'       => '/ip/arp/enable',
                'id'            => $id
        );        
        return $this->query($input);
    }
    
    /**
     * This method is used to disable arp by id
     * @param type $id string
     * @return type array
     * 
     */
    public function disable($id){
        $input = array(
                'command'       => '/ip/arp/disable',
                'id'            => $id
        );
        return $this->query($input);
    }
    
     /**
     * This method is used to set or edit by id
     * @param type $param array
     * @param type $id string
     * @return type array
     * 
     */
    public function set_arp($param, $id){
        $input = array(
                    'command'       => '/ip/arp/set',
                    'id'            => $id
        );
        $out = array_merge($input, $param);
        return $this->query($out);
        
    }
    
    /**
     * This method is used to display all arp
     * @return type array
     * 
     */
    public function get_all_arp(){
        return $this->query('/ip/arp/getall');
    }
    
     /**
     * This method is used to display arp
     * in detail based on the id
     * @param type $id string
     * @return type array
     *  
     */
    public function detail_arp($id){
        $input = array(
                   'command'    => '/ip/arp/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
}
