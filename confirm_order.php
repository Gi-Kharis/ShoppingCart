
<?php
session_start();

// Function to display the cart items
function displayCart() {
    echo "<h2>Items Bought</h2>";

    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        echo "<ul>";
        foreach ($_SESSION['cart'] as $item) {
            echo "<li>{$item['product']} - {$item['price']}</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Your cart is empty.</p>";
    }
}

// Handle form submission for shipping details
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if 'cart' session variable is set and is an array
    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        // Process the cart and calculate total
        $total = 0;
        foreach ($_SESSION['cart'] as $item) {
            $total += (float) $item['price'];
        }

        // Generate a random order number (replace with your actual order number generation logic)
        $orderNumber = uniqid('ORDER_');

        // Display order confirmation
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='styles.css'>
            <title>Order Confirmation</title>
        </head>
        <body>";

        // Display cart contents
        displayCart();

        echo "<div class='order-confirmation'>
                <h2>Order Confirmation</h2>
                <p>Your order has been placed successfully!</p>
                <p>Order Number: $orderNumber</p>
                <p>Total Amount: $total</p>
            </div>";

        echo "</body>
        </html>";

        // Clear the cart after processing the order
        unset($_SESSION['cart']);
    } else {
        echo "Cart is empty. Please add items to your cart before placing an order.";
    }
} else {
    // If the form is not submitted, redirect to the checkout page or handle as needed
    header("Location: checkout.php");
    exit();
}
?>
