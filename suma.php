<?php
if ($_POST) {
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $suma = $a + $b;
}
?>

<form method="post">
    Número 1: <input type="number" name="num1"><br>
    Número 2: <input type="number" name="num2"><br>
    <input type="submit" value="Sumar">
</form>

<?php
if (isset($suma)) {
    echo "Resultado: " . $suma;
}
?>