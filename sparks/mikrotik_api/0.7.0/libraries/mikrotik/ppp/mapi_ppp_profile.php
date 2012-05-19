<?php
/**
 * Description of Mapi_Ppp_Profile
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Ppp_Profile extends Mapi_Query {
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
     * This method is used to add ppp profile
     * @param type $param array
     * @return type array
     * 
     */
    public function add_ppp_profile($param){
        $input = array(
                'command'       => '/ppp/profile/add',
        );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
    /**
     * This method is used to display all ppp profile
     * @return type array
     * 
     */
    public function get_all_ppp_profile(){
        return $this->query('/ppp/profile/getall');
    }
    
    /**
     * This method is used to remove ppp profile by id
     * @param type $id string
     * @return type array
     * 
     */
    public function delete_ppp_profile($id){
        $input = array(
                'command'           => '/ppp/profile/remove',
                'id'                => $id
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to set or edit ppp profile by id
     * @param type $param array
     * @param type $id string
     * @return type array
     * 
     */
    public function set_ppp_profile($param, $id){
        $input = array(
                'command'       => '/ppp/profile/set',
                'id'            => $id
            );
        $out = array_merge($input, $param);
        return $this->query($out);
    }
    
     /**
     * This method is used to display one ppp profile
     * in detail based on the id
     * @param type $id string
     * @return type array
     * 
     */
    public function detail_ppp_profile($id){
        $input = array(
                   'command'    => '/ppp/profile/print',
                   'id'         => $id
        );
        return $this->query($input);
    }
    
}

