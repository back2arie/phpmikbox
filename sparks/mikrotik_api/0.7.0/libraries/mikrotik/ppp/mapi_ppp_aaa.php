<?php
/**
 * Description of Mapi_Ppp_Aaa
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Ppp_Aaa extends Mapi_Query {
    /**
     *
     * @var type array
     */
    private $param;
    
    function __construct($param){
        $this->param = $param;
        parent::__construct($param);
    }
    
    /**
     * This method is used to display all ppp aaa
     * @return type array
     */
    public function get_all_aaa(){
        return $this->query('/ppp/aaa/getall');
    }
    
    /**
     * This method is used to set ppp aaa
     * @param type $use_radius string
     * @param type $accounting string
     * @param type $interim_update string
     * @return type array
     */
    public function set_ppp_aaa($use_radius, $accounting, $interim_update){
        $input = array(
            'command'           => '/ppp/aaa/set',
            'use-radius'        => $use_radius,
            'accounting'        => $accounting,
            'interim-update'    => $interim_update
        );
        return $this->query($input);
    }
}
