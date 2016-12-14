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

                $stmt = $db->prepare("SELECT * FROM states ORDER BY state_name DESC");
                $states = array();
                if ($stmt->execute() && $stmt->rowCount() > 0) {
                    $states = $stmt->fetchAll(PDO::FETCH_ASSOC);
                }
                $state_id = '';
                if ( isPostRequest() ) {
                    
                    
                    $stmt = $db->prepare("SELECT * FROM cities WHERE state_id = :state_id");
                    $state_id = filter_input(INPUT_POST, 'state_id');
                    $binds = array(
                    ":state_id" => $state_id
                    );

                    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    } else {
                        $error = 'No Results found';
                    }
                    
                    
                    
                }
                
        ?>
        
        <?php if( isset($error) ): ?>        
            <h1><?php echo $error;?></h1>
        <?php endif; ?>
            
        <form method="post" action="#">
 
            <select name="state_id">
            <?php foreach ($states as $row): ?>
                <option 
                    value="<?php echo $row['state_id']; ?>"
                    <?php if( intval($state_id) === $row['state_id']) : ?>
                        selected="selected"
                    <?php endif; ?>
                >
                    <?php echo $row['state_name']; ?>
                </option>
            <?php endforeach; ?>
            </select>

            <input type="submit" value="Submit" />
        </form>
        
        
        
        
        <?php if( isset($results) ): ?>
 
            <h2>Results found <?php echo count($results); ?></h2>
            <table border="1">        
                <tbody>
                <?php foreach ($results as $row): ?>
                    <tr>
                        <td><?php echo $row['city']; ?></td> 
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

        <?php endif; ?>
            
            

        
        
        
    </body>
</html>
