<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
            
        $fullname = filter_input(INPUT_POST, 'fullname');
        $dob = filter_input(INPUT_POST, 'dob');
        
        $errors = array();
        
        if ( empty($fullname) ) {
            $errors[] = 'Fullname is not valid';
        }
        
        if ( empty($dob) ) {
            $errors[] = 'Date of birth is not valid';
        }
        
        if ( count($errors) === 0) {
            //save data
        }
        
        
        ?>
       
        <?php include './templates/error-messages.php'; ?>
        
        <form method="post" action="#">
            
            name : <input type="text" name="fullname" value="<?php echo $fullname; ?>" />
            <br />
            DOB : <input type="date" name="dob" value="<?php echo $dob; ?>" />
            <br />
            
            <input type="submit" value="submit" />
        </form>
        
    </body>
</html>
