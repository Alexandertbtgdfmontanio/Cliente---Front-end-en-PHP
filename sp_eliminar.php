<?php
$id = $_GET['id'];

$cnx = mysqli_connect("localhost", "root", "root", "restaurante");
$sql = "DELETE FROM platos where id like $id";
$rta = mysqli_query($cnx, $sql);
if (!$rta){
    echo"No se Elimino el plato";
}else{
    header("Location: index.php");
}
?>