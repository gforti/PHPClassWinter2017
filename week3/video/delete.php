<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
        include_once './dbconnect.php';
        
        $id = filter_input(INPUT_GET, 'id');
        
        $db = dbconnect();
           
        $stmt = $db->prepare("DELETE FROM test where id = :id");
           
        $binds = array(
             ":id" => $id
        );
           
        $isDeleted = false;
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $isDeleted = true;
        }         
        
        ?>
        
        <h1> Record <?php echo $id; ?>  
            <?php if ( !$isDeleted ): ?>Not<?php endif; ?> 
            Deleted
        </h1>
        
        <a href="<?php echo filter_input(INPUT_SERVER, 'HTTP_REFERER'); ?>"> Go back </a>
         
    </body>
</html>
