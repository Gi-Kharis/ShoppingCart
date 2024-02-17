<?php
session_start();
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='styles.css'>
    <title>Shopping Cart</title>
</head>
<body>
    <div class='product-list'>
        <div class='product'>
                <img src='kettle.jpg' alt='Shiny kettle'>
                <h3>Shiny Kettle</h3>
                <p>GHC 50.00</p>

                
                <form action='cart.php' method='post'>
                <input type='hidden' name='product' value='Shiny Kettle'>
                <input type='hidden' name='price' value='GHC 50.00'>
                <button type='submit'>Add to Cart</button>
                </form>

                
        </div>

        <div class='product'>
            <img src='kettle.jpg' alt='Aladin Kettle'>
            <h3>Aladin Kettle</h3>
            <p>GHC 80.00</p>

            
            <form action='cart.php' method='post'>
            <input type='hidden' name='product' value='Aladin Kettle'>
            <input type='hidden' name='price' value='GHC 80.00'>
            <button type='submit'>Add to Cart</button>
            </form>

           
        </div>

        <div class='product'>
            <img src='kettle.jpg' alt='Tea Special'>
            <h3>Tea Special</h3>
            <p>GHC 100.00</p>
            
          
            <form action='cart.php' method='post'>
            <input type='hidden' name='product' value='Tea Special'>
            <input type='hidden' name='price' value='GHC 100.00'>
            <button type='submit'>Add to Cart</button>
            </form>
            
            
            
        </div>
        
    </div>

    <div>
            <form action='displayItems.php' method='post'>
            <button type='submit'>Check Items Selected</button>
            </form>
        </div>

</body>
</html>";


?> 
