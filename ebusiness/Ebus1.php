<!DOCTYPE <DOCTYPE.html

<html>

<head>
<title>Select Products</title>

<!--jQuery--->

<script src "https://ajax.googleapis.com/ajax/jquery/3.2.1/jquery.min.js"></script>
    <script type = "£ext/javascript" src = "cost_calc.js"></script>

    
</head>
<body>

<h4> Select a product </h4>

<br/>

    <form method = "POST" action ="Ebus2.php">
<label for "salesforce"> </label>
<input type = "radio" id = "Salesforce" name = "product" onClick = "disabledbtnProceed"
AWS @$300


<br/>
<br/>

<lable for "Subtotal">
Sub Total
<input type = "text" id = "Subtotal" value = "0.00" readonly/>
</label>

<br/>

<lable for "Total">
Sub Total
<input type = "text" id = "Total" value = "0.00" readonly/>
</label>
        
        <br/>
<button type "submit" id = "btnProceed" disable>Add to Shopping Cart </button>
</form>

<br/>

<button onClick="calcSub()"Calculate Cost </button>
<a role = "button" href = "Ebus1.php"> clear Choice </a>

</body>
</html>