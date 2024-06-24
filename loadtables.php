<?php 
function questionlist($view,$comp,$mysearch)
{
    
    include 'dbconfig.php'; 
    include 'loadmodules.php'; 
    @$viewtype = $view;
    @$competence = $comp; 
    @$search  = $mysearch; 

    if(trim($search)=="")
    {
        $sql = "SELECT * from `preboard` Where `viewtype` Like '$viewtype' and `competence` Like '$competence' ORDER BY ID DESC"; 
    }
    else 
    {
        
        @$searcharray = explode(" ",$search); 
        @$collectedstring = ""; 


        foreach($searcharray as &$value)
        {
            $collectedstring = $collectedstring .  " AND `question` Like '%" . $value . "%'";
        }

        $sql = "SELECT * from `preboard` Where `question` Like '%$searcharray[0]%' $collectedstring ORDER BY ID DESC"; 

    }
    
    $dbt = mysqli_query($con,$sql); 
   // echo $sql; 
   $count = 0;
    if (!mysqli_error($con)) 
    {
        if(mysqli_num_rows($dbt)!=0)
        {
            @$mytotal = mysqli_num_rows($dbt); 
            echo "<tr><td colspan='11' class='bg-warning'> TOTAL COUNT: " . $mytotal . "</td></tr>";
            while($rows = mysqli_fetch_assoc($dbt))
            {
                @$count +=1;
                @$delid = '"'. $rows['ID']  .'"'; 
                @$delname = '"'. $rows['VIEWTYPE']  .'"'; 
                @$delquestion = '"'. $rows['QUESTION']  .'"'; 
                @$deltitle = '"'. $rows['QUESTION']  .'"'; 
                echo "<tr id='". $rows['ID'] ."row'>"; 
              
                echo "<td>" . $rows['ID'] . "</td>"; 
                echo "<td>" . $rows['VIEWTYPE']. " - C". $rows['COMPETENCE'] . "</td>"; 
                echo "<td id='". $rows['ID'] ."question'>" . $rows['QUESTION'] . "</td>"; 
                echo "<td id='". $rows['ID'] ."c1'>" . $rows['C1'] . "</td>"; 
                echo "<td id='". $rows['ID'] ."c2'>" . $rows['C2'] . "</td>"; 
                echo "<td id='". $rows['ID'] ."c3'>" . $rows['C3'] . "</td>"; 
                echo "<td id='". $rows['ID'] ."c4'>" . $rows['C4'] . "</td>";
                echo "<td id='". $rows['ID'] ."questiontype'>" . $rows['questiontype'] . "</td>"; 
                echo "<td id='". $rows['ID'] ."dateinsert'>" . loadregistrationtocompletedate($rows['dateinsert']). "</td>"; 
                echo "<td id='". $rows['ID'] ."insertby'>" . $rows['insertby'] . "</td>"; 
                
                    echo "<td>";
                    echo "<button class='btn btn-warning' id='". $rows['ID'] ."btnedit' onclick='editquestion($delid,$delname)'>Edit</button>"; 
                    echo "<button class='btn btn-danger' id='". $rows['ID'] ."btndelete' style='margin-left:10px;' onclick='deletequizlist($delid,$delquestion)'>Delete</button></td>"; 
               
               
              
               echo "</tr>"; 
    
            }
    
    
        }
        else 
        {
            echo "<tr><td>No Data to show</td></tr>"; 
        }
    
    }
    else 
    {
        echo mysqli_error($con);
    }
}



?>