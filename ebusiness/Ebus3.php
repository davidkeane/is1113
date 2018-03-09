<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Receipt</title>
        <meta charset="UTF-8">
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
        
        <div id="receipt" align="center">
            <br>
            <br>
            <br>
            <h2><u>Receipt</u></h2>
         <b>
            <?php echo "Subtotal: &euro;". $_SESSION["subtotal"]; ?>
            <br/>
            <br/>
           <?php echo "Discount: &euro;". $_SESSION["discount"]; ?>
            <br/>
            <br/>
           <?php echo "VAT: &euro;". $_SESSION["vat"]; ?>
            <br/>
            <br/>
            <?php echo "Total: &euro;". $_SESSION["total"] . "."; ?>
          </b>  
         
         </div>   
         
    </body>
    
      <footer>
        <a href="https://ucc.ie">
            <img position ="static" src="https://www.cubsucc.com/images/layout/uccLogo.png"/>
        </a>
        <a id="cubs" href="https://www.cubsucc.com/">
            <img position = "absolute" src="https://www.cubsucc.com/images/layout/logo.png"/>
        </a>
    </footer>
    
</html>



  