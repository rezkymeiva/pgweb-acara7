<!DOCTYPE html>
<html>

<body>

    <?php
    // contoh fungsi:
    function salam()
    {
        echo "Teks ini berasal dari fungsi salam";
    }

    // membuat array:
    $kumpulan = array("Sepeda", 10, ["mangga", "jeruk"], "salam");

    // memanggil fungsi dari elemen array:
    call_user_func($kumpulan[3]);
    ?>

</body>

</html>