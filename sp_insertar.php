<?php
$plato = $_POST['plato'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$categoria = $_POST['categoria'];


$cnx = mysqli_connect("localhost", "root", "root", "restaurante");
$sql = "INSERT INTO platos (plato, descripcion, precio, categoria) VALUES('$plato', '$descripcion', '$precio', '$categoria')";
$rta = mysqli_query($cnx, $sql);
if (!$rta){
    echo"No se inserto ningun plato";
}else{
    header("Location: index.php");
}
?>