<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $list = array('eggs', 'chicken', 'beef');
        
        $person = array(
            "firstname" => 'Gabriel',
            "lastname" => 'Forti'
        );
        
        /*
        foreach ($person as $key => $value) {
            echo 'key = ' . $key . ' value = ' .$value;
        }
        */
        
            function area ( $width, $height) {
                return $width * $height;
            }
            
            $myarea = area(5,10);
            echo $myarea;
        
        ?>
        
        
        <?php foreach ($person as $key => $value): ?>
            <p>key = <?php echo $key; ?> value = <?php echo $value; ?> <p>        
         <?php endforeach; ?>
                
        <?php foreach ($list as $key => $value): ?>
            <p>key = <?php echo $key; ?> value = <?php echo $value; ?> <p>        
         <?php endforeach; ?>
                
                
                
                
                
                
        
    </body>
</html>
