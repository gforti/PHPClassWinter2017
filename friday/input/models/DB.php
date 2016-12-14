<?php

/**
 * We create this class with the connection so we can 
 * use it in other classes by extending it into the class.
 *
 * @author GFORTI
 */
class DB {
      
    /**
    * Function to extablish a databse connection
    * 
    * @return PDO Object
    */  
   function getDatabase() {
       $config = array(
           'DB_DNS' => 'mysql:host=localhost;port=3306;dbname=PHPClassWinter2017',
           'DB_USER' => 'root',
           'DB_PASSWORD' => ''
       );

       $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
       $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

       return $db;
   }

    
    
}
