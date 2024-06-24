<?php 
include "dbconfig.php"; 
include "loadtables.php"; 
include "loadcmb.php"; 



@$myid = $_POST['docid']; 

$sql = "DELETE from `preboard` Where `ID` Like '$myid'"; 
mysqli_query($con,$sql);
 

if(!mysqli_error($con))
{
    /*
    $sqlme = "DELETE from `quizmanagement_list` Where `quiztitle` Like '$myid'"; 
    mysqli_query($con,$sqlme);
 
    if(!mysqli_error($con))
    {
        quizmanagementcmb2(); 
    }
    else
    {
        echo mysqli_error($con);
    }
    */
    
}
else 
{
    echo mysqli_error($con);
}


?>

