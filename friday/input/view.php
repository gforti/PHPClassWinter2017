<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        include './autoload.php';

        /*
         * Create an instance of the class with the new class
         * then call the class functions with ->
         */
        $testdb = new TestDB();
        $results = $testdb->getAll();
        
        /*
         * having template views are better than putting the html on the page.
         */
        include './views/test-data.html.php';
        ?>

        

    </body>
</html>
