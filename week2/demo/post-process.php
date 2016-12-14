<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            /*
             * on post2.php we can pass data from one page to 
             * another.  We have to submit the form and make 
             * sure the action leads to this page.
             */
        $dataoneVal = filter_input(INPUT_POST, 'dataone');
        $datatwoVal = filter_input(INPUT_POST, 'datatwo');
        echo $dataoneVal;
        echo $datatwoVal;
        
        ?>
    </body>
</html>
