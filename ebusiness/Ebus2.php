<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    
    <body>
        
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "Ebus3.php">
               
                <label for="user_name">
                    Name:
                </label>
                 <input type="text" id="user_name" placeholder="Name" required>
                <br>
                <label for="user_email">
                    Email Address:
                </label>
                 <input type="text" id="user_email" placeholder="Email Address" required>
                <br>
                <label for="user_pin">
                     PIN: 
                </label>
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                    <br>
                
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br/>
            
            <button onClick="validateDetails()"> Validate </button>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <?php
        //Set session variables
        $_SESSION["subtotal"] = $_POST["subtotal"];
        $_SESSION["vat"] = $_POST["vat"];
        $_SESSION["total"] = $_POST["total"];
        $_SESSION["discount"] = $_POST["discount"];
        ?>
        
        
    </body>
    
    
    
</html>