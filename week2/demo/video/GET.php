<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
            //$id = $_GET['id'];
            $id = filter_input(INPUT_GET, 'id');
            $id2 = filter_input(INPUT_GET, 'id2');
            $anything = filter_input(INPUT_GET, 'anything');
            $doesnotexist = filter_input(INPUT_GET, 'fsdkvjdfsvd');
            echo $id;
            echo $id2;
            echo $anything;
            
            
            if ( !isset($doesnotexist) ) {
               echo 'sorry variable $anything does not exist';  
            } 
        
        ?>
    </body>
</html>
