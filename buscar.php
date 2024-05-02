<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $buscar = $_POST['buscar'];
    ?>
    <div>
        <form action="buscar.php" method="post">
            <input type="text" name="buscar" id="" value="<?=$buscar?>">
            <input type="submit" value="Buscar">
            <a href="nuevo.php">Nuevo</a>
        </form>
    </div>


    <div>
        <table border="1">
            <tr>
            <td>id</td>
            <td>plato</td>
            <td>descripcion</td>
            <td>precio</td>
            <td>categoria</td>
            </tr>


            <?php
            $buscar = $_POST['buscar'];
            $cnx = mysqli_connect("localhost", "root", "root", "restaurante");
            $sql = "SELECT id, plato, descripcion, precio, categoria FROM platos where plato like '$buscar' '%' or precio like '$buscar' '%' order by id desc";
            $rta = mysqli_query($cnx, $sql);
            while ($mostrar = mysqli_fetch_row($rta)){
                ?>



                <tr>
                <td><?php echo $mostrar ['0'] ?></td>
                <td><?php echo $mostrar ['1'] ?></td>
                <td><?php echo $mostrar ['2'] ?></td>
                <td><?php echo $mostrar ['3'] ?></td>
                <td><?php echo $mostrar ['4'] ?></td>
                <td>
                    <a href="editar.php?
                    id=<?php echo $mostrar ['0'] ?>&
                    plato=<?php echo $mostrar ['1'] ?>&
                    descripcion=<?php echo $mostrar ['2'] ?>&
                    precio=<?php echo $mostrar ['3']?> &
                    categoria=<?php echo $mostrar ['4'] ?>

                    ">Editar</a>
                    <a href="sp_eliminar.php? id=<?php echo $mostrar ['0'] ?>">Eliminar</a>
                </td>
                </tr>
                <?php
            }        
            ?>   
        </table>
    </div>
</body>
</html>