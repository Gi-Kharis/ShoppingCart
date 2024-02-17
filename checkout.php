<?php
session_start();

// Function to display the cart items
function displayCart() {
    echo "<h2>Items Bought</h2>";

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

// Handle form submission for shipping details
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Process the shipping details as needed (save to a database, send an email, etc.)

    // Redirect to a thank you page or any other appropriate page after processing
    header("Location: successful.php");
    exit();
}

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='styles.css'>
    <title>Checkout</title>
</head>
<body>";

// Display cart contents
displayCart();

echo "<div class='shipping-form'>
        <h2>Shipping Details</h2>
        <form action='confirm_order.php' method='post'>
            <label for='name'>Name:</label>
            <input type='text' id='name' name='name' required>

            <label for='address'>Address:</label>
            <textarea id='address' name='address' required></textarea>

            <label for='email'>Email:</label>
            <input type='email' id='email' name='email' required>

            <label for='phone'>Phone:</label>
            <input type='tel' id='phone' name='phone' required>

            <button type='submit'>Place Order</button>
        </form>
    </div>";

echo "</body>
</html>";
?>
