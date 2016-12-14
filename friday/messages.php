<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './autoload.php';
        
        $messages = new Message();
        $errorMessages = new ErrorMessages();
        
        $messages->setMessages('Today is Friday');
        $errorMessages->setMessages('Today is Saturday');
        
        print_r($messages->getMessages());
        print_r($errorMessages->getMessages());
        
        $messages->resetMessages();
        $errorMessages->resetMessages();
        
        print_r($messages->getMessages());
        print_r($errorMessages->getMessages());
        ?>
    </body>
</html>
