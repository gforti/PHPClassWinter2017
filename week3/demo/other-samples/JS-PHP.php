<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <style type="text/css">
            
            .hide {
                display : none;
            }
            /* reference used : http://bavotasan.com/2011/a-simple-fade-with-css3/ */
            .fade {
                opacity: 0;
                transition: opacity 2s ease-in-out;
                -moz-transition: opacity 2s ease-in-out;
                -webkit-transition: opacity 2s ease-in-out;
            }
            
            
            </style>
        
    </head>
    <body>
        <?php
        // put your code here
        $message = 'post added';
        ?>
        
        <div class="box--add-message"><?php echo $message; ?></div>
        
        <script type="text/javascript">
            
            /* use this selector to grab html items by CSS selectors */
            var message = document.querySelector('.box--add-message');
            
            /* JavaScript function that will run a function after waiting */
            setTimeout(fadeAddMessage, 1000);
            setTimeout(hideAddMessage, 4000);
            
            /* custom JavaScript functions that will add a class to the selected HTML div */
            function hideAddMessage() {
                message.classList.add('hide');
            }
            
            function fadeAddMessage() {
                 message.classList.add('fade');
            }
            
        </script>
        
    </body>
</html>
