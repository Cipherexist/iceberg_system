<?php 

include 'dbconfig.php'; 
include 'loadtables.php'; 

@$id = $_POST['myid']; 
@$question = $_POST['myquestion']; 
@$c1 = $_POST['myc1']; 
@$c2 = $_POST['myc2']; 
@$c3 = $_POST['myc3']; 
@$c4 = $_POST['myc4']; 


@$sqlme = "UPDATE `preboard` SET `question`='$question',`c1`='$c1',`c2`='$c2',`c3`='$c3',`c4`='$c4' Where ID Like '$id'"; 

mysqli_query($con,$sqlme); 


if(!mysqli_error($con))
{
    //questionlist($id); 

}
else 
{
    echo mysqli_error($con); 

}










?> 



