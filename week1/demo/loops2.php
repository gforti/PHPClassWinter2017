<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <table border="1">
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
            </tr>            
        </table>
        <hr />
        <?php        
            /*
             * Table generator
             * 
             * The idea is we have a table that will generate table rows.
             * Inside if the rows we have another loop that will create the
             * table data.  Make sure all for loops have different variable
             * names (below $tr and $ td).
             * 
             * A more dynamic way would be to have a variable for $maxRows
             * and $maxData instead of the number 3 in the for condition
             * 
             *  $tr <= 3 should be 
             *  $maxRows = 3;
             *  $tr <= $maxRows
             *
             */        
        ?>
        
       <table border="1">
        <?php for($tr = 1; $tr <= 3; $tr++):?>
            <tr> 
            <?php for($td = 1; $td <= 3; $td++):?>
                <td> <?php echo $td; ?> </td>
            <?php endfor; ?>                
            </tr>
        <?php endfor; ?>
        </table>
    </body>
</html>
