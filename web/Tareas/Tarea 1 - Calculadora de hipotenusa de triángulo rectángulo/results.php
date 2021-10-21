<?php
    $base = floatval (3);
    $altura = floatval (4);
    $hipotenusa=sqrt($base*$base+$altura*$altura);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Triángulo Rectángulo</title>
    <link rel="icon" href="../img/calculator-2017-10-10.png">
</head>
<body>
    <header>
        <h2 style="text-align: center">CALCULADORA ÉPICA</h2>
        <h4 style="text-align: center">Esta fantástica calculadora le permite únicamente determinar la hipotenusa de un triángulo rectángulo de 3cm x 4cm porque sí, ni más ni menos.</h4>
    </header>
    <form action="">
        <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="3" cellspacing="3">
            <tbody>
                <tr>
                    <td>
                        <label for="base">Base del triangulo rectángulo:</label>
                    </td>
                    <td>
                        <label name="base" type="number">3</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="altura">Altura del triangulo rectángulo:</label>
                    </td>
                    <td>
                        <label name="base" type="number">4</label>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <p style="text-align: center"><?php echo 'Valor de hipotenusa de un triángulo rectángulo de 3cm x 4cm es de: ' . $hipotenusa . ".<br/>\n"; ?></p>
</body>
</html>