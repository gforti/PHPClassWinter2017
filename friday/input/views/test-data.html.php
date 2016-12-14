
<p>Results Found: <?php echo count($results); ?></p>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data One</th>
                    <th>Data Two</th>
                </tr>
            </thead>
            <tbody>
            <?php
            /*
             * Use a for each loop to go through the
             * associative array. $results is a multi 
             * dimensional array. Arrays with arrays.
             * 
             * So we loop through each result to get back
             * an array with values
             * 
             * feel free to 
             * <?php echo print_r($results); ?>
             * to see how the array is structured
             */            
            ?>
            
            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['dataone']; ?></td>
                    <td><?php echo $row['datatwo']; ?></td>            
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>