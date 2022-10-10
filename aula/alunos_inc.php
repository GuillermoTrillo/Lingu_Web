<?php
# Página com o formulário para incluir alunos

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar frases</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form name="form">
        <label for="txtNameAluno">Nome do Aluno:</label>
        <input type="text" name="txtNameAluno" maxlength="70">
        <br>

        <label for="txtIdadeAluno">Idade do Aluno:</label>
        <input type="number" name="txtIdadeAluno">
        <br>

        <label for="txtEstranAluno">Estrangeiro:</label>
        <select name="txtEstranAluno">
        <option value="S">Sim</option>
        <option value="N">Não</option>
        </select>
        <br>

        <label for="txtCursoAluno">Curso do Aluno:</label>
        <input type="text" name="txtCursoAluno">
        <br>

        print_r()
    </form>
</body>
</html>