<?php
function fibonacci($n) {
    $serie = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $serie[$i] = $serie[$i-1] + $serie[$i-2];
    }
    return $serie;
}

if ($_POST) {
    $num = $_POST['num'];
    $resultado = fibonacci($num);
}
?>

<form method="post">
    Cantidad de términos: <input type="number" name="num"><br>
    <input type="submit" value="Calcular">
</form>

<?php
if (isset($resultado)) {
    echo "Serie: " . implode(", ", $resultado);
}
?>