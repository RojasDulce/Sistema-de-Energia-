<? php
$db['bd_host']="localhost";
$db['db_user']="root";
$db['bd-pass']="";
$db['db_name']="se_system_energy";
foreach($db as $key=$value){
define(strtooper($key=value));
}
$conection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_se_system_energy);
if($connection){
echo"connect"
}
else{
echo"no connect";
}
$sql
    if(!$conn){
        die("Connection failed:".mysqli_connect_error());
        
    }
$sql="INSERT INTO aparato(electrodomestico o electronico, hora de consumo) VALUES('v','p')";
if(mysqli_query($coon,$sqli)){
    echo"New record created successfuly";
}
else{
    echo"Error:".$sql."<br>".mysqli_error($conn);
    
}
mysqli_close($conn);

$sql="SELECT*from persons";
if($reul=mysqli_query($link,$sql)){
    if(mysqli_num_rows($result))>0{
        echo"<aparato>"
        echo"<tr>"
        echo"<th>"id "</th>";
        echo "<th>" electrodomestico o electronico"</th>";
        echo"<th>" hora de consumo "</th>";
                echo"</tr>";
                echo"<td>".$row['id']. "</th>";

         echo "<td>".$row['electrodomestico o electronico']. "</td>";
         echo "<td>".$row['hora de consumo']. "</td>";
         echo"</tr>";
         echo"</aparato>";
        mysqli_free_result($result);
        



    }else{
        echo"no records matching your query wew found.";
        
    }else{
        echo"ERROR; Could not able to execute $sql."mysqli_error($link);
        
    }
    mysqli-_close($link);
}
?>