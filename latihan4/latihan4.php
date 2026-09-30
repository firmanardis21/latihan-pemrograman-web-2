```php
<?php

for ($i = 1; $i < 11; $i++) {

    if ($i % 2 == 0) {
        continue;
    } else {
        echo $i;
    }

}

?>
```

### Hasil output

```text
13579
```

Kalau ingin setiap angka tampil di baris baru, lebih bagus menggunakan:

```php
<?php

for ($i = 1; $i < 11; $i++) {

    if ($i % 2 == 0) {
        continue;
    } else {
        echo $i . "<br>";
    }

}

?>
```

Hasilnya:

```text
1
3
5
7
9
```

### Cara kerja `continue`

Bagian ini:

```php
if ($i % 2 == 0) {
    continue;
}
```

berarti **jika `$i` adalah angka genap, lewati perulangan tersebut**.

Urutannya:

```text
1 → tampil
2 → dilewati
3 → tampil
4 → dilewati
5 → tampil
6 → dilewati
7 → tampil
8 → dilewati
9 → tampil
```
