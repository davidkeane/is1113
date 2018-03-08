/* global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById('salesforce').checked){
      argSubTotal = 100;
    }
    
    else if(document.getElementById('gmail').checked){
        argSubTotal = 400;
    }
    
    else if(document.getElementById('cloud9').checked){
        argSubTotal = 200;
    }
    
    else{
        argSubTotal = 300;
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
       
       discountAmt = SubTotal * 0.05;
       
       vatAmt = (SubTotal - discountAmt) * 0.1;
       
       totalAmt = (SubTotal - discountAmt) + vatAmt ;
       
       display(SubTotal, discountAmt, vatAmt, totalAmt);
   }
   
   
  
    function display(parm1, parm2, parm3, parm4, parm5){
        
        document.getElementById("subtotal").value =  parm1;
        document.getElementById("discount").value = parm2;
        document.getElementById("vat").value =  parm3;
        document.getElementById("total").value = parm4;
        
        
        enablebtnProceed();
    }
    
    
    function enablebtnProceed(){
        $('#btnProceed').prop('disabled', false);
    }
    
    function disablebtnProceed(){
        $('#btnProceed').prop('disabled', true);
    }