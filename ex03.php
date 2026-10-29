<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Pizzaria Norte</h1>
    
    <form method="POST">
       
    <p>Selecione o tamanho da Pizza:</p>

<div>
  <input type="radio" id="Grande" name="tamanhopizza" value="Grande" checked>
  <label for="Grande">Grande</label>
</div>

<div>
  <input type="radio" id="Média" name="tamanhopizza" value="Média">
  <label for="medium">Média</label>
</div>

<div>
  <input type="radio" id="Pequena" name="tamanhopizza" value="Pequena">
  <label for="Pequena">Pequena</label><br><br>

</div>
<label>Selecione a borda</label><br>
        <select name="borda" id="borda"><br>
            <option value="">Selecione o Borda</option>
            <option value="catupiry">Catupiry</option>
            <option value="cheedar">Cheedar</option>
            <option value="chocolate">Chocolate</option>
            <option value="semborda">Sem borda</option>
        </select><br>


        <p>Selecione o recheio da Pizza:</p>

<div>
  <input type="checkbox" id="Calabresa" name="Calabresa" value="Calabresa" checked>
  <label for="Calabresa">Calabresa</label>
</div>

<div>
  <input type="checkbox" id="Catupiry" name="Catupiry" value="Catupiry">
  <label for="Catupiry">Catupiry</label>
</div>

<div>
  <input type="checkbox" id="Cogumelo" name="Cogumelo" value="Cogumelo">
  <label for="Cogumelo">Cogumelo</label><br><br>


  <label>Nome: </label><br>
        <input type:"text" size="30" name="nome" required></input><br>

        <label>Telefone: </label><br>
         <input type="tel" placeholder="(00) 00000-0000" name="tel""><br>

        <label for="mensagem">Mensagem:</label><br>
         <textarea id="mensagem" name="mensagem" rows="5" cols="40"
         style="resize: none;"></textarea><br>
        
        <button type="submit">Enviar</button> <button type="reset" class="btn-limpar">Limpar Seleção</button>



    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $tel = $_POST["tel"];
        $tamanhopizza= $_POST["tamanhopizza"];
        $borda= $_POST["borda"];
        $mensagem = $_POST["mensagem"];

        echo "<h1>Resultado</h1>";
        echo "Nome do aluno: $nome<br>";
        echo "Telefone do cliente: $tel<br>";
        echo "Mensagem do cliente: $mensagem<br>";
        echo "Borda selecionada: $borda<br>";
        echo "Tamanho da pizza: $tamanhopizza<br>";
    }
    ?>

</body>
</html>