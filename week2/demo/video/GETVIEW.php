<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $id = filter_input(INPUT_GET, 'id');
        
        include_once './dbconnect.php';
            
           $db = dbconnect();
           
           $stmt = $db->prepare("SELECT * FROM test where id = :id");
           
           $binds = array(
                ":id" => $id
            );
           
            $result = array();
            if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>
        
        <?php if ( count($result) > 0 ) : ?>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data One</th>
                    <th>Data Two</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $result['id']; ?></td>
                    <td><?php echo $result['dataone']; ?></td>
                    <td><?php echo $result['datatwo']; ?></td>            
                </tr>
            </tbody>
        </table>
        
        <?php else: ?>
        <h1>No Results Found</h1>
       <?php endif; ?>
    </body>
</html>
