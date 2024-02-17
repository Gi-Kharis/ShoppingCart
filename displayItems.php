<?php
session_start();

// Function to display the cart items
function displayCart() {
    echo "<h2>Shopping Cart</h2>";

    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        echo "<ul>";
        foreach ($_SESSION['cart'] as $item) {
            echo "<li>{$item['product']} - {$item['price']}</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Your cart is empty.</p>";
    }
}

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='styles.css'>
    <title>Shopping Cart</title>
</head>
<body>";

// Display cart contents
displayCart();

echo "<a href='checkout.php'><button>Proceed to Checkout</button></a>";

echo "</body>
</html>";
?>
