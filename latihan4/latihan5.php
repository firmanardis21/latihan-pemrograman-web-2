```php
<!DOCTYPE html>
<html>

<head>
    <title>Latihan PHP Looping</title>
</head>

<body>

    <h2>1. Penggunaan Foreach</h2>

    <?php

    $arr = array("senin", "selasa", "rabu");

    foreach ($arr as $hari) {
        echo "Hari: " . $hari . "<br>";
    }

    ?>


    <hr>


    <h2>2. Perbedaan Break dan Continue</h2>

    <h3>Contoh Break</h3>

    <?php

    for ($i = 1; $i <= 10; $i++) {

        if ($i == 5) {
            break;
        }

        echo $i . "<br>";
    }

    ?>


    <h3>Contoh Continue</h3>

    <?php

    for ($i = 1; $i <= 10; $i++) {

        if ($i == 5) {
            continue;
        }

        echo $i . "<br>";
    }

    ?>


    <hr>


    <h2>3. Tabel Perkalian 1 - 10</h2>

    <table border="1" cellpadding="8" cellspacing="0">

        <tr>
            <th>x</th>

            <?php

            for ($i = 1; $i <= 10; $i++) {
                echo "<th>$i</th>";
            }

            ?>

        </tr>

        <?php

        for ($i = 1; $i <= 10; $i++) {

            echo "<tr>";

            echo "<th>$i</th>";

            for ($j = 1; $j <= 10; $j++) {

                $hasil = $i * $j;

                echo "<td align='center'>$hasil</td>";
            }

            echo "</tr>";
        }

        ?>

    </table>

</body>

</html>
```
