<?php

/**
 * Description of Validator
 *
 * @author GFORTI
 */
class Validator {
    //put your code here
    
    
    /**
     * A method to check if an email is valid.
     *
     * @param {String} [$email] - must be a valid email
     *
     * @return boolean
     */
    public function emailIsValid($email) {
       return ( filter_var($email, FILTER_VALIDATE_EMAIL) !== false );
    }          
    
    
}
