<?php
function factorial($n) {
    if ($n <= 1) return 1;
    return $n * factorial($n - 1);
}

if ($_POST) {
    $num = $_POST['num'];
    $resultado = factorial($num);
}
?>

<form method="post">
    Número: <input type="number" name="num"><br>
    <input type="submit" value="Calcular">
</form>

<?php
if (isset($resultado)) {
    echo "Factorial: " . $resultado;
}
?>