<?php
$id = $_POST['id'];
$plato = $_POST['plato'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$categoria = $_POST['categoria'];


$cnx = mysqli_connect("localhost", "root", "root", "restaurante");
$sql = "UPDATE platos set plato='$plato', descripcion='$descripcion', precio='$precio', categoria='$categoria' where id like $id";
$rta = mysqli_query($cnx, $sql);
if (!$rta){
    echo"No se Actualizo el plato";
}else{
    header("Location: index.php");
}
?>