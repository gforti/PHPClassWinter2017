<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            require_once './models/dbconnect.php';
            require_once './models/functions.php';
            
            $id = filter_input(INPUT_GET, 'id');
        
            $row = readTestData($id);
            
        
        ?>
        
        <?php include './views/read.html.php'; ?>
        
       
    </body>
</html>
