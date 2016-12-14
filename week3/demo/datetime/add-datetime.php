<!--

********************************************************

RUN THE SQL FILE BEFORE YOU CONTINUE WITH THIS DEMO

********************************************************

-->


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './dbconnect.php';
        include './functions.php';

        $results = '';

        if (isPostRequest()) {
            $db = getDatabase();

            /*
             * Notice we use the now function from MySql to add the date and time to the date column.  
             * The date column is a varchar but can also be a datetime format
             */
            $stmt = $db->prepare("INSERT INTO test SET dataone = :dataone, datatwo = :datatwo, date = now()");

            $dataone = filter_input(INPUT_POST, 'dataone');
            $datatwo = filter_input(INPUT_POST, 'datatwo');

            $binds = array(
                ":dataone" => $dataone,
                ":datatwo" => $datatwo
            );

            /*
             * empty()
             * isset()
             */

            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $results = 'Data Added';
            }
        }
        ?>


        <h1><?php echo $results; ?></h1>

        <h1>Add datetime with data</h1>
        <form method="post" action="#">            
            Data one <input type="text" value="" name="dataone" />
            <br />
            Data two <input type="text" value="" name="datatwo" />
            <br />
           
            <input type="submit" value="Submit" />
        </form>
        
        <p><a href="view-datetime.php">View Data</a></p>
    </body>
</html>
