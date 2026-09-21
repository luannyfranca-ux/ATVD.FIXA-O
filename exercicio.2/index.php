<!DOCTYPE html>
<html>
<head>
    <title>Média do aluno</title>
</head>
<body>

<form method="post">
    Nome do aluno:
    <input type="text" name="nome"><br><br>

    Primeira nota:
    <input type="number" step="0.1" name="nota1"><br><br>

    Segunda nota:
    <input type="number" step="0.1" name="nota2"><br><br>

    Terceira nota:
    <input type="number" step="0.1" name="nota3"><br><br>

    <button type="submit">Calcular média</button>
</form>

<?php

if (isset($_POST["nome"])) {

    $nome = $_POST["nome"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    $media = ($nota1 + $nota2 + $nota3) / 3;

    echo "Nome: $nome <br>";
    echo "Média: $media <br>";

    echo $media >= 6 ? "Aprovado!" : "Reprovado!";
}

?>

</body>
</html>