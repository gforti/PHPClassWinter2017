<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php  
        
            /*
             * Just like the Post we can get data from the URL
             * 
             * if we pass page.php?id=hello
             * 
             * we can get id=hello in PHP with the following code
             * 
             * $id = filter_input(INPUT_GET, 'id'); 
             * 
             * when we echo $id it will output hello
             * 
             * you can change the value to be anything
             * 
             * page.php?id=world
             * 
             */
        
            $key = 'test';
            //echo sha1($key);
            //?id=a94a8fe5ccb19ba61c4c0873d391e987982fbbd3
            $id = filter_input(INPUT_GET, 'id');            
            //echo $id;  
            
            if ( $id === sha1($key) ) {
                echo 'Key entered';
            }
            
            
        ?>
        <h1>Your ID is <em><?php echo $id; ?></em></h1>
    </body>
</html>
