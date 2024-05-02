<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
#Insertar usuario
<body>
<?php
$id = $_GET['id'];
$plato = $_GET['plato'];
$descripcion = $_GET['descripcion'];
$precio = $_GET['precio'];
$categoria = $_GET['categoria'];
?>
    <div>
        <form action="sp_editar.php" method="post">
            <table border="1">
                <tr>
                <td>Ingresar datos:</td>
                <td><input type="text" name="id" id="" style="visibility:hidden" value="<?=$id?>"></td>
                </tr>
                <tr>
                    <td>platos:</td>
                    <td><input type="text" name="plato" id="" value="<?=$plato?>"></td>
                </tr>
                <tr>
                    <td>descripcion:</td>
                    <td><input type="text" name="descripcion" id="" value="<?=$descripcion?>"></td>
                </tr>
                <tr>
                    <td>precio:</td>
                    <td><input type="text" name="precio" id="" value="<?=$precio?>"></td>
                </tr>
                <tr>
                    <td>categoria:</td>
                    <td><input type="text" name="categoria" id="" value="<?=$categoria?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar"></td>
                    <td><a href="index.php">Cancelar</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>