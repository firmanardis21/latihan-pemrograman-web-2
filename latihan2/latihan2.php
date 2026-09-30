```php
<html>

<head>
    <title>Daftar Peralatan Yang Dibeli</title>

    <style type="text/css">
        body {
            font-size: 14pt;
        }

        table {
            font-size: 14pt;
        }
    </style>
</head>

<body>

<center>

<font face="comic sans serif" size="5" color="blue">
    Contoh Perhitungan dengan PHP
</font>

<table border="1" cellspacing="0" cellpadding="3">

<tr>
    <td colspan="4" align="center" valign="middle">
        <b>Daftar Pemesanan Peralatan Kantor</b>
    </td>
</tr>

<tr>
    <td><b>Nama Peralatan</b></td>
    <td><b>Jumlah</b></td>
    <td><b>Harga Satuan</b></td>
    <td><b>Jumlah Harga</b></td>
</tr>

<?php

// Data barang
$brg1 = "Pulpen";
$jmlbrg1 = 10;
$harga1 = 3000;
$th1 = $jmlbrg1 * $harga1;

$brg2 = "Buku";
$jmlbrg2 = 5;
$harga2 = 10000;
$th2 = $jmlbrg2 * $harga2;

$brg3 = "Pensil";
$jmlbrg3 = 8;
$harga3 = 2500;
$th3 = $jmlbrg3 * $harga3;

$brg4 = "Penghapus";
$jmlbrg4 = 6;
$harga4 = 2000;
$th4 = $jmlbrg4 * $harga4;

// Total harga
$tharga = $th1 + $th2 + $th3 + $th4;

// Diskon
$diskon = 10;
$tdiskon = $tharga * $diskon / 100;

// Jumlah yang harus dibayar
$tdibayar = $tharga - $tdiskon;

?>

<tr>
    <td align="left"><?php echo $brg1; ?></td>
    <td align="right"><?php echo $jmlbrg1; ?></td>
    <td align="right"><?php echo $harga1; ?></td>
    <td align="right"><?php echo $th1; ?></td>
</tr>

<tr>
    <td align="left"><?php echo $brg2; ?></td>
    <td align="right"><?php echo $jmlbrg2; ?></td>
    <td align="right"><?php echo $harga2; ?></td>
    <td align="right"><?php echo $th2; ?></td>
</tr>

<tr>
    <td align="left"><?php echo $brg3; ?></td>
    <td align="right"><?php echo $jmlbrg3; ?></td>
    <td align="right"><?php echo $harga3; ?></td>
    <td align="right"><?php echo $th3; ?></td>
</tr>

<tr>
    <td align="left"><?php echo $brg4; ?></td>
    <td align="right"><?php echo $jmlbrg4; ?></td>
    <td align="right"><?php echo $harga4; ?></td>
    <td align="right"><?php echo $th4; ?></td>
</tr>

<tr>
    <td colspan="3" align="right">Total Harga</td>
    <td align="right"><?php echo $tharga; ?></td>
</tr>

<tr>
    <td colspan="3" align="right">
        Diskon <?php echo "( $diskon % )"; ?>
    </td>
    <td align="right"><?php echo $tdiskon; ?></td>
</tr>

<tr>
    <td colspan="3" align="right">
        Jumlah harus dibayar
    </td>
    <td align="right"><?php echo $tdibayar; ?></td>
</tr>

</table>

</center>

</body>
</html>
```
