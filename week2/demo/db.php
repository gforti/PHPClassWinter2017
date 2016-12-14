<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $config = array(
            'DB_DNS' => 'mysql:host=localhost;port=3306;dbname=PHPClassWinter2017', 
            'DB_USER' => 'root', 
            'DB_PASSWORD' => ''
            );
        
         
            try {
                
                $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
                $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
            } catch (Exception $e) {
                echo $e->getMessage();
                exit();
            }

        
        $stmt = $db->prepare("SELECT * FROM test");
        
        //$phoneID = filter_input(INPUT_POST, 'phoneid');
        
        //$binds = array( ":phonetypeid" => $phoneID );
        
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
             //var_dump($results);            
             print_r($results);            
         }
        
        ?>
    </body>
</html>
