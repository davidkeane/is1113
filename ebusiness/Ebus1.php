<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Select Products</title>
<meta charset="UTF-8">
<!--jQuery--->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="cost_calc.js"></script>
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
    
 <div id="select">
    <h4> Select a product </h4>
     </div>   
<div id="radiobuttons">
    <form method ="POST" action ="Ebus2.php">
   
<label for "aws"> 
<input type="radio" id="aws" name="product" checked onClick="disabledbtnProceed()"/>
<b>AWS @  $300</b> <img src="../images/AWS.png">
</label>

<br/>
<br/>

<label for "salesforce"> 
<input type = "radio" id = "salesforce" name = "product" onClick = "disabledbtnProceed()"/>
<b>SalesForce @ $100</b><img src="../images/salesforce.png">
</label>

<br/>
<br/>

<label for "cloud9"> 
<input type = "radio" id = "cloud9" name = "product" onClick = "disabledbtnProceed()"/>
<b>Cloud 9 @ $200</b><img src="../images/cloud9.png">
</label>

<br/>
<br/>

<label for "gmail"> 
<input type = "radio" id = "gmail" name = "product" onClick = "disabledbtnProceed()"/>
<b>Gmail @ $400</b><img src="../images/gmail.jpg">
</label>

</div>
<br/>
<br/>



<div id="txtbox" align="center">
<label for="subtotal">
Sub Total:
<input type = "text" id = "subtotal" name="subtotal" value = "0.00" readonly/>
</label>

<br/>
<br/>

<label for="discount">
Discount:
<input type = "text" id = "discount" name = "discount" value = "0.00" readonly/>
</label>

<br/>
<br/>

<label for="vat">
VAT:
<input type = "text" id = "vat" name = "vat" value = "0.00" readonly/>
</label>

<br/>
<br/>

<label for="total">
Total:
<input type = "text" id = "total" name="total" value = "0.00" readonly/>
</label>
    <br>
    <br>
</div>
        <div align="center">
<button type "submit" id = "btnProceed" disabled>Add to Shopping Cart</button>
</form>

<br/>
<br/>

<button onClick="calcSub()">Calculate Cost</button>
        
        <br/>
        <br/>
<a role = "button" href = "Ebus1.php"> Clear Choice </a>

</body>

</div>

<footer>
        <a href="https://ucc.ie">
            <img position ="static" src="https://www.cubsucc.com/images/layout/uccLogo.png"/>
        </a>
        <a id="cubs" href="https://www.cubsucc.com/">
            <img position = "absolute" src="https://www.cubsucc.com/images/layout/logo.png"/>
        </a>
    </footer>
    
</html>