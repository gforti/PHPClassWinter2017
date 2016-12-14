<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       include './autoload.php';

        $testdb = new TestDB();
        $util = new Util();
        $Msg = '';

        if ( $util->isPostRequest() ) {
           
            $dataone = filter_input(INPUT_POST, 'dataone');
            $datatwo = filter_input(INPUT_POST, 'datatwo');
            
            if ( $testdb->create($dataone, $datatwo) ) {
                $Msg = 'Data Added';
            }
            
        }
        
        $results = $testdb->getAll();
        ?>
        <h1><?php echo $Msg; ?></h1>

        <?php include './views/test-form.html.php'; ?>
        <?php include './views/test-data.html.php'; ?>
    </body>
</html>
