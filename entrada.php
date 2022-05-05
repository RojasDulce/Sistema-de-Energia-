<?php
//create connection
$conn=new mysqli($localhost,$root,"", se);
//check connection
if($conn->connect_error){
    die("connection failed:".$conn->connect-error);
}
$sql="INSET INTO aparato (nombre,consumo)
values('tv','30')";
if($conn->query($sql)===TRUE){
echo "new record created successfully";
}else{
echo "error:".$sql."<br>".$conn->error;
}
$conn->close();
?>