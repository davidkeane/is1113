<!DOCTYPE html>
<html>

<head>
<title>Select Products</title>

<!--jQuery--->

    <script src "https://ajax.googleapis.com/ajax/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="cost_calc.js"></script>

    
</head>
<body>

<h4> Select a product </h4>

<br/>

    <form method = "POST" action ="Ebus2.php">
<label for "aws"> 
<input type="radio" id="aws" name="product" onClick="disabledbtnProceed()"/>
AWS @$300
</label>

<br/>
<br/>

<label for "salesforce"> 
<input type = "radio" id = "salesforce" name = "product" onClick = "disabledbtnProceed()"/>
Salesforce @$100
</label>

<br/>
<br/>

<label for "Subtotal">
Sub Total
<input type = "text" id = "Subtotal" value = "0.00" readonly/>
</label>

<br/>
<br/>

<label for "Total">
Total
<input type = "text" id = "Total" value = "0.00" readonly/>
</label>
        
        <br/>
        <br/>
        
<button type "submit" id = "btnProceed" disabled>Add to Shopping Cart </button>
</form>

<br/>

<button onClick="calcSub()">Calculate Cost </button>
<a role = "button" href = "Ebus1.php"> Clear Choice </a>

</body>
</html>