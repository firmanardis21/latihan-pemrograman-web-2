c```php
<html>

<head>
    <title>Contoh Switch Case</title>
</head>

<body>

<?php

$hari = "Minggu";

switch ($hari) {

    case "Senin":
        print "Senin <br>";
        print "Bekerja";
        break;

    case "Selasa":
        print "Selasa <br>";
        print "Bekerja";
        break;

    case "Rabu":
        print "Rabu <br>";
        print "Bekerja";
        break;

    case "Kamis":
        print "Kamis <br>";
        print "Bekerja";
        break;

    case "Jumat":
        print "Jumat <br>";
        print "Ibadah";
        break;

    case "Sabtu":
        print "Sabtu <br>";
        print "Survey harga ke Dusit, Mangga Dua";
        break;

    case "Minggu":
        print "Minggu <br>";
        print "Jogging bersama";
        break;

    default:
        print "Hari tidak ditemukan";
        break;
}

?>

</body>

</html>
```
