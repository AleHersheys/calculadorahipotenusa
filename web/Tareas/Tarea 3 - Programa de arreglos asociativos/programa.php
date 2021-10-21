<?php
    $empleados1 = null;
    $empleados2 = null;
    $empleados3 = null;

    if(isset($_POST['btn']) && $_POST['btn'] == 'Guardar') {
        if(isset($_POST['empleado1']) && !empty($_POST['empleado1']) && isset($_POST['empleado2']) && !empty($_POST['empleado2']) && isset($_POST['empleado3']) && !empty($_POST['empleado3'])) {
            $empleados1 = $_POST['empleado1'];
            $empleados2 = $_POST['empleado2'];
            $empleados3 = $_POST['empleado3'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa de arreglos asociativos</title>
    <link rel="icon" href="../img/icon-4399681_1280.png">
</head>
<body>
<h2 style="text-align: center">PROGRAMA DE ARREGLOS ASOCIATIVOS</h2>
    <?php if ($empleados1 != null && $empleados2 != null && $empleados3 != null) : ?>
        <div style="text-align: center; margin-bottom: 50px;">
            <h4>Empleado 1:</h4>
            <p>Nombre: <?= $empleados1['name']; ?></p>
            <p>Apellido: <?= $empleados1['apellido']; ?></p>
            <p>Cédula: <?= $empleados1['id']; ?></p>
            <p>Sueldo: <?= $empleados1['sueldo']; ?></p>
            <p>Apartamento: <?= $empleados1['apartamento']; ?></p>
            <p>Lugar de trabajo: <?= $empleados1['trabajo']; ?></p>
        </div>
        <div style="text-align: center; margin-bottom: 50px;">
            <h4>Empleado 2:</h4>
            <p>Nombre: <?= $empleados2['name']; ?></p>
            <p>Apellido: <?= $empleados2['apellido']; ?></p>
            <p>Cédula: <?= $empleados2['id']; ?></p>
            <p>Sueldo: <?= $empleados2['sueldo']; ?></p>
            <p>Apartamento: <?= $empleados2['apartamento']; ?></p>
            <p>Lugar de trabajo: <?= $empleados2['trabajo']; ?></p>
        </div>
        <div style="text-align: center; margin-bottom: 50px;">
            <h4>Empleado 3:</h4>
            <p>Nombre: <?= $empleados3['name']; ?></p>
            <p>Apellido: <?= $empleados3['apellido']; ?></p>
            <p>Cédula: <?= $empleados3['id']; ?></p>
            <p>Sueldo: <?= $empleados3['sueldo']; ?></p>
            <p>Apartamento: <?= $empleados3['apartamento']; ?></p>
            <p>Lugar de trabajo: <?= $empleados3['trabajo']; ?></p>
        </div>
    <?php else:?>
            <form method="post">
        <?php 
            for ($i = 0; $i < 3; $i++) {
        ?>
        <table border="1" align="center" margin-right="auto" cellspacing="3" cellpadding="3" style="text-align: left; margin-left: auto; margin-right: auto">
            <h4 style="text-align: center">Empleado <?php echo $i+1; ?></h4>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" required name="empleado<?php echo $i+1; ?>[name]"></td>
            </tr>
            <tr>
                <td>Apellido:</td>
                <td><input type="text" required name="empleado<?php echo $i+1; ?>[apellido]"></td>
            </tr>
            <tr>
                <td>Cédula:</td>
                <td><input type="number" required name="empleado<?php echo $i+1; ?>[id]" min="1"></td>
            </tr>
            <tr>
                <td>Sueldo:</td>
                <td><input type="number" required name="empleado<?php echo $i+1; ?>[sueldo]" min="1"></td>
            </tr>
            <tr>
                <td>Aparamento:</td>
                <td><input type="text" required name="empleado<?php echo $i+1; ?>[apartamento]"></td>
            </tr>
            <tr>
                <td>Lugar de trabajo:</td>
                <td><input type="text" required name="empleado<?php echo $i+1; ?>[trabajo]"></td>
            </tr>
        </table>
        <?php }?>
        <table align="center" style="margin-top:20px">
            <tr>
                <td><input type="submit" name="btn" value="Guardar"></td>
            </tr>
        </table>
    </form>
    <?php endif; ?>
</body>
</html>