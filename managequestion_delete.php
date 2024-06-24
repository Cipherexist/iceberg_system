<?php 
include "dbconfig.php"; 
include "loadtables.php"; 
include "loadcmb.php"; 



@$myid = $_POST['docid']; 
@$mytitle = $_POST['doctitle']; 

$sql = "DELETE from `function` Where `ID` Like '$myid'"; 
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

