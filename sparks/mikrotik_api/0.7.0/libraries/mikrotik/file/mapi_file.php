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

class Mapi_File extends Mapi_Query {
    /**
     * @access private
     * @var type array
     */
    private $param;
    
    function __construct($param ) {
        $this->param = $param;
        parent::__construct($param);
    }
    
    /**
     * This method is used to display all file in mikrotik RouterOs
     * @return type array
     */
    public function get_all_file(){
        return $this->query('/file/getall');
    }
    
    /**
     * This method is used to display one file 
     * in detail based on the id
     * @param type $id string 
     * @return type array
     */
    public function detail_file($id){
        $input = array(
                    'command'       => '/file/print',
                    'id'            => $id    
        );
        return $this->query($input);
    }
    
    /**
     * This method is used to delete file by id
     * @param type $id string
     * @return type array
     */
    public function delete_file($id){
        $input = array(
                'command'       => '/file/remove',
                'id'            => $id
        );
        return $this->query($input);
    }
}
