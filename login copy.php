<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="navisys.ico">

    <title>Welcome Iceberg</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>

<script type="text/javascript"> 

$(document).keypress(function(e) {
    if(e.which == 13) {
        	var usword=$("#usname").val();
	var psword=$("#psname").val();
	
	
	$.post("credentials.php",{usname:usword,psname:psword},function(result){
			$('#result').empty();
			$('#result').append(result);
		
		});
    }
});

$(function(){
$("#loginme").click(function(){
	var usword=$("#usname").val();
	var psword=$("#psname").val();
	
	
	$.post("credentials.php",{usname:usword,psname:psword},function(result){
			$('#result').empty();
			$('#result').append(result);
		
		});
	});
	
	
});
</script> 
  </head>

  <body>
  <div class="container">
<div class="container-fluid">


<?php 
if(isset($_COOKIE['usname']))
{
setcookie('usname', "", time()-3000);

}
if(isset($_COOKIE['psword']))
{
setcookie('psword', "", time()-3000);
}
?>
    
    <div class="form-signin">
     
        <h2 class="form-signin-heading">Please log in</h2>

        <label for="usname" class="sr-only">Username</label>
        <input type="email"  id="usname" class="form-control" placeholder="Username" >
        <label for="inputPassword" class="sr-only" >Password</label>
        <input type="password" style="margin-top:10px;" id="psname" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="loginme">Sign in</button>
        <div id="result" style="border:none; margin-top:20px;"></div>
      </div>

    </div> <!-- /container -->

    </div>

</body>




</html>