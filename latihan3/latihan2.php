```php
<html>

<head>
    <title>Contoh Penggunaan IF</title>
</head>

<body>

<form method="get">
    Besar Pembelian:
    <input type="text" name="total_beli">
    <br><br>

    <input type="submit" value="Tentukan Diskon">
</form>

<?php

if (isset($_GET['total_beli'])) {

    // Mengambil nilai dari form
    $total_beli = intval($_GET['total_beli']);

    // Menentukan diskon
    $diskon = 0;

    if ($total_beli >= 200000) {
        $diskon = 0.10;
    } elseif ($total_beli >= 100000) {
        $diskon = 0.05;
    } else {
        $diskon = 0.01;
    }

    // Menghitung jumlah diskon
    $jumlah_diskon = $diskon * $total_beli;

    // Menghitung jumlah yang harus dibayar
    $pembayaran = $total_beli - $jumlah_diskon;

    // Menampilkan hasil
    printf(
        "Diskon = Rp %s (%s%%)<br>",
        number_format($jumlah_diskon, 0, ',', '.'),
        $diskon * 100
    );

    printf(
        "Pembayaran = Rp %s<br>",
        number_format($pembayaran, 0, ',', '.')
    );
}

?>

</body>
</html>
```
