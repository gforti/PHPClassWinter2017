<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        
            require './functions/dbconnect.php';
            require './functions/until.php';

            $state_name = filter_input(INPUT_POST, 'stateName');
            $state_abbr = filter_input(INPUT_POST, 'stateAbbr');            
            $cities = filter_input_array(INPUT_POST)['cities'];
            
            
            if ( isPostRequest() ) {
                
                $db = dbconnect();
                $stmt = $db->prepare("INSERT INTO states SET state_name = :state_name, state_abbr = :state_abbr");

                $binds = array(
                    ":state_name" => $state_name,
                    ":state_abbr" => $state_abbr,

                );

                if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                    /* get the last insert ID to use as the relational id */
                    $state_id = $db->lastInsertId();
                    var_dump($state_id);
                        
                    /* prepare the next table to insert the values with the join ID */
                    $stmt = $db->prepare("INSERT INTO cities SET city = :city, state_id = :state_id");
 
                    /* as we loop through the cities we can insert each 
                     * city with a reference to the relational ID one at a time
                     */
                    foreach ($cities as $city) {
                        $binds = array( ":city" => $city, ":state_id" => $state_id); 
                        $stmt->execute($binds);
                    } 


                }
            }
        
        ?>
        
        
        <form method="post" action="#">            
             State Name <input type="text" name="stateName" value="<?php echo $state_name; ?>" />
             <br />
             State Abbr <input type="text" name="stateAbbr" value="<?php echo $state_abbr; ?>" />
             <br />
             
             Random Cities Values <br /> 
             
             <?php  
                $index = mt_rand(3, 8);
                while ($index--): ?>
                    <input type="text" name="cities[]" value="<?php echo substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 10)), 0, 10); ?>" /> <br />                   
            <?php endwhile; ?>
             
          

             
            <input type="submit" value="Submit" />
        </form>
        
        
        <p><a href="join.php">View States</a></p>
        
    </body>
</html>
