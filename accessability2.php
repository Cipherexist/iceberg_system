<?php
include 'dbconfig.php';
require 'forcookie.php';
require 'loadmodules.php'; 
//require 'forcookie2.php';
include 'loadcmb.php';

@$active1 = "active"; 
@$active2 = ""; 

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


  <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
	
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> 	
	
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
	
  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js"></script>	
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.1/umd/popper.min.js"></script> 

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  
  </head>

<style>



.container-fluid
{
  margin-left: 20px !important;
  margin-right: 40px !important;
  padding-left: 50px !important;
  padding-right: 50px !important;
  padding-top: 20px !important;
}



</style>


<script>

	$(document).ready(function() 
	{
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
      const all = document.getElementById("check_all")
      const f1  = document.getElementById("check_f1")
      const f2 = document.getElementById("check_f2")
      const f3 = document.getElementById("check_f3")
      const f4 = document.getElementById("check_f4")

      f1.addEventListener("change",function(){ 
        all.checked =  false
      
        if(f1.checked == true && f2.checked == true && f3.checked == true && $("#check_function4").is(':visible')==false)
        {
          f1.checked = false
          f2.checked = false 
          f3.checked = false
          all.checked = true 
        }

        if(f1.checked == true && f2.checked == true && f3.checked == true && f4.checked == true)
        {
          f1.checked = false
          f2.checked = false 
          f3.checked = false
          f4.checked = false
          all.checked = true 
        }

      })
      f2.addEventListener("change",function(){ 
        all.checked =  false
        if(f1.checked == true && f2.checked == true && f3.checked == true && $("#check_function4").is(':visible')==false)
        {
          f1.checked = false
          f2.checked = false 
          f3.checked = false
          all.checked = true 
        }

        if(f1.checked == true && f2.checked == true && f3.checked == true && f4.checked == true)
        {
          f1.checked = false
          f2.checked = false 
          f3.checked = false
          f4.checked = false
          all.checked = true 
        }

      })
      f3.addEventListener("change",function(){ 
        all.checked =  false
        if(f1.checked == true && f2.checked == true && f3.checked == true && $("#check_function4").is(':visible')==false)
        {
          f1.checked = false
          f2.checked = false 
          f3.checked = false
          all.checked = true 
        }

        if(f1.checked == true && f2.checked == true && f3.checked == true && f4.checked == true)
        {
          f1.checked = false
          f2.checked = false 
          f3.checked = false
          f4.checked = false
          all.checked = true 
        }

      })
      f4.addEventListener("change",function(){ 
        all.checked =  false
        if(f1.checked == true && f2.checked == true && f3.checked == true && $("#check_function4").is(':visible')==false)
        {
          f1.checked = false
          f2.checked = false 
          f3.checked = false
          all.checked = true 
        }

        if(f1.checked == true && f2.checked == true && f3.checked == true && f4.checked == true)
        {
          f1.checked = false
          f2.checked = false 
          f3.checked = false
          f4.checked = false
          all.checked = true 
        }

      })

      all.addEventListener("change",function()
      {
        f1.checked = false
          f2.checked = false 
          f3.checked = false
          f4.checked = false
      })


      const edit_all = document.getElementById("edit_check_all")
      const edit_f1  = document.getElementById("edit_check_f1")
      const edit_f2 = document.getElementById("edit_check_f2")
      const edit_f3 = document.getElementById("edit_check_f3")
      const edit_f4 = document.getElementById("edit_check_f4")

      edit_all.addEventListener("change",function()
      {
          edit_f1.checked = false
          edit_f2.checked = false 
          edit_f3.checked = false
          edit_f4.checked = false
      })



      edit_f1.addEventListener("change",function(){ 
        edit_all.checked =  false
      
        if(edit_f1.checked == true && edit_f2.checked == true && edit_f3.checked == true && $("#edit_check_function4").is(':visible')==false)
        {
          edit_f1.checked = false
          edit_f2.checked = false 
          edit_f3.checked = false
          edit_all.checked = true 
        }

        if(edit_f1.checked == true && edit_f2.checked == true && edit_f3.checked == true && edit_f4.checked == true)
        {
          edit_f1.checked = false
          edit_f2.checked = false 
          edit_f3.checked = false
          edit_f4.checked = false
          edit_all.checked = true 
        }

      })

      edit_f2.addEventListener("change",function(){ 
        edit_all.checked =  false
      
        if(edit_f1.checked == true && edit_f2.checked == true && edit_f3.checked == true && $("#edit_check_function4").is(':visible')==false)
        {
          edit_f1.checked = false
          edit_f2.checked = false 
          edit_f3.checked = false
          edit_all.checked = true 
        }

        if(edit_f1.checked == true && edit_f2.checked == true && edit_f3.checked == true && edit_f4.checked == true)
        {
          edit_f1.checked = false
          edit_f2.checked = false 
          edit_f3.checked = false
          edit_f4.checked = false
          edit_all.checked = true 
        }

      })

      edit_f3.addEventListener("change",function(){ 
        edit_all.checked =  false
      
        if(edit_f1.checked == true && edit_f2.checked == true && edit_f3.checked == true && $("#edit_check_function4").is(':visible')==false)
        {
          edit_f1.checked = false
          edit_f2.checked = false 
          edit_f3.checked = false
          edit_all.checked = true 
        }

        if(edit_f1.checked == true && edit_f2.checked == true && edit_f3.checked == true && edit_f4.checked == true)
        {
          edit_f1.checked = false
          edit_f2.checked = false 
          edit_f3.checked = false
          edit_f4.checked = false
          edit_all.checked = true 
        }

      })

      edit_f4.addEventListener("change",function(){ 
        edit_all.checked =  false
      
        if(edit_f1.checked == true && edit_f2.checked == true && edit_f3.checked == true && $("#edit_check_function4").is(':visible')==false)
        {
          edit_f1.checked = false
          edit_f2.checked = false 
          edit_f3.checked = false
          edit_all.checked = true 
        }

        if(edit_f1.checked == true && edit_f2.checked == true && edit_f3.checked == true && edit_f4.checked == true)
        {
          edit_f1.checked = false
          edit_f2.checked = false 
          edit_f3.checked = false
          edit_f4.checked = false
          edit_all.checked = true 
        }

      })

      
      
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

        function loadsave()
        {
                var id = $("#edit_id").val(); 
                var c_all = ""
                var c_f1 =  ""              
                var c_f2 = ""
                var c_f3 = "" 
                var c_f4 = ""
                if($("#edit_check_all").is(":checked")){c_all="all"}; 
                if($("#edit_check_f1").is(":checked")){c_f1="f1"}; 
                if($("#edit_check_f2").is(":checked")){c_f2="f2"}; 
                if($("#edit_check_f3").is(":checked")){c_f3="f3"}; 
                if($("#edit_check_f4").is(":checked")){c_f4="f4"}; 

              
                    $.post("activate_update.php",
                    {
                      myid: id, 
                      edit_checkall: c_all, 
                      edit_check_f1: c_f1, 
                      edit_check_f2: c_f2, 
                      edit_check_f3: c_f3, 
                      edit_check_f4: c_f4 
                    },function(result)
                    {
                        //console.log(result)
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
                        document.getElementById("access_" + id).textContent = result 
                        $('#edit_modal').modal('hide');
                      }
                    }); 
        }



        function loadactivation()
        {
                var id = $("#myid").val(); 
                var thecode = $("#passcode").val(); 
                var thepayment = $("#paymentid").val(); 
                var c_all = ""
                var c_f1 =  ""              
                var c_f2 = ""
                var c_f3 = ""
                var c_f4 = ""
                if($("#check_all").is(":checked")){c_all="all"}; 
                if($("#check_f1").is(":checked")){c_f1="f1"}; 
                if($("#check_f2").is(":checked")){c_f2="f2"}; 
                if($("#check_f3").is(":checked")){c_f3="f3"}; 
                if($("#check_f4").is(":checked")){c_f4="f4"}; 

                console.log(c_f1)
                    $.post("activate.php",
                    {
                      myid: id, 
                      mycode: thecode, 
                      mypayment: thepayment, 
                      checkall: c_all, 
                      check_f1: c_f1, 
                      check_f2: c_f2, 
                      check_f3: c_f3, 
                      check_f4: c_f4 
                    },function(result)
                    {
                        //console.log(result)
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




        function loadmodalid(theid,completename,viewtype)
        {
          const all = document.getElementById("check_all")
          const f1  = document.getElementById("check_f1")
          const f2 = document.getElementById("check_f2")
          const f3 = document.getElementById("check_f3")
          const f4 = document.getElementById("check_f4")
          
          f1.checked = false
          f2.checked = false 
          f3.checked = false
          f4.checked = false
          all.checked = true  
          
          document.getElementById('completenameid').innerHTML = "ID: " + theid + " Complete Name: " + completename ; 
          document.getElementById('myid').value  = theid; 
          $("#modalapprove").modal("show");    
          
          if(viewtype=="Deck Management Level"||viewtype=="Deck Operational Level")
          {
            $("#check_function4").hide()
          }
          else 
          {
            $("#check_function4").show()
            
          }
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


  function editmodal(id,username,viewtype)
  {
    const myfunction = document.getElementById("access_" + id).textContent; 

    if(viewtype=="Deck Management Level"||viewtype=="Deck Operational Level")
          {
            $("#edit_check_function4").hide()
          }
          else 
          {
            $("#edit_check_function4").show()
            
          }
    var mystring  = myfunction.trim()
      document.getElementById("edit_check_all").checked = false 
      document.getElementById("edit_check_f1").checked = false 
      document.getElementById("edit_check_f2").checked = false 
      document.getElementById("edit_check_f3").checked = false 
      document.getElementById("edit_check_f4").checked = false 

    if(mystring=="all")
    {
      document.getElementById("edit_check_all").checked = true 
    }
    else 
    {
        var col = new Array()
        col = mystring.split("/")

        var x = 0 

        for(let x = 0; x <= col.length-1; x++)
        {
            //console.log(col[x])
            if(col[x]=='f1')
            {
              document.getElementById("edit_check_f1").checked = true 
            }
            if(col[x]=='f2')
            {
              document.getElementById("edit_check_f2").checked = true 
            }
            if(col[x]=='f3')
            {
              document.getElementById("edit_check_f3").checked = true
            }
            if(col[x]=='f4')
            {
                document.getElementById("edit_check_f4").checked = true
            }
        }
    }
    document.getElementById("edit_id").value = id
    document.getElementById("edit_username").innerHTML = username
    document.getElementById("edit_viewtype").innerHTML = viewtype
    $("#edit_modal").modal('show')
  }

    
</script>

<?php  
include 'navbardefault.php';

?> 
<body>
  <div class="container-fluid">


<div class="modal fade" id="modalclone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalclone"> <p id="copy_completenameid"></p></h5>
          <input type="hidden" id="copy_myid" name="copy_myid">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="padding: 20px;">
         

            <div class="row">
                  <label for="copy_passcode">Activation Code</label>
                  <input type="text" name="copy_passcode" id="copy_passcode" class="form-control" placeholder="" aria-describedby="helpId">
          
            </div>

            <div class="row" style="margin-top: 10px;">
              <button id="copy_upload-button" class="btn btn-primary btn-small" onclick="copy_getrandom()">Generate Code</button> 
            </div>

                
            <div class="row">
              <div class='col-sm-10' id='copy_resultaccess'> 
              </div>
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
           <button id="upload-button" class="btn btn-primary btn-large" onclick="setmyclone()"> Process Clone </button>
        </div>
      </div>
    </div>
    </div>


    <div class="modal fade" id="modalclipboard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalclipboard"> <p id="clip_completenameid"></p></h5>
          <input type="hidden" id="clip_myid" name="clip_myid">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="padding: 30px;">
     

            <div class="row" style="margin-top: 10px;">
            <label for="clip_textarea">Activation Message</label>
            <textarea id="clip_textarea" name="clip_textarea" rows="15" cols="100"></textarea>
            </div>

                
            <div class="row">
              <div class='col-sm-10' id='clip_resultaccess'> 
              </div>
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
           <button id="upload-button" class="btn btn-primary btn-large" onclick="clipcopy()">Copy Clipboard </button>
        </div>
      </div>
    </div>
    </div>






<div class="modal fade" id="modalapprove" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalapprove"> <p id="completenameid"></p></h5>
          <input type="hidden" id="myid" name="myid">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="padding: 30px;">
         

            <div class="row">
                  <label for="passcode">Activation Code</label>
                  <input type="text" name="passcode" id="passcode" class="form-control" placeholder="" aria-describedby="helpId">
          
            </div>

            <div class="row" style="margin-top: 10px;">
              <button id="upload-button" class="btn btn-primary btn-small" onclick="getrandom()">Generate Code</button> 
            </div>

            <div class="row" style="margin-top:10px;">
                 <label for="paymentid">Set Payment</label>
                  <input type="number" name="paymentid" id="paymentid" class="form-control" placeholder="" aria-describedby="helpId">
            </div>

            
            <div class="row" style="margin-top:10px;">
              <p>Select Specific Function to Activate</p>
            </div>


            <div class="row" style="margin-left: 10px;">
                  <div class="col-md-1">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="" id="check_all" value="checkedValue" checked>
                            ALL
                          </label>
                  </div>
                  

                  <div class="col-md-1">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="" id="check_f1" value="checkedValue">
                      F1
                    </label>
                  </div>

                  <div class="col-md-1">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="" id="check_f2" value="checkedValue">
                      F2
                    </label>
                  </div>

                  <div class="col-md-1">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="" id="check_f3" value="checkedValue">
                      F3
                    </label>
                  </div>

                  <div class="col-md-2" id="check_function4">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="" id="check_f4" value="checkedValue">
                      F4
                    </label>
                  </div>
            </div>

        
            
          
            <div class="row">
              <div class='col-sm-10' id='resultaccess'> 
              </div>
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
           <button id="upload-button" class="btn btn-primary btn-large" onclick="loadactivation()"> Activate </button>
        </div>
      </div>
    </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Access</h5>
              <input type="hidden" id="edit_id">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <p><b>Username: </b><span id="edit_username"></span></p>
            <p><b>Review: </b><span id="edit_viewtype"></span></p>


            <b>Set Access</b>
            <div class="row" style="margin-left: 10px;">
                  <div class="col-md-1">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="" id="edit_check_all" value="checkedValue" checked>
                            ALL
                          </label>
                  </div>
                  

                  <div class="col-md-1">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="" id="edit_check_f1" value="checkedValue">
                      F1
                    </label>
                  </div>

                  <div class="col-md-1">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="" id="edit_check_f2" value="checkedValue">
                      F2
                    </label>
                  </div>

                  <div class="col-md-1">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="" id="edit_check_f3" value="checkedValue">
                      F3
                    </label>
                  </div>

                  <div class="col-md-2" id="edit_check_function4">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" name="" id="edit_check_f4" value="checkedValue">
                      F4
                    </label>
                  </div>
            </div>



          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success" onclick="loadsave()">Update</button>
          </div>
        </div>
      </div>
    </div>




    <div class="row">
      <div class="col-md-offset-2 col-md-8">
          <h1 id="titleme">Android Accounts</h1>
              <div class="form-group">
    
          </div>
          </form>
      </div>
    </div>

  
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
        width: 700px;
        background-color: yellow; 
        color:navy;
        text-align: center;
        
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




    </style>
     <div class="loading" id="loading" name="loading">Loading&#8230;</div>
    <div class="row centersearch">
         <div class="form-group ">
           <input type="text" class="form-control col-md-12"  id="searchtext" aria-describedby="helpId" placeholder="Enter your Search here">
         </div>
    </div>
    
    <div class="overflow-auto row">
        <table class="table table-striped table-sm table-bordered mydatatable" style="width: 100%"> 
          
          <thead>
            <tr>
            <th> No </th>
            <th> Registered User </th>
            <th> Code </th>
            <th> Viewtype </th>
            <th> Email / Contact Number</th>
          <th> Activated Date </th>
            <th> LastLogin </th>
            <th> Device </th>
              <th> Access </th>
              <th> Progress </th>
            <th> Options </th>
            </tr>
            </thead>
            
            <tbody id="result">
                    <?php 
                    include 'showandroiduser.php';
                    ?>
            </tbody>
        </table>
    </div>

</div>
</body>

<script>

$("#loading").hide()
$('#mydatatable').on('search.dt', function() {
          var value = $('.dataTables_filter input').val();
          console.log("value",value); // <-- the value
          }); 
		
          $('.dataTables_filter input').unbind().keyup(function() {
            var value = $(this).val();
            if (value.length>3) {
                table.search(value).draw();
            } 
            });



  const searchtxt = document.getElementById("searchtext")
  
  searchtxt.addEventListener("change",function()
  {
    $("#loading").show()
     $("showandroiduser.php")    

      $.post("showandroiduser.php",
      {
        searchtext: searchtxt.value
      },function(result)
      {
        $("#loading").hide()
        $("#result").empty()
        $("#result").append(result)
      })

  })

</script>