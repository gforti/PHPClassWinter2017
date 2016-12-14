<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        include_once './dbconnect.php';
        include_once './functions.php';
        
        $db = dbconnect();
        
        $dataone = '';
        $datatwo = '';
        
        if ( isPostRequest() ) {
            
            $id = filter_input(INPUT_POST, 'i-d');
            $dataone = filter_input(INPUT_POST, 'data-one');
            $datatwo = filter_input(INPUT_POST, 'data-two');
                                   
            $stmt = $db->prepare("UPDATE test SET dataone = :dataone, datatwo = :datatwo WHERE id = :id");
            
            $binds = array(
                ":id" => $id,
                ":dataone" => $dataone,
                ":datatwo" => $datatwo
            );
            
            $message = 'Update failed';
            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
               $message = 'Update Complete';
            }
            
            
        } else {
            $id = filter_input(INPUT_GET, 'id');
        }
        
        $stmt = $db->prepare("SELECT * FROM test where id = :id");

        $binds = array(
             ":id" => $id
         );

         $result = array();
         if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $dataone =  $result['dataone'];
            $datatwo =  $result['datatwo'];
         } else {
             header('Location: view.php');
             die('ID not found');
             
         }
        
        
        ?>
        
        <p>
            <?php if ( isset($message) ) { echo $message; } ?>
        </p>
        
        <form method="post" action="#">            
            Data one: <input type="text" name="data-one" value="<?php echo $dataone ?>" />
            <br />
            Data two: <input type="text" name="data-two" value="<?php echo $datatwo ?>" />
            <br />
            <input type="hidden" name="i-d" value="<?php echo $id ?>" />
            <input type="submit" value="Submit" />
        </form>
        
        <a href="view.php"> Go back </a>
        
    </body>
</html>
