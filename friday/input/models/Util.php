<?php

/**
 * Description of Util
 *
 * @author GFORTI
 */
class Util {
       
    /**
    * A method to check if a Post request has been made.
    *    
    * @return boolean
    */
    function isPostRequest() {
        return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
    }

}
