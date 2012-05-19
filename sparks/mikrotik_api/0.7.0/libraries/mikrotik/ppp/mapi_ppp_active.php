<?php

/**
 * Description of Mapi_Ppp_Active
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Ppp_Active extends Mapi_Query {
    private $param;
    function __construct($param){
        $this->param = $param;
        parent::__construct($param);
    }
    
    /**
     * This method is used to display all ppp active
     * @return type array
     */
    public function get_all_ppp_active(){
        return $this->query('/ppp/active/getall');
    }
    
    /**
     * This method is used to delete ppp active
     * @param type $id string
     * @return type array
     */
    public function delete_ppp_active($id){
        $input = array(
            'caommand'      => '/ppp/active/remove',
            'id'            => $id    
        );
        return $this->query($input);
    }
}
