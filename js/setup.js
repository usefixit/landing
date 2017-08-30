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
        
        postDataToExcel.email = $('#email').val();
        postDataToExcel.type = $('input[name="type[]"]:checked').val();
       
        $.post( "https://createorderfixitapp.herokuapp.com/storeEmail.php" , JSON.stringify(postDataToExcel), function (data) {
            
                } ,'json' );
            }else{
                $('.error').css('color','red')
            }
     });
    
});