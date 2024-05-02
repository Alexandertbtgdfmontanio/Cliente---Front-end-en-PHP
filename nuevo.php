<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
#Insertar plato
<body>
    <div>
        <form action="sp_insertar.php" method="post">
            <table border="1">
                <tr>
                <td>Ingresar datos:</td>
                </tr>
                <tr>
                    <td>plato:</td>
                    <td><input type="text" name="plato" id=""></td>
                </tr>
                <tr>
                    <td>descripcion:</td>
                    <td><input type="text" name="descripcion" id=""></td>
                </tr>
                <tr>
                    <td>precio:</td>
                    <td><input type="text" name="precio" id=""></td>
                </tr>
                <tr>
                    <td>categoria:</td>
                    <td><input type="text" name="categoria" id=""></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Guardar"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>