/* global $ */

function validateDetails(){
    
    var pin;
    var email;
    var name;
    
    name = document.getElementById("user_name").value;
    email = document.getElementById("user_email").value;
    pin = document.getElementById("user_pin").value;
    
    if (pin==""||email==""||name==""){
        alert("Please enter your Details");
        }
    else if (String(pin).length<4){
        alert("Please make sure your details are correct");
        }
    else{
        enablebtnPurchase();
        }
}

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}
