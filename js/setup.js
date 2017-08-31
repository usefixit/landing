/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
      
    $( "#contactForm" ).validate({
     rules: {
       email: {
         required: true,
         email: true
       }
     }
   });
    
    $('#contactForm').on("submit",function(e){
           e.preventDefault();
           
        if($("#contactForm").valid()){
        
            var postDataToExcel = new Object();
            
            $('#loader').show();
            $('.pushed').attr("disabled",'disabled');
            postDataToExcel.email = $('#email').val();
            postDataToExcel.type = $('input[name="type[]"]:checked').val();
       
        $.post( "http://usefixit.azurewebsites.net/storeEmail.php" , JSON.stringify(postDataToExcel), function (data) {
            $('.alert-success').show();
            $('#contactForm').hide();
            $('#loader').hide();
            
            
                } ,'json' );
            }else{
                $('.error').css('color','red')
            }
     });
    
});