<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
         * http://php.net/manual/en/function.preg-match-all.php
         * http://php.net/manual/en/function.array-unique.php
         * 
         */
               
            $emailOnlyRegex = '/^[a-zA-Z0-9$]+[@]{1}[a-zA-Z]+[\.]{1}[a-zA-Z]{2,3}$/';
            $emailRegex = '/[a-zA-Z0-9$]+[@]{1}[a-zA-Z]+[\.]{1}[a-zA-Z]{2,3}/';
            
            $text = 'Hello <strong>My</strong> email is <a href="mailto:test@test.com">test@test.com</a>, <em>please contact me</em>.';
        
            preg_match_all($emailRegex, $text, $emailMatches);
            
            print_r($emailMatches[0]);
            echo '<hr />';
            $removeDuplicates = array_unique($emailMatches[0]);
            print_r($removeDuplicates);
        
        ?>
    </body>
</html>
