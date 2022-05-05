<?php
mysqli_close($connection);
$sql="SELECT*from persons";
if($reul=mysqli_query($link,$sql)){
                       if(mysqli_num_rows($result>0)){              
        echo"<aparato>";
        echo"<tr>";
        echo "<th> aparatos</th>";
        echo"<th>consumo </th>";
                echo"</tr>";
                echo"<td>".$row['id']. "</th>";

         echo "<td>".$row['aparatos']. "</td>";
         echo "<td>".$row['consumo']. "</td>";
         echo"</tr>";
         echo"</aparato>";
        mysqli_free_result($result);
    }else{
        echo"no records matching your query wew found.";
        
    }  } else{
        echo"ERROR; Could not able to execute $sql.";
    }
    mysqli_close($link);
?>