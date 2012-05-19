<?php
/**
 * Description of Mapi_Ip_Address
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Ip_Address  extends Mapi_Query{
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
     * This method is used to add the ip address
     * @param type $param array
     * @return type array
     * 
     */
    public function add_address($param){
        $input=array(
            'command'       => '/ip/address/add'
        );
        $out=array_merge($input, $param);
        return $this->query($out);
    }
    /**
     * This method is used to display all ip address
     * @return type array
     * 
     */
    public function get_all_address(){
        return $this->query('/ip/address/getall');
    }
    
    /**
     * This method is used to activate the ip address by id
     * @param type $id is not an array
     * @return type array
     * 
     * 
     */
    public function enable_address($id){
        $input = array(
                'command'       => '/ip/address/enable',
                'id'            => $id     
        );
            return $this->query($input);
    }
    
    /**
     * This method is used to disable ip address by id
     * @param type $id string 
     * @return type array
     * 
     * 
     */
    public function disable_address($id){
        $input = array(
                'command'       => '/ip/address/disable',
                'id'            => $id
        );
            return $this->query($input);
    }
    
    /**
     * This method is used to remove the ip address by id
     * @param type $id is not an array
     * @return type array
     * 
     */
    public function delete_address($id){
        $input = array(
                   'command'    => '/ip/address/remove',
                   'id'         => $id
        );
        return $this->query($input);
   }
    
    /**
     * This method is used to set or edit by id
     * @param type $param array
     * @return type array
     * 
     */
    public function set_address($param, $id){
        $input = array(
                    'command'   => '/ip/address/set',
                    'id'        => $id
        );
        $out=array_merge($input, $param);
        return $this->query($out);
    }       
    
    /**
     * This method is used to display one ip address 
     * in detail based on the id
     * @param type $id not array
     * @return type array
     * 
     */
    public function detail_address($id){
        $input = array(
                   'command'    => '/ip/address/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
}
