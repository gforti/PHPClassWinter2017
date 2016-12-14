<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            /* http://php.net/manual/en/function.preg-replace.php */
        
        
            $string = 'April 15, 2003';
            $pattern = '/(\w+) (\d+), (\d+)/i';
            $replacement = '${1}1,$3';
            echo preg_replace($pattern, $replacement, $string);
        ?>
        
        <hr />
        <?php
            $phoneRegex = '/^\(?([2-9]{1}[0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/';
            $phone = '4015559999';
            $newPhone = preg_replace( $phoneRegex, '($1) $2-$3' , $phone);
            echo $newPhone;
            
            ?>
            
    </body>
</html>
