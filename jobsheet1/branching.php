<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    
<?php
if (isset($_POST['submit'])) {
    $A = (int)$_POST['nilaiA'];

    echo "Bilangan A = $A <br><br>";

    if ($A < 0) {
        echo "Maka Bilangan $A = Bilangan Negatif";
    } elseif ($A > 0) {
        echo "Maka Bilangan $A = Bilangan Positif";
    } else {
        echo "Maka Bilangan $A = Bilangan Nol";
    }
}
?>

<form method="post" action="">
    Masukkan Nilai A: <input type="text" name="nilaiA">
    <input type="submit" name="submit" value="Hitung">
</form>

</body>
</html>