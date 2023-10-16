<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <form method="post" action="">
        Masukan Panjang : <input type="number" name="panjang"><br><br>
        Masukan Lebar : <input type="number" name="lebar"><br><br>
        Masukan Jari-Jari : <input type="number" name="jari"><br><br>
        <input type="submit" name="submit" value="submit"><br><br>
    </form>

    <?php 
    $p=0;
    $l=0;
    $r=0;

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $p = (int)$_POST["panjang"];
        $l = (int)$_POST["lebar"];
        $r = (int)$_POST["jari"];
    }

    function persegi_panjang($p, $l){
        return $p * $l;
    }

    function lingkaran($r){
        return 3.14 * $r * $r;
    }

    echo "Luas Persegi Panjang = " .persegi_panjang($p, $l);
    echo "<br>Luas Lingkaran = " .lingkaran($r);

    ?>
</body>
</html>