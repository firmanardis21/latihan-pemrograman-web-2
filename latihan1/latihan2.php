<?php

$A = 123; // variable global

function Test()
{
    global $A; // menggunakan variable global $A

    echo "Nilai A dalam fungsi = $A <br>";
}

Test();

echo "Nilai A luar fungsi = $A <br>";

?>