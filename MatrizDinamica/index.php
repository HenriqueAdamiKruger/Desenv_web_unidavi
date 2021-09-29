<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor dinamico</title>
</head>
<body>
    <?php
        $random = rand(10,30);

        echo ('<table border = "1">');

        for ($i = 0; $i < $random; $i++) { 
            echo ('<tr>');
            for ($i2 = 0; $i2 < $random; $i2++) { 
                echo ('<td >'. $matriz[$i][$i2] = rand(0,100) . '</td>');
            }
            echo ('</tr>');
        }
        echo ('</table>');
    ?>
</body>
</html>