<!DOCTYPE html>
<html>

<body>

    <?php
    $jam = date("H");
    echo "<p>Jam (dari server) saat ini adalah " . $jam;
    echo ", dan akan memberikan pesan sebagai berikut:</p>";

    if ($jam < "6") {
        echo "Sudah larut malam, tidur yuk!";
    } elseif ($jam < "12") {
        echo "Waktunya beraktivitas!";
    } elseif ($jam < "18") {
        echo "Selamat beristirahat siang!";
    } else {
        echo "Saatnya bersantai di malam hari!";
    }
    ?>

</body>

</html>