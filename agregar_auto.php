<?php
include("conexion.php");
$marca = $_POST["marca"];
$placas = $_POST["placas"];
$modelo = $_POST["modelo"];
$mma = $_POST["mma"];
$neumaticos = $_POST["neumaticos"];
$motor = $_POST["motor"];
$tipomotor = $_POST["tipomotor"];
$foto = $_POST["foto"];
//Guardar
if(isset($_POST["btnguardar"])){
    $sqlguardar = "INSERT INTO auto(marca, placas, modelo, mma, neumaticos, motor, tipomotor, foto) values ('$marca','$placas','$modelo','$mma','$neumaticos','$motor','$tipomotor','$foto')";
   
    if(mysqli_query($conn, $sqlguardar)){
        echo "<script> alert('Se ha registrado con exito: '); window.location='agregarauto.html'</script>";
    }else{
        
    }

}   