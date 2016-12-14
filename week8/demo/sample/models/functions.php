<?php

/* 
 * consider this to be your model.  The modal is where all your bussniess logic should 
 * go.  Create as many functions needed.  
 */

function getAllTestData(){
    $db = dbconnect();
           
    $stmt = $db->prepare("SELECT * FROM test");

     $results = array();
     if ($stmt->execute() && $stmt->rowCount() > 0) {
         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
     }
    return $results;
}


function readTestData($id){
    $db = dbconnect();
           
    $stmt = $db->prepare("SELECT * FROM test where id = :id");
    
    $binds = array(
        ":id" => $id
    );

     $row = array();
     if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
         $row = $stmt->fetch(PDO::FETCH_ASSOC);
     }
    return $row;
}
