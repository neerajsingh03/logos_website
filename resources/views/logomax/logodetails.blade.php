$(document).ready(function(){
    $('#submit-form').on('click',function(e){
       e.preventDefault();
       var form = new FormData($('#message-form')[0]);
       var url='/api/tickets/ticket-message';

       $.ajax({
           url: url,
           type: 'POST',
           data: form,
           contentType: false, 
           processData: false, 
           success: function(response) {
              console.log('Success:', response);
              var messageHtmlAppend = `<div class="container-admin">
                                       <div class="admin_top">
                                        <span class="time-box">${response.data.first_name + response.data.last_name  }</span> |
                                        <span> 1 second ago </span>
                                       
                                        
                                       </div>
                                 <div class="containerAvter">
                                    <div class="user-avatar-user">
                                       D6
                                       
                                     </div>
                                     <div class="HSName">
                                    
                                     <div class="chatbox">
                                      
                                        <p> ${response.data.message}</p>
                                       </div>
                                      
                                   </div>
                                 </div>
                               </div>`;
            $('#recived-message').append(messageHtmlAppend);
           },
           error: function(xhr, status, error) {
               console.error('Error:', xhr.responseText);
           }
       });

           $('#message-form')[0].reset();
       });

    });