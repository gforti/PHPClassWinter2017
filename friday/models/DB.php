<?php

/**
 * Description of DB
 *
 * @author GFORTI
 */
class DB {
    
    private $dns = '';
    private $username = '';
    private $password = '';
    
    
    function __construct($dns, $username, $password) {
        $this->setDns($dns);
        $this->setUsername($username);
        $this->setPassword($password);        
    }

    
    function getDns() {
        return $this->dns;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function setDns($dns) {
        $this->dns = $dns;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        if ( is_string($password) && strlen($password) > 0 ){
            $this->password = $password;
        } else {
            throw new Exception('password is not a string value');
        }
    }

    
    
    /**
 * Function to extablish a databse connection
 * 
 * @return PDO Object
 */  
function dbconnect() {
      
    /* Create a Database connection and 
     * save it into the variable */
    $db = new PDO($this->getDns(), $this->getUsername(), $this->getPassword());
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   
    return $db;
}


    
}
