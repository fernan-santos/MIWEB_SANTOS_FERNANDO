<?php
$n = $_POST['n'];
$factorial = 1;

for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
}

echo "El factorial es: " . $factorial;
?>