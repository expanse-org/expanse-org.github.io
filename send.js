$(function () {

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'ajax/check.php',
            data: $('form').serialize(),
            success: function (data) {
            if(data.error === true){
                    swal({
                    title: "OOpss!!Something went wrong",
                    text: "A problem occur your message has not been sent. Please try again later",
                    imageUrl: "img/favicon.ico"
                    });
            }
            else{
                 swal({
                 title: "Thank you for contacting us.",
                 text: "Your message has been successfully sent.",
                 imageUrl: "img/favicon.ico"
                 });
            }
            }, 
           
             error: function (data) {
              if(data.error === true){
                    swal({
                    title: "OOpss!!Something went wrong",
                    text: "A problem occur your message has not been sent. Please try again later",
                    imageUrl: "img/favicon.ico"
                    });
            }
            else{
            	 swal({
                 title: "Thank you for contacting us.",
                 text: "Your message has been successfully sent.",
                 imageUrl: "img/favicon.ico"
                 });
            }
            	
            }
          });
           $.ajax({
            type: 'post',
            url: 'ajax/check2.php',
            data: $('form').serialize(),
            success: function (data) {
            if(data.error === true){
                    swal({
                    title: "OOpss!!Something went wrong",
                    text: "A problem occur your message has not been sent. Please try again later",
                    imageUrl: "img/favicon.ico"
                    });
            }
            else{
                swal({
                 title: "Thank you for contacting us.",
                 text: "Your message has been successfully sent.",
                 imageUrl: "img/favicon.ico"
                 });
            }
            }, 
           
             error: function (data) {
              if(data.error === true){
                   swal({
                    title: "OOpss!!Something went wrong",
                    text: "A problem occur your message has not been sent. Please try again later",
                    imageUrl: "img/favicon.ico"
                    });
            }
            else{
                swal({
                 title: "Thank you for contacting us.",
                 text: "Your message has been successfully sent.",
                 imageUrl: "img/favicon.ico"
                 });
            }
            	
            }
            
          });
             $("#yname").val("");
             $("#yemail").val("");
             $("#ycomment").val("");

        });

      });