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
        $matriz = array();

        echo ('<table>');

        for ($i = 0; $i < $random; $i++) { 
            echo ('<tr style="border: 1px solid black;">');
            for ($i2 = 0; $i2 < $random; $i2++) { 
                $matriz[$i][$i2] = rand(0,100);
                echo ('<td style="border: 1px solid black;">');
                echo ($matriz[$i][$i2]);
                echo ('</td>');
            }
            echo ('</tr>');
        }
           
        echo ('</table>');
    ?>
</body>
</html>