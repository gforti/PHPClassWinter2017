<?php

/**
 * Description of TestDB
 * 
 *We extend the Database class to have access to the functions in the class.
 *
 * @author GFORTI
 */
class TestDB extends DB {

    private $db;

    /*
     * Our constructor will allow us to set the database connection when we
     * create an instance of this class.
     */
    function __construct() {
        $this->db = $this->getDatabase();
    }

    /*
     * it's a good pratice to have a getter function rather than access the variable 
     * directly
     */
    function getDb() {
        return $this->db;
    }

    
    /*
     * basic function to get all items in the database.
     */
    public function getAll() {

        /*
         * Notice here we use $this to get the variable from the class
         */
        $db = $this->getDb();
        
        $stmt = $db->prepare("SELECT * FROM test");
        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return $results;
    }

    
    /*
     * basic function to create(add) a row into the database.
     */
    public function create($dataone, $datatwo) {

          /*
           * Pattern does not change.
         * Notice here we use $this to get the variable from the class
         */
        $db = $this->getDb();

        $stmt = $db->prepare("INSERT INTO test SET dataone = :dataone, datatwo = :datatwo");

        $binds = array(
            ":dataone" => sha1($dataone),
            ":datatwo" => $datatwo
        );

        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }
        return false;
    }

}
