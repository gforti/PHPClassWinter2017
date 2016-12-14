<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestDB
 *
 * @author GFORTI
 */
class TestDB extends DB{
    //put your code here
    
    protected $db;
            
    function __construct() {
        
        $dbClass = new DB('mysql:host=localhost;port=3306;dbname=PHPClassWinter2017', 'root', '');
        $this->db = $dbClass->dbconnect();
        
    }
    
    
    function getAllRows() {
        
    }

    
    
}
