<!DOCTYPE html>
<html>
<body>

<?php
$snack = array("dimsum", "burger", "chiki", "martabak", "risol");
$drink = array("es teh", "chatime", "es coklat");
$fruits = array("apel", "mangga", "jeruk", "Nanas", "Pear");
$SIG = array("AS", "IDS", "PGWEB", "PGPB", "Kartografi");
$Yogyakarta = array("Sleman", "Bantul", "Gunung Kidul", "Kulon Progo");

// Temukan jumlah maksimum dari semua array untuk menghindari indeks yang keluar dari batas
$maxCount = max(count($snack), count($drink), count($fruits), count($SIG), count($Yogyakarta));

echo "<table border='1'>";
echo "<tr><th>Snack</th><th>Drink</th><th>Fruits</th><th>SIG</th><th>Yogyakarta</th></tr>";

for ($i = 0; $i < $maxCount; $i++) {
    echo "<tr>";

    // Tampilkan snack
    echo "<td>";
    if ($i < count($snack)) {
        echo $snack[$i];
    } else {
        echo "";
    }
    echo "</td>";

    // Tampilkan drink
    echo "<td>";
    if ($i < count($drink)) {
        echo $drink[$i];
    } else {
        echo "";
    }
    echo "</td>";

    // Tampilkan fruits
    echo "<td>";
    if ($i < count($fruits)) {
        echo $fruits[$i];
    } else {
        echo "";
    }
    echo "</td>";

    // Tampilkan SIG
    echo "<td>";
    if ($i < count($SIG)) {
        echo $SIG[$i];
    } else {
        echo "";
    }
    echo "</td>";

    // Tampilkan Yogyakarta
    echo "<td>";
    if ($i < count($Yogyakarta)) {
        echo $Yogyakarta[$i];
    } else {
        echo "";
    }
    echo "</td>";

    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
