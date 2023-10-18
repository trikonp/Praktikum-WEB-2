<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <form method="post">
    Masukkan Nilai A: <input type="number" name="nilaiA">
    <input type="submit" name="submit" value="Hitung">
    

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $A = (int)$_POST['nilaiA'];

    echo "<br><br>Bilangan A = $A <br>";

    if ($A < 0) {
        echo "Maka Bilangan $A = Bilangan Negatif";
    } elseif ($A > 0) {
        echo "Maka Bilangan $A = Bilangan Positif";
    } else {
        echo "Maka Bilangan $A = Bilangan Nol";
    }
}
?>

</form>

</body>
</html>