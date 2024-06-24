<?php 

    include "dbconfig.php"; 
    @$viewtype = $_POST['viewtype']; 

    $sql = "Select * from `competence` Where `viewtype` Like '$viewtype' ORDER BY COMPETENCE ASC"; 
    $dbt = mysqli_query($con,$sql); 

    if(!mysqli_error($con))
    {
        if(mysqli_num_rows($dbt)!=0)
        {
            echo '<option selected value="0">--Select Competence--</option>';
            while($rows = mysqli_fetch_assoc($dbt))
            {
                @$id = $rows['COMPETENCE']; 
                @$function = $rows['functiontitle'];
                @$conv = ""; 

            
                @$complete = "Competence ". $id . ": ".  $rows['STATUS']; 

                echo "<option value='$id'>$complete</option>"; 
    
            }
        }
    }
    else 
    {
        echo mysqli_error($con); 
    }





?> 


