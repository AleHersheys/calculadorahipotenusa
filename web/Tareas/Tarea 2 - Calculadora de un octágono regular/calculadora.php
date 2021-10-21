<?php
    $lados = null;
    $area = null;
    if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {
        $lados = $_POST['lados'];
        $apotema = $lados/(2*tan(deg2rad(22.5)));
        $perimetro = $lados * 8;
        $area = ($perimetro * $apotema)/2;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de un área de un octágono regular</title>
    <link rel="icon" href="../img/calculator-2017-10-10.png">
</head>
<body>
    <h2 style="text-align: center">CALCULADORA ÁREAS DE OCTÁGONOS REGULARES</h2>
    <h4 style="text-align: center">Esta calculadora le permite determinar el área de un octágono regular en donde usted coloca los valores.</h4>
    <form method="post">
        <table border="1" align="center" margin-right="auto" cellspacing="3" cellpadding="3" style="text-align: left; margin-left: auto; margin-right: auto">
            <tr>
                <td>Lados:</td>
                <td><input type="number" min="1" name="lados"></td>
            </tr>
        </table>
        <table align="center">
            <tr>
                <td><input type="submit" name="btn" value="Calcular"></td>
                <td><input type="reset" name="btn" value="Limpiar"></td>
            </tr>
        </table>
    </form>
    <p style="text-align: center"><?php echo 'Valor del área del octágono regular es de: ' . $area . ".<br/>\n"; ?></p>
    <p style="text-align: center">Lados: <?php echo $lados ?></p>
</body>
</html>