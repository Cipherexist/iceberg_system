<?php
include 'dbconfig.php';
require 'forcookie.php';
require 'loadmodules.php'; 
require 'forcookie2.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Simple Online Quiz">
    <meta name="author" content="Val Okafor">   
    <title>Iceberg Maritime</title>

    <!-- Bootstrap core CSS -->

    <!-- Custom styles for this template -->
    
    <!--
    <link href="css/theme.css" rel="stylesheet">
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   	<link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
   	-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
  <!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery-1.10.2.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  -->
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.1/umd/popper.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> 	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"></script>	
	
	

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  
  </head>

<style>
        .centersearch
      {
        display: flex;
        justify-content: center;
        padding: 10px;
      
      }

      #searchtext 
      {
        display: flex;
        width: 300px;
        background-color: yellow; 
        color:navy;
      }



      
.center {
  display: block;
  margin-top: 0px;
  margin-left: auto;
  margin-right: auto;
  }


  
/* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
    background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));

  background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 150ms infinite linear;
  -moz-animation: spinner 150ms infinite linear;
  -ms-animation: spinner 150ms infinite linear;
  -o-animation: spinner 150ms infinite linear;
  animation: spinner 150ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}



body {

margin: 0;

padding: 0;



background-color:darkblue;

background-repeat: no-repeat;

background-image: url("image/PAM.jpg");

background-size:cover;

height: 100%;

width: 100%;

}

.container
{
  margin-top: 20px !important;
  background-color: white !important;
  padding: 30px !important;
}



</style>


<script>

	$(document).ready(function() 
	{
    $("#loading").hide()
		var table = $('.mydatatable').DataTable(
      {
        "searching": false
      }
    );
        $('.mydatatable tbody').on( 'click', 'tr', function ()
        {
           if ( $(this).hasClass('selected') ) 
           {
               $(this).removeClass('selected');
           }
           else 
           {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
           }
         });

	});
		
function myclipboard(classnotext) 
{ 
  var mystring = "Thank you /n/n Welcome"; 

  clipboard.writeText(mystring);
  alert("Copied");
  /*
    $.post("deleteacct.php",
	{
	usernameme: classnotext
	},function(result){
	      $("#result").empty(); 
      $("#result").append(result); 
		
	});
  */


}	
		



		
function deleteme(classnotext) 
{ 

swal.fire({
  title: 'Delete ' + classnotext + '?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Deactivate'
}).then((result) => {
  if (result.value) {
    
    
    $.post("deleteacct.php",
	{
	usernameme: classnotext
	},function(result){
	      $("#result").empty(); 
      $("#result").append(result); 
		
	});
  }
});

}

function showresult()
{
    
var searchresult  = document.getElementById("searchid").value; 
 
document.getElementById("titleme").value = searchresult;

}


        function loadactivation()
        {
          var id = $("#myid").val(); 
          var thecode = $("#passcode").val(); 
          var thepayment = $("#paymentid").val(); 
          $.post("activate.php",
          {
            myid: id, 
            mycode: thecode, 
            mypayment: thepayment
          },function(result)
          {
           
            if(result==1)
            {
              $("#resultaccess").empty(); 
              $("#resultaccess").append("Please Fill up the text button"); 

            }
            else if(result==2)
            {
              $("#resultaccess").empty(); 
              $("#resultaccess").append("There is an error in your sql"); 

            }
            else 
            {
              $("#result").empty(); 
              $("#result").append(result); 
              $('#modalapprove').modal('hide');

            }
          }); 
        }


        function setmyclone()
        {
          var id = $("#copy_myid").val(); 
          var thecode = $("#copy_passcode").val(); 
          $.post("clone.php",
          {
            myid: id, 
            mycode: thecode, 
          },function(result)
          {
           
            if(result==1)
            {
              $("#copy_resultaccess").empty(); 
              $("#copy_resultaccess").append("Please Fill up the text button"); 

            }
            else if(result==2)
            {
              $("#copy_resultaccess").empty(); 
              $("#copy_resultaccess").append("There is an error in your sql"); 

            }
            else 
            {
              $("#copy_resultaccess").empty(); 
              $("#copy_resultaccess").append(result); 
            //  $('#modalclone').modal('hide');

            }
          }); 
        }

        function clipcopy() {
        // Get the text field
        var copyText = document.getElementById("clip_textarea");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);

        // Alert the copied text
        alert("Copied!");
        }




        function loadmodalid(theid,completename)
        {
          document.getElementById('completenameid').innerHTML = "ID: " + theid + " Complete Name: " + completename ; 
          document.getElementById('myid').value  = theid; 
       
        }   

        
        function copy_loadmodalid(theid,completename)
        {
          document.getElementById('copy_completenameid').innerHTML = "ID: " + theid + " Complete Name: " + completename ; 
          document.getElementById('copy_myid').value  = theid; 
       
        }   

        function clip_loadmodalid(completename,mypayment,mypassword)
        {
       
          let str = "Good day sir \n" + completename + "\n\nThis is to confirm that we received your payment\namounting to "+ mypayment +" php, Thank you!\n\nFollow these steps to activate your account\n\n1. Open the iceberg app on your phone\n2. Connect to internet\n3. Select enter activation code\nActivation Code: " + mypassword + "\n\nOnce activated\nClick the update button and wait till the update is finished\n\nYou are now in full version and updated!.\nThats it!. Good luck to our new passer!";
          document.getElementById('clip_completenameid').innerHTML = "Complete Name: " + completename ; 
          document.getElementById('clip_textarea').value = str; 
        } 




          function makeid(length)
         {
          var result           = '';
          var characters       = 'abcdefghijklmnopqrstuvwxyz0123456789';
          var charactersLength = characters.length;
          for ( var i = 0; i < length; i++ ) {
            result += characters.charAt(Math.floor(Math.random() * 
            charactersLength));
         }
           return result;

         }

         function getrandom()
         {
          document.getElementById("passcode").value = makeid(5);
         }

         function copy_getrandom()
         {
          document.getElementById("copy_passcode").value = makeid(5);
         }

    
</script>

<?php  
include 'navbardefault.php';





?> 
  

   <body>
   <div class="loading" id="loading" name="loading">Loading&#8230;</div>
    <div class="container">













    
      </div>



   </body>

  


<script>

</script>