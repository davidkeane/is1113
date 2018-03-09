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
     <style>
     ul{
         list-style-type:none;
         overflow:hidden;
         margin:0;
         padding:0;
         background-color: #333;
     }
 li{
  
   float: left;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
#navigation{
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
    Position:absolute;top:0%;left:0%;right:0%;
}
img{
    height:60px;
    width:auto;
}
#radiobuttons{
    margin-left:37%;
    font-size:30px;
    font-family:helvetica;
}
#select{
    padding-top:40px;
    font-family:helvetica;
    font-size:30px;
    font-weight:bold;
    text-align:center;
    text-decoration:underline;
}
button{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
input{
    font-family:helvetica;
    font-size:30px;
    font-weight:bold;
}
#txtbox{
    font-size:30px;
    font-family:helvetica;
    font-weight:bold;
    
}

    </style>
    </head>
    
    <body>
        
        <div id="navigation">
        <ul>
        <li><a href="../homepage.html">Home</a></li>
        <li><a href="../c.v./cv_homepage.html">Curriculum Vitae</a></li>
        <li><a href="../Interests/interests.html">Interests</a></li>
        <li><a href="../Interests/sports.html">Sport</a></li>
        <li><a href="../Interests/travel.html">Travel</a></li>
        <li><a class="active" href="Ebus1.php">Ebusiness</a></li>
        </ul>
    </div>
        <div  align="center">
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "Ebus3.php">
               
                <label for="user_name">
                    Name:
                </label>
                 <input type="text" id="user_name" placeholder="Name" required>
                <br>
                <br>
                <label for="user_email">
                    Email Address:
                </label>
                 <input type="text" id="user_email" placeholder="Email Address" required>
                <br>
                <br>
                <label for="user_pin">
                     PIN: 
                </label>
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                    <br>
                    <br>
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
            </form>
            
            <br/>
            
            <button onClick="validateDetails()"> Validate </button>
        </div>
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