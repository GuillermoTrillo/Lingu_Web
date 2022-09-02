<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova PHP</title>
</head>
<body>
    <h3>Cadastro de animais aquáticos Alienígenas</h3>
    <form id="Maria" name="Maria" method="post" action="analiza.php">
        <p>
            <label for="alimento">Forma de se alimentar:</label>
            <input type="text" name="alimento" id="alimento">
        </p>
        <p>
            <label for="nome">Nome do animal:</label>
            <input type="text" name="nome" id="nome">
        </p>
        <p>
            <label for="carapria">Caracteristica propria:</label>
            <input type="text" name="carapria" id="carapria">
        </p>
        <p>
            <input type="submit" name="analizar" id="analizar" value="Analizar">
        </p>
    </form>
</body>
</html>