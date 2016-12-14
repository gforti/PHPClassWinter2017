<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            /*  This page is considered to be the controller
             * 
             * IT'S VERY IMPORTANT TO KNOW
             * KEEP YOUR CONTROLLER LIGHT, MODELS HEAVY
             * 
             * The controller will get what the view needs so you can
             * display data to the user.
             * 
             * The view is just focused on displaying data(or sending updates to
             * the modal)
             */
        
            require_once './models/dbconnect.php';
            require_once './models/functions.php';
            
            $results = getAllTestData();
        
        ?>
        
        <?php include './views/view-all.html.php'; ?>
        
    </body>
</html>
