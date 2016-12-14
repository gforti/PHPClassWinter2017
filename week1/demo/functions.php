<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            /*
             * Some functions to learn.  Learn more about them on PHP.net
             * 
             * strtoupper
             * var_dump
             * isset
             */
            $str = 'hello';            
            echo strtoupper($str);
            
                    
            $randColor = '#'.strtoupper(dechex(rand(0x000000, 0xFFFFFF)));

            echo $randColor;    
            
            var_dump($randColor);
            /* replace this code to echo out the randColor in place of [color]
             * using SoC             
             
            if ( isset($randColor) ) {
              <span style="background-color:">[color]</span>  
            }
             
             */
            
        ?>
    </body>
</html>
