<?php

/**
 * Description of Mapi_Query
 * 
 * @author      Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * @author      Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * @copyright   Copyright (c) 2011, Virtual Think Team.
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @category	Libraries
 * @version     0.5.0
 */
class Mapi_Query extends Mapi_Core {
    /**
     * @access private
     * @var type array
     */
    private $param;

    /**
     * Instantiation
     * @param type $param array
     */
    function __construct($param=array()) {
        $this->param = $param;
        parent::__construct($param); //Mikrotik_Api_Core
    }
    
    /**
     * @access protected
     * @param type $param string/array
     * @return boolean 
     */
    function query($param){
        $out='';
        if ($this->connect()){
            $out= $this->__build($param);
            $this->disconnect();
        } else {
            $out = FALSE;
        }
        return $out;
    }
    
    /**
     * @access protected
     * @param type $param array
     * @return type array
     */
    private function __build($param){
        $tmp='';
        if (!is_array($param)){
             $tmp=explode('/', $param);
        } else {
             $tmp=explode('/', $param['command']);
        }
       
        $tmp_count=count($tmp);
        $last_command=$tmp[$tmp_count-1];
        
        //write check
        if (is_array($param)){
             $count = count($param);
             $i=0;
             foreach ($param as $key => $value){
                 $status=FALSE;
                 if ($i==$count-1){
                     $status=TRUE;
                 } 
                 if ($key=='command'){
                     $this->write($value,false);
                 } else {
                     if ($key=='id'){
                         if ($last_command=="print"){
                                $this->write('?.'.$key.'='.$value, $status);
                         } else {
                                $this->write('=.'.$key.'='.$value, $status);
                         }  
                     } else {
                         $this->write('='.$key.'='.$value,$status);
                     }
                 }            
                 $i++;
             }
        } else {
            $this->write($param);
        }
        
        $r_status='';
        if ($last_command=="print"||$last_command=="getall"){
            $r_status=TRUE;
        } else {
            $r_status=FALSE;
        }
        
        return $this->read($r_status);
    }

}