/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked){
    argSubTotal = 100;
}
else if(document.getElementById('aws').checked){
    argSubTotal = 300;
}

else if(document.getElementById('cloud9').checked){
    argSubTotal = 200;
}

else if(document.getElementById('gmail').checked){
    argSubTotal = 400;
}

display(argSubTotal);
calcDisVatTotal(argSubTotal);
}

function calcDisVatTotal(parmSubTotal){
    
    var SubTotal;
    var discountAmt;
    var vatAmt;
    var totalAmt;
    
    SubTotal = parmSubTotal;
    
    vatAmt = (SubTotal - discountAmt) * 0.1;
    
    totalAmt = (SubTotal - discountAmt) + vatAmt;
    
    display(SubTotal, discountAmt, vatAmt, totalAmt);
    
}

function display(parm1, parm2, parm3, parm4){
    
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value = parm3;
    document.getElementById("total").value = parm4;
    
    
    enablebtnProceed();
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disabledbtnProceed() {
    $('#btnProceed').prop('disabled', true);
}