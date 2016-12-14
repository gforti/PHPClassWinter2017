<?php


/**
 * A method to log system errors made in the application.
 * 
 * For more information visit: http://php.net/manual/en/function.error-log.php
 *    
 * @return boolean
 */
function logError($message) {
    if (is_string($message) && strlen($message)) {
        $refID = uniqid();
        $directory = '.'.DIRECTORY_SEPARATOR.'logs'.DIRECTORY_SEPARATOR;
        $file = 'errors.log';
        $dataLog = '[' . $refID . ']    [error] [' . date("m-d-Y g:ia") . ']    ' . $message . PHP_EOL;                                
        
        if (!is_dir($directory)) {
            mkdir($directory);
        }
    
        if (error_log($dataLog, 3, $directory.$file)) {
            return true;
        }
    }
    return false;
}


function exception_error_handler($severity, $message, $file, $line) {
    if (!(error_reporting() & $severity)) {
        // This error code is not included in error_reporting
        return;
    }
    throw new ErrorException($message, 0, $severity, $file, $line);
}
set_error_handler("exception_error_handler");












