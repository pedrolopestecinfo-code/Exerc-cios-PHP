<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Cadastro do Aluno<h1>
    
    <form method="POST">
       
        <label>Nome: </label><br>
        <input type:"text" size="40" name="nome" required></input><br>

        <label>Turma: </label><br>
        <input type:"text" size="40" name="turma" required></input><br>

        <label>Idade: </label><br>
        <input type="number" min="0" max="100" name="idade"><br> 
        
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $turma = $_POST["turma"];
        $idade = $_POST["idade"];

        echo "<h1>Resultado</h1>";
        echo "Nome do aluno: $nome<br>Turma do aluno: $turma<br>Idade do Aluno: $idade";

    }
    ?>

</body>
</html>
