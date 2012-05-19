<?php
/**
 * Description of Mapi_Interface_Ipip
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Interface_Ipip extends Mapi_Query {
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
     * This method is used to add interface ipip
     * @param type $param array
     * @return type array
     */
     public function add_ipip($param){
        $input = array(
                    'command'       => '/interface/ipip/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to display all interface ipip
     * @return type array
     */
     public function get_all_ipip(){
        return $this->query('/interface/ipip/getall');
    }
    
    /**
     * This method is used to enable interface ipip by id
     * @param type $id string
     * @return type array
     */
     public function enable_ipip($id){
        $input = array(
                    'command'       => '/interface/ipip/enable',
                    'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to disable interface ipip by id
     * @param type $id string
     * @return type array
     */
     public function disable_ipip($id){
        $input = array(
                    'command'       => '/interface/ipip/disable',
                    'id'            => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to remove interface ipip
     * @param type $id string
     * @return type array
     */
     public function delete_ipip($id){
        $input = array(
                   'command'    => '/interface/ipip/remove',
                   'id'         => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to set or edit interface ipip by id
     * @param type $param array
     * @param type $id string
     * @return type 
     */
    public function set_ipip($param, $id){
        $input = array(
                    'command'   => '/interface/ipip/set',
                    'id'        => $id
        );
        $out=array_merge($input, $param);
        return $this->query($out);
    }     
    
    /**
     * This method is used to display one interface ipip 
     * in detail based on the id
     * @param type $id string
     * @return type array
     */
    public function detail_ipip($id){
        $input = array(
                   'command'    => '/interface/ipip/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
}