<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*  one way encryption is good to store passwords 
         *  into the database without saving the password
         *  in a format that will allow a hacker to de-encrypt
         *  the password.  This is known as a hash.  We will
         *  use the sha1 function to hash the password before
         *  saving it into the database.
         * 
         */
        
            $password = 'test';
            $hashed_password = sha1($password);            
            echo $password . '<br />' . $hashed_password;
        ?>
    </body>
</html>
