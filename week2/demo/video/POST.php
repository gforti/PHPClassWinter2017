<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            //$dataone = $_POST['dataone'];
            $dataone = filter_input(INPUT_POST, 'dataone');
            $datatwo = filter_input(INPUT_POST, 'datatwo');
            $email = filter_input(INPUT_POST, 'email');
            $date = filter_input(INPUT_POST, 'date');
                    
        ?>
        
        <form method="post" action="POST-dbinsert.php">
            
            Data one: <input type="text" name="dataone" value="<?php echo $dataone ?>" />
            <br />
            Data two: <input type="text" name="datatwo" value="<?php echo $datatwo ?>" />
            <br />
            email: <input type="email" name="email" value="<?php echo $email ?>" />
            <br />
            date: <input type="date" name="date" value="<?php echo $date ?>" />
            <br />
            
            <input type="submit" value="Submit" />
            
        </form>
        
    </body>
</html>
