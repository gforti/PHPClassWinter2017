<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            require './functions/dbconnect.php';
            require './functions/until.php';
            $db = dbconnect();

            $stmt = $db->prepare("SELECT * FROM cities JOIN states ON states.state_id = cities.state_id");
            $results = array();
            if ($stmt->execute() && $stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            
            //print_r($results);
        ?>
        
        
       
 
            <h2>Results found <?php echo count($results); ?></h2>
            <table border="1">        
                <tbody>
                <?php foreach ($results as $index => $row): ?>
                    <tr>
                        <td><?php echo ($index+1); ?></td> 
                        <td><?php echo $row['state_name']; ?></td> 
                        <td><?php echo $row['city']; ?></td> 
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        
            <p><a href="lastinsertID.php">Add States</a></p>
        
    </body>
</html>
