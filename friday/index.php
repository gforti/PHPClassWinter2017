<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        include_once './autoload.php';
      
        
        
        $config = array(
            'DB_DNS' => 'mysql:host=localhost;port=3306;dbname=PHPClassWinter2017',
            'DB_USER' => 'root',
            'DB_PASSWORD' => ''
        );
        
        $dbClass = new DB('mysql:host=localhost;port=3306;dbname=PHPClassWinter2017', 'root', '');
        $dbc = $dbClass->dbconnect();
        
        
        $errors = [];
        try {
           $db->setPassword(true);
        } catch (Exception $ex) {
             $errors[] = $ex->getMessage();
        }
     
        
        
        $validator = new Validator();
        
        if ( count($_POST) > 0 ) {
            
            $email = filter_input(INPUT_POST, 'email');
                   
            
            if ( $validator->emailIsValid($email) ) {
                echo 'email is valid';
            } else {
                echo 'email is not valid';
            }
            
        }
        
        ?>
        
        
        <?php include './views/error-messages.html.php'; ?>
        <?php include './views/email-form.html.php'; ?>
        
        
    </body>
</html>
