<?php
/**
 * Description of Mapi_System
 *
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 */
class Mapi_System extends Mapi_Query {
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
     * This method is used to set systemn identity
     * @param type $name string
     * @return type array
     */  
    public function set_identity($name){
        $input = array(
                'command'       => '/system/identity/set',
                'name'          => $name
        );
        return $this->query($input);
    }
    /**
     * This method is used to display all system  identiy
     * @return type array
     */
    public function get_all_identity(){
        return $this->query('/system/identity/getall');
    }
    
    /**
     * This method is used to display all system clock
     * @return type array
     */
    public function get_all_clock(){
        return $this->query('/system/clock/getall');
    }
    
    /**
     * This method is used to system bacup save
     * @param type $name string
     * @return type array
     */
    public function save_backup($name){
        $input = array(
                'command'   => '/system/backup/save',
                'name'      => $name
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to system backup load
     * @param type $name string
     * @return type array
     */
    public function load_backup($name){
        $input = array(
                'command'   => '/system/backup/load',
                'name'      => $name
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to display all system history
     * @return type array
     */
    public function get_all_history(){
        return $this->query('/system/history/getall');
    }
    
    /**
     * This method is used to display all system license
     * @return type array
     */
    public function get_all_license(){
        return $this->query('/system/license/getall');
    }
    
    /**
     * This method is used to display all system routerboard
     * @return type array
     */
    public function get_all_routerboard(){
        return $this->query('/system/routerboard/getall'); 
    }
    /**
     * This method is used to system reset configuration
     * @param type $keep_users string (yes or no)
     * @param type $no_defaults string (yes or no)
     * @param type $skip_backup string (yes or no)
     * @return type array
     */
    public function reset($keep_users, $no_defaults, $skip_backup){
        $input = array(
                   'command'            => '/system/reset-configuration',
                   'keep-users'         => $keep_users,
                   'no-defaults'        => $no_defaults,
                   'skip-backup'        => $skip_backup
        );
        return $this->query($input);
    }
}
