<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            include_once './dbconnect.php';
        
            $dataone = filter_input(INPUT_POST, 'dataone');
            $datatwo = filter_input(INPUT_POST, 'datatwo');
        
            $db = dbconnect();
           
            $stmt = $db->prepare("INSERT INTO test SET dataone = :dataone, datatwo = :datatwo");

            $binds = array(
                 ":dataone" => $dataone,
                 ":datatwo" => $datatwo
             );

            $result = 'Data was not added';
            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                 $result = 'Data was added';
            }
        
        ?>
        
        <h1>
        <?php if ( !empty($result) ) {
            echo $result;
        } ?>
        </h1>
        
        <a href="<?php echo filter_input(INPUT_SERVER, 'HTTP_REFERER'); ?>"> Go back </a>
                
        
    </body>
</html>
