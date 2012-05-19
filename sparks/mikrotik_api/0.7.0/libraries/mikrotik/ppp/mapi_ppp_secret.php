<?php
/**
 * Description of Mapi_Ppp_Secret
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Ppp_Secret extends Mapi_Query {
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
     * This method is used to add ppp secret
     * @param type $param array
     * @return type array
     * 
     */
    public function add_ppp_secret($param){
        $input = array(
            'command'       => '/ppp/secret/add'
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to disable ppp secret
     * @param type $id string
     * @return type array
     * 
     */
    public function disable_ppp_secret($id){
        $input = array(
            'command'       => '/ppp/secret/disable',
            'id'            => $id
        );
        return $this->query($input);        
    }
    
    /**
     * This method is used to enable ppp secret
     * @param type $id string
     * @return type array
     * 
     */
    public function enable_ppp_secret($id){
        $input = array(
            'command'       => '/ppp/secret/enable',
            'id'            => $id
        );
        return $this->query($input); 
    }
    
    /**
     * This method is used to set or edit ppp secret
     * @param type $param array
     * @param type $id string
     * @return type array
     * 
     */
    public function set_ppp_secret($param, $id){
        $input = array(
                    'command'   => '/ppp/secret/set',
                    'id'        => $id
        );
        $out=array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to delete ppp secret
     * @param type $id string
     * @return type array
     */
    public function delete_ppp_secret($id){
         $input = array(
                   'command'    => '/ppp/secret/remove',
                   'id'         => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to display all ppp secret
     * @return type array
     * 
     */
    public function get_all_ppp_secret(){
         return $this->query('/ppp/secret/getall');
    }
    
     /**
     * This method is used to display one ppp secret 
     * in detail based on the id
     * @param type $id not array, harus di deklarasikan
     * @return type array
     * 
     */
    public function detail_ppp_secret($id){
        $input = array(
                   'command'    => '/ppp/secret/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
}

