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

        <label>E-mail: </label><br>
        <input type="email" placeholder="@" name="email" required><br>

        <label>Telefone: </label><br>
         <input type="tel" placeholder="(00) 00000-0000" name="tel""><br>

        <label for="mensagem">Mensagem:</label><br>
         <textarea id="mensagem" name="mensagem" rows="5" cols="100"
         style="resize: none;"></textarea><br>
        
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $tel= $_POST["tel"];
        $mensagem = $_POST["mensagem"];

        echo "<h1>Resultado</h1>";
        echo "Nome do aluno: $nome<br>";
        echo "E-mail do aluno: $email<br>";
        echo "Telefone do aluno: $tel<br>";
        echo "Mensagem do aluno: $mensagem<br>";
    }
    ?>

</body>
</html>
