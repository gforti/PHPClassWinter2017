<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $view = filter_input(INPUT_GET, 'view');
        
                
        include './templates/links.html.php';
        
        if ( $view === 'add' ) {
            require_once './functions/dbData.php';
            processAdd();            
            $title = 'Testing';            
            include './templates/add.html.php';
            
        } else if (  $view === 'update' ) {            
            require_once './functions/dbconnect.php';
            require_once './functions/dbData.php';
            $results = getAllTestData();
            include './templates/update.html.php';
            
        } else if (  $view === 'delete' ) {            
            include './templates/delete.html.php';
            
        } else {
            /* Default view */            
            include './templates/default.html.php';
        }
        
        ?>
    </body>
</html>
