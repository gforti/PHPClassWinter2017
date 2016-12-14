<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if (!isset($_COOKIE['visits']))
            {
              $_COOKIE['visits'] = 0;
            }
            $visits = $_COOKIE['visits'] + 1;
            setcookie('visits', $visits, time() + 3600 * 24 * 365);
        ?>
        
        <p>
        <?php if ($visits > 1): ?>
            This is visit number <?php echo $visits; ?>.
        <?php else: ?>       
            <!-- // First visit -->
            Welcome to my website! Click here for a tour!
        <?php endif; ?>
      </p>
    </body>
</html>
