<?php
$id=$_GET['id'];
include("conexion.php");
$sql="delete from usuarios where id='".$id."'";
$resultado=mysqli_query($conexion, $sql);
if($resultado){
    echo "<script language='JavaScript'>
         alert('Los datos fueron eliminados correctamente a la BD');
         location.assign('index.php');
         </script>";
}else{
    echo "<script language='JavaScript'>
         alert('ERROR: Los datos no fueron eliminados correctamente a la BD');
         location.assign('index.php');
         </script>";
}
mysqli_close($conexion);
?>