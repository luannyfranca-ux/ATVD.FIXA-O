<!DOCTYPE html>
<html>
<head>
    <title>Soma</title>
</head>
<body>

<form method="post">
    Digite o primeiro valor:
    <input type="number" name="valor1"><br><br>

    Digite o segundo valor:
    <input type="number" name="valor2"><br><br>

    Digite o terceiro valor:
    <input type="number" name="valor3"><br><br>

    <button type="submit">Somar</button>
</form>

<?php

if (isset($_POST["valor1"])) {

    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $valor3 = $_POST["valor3"];

    $soma = $valor1 + $valor2 + $valor3;

    echo "A soma é: $soma";
}

?>

</body>
</html>