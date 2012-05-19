<?php
/**
 * @author Denis Basta denis.basta@gmail.com
 * 
 * Revised By Nick Barner 
 * read() function altered to take into account 
 * the placing of the "!done" reply and also 
 * correct calculation of the reply length.
 * 
 * Revised By Ben Menking ben@infotechsc.com 
 * read() function altered removed echo 
 * statement that dumped byte data to screen
 * 
 * Revised By Jeremy Jefferson <http://jeremyj.com/>
 * January 8, 2010,  Fixed write function in 
 * order to allow for queries to be executed
 * 
 * Revised By Lalu Erfandi Maula Yusnu nunenuh@gmail.com <http://vthink.web.id>
 * Create constructur for integrating with codeigniter
 * and added isset Response in function connect
 * 
 * Revised By Krisna Pranata krisna.pranata@gmail.com <http://vthink.web.id>
 * Change function encode_length from useing if code to switch code
 * and change class name from Routeros_api to Mapi_Core
 * 
 * @category    Library
 * @license     http://opensource.org/licenses/gpl-license.php GNU Public License
 * @access  protected
 * 
 */
class Mapi_Core {
        /**
         *
         * @var type array
         */
        private $param;
        
        /**
         *
         * @var type int
         */
	private $error_no;				// Variable for storing connection error number, if any
	/**
         *
         * @var type string
         */
        private $error_str;				// Variable for storing connection error text, if any
	
        /**
         *
         * @var type boolean
         */
        private $connected = false;                 // Connection state
	
        /**
         *
         * @var type mixed
         */
        private $socket;				// Variable for storing socket resource

        /**
         *
         * @param type $param 
         */
        function __construct($param=array()) {
            $this->param = $param;
        }
	
        /**
         * @access protected
         * @param type $text string
         */
	private function debug($text) {
            if ($this->param['debug']) echo $text . "\n";
	}

        /**
         * @access protected
         * @param type $length
         * @return string 
         */
	private function encode_length($length) {
            switch ($length){
                case $length < 0x80 :
                    $length = chr($length);
                    break;
                case $length < 0x4000:
                    $length |= 0x8000;
                    $length = chr( ($length >> 8 ) & 0xFF) . chr($length & 0x0FF);
                    break;
                case $length < 200000:
                    $length |= 0xC00000;
                    $length = chr(($length >> 8) & 0xFF). chr(($length >> 8) & 0xFF). chr($length & 0xFF);
                    break;
                case $length < 0x10000000:
                    $length |= 0xE0000000;
                    $length = chr(($length >> 8) & 0xFF). chr(($length >> 8) & 0xFF). chr(($length >> 8) & 0xFF). chr($length & 0xFF);
                    break;
                case $length >= 0x10000000:
                    $length = character_limiter(0xF0). chr(($length >> 8) & 0xFF). chr(($length >> 8) & 0xFF). chr(($length >> 8) & 0xFF). chr($length & 0xFF);
                    break;   
            }
            return $length;
	}
        
        /**
         * @access protected
         * @return type boolean
         */
	function connect() {
            for ($ATTEMPT = 1; $ATTEMPT <= $this->param['attempts']; $ATTEMPT++) {
                $this->connected = false;
                $this->debug('Connection attempt #' . $ATTEMPT . ' to ' . $this->param['host'] . ':' . $this->param['port'] . '...');
                if ($this->socket = @fsockopen($this->param['host'], $this->param['port'], $this->error_no, $this->error_str, $this->param['timeout']) ) {
                    socket_set_timeout($this->socket, $this->param['timeout']);
                    $this->write('/login');
                    $RESPONSE = $this->read(false);
                    if ($RESPONSE[0] == '!done') {
                        if (isset($RESPONSE[1])){
                            if (preg_match_all('/[^=]+/i', $RESPONSE[1], $MATCHES) ) {
                                if ($MATCHES[0][0] == 'ret' && strlen($MATCHES[0][1]) == 32) {
                                    $this->write('/login', false);
                                    $this->write('=name=' . $this->param['username'], false);
                                    $this->write('=response=00' . md5(chr(0) . $this->param['password'] . pack('H*', $MATCHES[0][1]) ) );
                                    $RESPONSE = $this->read(false);
                                    if (isset ($RESPONSE[0])){
                                    if ($RESPONSE[0] == '!done') {
                                        $this->connected = true;
                                        break;
                                        }
                                    }
                                }
                            }
                        }
                    }
                            fclose($this->socket);
                    }
                    sleep($this->param['delay']);
            }

            if ($this->connected) $this->debug('Connected...'); else $this->debug('Error...');
            return $this->connected;
	}

        
        /**
         *  @access protected
         */
	public function disconnect() {
		fclose($this->socket);
		$this->connected = false;
		$this->debug('Disconnected...');
	}
        
        /** 
         * @access protected
         * @param type $response mixed
         * @return array 
         */
	private function parse_response($response) {
		if (is_array($response) ) {
			$PARSED = array();
			$CURRENT = null;
			foreach ($response as $x) {
				if (in_array($x, array('!fatal', '!re', '!trap') ) ) {
					if ($x == '!re')
						$CURRENT = &$PARSED[];
					else
						$CURRENT = &$PARSED[$x][];
				} else if ($x != '!done') {
					if (preg_match_all('/[^=]+/i', $x, $MATCHES) )
						$CURRENT[$MATCHES[0][0]] = (isset($MATCHES[0][1]) ? $MATCHES[0][1] : '');
				}
			}
			return $PARSED;
		}else {
			return array();
                }
	}
        
        /**
         * @access protected
         * @param type $array array
         * @return type 
         */
        private function array_change_key_name(&$array) {
                if (is_array($array) ) {
                        foreach ($array as $k => $v) {
                                $tmp = str_replace("-","_",$k);
                                $tmp = str_replace("/","_",$tmp);
                                if ($tmp) {
                                        $array_new[$tmp] = $v;
                                } else {
                                        $array_new[$k] = $v;
                                }
                        }
                        return $array_new;
                } else {
                        return $array;
                }
        }

        /**
         * @access protected
         * @param type $response mixed
         * @return type array
         */
        private function parse_response4smarty($response) {
                if (is_array($response) ) {
                        $PARSED = array();
                        $CURRENT = null;
                        foreach ($response as $x) {
                                if (in_array($x, array('!fatal', '!re', '!trap') ) ) {
                                        if ($x == '!re')
                                                $CURRENT = &$PARSED[];
                                        else
                                                $CURRENT = &$PARSED[$x][];
                                }
                                else
                                if ($x != '!done') {
                                        if (preg_match_all('/[^=]+/i', $x, $MATCHES) )
                                                $CURRENT[$MATCHES[0][0]] = (isset($MATCHES[0][1]) ? $MATCHES[0][1] : '');
                                }
                        }
                        foreach ($PARSED as $key => $value) {
                                $PARSED[$key] = $this->array_change_key_name($value);
                        }
                        return $PARSED;
                }
                else {
                        return array();
                }
        }

       /**
        * @access protected
        * @param type $parse boolean
        * @return type mixed
        */
       function read($parse = true) {

          $RESPONSE = array();

          while (true) {

             // Read the first byte of input which gives us some or all of the length
             // of the remaining reply.
             $BYTE = ord(fread($this->socket, 1) );
             $LENGTH = 0;

             // If the first bit is set then we need to remove the first four bits, shift left 8
             // and then read another byte in.
             // We repeat this for the second and third bits.
             // If the fourth bit is set, we need to remove anything left in the first byte
             // and then read in yet another byte.
             if ($BYTE & 128) {
                if (($BYTE & 192) == 128) {
                   $LENGTH = (($BYTE & 63) << 8 ) + ord(fread($this->socket, 1)) ;
                } else {
                   if (($BYTE & 224) == 192) {
                      $LENGTH = (($BYTE & 31) << 8 ) + ord(fread($this->socket, 1)) ;
                      $LENGTH = ($LENGTH << 8 ) + ord(fread($this->socket, 1)) ;
                   } else {
                      if (($BYTE & 240) == 224) {
                         $LENGTH = (($BYTE & 15) << 8 ) + ord(fread($this->socket, 1)) ;
                         $LENGTH = ($LENGTH << 8 ) + ord(fread($this->socket, 1)) ;
                         $LENGTH = ($LENGTH << 8 ) + ord(fread($this->socket, 1)) ;
                      } else {
                         $LENGTH = ord(fread($this->socket, 1)) ;
                         $LENGTH = ($LENGTH << 8 ) + ord(fread($this->socket, 1)) ;
                         $LENGTH = ($LENGTH << 8 ) + ord(fread($this->socket, 1)) ;
                         $LENGTH = ($LENGTH << 8 ) + ord(fread($this->socket, 1)) ;
                      }
                   }
                }
             } else {
                $LENGTH = $BYTE;
             }

             // If we have got more characters to read, read them in.
             $note = "";
             if ($LENGTH > 0) {

                $retlen=0;
                while ($retlen < $LENGTH) {
                   $toread = $LENGTH - $retlen ;
                   $note .= fread($this->socket, $toread);
                   $retlen = strlen($note);
                }
                $RESPONSE[] = $note ;
                $this->debug('>>> [' . $retlen . '/' . $LENGTH . ' bytes read.');
             }

             // If we get a !done, make a note of it.
             if ($note == "!done")
                $receiveddone=true;

             $STATUS = socket_get_status($this->socket);


             if ($LENGTH > 0)
                $this->debug('>>> [' . $LENGTH . ', ' . $STATUS['unread_bytes'] . '] ' . $note);

             if ( (!$this->connected && !$STATUS['unread_bytes']) ||
                ($this->connected && !$STATUS['unread_bytes'] && isset ($receiveddone)))
                break;

          }

          if ($parse)
             $RESPONSE = $this->parse_response($RESPONSE);

          return $RESPONSE;

       }
	
       /**
        * @access protected
        * @param type $command string
        * @param type $param2 boolean
        * @return type mixed
        */
       function write($command, $param2 = true) {
                if ($command) {
                    $data = explode("\n",$command);
                    foreach ($data as $com) {
                        $com = trim($com);
                        fwrite($this->socket, $this->encode_length(strlen($com) ) . $com);
                        $this->debug('<<< [' . strlen($com) . '] ' . $com);
                    }

                    if (gettype($param2) == 'integer') {
                        fwrite($this->socket, $this->encode_length(strlen('.tag=' . $param2) ) . '.tag=' . $param2 . chr(0) );
                        $this->debug('<<< [' . strlen('.tag=' . $param2) . '] .tag=' . $param2);
                    } else if (gettype($param2) == 'boolean'){
                        fwrite($this->socket, ($param2 ? chr(0) : '') );
                    }

                    return true;
                } else {
                    return false;
                }
        }

}

