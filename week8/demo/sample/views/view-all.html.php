
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Data One</th>
            <th>Data Two</th>
            <th></th> 
        </tr>
    </thead>
    <tbody>
    <?php foreach ($results as $row): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['dataone']; ?></td>
            <td><?php echo $row['datatwo']; ?></td> 
            <td><a href="./read.php?id=<?php echo $row['id']; ?>">Read</a></td> 
             </tr>
    <?php endforeach; ?>
    </tbody>
</table>
