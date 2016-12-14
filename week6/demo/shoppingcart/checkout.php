<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Shopping Cart Checkout</title>
    </head>
    <body>
        <?php
            include './functions/cart.php';
            session_start();
            
            /* php processing variables */
            $action = filter_input(INPUT_POST, 'action');                      
            
            if ( $action === 'Empty cart' ) {
                emptyCart();
            }
            
            /* View variables */
            startCart();
            $cart = getCart();
            $total = getCartTotal();
                                    
            include './templates/cart-items.html.php';
            include './templates/clear-cart.html.php';
        ?>
        
        <p><a href="index.php">Continue Shopping</a></p>
    </body>
</html>
