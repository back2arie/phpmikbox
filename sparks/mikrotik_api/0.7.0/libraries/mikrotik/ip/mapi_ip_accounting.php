<?php

/**
 * Description of Mapi_Ip_Accounting
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_Ip_Accounting extends Mapi_Query{
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
     * This method is used to set or edit ip accountng
     * @param type $account_local_traffic string
     * @param type $enabled string
     * @param type $threshold string
     * @return type array
     */
    public function set_accounting($account_local_traffic, $enabled, $threshold){
        $input = array(
                'command'                   => '/ip/accounting/set',
                'account-local-traffic'     => $account_local_traffic,
                'enabled'                   => $enabled,
                'threshold'                 => $threshold   
        );
        return $this->query($input);
    }
    
     /**
     * This method is used to display all accounting
     * @return type array
     * 
     */
    public function get_all_accounting(){
        return $this->query('/ip/accounting/getall');
    }
    
     /**
     * This method is used to display all snapshot
     * @return type array
     * 
     */
    public function get_all_snapshot(){
        return $this->query('/ip/accounting/snapshot/getall');
    }
    
     /**
     * This method is used to display all uncounted
     * @return type array
     * 
     */
    public function get_all_uncounted(){
        return $this->query('/ip/accounting/uncounted/getall');
    }
    
     /**
     * This method is used to display all web-acces
     * @return type array
     * 
     */
    public function get_all_web_access(){
        return $this->query('/ip/accounting/web-access/getall');
    }
    /**
     * This method is used to ip accounting set web-acces
     * @param type $accessible_via_web string default : yes or no
     * @return type array
     * 
     */
    public function set_web_access($accessible_via_web){
        $input = array(
                'command'               => '/ip/accounting/web-access/set',
                'accessible-via-web'    => $accessible_via_web,
                'address'               => '0.0.0.0/0'
        );
        return $this->query($input);
    }
}

