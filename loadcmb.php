<?php 


function functioncmb() 
{
    include "dbconfig.php"; 
    
    $sql = "Select * from `function` ORDER BY ID ASC"; 
    $dbt = mysqli_query($con,$sql); 

    if(!mysqli_error($con))
    {
        if(mysqli_num_rows($dbt)!=0)
        {
            echo '<option selected value="0">--Select Examination--</option>';
            while($rows = mysqli_fetch_assoc($dbt))
            {
                @$id = $rows['ID']; 
                @$function = $rows['functiontitle'];
                @$conv = ""; 

            
                @$complete = "Function ". $rows['Function'] . ": ".  $rows['viewtype']; 

                echo "<option value='$id'>$complete</option>"; 
    
            }
        }
    }
    else 
    {
        echo mysqli_error($con); 
    }
}



?> 

