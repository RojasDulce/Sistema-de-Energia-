<?php include("abrir_conexion.php");


$producto="";
$horas="";


if(isset($POST['btn_consultar']))
{
    $producto=$_POST['aparatos'];
    
    $existe=0;

    if($producto=="")
    {
        echo "el campo es obligatorio";
    }
    else{
    $connection=mysqli_query($connection,"SELECT*FROM aparato where $producto=aparatos'");
    while($consulta=mysqli_fetch_array($connection))
    {
        echo $consulta['producto']."<br>";
        echo $consulta['horas']."<br>";
        $existe++;
        }
        if($existe==0){
            echo "el documento  no existe";
        }      
}
   
  
    
    
    
  }  
if(isset($POST['btn_registrar']))
{
 $aparato=$_POST['aparatos'];
 $consumo=$_POST['consumo'];    
    if($aparato==""||$consumo=="" )
            
    {
        echo"los campos son obligatorios";
    }
    else{
  
    {
mysqli_query($connection, "INSERT INTO $aparato(aparatos,consumo)VALUES('$aparato','$consumo')");
    }     
        
}
}
    
if(isset($POST['btn_actualizar']))
{

 $aparato=$_POST['aparatos'];
 $consumo=$_POST['consumo'];

    if($aparato==""|| $consumo=="" )  
        
    {
        echo"los campos  son obligatorio";
    }
    else{
        $existe=0;
        $connection=mysqli_query($connection,"$ SELECT*FROM $aparato WHERE aparato='$aparatos'");
        while($consulta=mysqli_fetch_array($resultados))
        {
            if($existe==0)
            {
                echo "el documento  no existe";
            }
                else{
                    $_UPDATE_SQL="UPDATE $aparato set aparato='$aparatos', $consumo='consumo' where aparato='aparatos'";
                    mysqli_query($connection,$_UPDATE_SQL);
                    echo"Actualizacion con exito";
                }
        }
  $_UPDATE_SQL="$aparato set aparatos='$aparato', consumo='$consumo' where aparato='aparatos'";
        
    {
mysqli_query($connection, "INSERT INTO aparato(aparatos,consumo)VALUES('$aparato','$consumo')");
    }     
}
 
}



if(isset($POST['btn_eliminar']))
{

    
    $aparato=$_POST['aparatos'];
    $existe=0;
    if($aparato=="" || $consumo=="")
    {
        echo" el documento es obligatorio";
        
    }
    else{
        $connection=mysqli_query($connection,"SELECT*FROM aparato WHERE aparato '$aparatos'");
        while($consulta=mysqli_fetch_array($connection))
        {
            $existe++;
        }
        if($existe=0){
            echo" el documento existe";
            
        }
           else{
            $_DELETE_SQL="DELETE FROM $aparato WHERE aparato='aparatos'";
            mysqli_query($connection, $_DELETE_SQL);
        }
    
}
    }
    include("cerrar_conexion.php");
 ?>