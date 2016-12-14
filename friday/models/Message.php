<?php

/**
 * Description of Message
 *
 * @author GFORTI
 */
class Message {
    
    private $messages = array();
    
    
    function getMessages() {
        return $this->messages;
    }

    function setMessages($message) {
        $this->messages[] = $message;
    }
    
    function resetMessages() {
        $this->messages = array();
    }


}
