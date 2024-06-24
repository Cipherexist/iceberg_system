<?php 

include 'dbconfig.php'; 
include 'loadtables.php'; 
//include 'dbnavi.php'; 

@$viewtype = $_POST['viewtype']; 
@$competence = $_POST['competence']; 
@$question = $_POST['myquestion']; 
@$c1 = $_POST['myc1']; 
@$c2 = $_POST['myc2']; 
@$c3 = $_POST['myc3']; 
@$c4 = $_POST['myc4']; 
@$questiontype = $_POST['myquestiontype']; 
@$dateinsert =  loadregtoday(); 
@$username =  $_COOKIE['usname'];



@$sqlme = "INSERT INTO `preboard` (`QUESTION`,`C1`,`C2`,`C3`,`C4`,`VIEWTYPE`,`COMPETENCE`,`dateinsert`,`insertby`,`questiontype`) VALUES ('$question','$c1','$c2','$c3','$c4','$viewtype','$competence','$dateinsert','$username','$questiontype')"; 

mysqli_query($con,$sqlme); 
//mysqli_query($connavi,$sqlme); 

if(!mysqli_error($con))
{
    
        questionlist($viewtype,$competence,"");  
   
}
else 
{
    echo mysqli_error($con); 

}


function loadregtoday()
{
	$myyear = date('Y'); 
	$mydate = date('d'); 
	$mymonth = date('m'); 
		
	
	$completeregdate = $myyear. $mymonth. $mydate; 
	
	return $completeregdate; 
}








?> 



