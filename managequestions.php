<?php
include 'dbconfig.php';
require 'forcookie.php';
require 'loadmodules.php'; 
//require 'forcookie2.php';

@$active1 = ""; 
@$active2 = "active"; 

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
	
	
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  </head>

<style>

  td
  {
    -webkit-user-select: none; /* Safari */
  -ms-user-select: none; /* IE 10 and IE 11 */
  user-select: none; /* Standard syntax */
  }
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

#searchbox 
{
   border-radius: 10px;
   outline-color: lightblue;
}


</style>


<script>
 $(document).ready(function() 
          {
            $("#loading").hide();
            $("#btnremovefunction").hide();
            
            $("#ajaxloading").hide();
            $("#btn_addquestion").hide();
            $("#btn_savequestion").hide();

            var table = $('.mydatatable').DataTable({searching: false, paging: false, info: false});
            $("#optquiz").change(function()
            {
              loadcompetence();
            });
            
            $("#optcomp").change(function()
            {
              loadquizlist();
            });
        });








  </script> 

<?php  
include 'navbardefault.php';





?> 
  

   <body>
   <div class="loading" id="loading" name="loading">Loading&#8230;</div>
    <div class="container">


    <h2 class="mb-4" style="margin-top:20px;">Quiz Management</h2>
<!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-success btn" data-toggle="modal" data-target="#modelId" style="margin-bottom: 20px;">
      Add Function title
      </button> -->
      

      <div class="row" style="margin-top: 30px;">
        <div class="col-md-3">
            <select name="optquiz" id="optquiz" class="form-control">
            <option value="0">-- Select Viewtype -- </option>
            <option value="Deck Management Level">Deck Management Level</option>
            <option value="Deck Operational Level">Deck Operational Level</option>
            <option value="Engine Management Level">Engine Management Level</option>
            <option value="Engine Operational Level">Engine Operational Level</option>
            <option value="GMDSS Radio Operator">GMDSS Radio Operator</option>
            </select>

        </div>

        <div class="col-md-5">
            <select name="optcomp" id="optcomp" class="form-control">
          <option value="0"><-- Select View type First</option>
        
            </select>

        </div>
        
        <div class="col-md-4 "> 
        <button type="button" class="btn btn-success btn" onclick="loadthetitle()">Add New Question</button>
        <button type="button" class="btn btn-danger btn" id='btnremovefunction' onclick="deletethetitle()">Remove Function</button>
        </div>
      </div>
        

              <!-- Modal -->
              <div class="modal fade" id="modalquiz" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="titleid">Function Title: </h5>
                     
                      <input type="hidden" value="" id="functionid">
                      <input type="hidden" value="" id="competenceid">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <div class="modal-body">
                    <div class="container-fluid">

                    <div class="form-group">
                            <label class="form-label" for="questionid">Question</label>
                            <!-- <input type="questionid" name="questionid" id="questionid" class="form-control"> -->
                            <textarea class="form-control" id="questionid" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                            <label class="form-label" for="c1id">ANSWER</label>
                            <!-- <input type="c1id" name="c1id" id="c1id" class="form-control"> -->
                            <textarea class="form-control" id="c1id" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                            <label class="form-label" for="c2id">C2</label>
                            <!-- <input type="c2id" name="c2id" id="c2id" class="form-control"> -->
                            <textarea class="form-control" id="c2id" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                            <label class="form-label" for="c3id">C3</label>
                            <!-- <input type="c3id" name="c3id" id="c3id" class="form-control"> -->
                            <textarea class="form-control" id="c3id" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                            <label class="form-label" for="c4id">C4</label>
                            <!-- <input type="c4id" name="c4id" id="c4id" class="form-control"> -->
                            <textarea class="form-control" id="c4id" rows="3"></textarea>
                    </div>

                    
                    <p id='errorsaving'></p>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" id="btn_closequestion" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" id="btn_addquestion" class="btn btn-primary" onclick="addtoquizlist()">Add</button>
                  <button type="button" id="btn_savequestion"class="btn btn-primary" onclick="savetoquizlist()">Save</button>
                  <p id="ajaxloading"> <img src="images/ajax-loader.gif"/></p>
                </div>
              </div>
            </div>
          </div>

          <!--END OF MODAL -->

      


      


          <!-- Modal -->
          <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Add New Function</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <div class="modal-body">
                    <div class="container-fluid">
                    <div class="form-group">
                            <label class="form-label" for="quiztitle">Function Title</label>
                            <input type="quiztitle" name="quiztitle" id="quiztitle" class="form-control">
                    </div>
                             

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" onclick="savequizmanagement()">Add</button>

                </div>
              </div>
            </div>
          </div>

          <!--END OF MODAL -->


        

        
        <script>
          $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM
            
          });
        </script>


  <div class="row" style="margin-top: 20px;">
    <div class="col-md-4">

    <div class="form-group">
      <input type="text"
        class="form-control" class="searchstyle" id="searchbox" aria-describedby="helpId" placeholder="Search text here">
    </div>
    </div>
   
  </div>


  <div class="overflow-scroll">
        <div class="form-group"> 
              <table class="table mydatatable">
                <thead> 
                  <tr>
                  <th>ID</th>
                  <th>Question</th>
                  <th>Answer</th>
                  <th>C2</th>
                  <th>C3</th>
                  <th>C4</th>
                  <th>Option</th>
                </tr>

                </thead>

                <tbody id="reloadpage" name="reloadpage">
                
              
              

                </tbody>


              </table>
            </div>
              <!-- INSERT YOUR CODE HERE-->


  


  </div>
  








    
      </div>



   </body>

  


<script>


function loadcompetence()
        {
          $("#loading").show();
          var mycmbid = $("#optquiz").val();
          $.post("managequestion_competence.php",
          {
            viewtype: mycmbid
          },function(result)
          {
            $("#loading").hide();
            $("#optcomp").empty()
            $("#optcomp").append(result)
          })
        }

        function savequizmanagement()
        { 
          $("#loading").show();
          $.post("managequestion_save.php",
          {
            thequiztitle: $("#quiztitle").val()
          },function(result)
          {
            $("#loading").hide();
            $('#modelId').modal('hide');
            $('#optquiz').empty();
            $('#optquiz').append(result); 
          });
        }

        function loadquizlist() 
        {
          $("#loading").show();
          var myviewtype = $("#optquiz").val();
          var mycompetence = $("#optcomp").val();
          const mysearchbox = document.getElementById("searchbox")

          $.post("managequestion_list.php",
          {
            viewtype: myviewtype, 
            competence: mycompetence, 
            mysearch: mysearchbox.value
          },function(result)
          {
            if(result==0)
            {
              $("#loading").hide();
              $("#btnremovefunction").show();
              $('#reloadpage').empty();
              $('#reloadpage').append("No Data");
            }
            else 
            {
              $("#btnremovefunction").hide();
              $("#loading").hide();
            $('#reloadpage').empty();
            $('#reloadpage').append(result); 
            }
            mysearchbox.select()
          });
        }

        function loadthetitle()
        {
          if($("#optquiz  option:selected").val()!=0)
          {
            $("#btn_addquestion").show();
            $("#btn_savequestion").hide();


            $('#modalquiz').modal('show');
            document.getElementById('titleid').innerHTML = "Quiz Title: " + $("#optquiz  option:selected").text() + " Competence: " + $("#optcomp  option:selected").val();
            document.getElementById('functionid').value = $("#optquiz  option:selected").val();
            document.getElementById('competenceid').value = $("#optcomp  option:selected").val();
            document.getElementById('questionid').value = null;
            document.getElementById('c1id').value = null;
            document.getElementById('c2id').value = null;
            document.getElementById('c3id').value = null; 
            document.getElementById('c4id').value =null; 
          }
          else 
          {
            alert("Please select exam title before adding");
          }

        }


        function editquestion(myfunction,functionname)
        {
          try {
            var myid = myfunction; 
            var title = functionname; 
            
            $("#btn_addquestion").hide();
            $("#btn_savequestion").show();

            $('#modalquiz').modal('show');
            document.getElementById('titleid').innerHTML = "Function Title: " + functionname;
            document.getElementById('functionid').value = myid;
           // document.getElementById('questionid').value = $("#" + myid + "question").val(); 
           // document.getElementById('c1id').value = $("#" + myid + "c1").val(); 
           // document.getElementById('c2id').value = $("#" + myid + "c2").val(); 
          //  document.getElementById('c3id').value = $("#" + myid + "c3").val(); 
          //  document.getElementById('c4id').value = $("#" + myid + "c4").val(); 


            document.getElementById('questionid').value = $("#" + myid + "question").text(); 
            document.getElementById('c1id').value = $("#" + myid + "c1").text(); 
            document.getElementById('c2id').value = $("#" + myid + "c2").text(); 
            document.getElementById('c3id').value = $("#" + myid + "c3").text(); 
            document.getElementById('c4id').value = $("#" + myid + "c4").text(); 


          } catch (error) {
              alert(error); 

          }
          
        }

        function deletethetitle()
        {
          if($("#optquiz  option:selected").val()!=0)
          {
            var delname = $("#optquiz  option:selected").text(); 
            var delid = $("#optquiz  option:selected").val(); 

            Swal.fire({
              title: 'Do you want to Delete this Title??: ' + delname,
              showDenyButton: true,
              icon: 'warning',
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              denyButtonText: `Don't Delete`,
              confirmButtonText: `Delete`,
              }).then((result) => {
              /* Read more about isConfirmed, isDenied below */
              if (result.isConfirmed)
              {

                $.post("managequestion_delete.php",{
                  docid: delid,
                  doctitle:delname
                },function(result){

                  $('#optquiz').empty();
                  $('#optquiz').append(result);

                  $('#reloadpage').empty();
                  $('#reloadpage').append("No Data"); 

                });
                


              } 
              else if (result.isDenied) 
              {
                // Swal.fire('Changes are not saved', '', 'info')
              }
              }); 

          }
          else 
          {
            alert("Please select exam title before deleting");
          }
          
        }



        function addtoquizlist()
        {
          $("#ajaxloading").show();
          document.getElementById('btn_closequestion').disabled = true ; 
            document.getElementById('btn_addquestion').disabled = true ; 
          var id = $("#functionid").val(); 
          var comp = $("#competenceid").val(); 
          var question = $("#questionid").val(); 
          var c1 = $("#c1id").val(); 
          var c2 = $("#c2id").val(); 
          var c3 = $("#c3id").val();
          var c4 = $("#c4id").val();  

              if(question==""||c1==""||c2==""||c3==""||c4=="")
              {

                $("#ajaxloading").hide();
                        document.getElementById('btn_closequestion').disabled = false ; 
                        document.getElementById('btn_addquestion').disabled = false ; 
                document.getElementById('errorsaving').innerHTML = "<p style='margin-top: 10px;' class='text-danger'>Kindly Fill up the following textbox</p>";
          
              }
              else 
              {
                document.getElementById('errorsaving').innerHTML = "";
                $.post("managequestion_list_add.php",
                      {
                        viewtype: id,
                        competence: comp,
                        myquestion: question, 
                        myc1: c1, 
                        myc2: c2, 
                        myc3: c3, 
                        myc4: c4
                      },function(result)
                      {
                        $("#ajaxloading").hide();
                        document.getElementById('btn_closequestion').disabled = false ; 
                        document.getElementById('btn_addquestion').disabled = false ; 
                        $('#modalquiz').modal('hide');
                        $('#reloadpage').empty();
                        $('#reloadpage').append(result); 
                      });
              }


          }




        function savetoquizlist()
        {
          $("#ajaxloading").show();
          document.getElementById('btn_closequestion').disabled = true ; 
            document.getElementById('btn_savequestion').disabled = true ; 

          var id = $("#functionid").val(); 
          var question = $("#questionid").val(); 
          var c1 = $("#c1id").val(); 
          var c2 = $("#c2id").val(); 
          var c3 = $("#c3id").val();
          var c4 = $("#c4id").val();  

              if(question==""||c1==""||c2==""||c3==""||c4=="")
              {
                $("#ajaxloading").hide();
                document.getElementById('btn_closequestion').disabled = false ; 
                    document.getElementById('btn_savequestion').disabled = false ; 
                document.getElementById('errorsaving').innerHTML = "<p style='margin-top: 10px;' class='text-danger'>Kindly Fill up the following textbox</p>"
          
              }
              else
              {
                document.getElementById('errorsaving').innerHTML = "";
          
                  $.post("managequestion_list_editsave.php",
                  {
                    myid: id,
                    myquestion: question, 
                    myc1: c1, 
                    myc2: c2, 
                    myc3: c3, 
                    myc4: c4
                  },function(result)
                  {
                    $("#ajaxloading").hide();
                    document.getElementById('btn_closequestion').disabled = false ; 
                    document.getElementById('btn_savequestion').disabled = false ; 

                    $('#modalquiz').modal('hide');
                  //  document.getElementById(id + "row").innerHTML = '<tr id="' + id + 'row" style="background-color: green;">'; 
                    document.getElementById(id + "row").style.backgroundColor = "lightgreen";
                    document.getElementById(id + "question").innerHTML = question; 
                    document.getElementById(id + "c1").innerHTML = c1; 
                    document.getElementById(id + "c2").innerHTML = c2; 
                    document.getElementById(id + "c3").innerHTML = c3; 
                    document.getElementById(id + "c4").innerHTML = c4; 

                //   document.getElementById(id + "row").innerHTML = '<tr id="' + id + 'row" style="background-color: green;">'; 
                //   document.getElementById(id + "question").innerHTML = '<td id="' + id + 'question">' + question +'</td>'; 
                //    document.getElementById(id + "c1").innerHTML = '<td id="' + id + 'c1">' + c1 +'</td>'; 
                //    document.getElementById(id + "c2").innerHTML = '<td id="' + id + 'c2">' + c2 +'</td>'; 
                //   document.getElementById(id + "c3").innerHTML = '<td id="' + id + 'c3">' + c3 +'</td>'; 
                  //  document.getElementById(id + "c4").innerHTML = '<td id="' + id + 'c4">' + c4 +'</td>'; 
        //

                  //  $('#reloadpage').empty();
                  // $('#reloadpage').append(result); 
                  });

                }
        }

        function deletequizlist(delid,delname)
        {
      
          Swal.fire({
              title: 'Do you want to Delete this Question?: ' + delname,
              showDenyButton: true,
              icon: 'warning',
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              denyButtonText: `Don't Delete`,
              confirmButtonText: `Delete`,
              }).then((result) => {
              /* Read more about isConfirmed, isDenied below */
              if (result.isConfirmed)
              {
                $("#loading").show();
                $.post("managequestion_list_delete.php",{
                  docid: delid
                },function(result){

                  $("#loading").hide();
                  document.getElementById(delid + "row").style.backgroundColor = "red";

                 document.getElementById(delid + "btnedit").disabled = true ; 
                 document.getElementById(delid + "btndelete").disabled = true ; 


            //    $('#reloadpage').empty();
            //   $('#reloadpage').append(result); 
                });
                


              } 
              else if (result.isDenied) 
              {
                // Swal.fire('Changes are not saved', '', 'info')
              }
              }); 



        }

        document.getElementById('searchbox').onkeypress = function(e)
        {
        if (!e) e = window.event;
        var keyCode = e.code || e.key;
        if (keyCode == 'Enter'){
          console.log("Enter")
            

          loadquizlist();
        }
       }
      



</script>