<?php 
include "dbconfig.php"; 
include "loadcmb.php"; 

@$quiztitle = $_POST['thequiztitle']; 


$sql = "INSERT INTO `function` (`function`,`functiontitle`,`viewtype`) VALUES('0','$quiztitle','custom')";

mysqli_query($con,$sql); 

if(!mysqli_error($con))
{
    functioncmb(); 
}
else 
{
echo mysqli_error($con); 
}




?> 

