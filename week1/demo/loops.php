<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
         * separation of concerns (SoC) 
         * 
         * It is recommend that you keep your HTML
         * and PHP code separated.  See the code below.
         * 
         * The second way is recommened but both are valid.
         * 
         * Look for code patterns. The for loop is ended by
         * a endfor;  
         */
        ?>
        <ul>   
        <?php for ($index = 1; $index < 10; $index++) { ?>
            <li><?php echo $index ?> </li>    
        <?php } ?>
        </ul> 
        
        <ul>
        <?php for($index = 1; $index <= 10; $index++):?>
            <li> <?php echo $index;?> </li>
        <?php endfor; ?>
        </ul>
        
        
        
    </body>
</html>
