<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get product details from the form
    $product = $_POST['product'];
    $price = $_POST['price'];

    // Initialize the cart if not already set
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Add the product to the cart
    $item = array('product' => $product, 'price' => $price);
    $_SESSION['cart'][] = $item;

    // Redirect back to the index page or any other appropriate page
    header("Location: index.php");
    exit();
} else {
    // If the form is not submitted, redirect to the index page or handle as needed
    header("Location: index.php");
    exit();
}
?>
