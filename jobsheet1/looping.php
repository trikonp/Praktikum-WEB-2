<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>

<body>
    <?php

    echo "Bilangan Ganjil <= 10 (perulangan For) </br>";
    for ($a = 1; $a <= 10; $a += 2)
        echo " $a </br>";

    echo "</br>Bilangan Genap <= 10 (perulangan While) </br>";
    $b = 2;
    while ($b <= 10) {
        echo "$b </br>";
        $b += 2;
    }

    echo "</br>Bilangan Prima < 20 (perulangan Do While) </br>";
    $Angka = 2;
    do {
        $isPrima = true;

        for ($c = 2; $c * $c <= $Angka; $c++) {
            if ($Angka % $c == 0) {
                $isPrima = false;
                break;
            }
        }

        if ($isPrima) {
            echo "$Angka </br>";
        }

        $Angka++;
    } while ($Angka < 20);



    ?>
</body>

</html>