<?php 

include 'dbconfig.php'; 
require 'forcookie.php';
require 'loadmodules.php'; 
require 'forcookie2.php';

@$myid = $_POST['myid']; 
@$password = $_POST['mycode'];



function loadnumberofdataemail($email)
{
  include 'dbconfig.php'; 
  @$myemail = $email; 
  $mysqlme = "Select * from `examapproved` Where `email` Like '$myemail' ORDER BY ID DESC"; 
  $dbt = mysqli_query($con,$mysqlme); 
  $numrows=mysqli_num_rows($dbt);
      if($numrows!=0)
      {
        $numrows +=1;

      }

      
      return $numrows;
}





$today = date("F j, Y, g:i a");


if($password !="")
{

$mysqlme = "Select * from `examapproved` Where `ID` Like '$myid'"; 
$dbt = mysqli_query($con,$mysqlme); 
$numrows=mysqli_num_rows($dbt);


if(!mysqli_error($con))
{
    if($numrows!=0)
    {
        while($row = mysqli_fetch_assoc($dbt))
        {
            @$email = $row["email"]; 
            @$newpassword = $password;
            @$usernameusage = $row["usernameusage"] . loadnumberofdataemail($row["email"]);
            @$status = "yes"; 
            @$viewtype = $row["viewtype"]; 
            @$access = "yes";
            @$accesstype = $row["accesstype"]; 
            @$completename = $usernameusage; 
            @$usertype = $row["usertype"]; 
            @$expirymonths = $row["expirymonths"]; 
            @$accessuser = $row["accessuser"]; 
            @$createdby = $row["accessuser"]; 
            @$createdby = $row["accessuser"]; 
            @$controlstatus = "100"; 
            @$contactnumber = $row["contactnumber"]; 
            @$deviceused = $row["deviceused"]; 

            $MYSQLME2 = "INSERT INTO `examapproved` (`completename`, `usernameusage`, `viewtype`,`accesstype`, `access`, `hide`,`status`,`purchase`,`createdby`,`usertype`,`expirymonths`,`accessuser`, `controlstatus`,`email`,`contactnumber`,`deviceused`,`password`,`datecreated`) VALUES ('". 
             $usernameusage .
        	"', '". $usernameusage .
        	"', '".  $viewtype .
        	"', '".  $viewtype .
        	"', 'yes', 'yes', 'yes', 'yes', 'androiduser', 'Trainee User', 'Never', 'Exam and Preview', '".
        	$controlstatus .
        	"', '". $email .
        	"', '". $contactnumber .
        	"', '". $deviceused .
            "', '". $newpassword .
        	"', '". $today ."')"; 

            $tryinsert = mysqli_query($con,$MYSQLME2); 
            if(!mysqli_error($con))
            {
                echo "Data is cloned"; 
            }
            else
            {
                echo mysqli_error($con);
            }

        }
    }
    else 
    {
echo "no record ". $myid;
    }
}
else 
{
    echo mysqli_error($con);
}



}
else 
{
    echo 1; 
}
    ?> 


