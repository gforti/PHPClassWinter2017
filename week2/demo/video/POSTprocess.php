<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $dataone = filter_input(INPUT_POST, 'dataone');
            $datatwo = filter_input(INPUT_POST, 'datatwo');
            $email = filter_input(INPUT_POST, 'email');
            $date = filter_input(INPUT_POST, 'date');
        ?>
        
        <h1>Post Process Results</h1>
        <ul>
            <li><?php echo htmlspecialchars($dataone, ENT_QUOTES, 'UTF-8'); ?></li>
            <li><?php echo $datatwo; ?></li>
            <li><?php echo $email; ?></li>
            <li><?php echo $date; ?></li>
        </ul>
        
        <a href="<?php echo filter_input(INPUT_SERVER, 'HTTP_REFERER'); ?>"> Go back </a>
    </body>
</html>
