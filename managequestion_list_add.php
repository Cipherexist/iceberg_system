<?php 

include 'dbconfig.php'; 
include 'loadtables.php'; 
//include 'dbnavi.php'; 
include 'loadmodules.php'; 


@$viewtype = $_POST['viewtype']; 
@$competence = $_POST['competence']; 
@$question = $_POST['myquestion']; 
@$c1 = $_POST['myc1']; 
@$c2 = $_POST['myc2']; 
@$c3 = $_POST['myc3']; 
@$c4 = $_POST['myc4']; 
@$dateinsert =  loadregistrationdateformatdatetoday(); 
@$username =  $_COOKIE['usname'];



@$sqlme = "INSERT INTO `preboard` (`QUESTION`,`C1`,`C2`,`C3`,`C4`,`VIEWTYPE`,`COMPETENCE`,`dateinsert`,`insertby`) VALUES ('$question','$c1','$c2','$c3','$c4','$viewtype','$competence','$dateinsert','$username')"; 

mysqli_query($con,$sqlme); 
//mysqli_query($connavi,$sqlme); 

if(!mysqli_error($con))
{
    if(!mysqli_error($connavi))
    {
        questionlist($viewtype,$competence,""); 

    }
    else 
    {
        echo mysqli_error($connavi);
    }
    
   
}
else 
{
    echo mysqli_error($con); 

}










?> 



