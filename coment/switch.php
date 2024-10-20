<!DOCTYPE html>
<html>

<body>

    <?php
    $buahFavorit = "apel";

    switch ($buahFavorit) {
        case "apel":
            echo "Buah favoritmu adalah apel!";
            break;
        case "pisang":
            echo "Buah favoritmu adalah pisang!";
            break;
        case "jeruk":
            echo "Buah favoritmu adalah jeruk!";
            break;
        default:
            echo "Buah favoritmu bukan apel, pisang, atau jeruk!";
    }
    ?>

</body>

</html>