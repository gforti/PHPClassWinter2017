<?php


function getItems() {
    return array(
        array(  'id' => '1',
                'category' => '1',
                'desc' => 'Dictionary',
                'price' => 24.95
            ),
        array(  'id' => '2',
                'category' => '2',        
                'desc' => 'parachute',
                'price' => 1000
            ),
        array(  'id' => '3',
                'category' => '3', 
                'desc' => 'Songs of the Goldfish (2CD set)',
                'price' => 19.99
            ),
        array(  'id' => '4',
                'category' => '1', 
                'desc' => 'JavaScript',
                'price' => 39.95
            ),
        array(  'id' => '5',
                'category' => '2', 
                'desc' => 'BaseBall',
                'price' => 9.95
            )
    );
}

function getCategories() {
    return array(
        array(  'id' => '1',
                'category' => 'books'
            ),
        array(  'id' => '2',
                'category' => 'Sports'
            ),
        array(  'id' => '3',
                'category' => 'music'
            )
    );
}

function getItemsByCategory($id) {
    $items = getItems();
    $cart = [];
    foreach ($items as $product) {
      if ( $product['category'] == $id ) {
        $cart[] = $product;        
      }
    }    
    return $cart;
}

function emptyCart() {
    unset($_SESSION['cart']);
}

function startCart() {
    if ( !isset($_SESSION['cart']) ) {
      $_SESSION['cart'] = array();
    }
}

function getCart() {    
    return $_SESSION['cart']; 
}

function cartCount() {
    return count(getCart());
}

function addToCart($id) {
    $items = getItems();

    foreach ($items as $product) {
      if ( $product['id'] == $id ) {
        $_SESSION['cart'][] = $product;
        break;
      }
    }    
      
}

function getCartTotal(){
    $items = getCart();
    $total = 0;
    foreach ($items as $product) {      
        $total += $product['price'];
    }   
    return $total;
}
