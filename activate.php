<?php 

include 'dbconfig.php'; 
require 'forcookie.php';
require 'loadmodules.php'; 
require 'forcookie2.php';

@$myid = $_POST['myid']; 
@$password = $_POST['mycode'];
@$payment = $_POST['mypayment'];
@$f1 = $_POST['check_f1'];
@$f2 = $_POST['check_f2'];
@$f3 = $_POST['check_f3'];
@$f4 = $_POST['check_f4'];
@$totalall =  $_POST['checkall'];

if(@$totalall!='all')
{
    @$totalall = ""; 

    if($f1=="f1")
    {
        $totalall = $totalall . $f1 ;
    }

    if($f2=="f2" && $totalall!="")
    {
        $totalall = $totalall . "/". $f2 ;
    }
    else 
    {
        $totalall = $totalall . $f2 ;
    }

    if($f3=="f3" && $totalall!="")
    {
        $totalall = $totalall . "/". $f3 ;
    }
    else 
    {
        $totalall = $totalall . $f3 ;
    }

    if($f4=="f4" && $totalall!="")
    {
        $totalall = $totalall . "/". $f4 ;
    }
    else 
    {
        $totalall = $totalall . $f4 ;
    }

    if($f4=="")
    {
        if($f1=="f1" && $f2=="f2" && $f3=="f3")
        {
            $totalall = "all";
        }
    }
    if($f1=="f1" && $f2=="f2" && $f3=="f3" && $f4=="f4")
    {
        $totalall = "all";
    }
}





echo $payment; 

if($password !="" && $payment !="")
{
    $mysqlme  = "UPDATE `examapproved` SET `password`='$password',`functionaccess`='$totalall', `status`='yes', `controlstatus`='100', `purchase`='yes', `marketby`='$payment' WHERE ID Like '$myid'";
    mysqli_query($con,$mysqlme); 


    if(!mysqli_error($con))
    {
    echo include 'showandroiduser.php';
    }
    else 
    {
        echo 2; 

    }
}
else 
{
    echo 1; 
}
    ?> 


