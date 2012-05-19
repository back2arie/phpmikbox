<?php

/**
 * Description of Mapi_Ppp
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Ppp {
    private $param;
    function __construct($param = array()) {
        $this->param = $param;
    }
        
    /**
     * This method for call class Mapi_Ppp_Profile
     * @return Object of Mapi_Ppp_Profile class
     */
    public function ppp_profile(){
        return new Mapi_Ppp_Profile($this->param);
    }
    
    /**
     * This method for call class Mapi_Ppp_Secret
     * @return Object of Mapi_Ppp_Secret
     */
    public function ppp_secret(){
        return new Mapi_Ppp_Secret($this->param);
    }
    
    
    /**
     * This method for call class Mapi_Ppp_Aaa
     * @access public
     * @return object of Mapi_Ppp_Aaa class
     */
    public function ppp_aaa(){
        return new Mapi_Ppp_Aaa($this->param);
    }
    
    /**
     * This method for call class Mapi_Ppp_Active
     * @return Object of Mapi_Ppp_Active class
     */
    public function ppp_active(){
        return new Mapi_Ppp_Active($this->param);
    }
}