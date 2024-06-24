<?php 

include 'dbconfig.php'; 
include 'loadtables.php'; 


function loadnumberofquiz($table,$wherestr)
{ 
include 'dbconfig.php'; 

$returnmyno = 0; 
$query1 = "Select * from ".$table ." ".$wherestr;
$datame = mysqli_query($con, $query1);
	if(!mysqli_error($con))
	{
		if(mysqli_num_rows($datame)!=0)
		{	
			
		$returnmyno = mysqli_num_rows($datame); 

		}
		else 
		$returnmyno = 0; 

	}
	else
	{
		$returnmyno = mysqli_error($con);
	}
	return $returnmyno; 
}




function showlistbycmb()
{
	@$viewtype = $_POST['viewtype']; 
	@$competence = $_POST['competence']; 
	echo $viewtype ."  ". $competence;
	
	if(loadnumberofquiz("preboard","Where `viewtype` Like '$viewtype' and `competence` Like '$competence'")!=0)
	{
		questionlist($viewtype,$competence,""); 

	}
	else 
	{
		echo 0; 
	}

}







if(isset($_POST['mysearch']))
{
	@$mysearch = $_POST['mysearch']; 

	if(trim($mysearch)!="")
	{
	// echo $mysearch . " PASOK"; 
		@$viewtype = $_POST['viewtype']; 
		@$competence = $_POST['competence']; 
		questionlist($viewtype,$competence,$mysearch); 
	}
	else 
	{
		showlistbycmb();
	}
}
else 
{
	
	showlistbycmb();
}



?> 



