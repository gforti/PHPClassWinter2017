<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           
        /*
         * The idea here is when the user submits the form
         * we can collect the post data from the built in PHP
         * function filter_input.  The first param takes the 
         * type, the second is the attribute name from the input
         * field.
         * 
         * so <input name="dob" />
         * 
         * we get the value in PHP
         * $dob = filter_input(INPUT_POST, 'dob');
         * 
         */
        $dataoneVal = filter_input(INPUT_POST, 'dataone');
        $datatwoVal = filter_input(INPUT_POST, 'datatwo');
        echo $dataoneVal;
        echo $datatwoVal;
        
        ?>
        <form method="post" action="#">
            
            Data one <input type="text" value="" name="dataone" />
            <br />
            Data two <input type="text" value="" name="datatwo" />
            <br />
            
            <input type="submit" value="Submit" />
            
        </form>
        
        
        
    </body>
</html>
