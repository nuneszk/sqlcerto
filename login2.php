<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Regiter</title>
</head>
<body>
<h2>Formulario alunos marta</h2>

<form action="" method="post">
  <div class="mb-3">
    <label for="nome" class="form-label">nome</label>
    <div class="col-sm-10">
    <input type="text"  name="n" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="mb-3">
    <label for="sobre" class="form-label">Sobrenome</label>
    <div class="col-sm-10">
    <input type="text"  name="s" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="telefone"class="form-label">telefone</label>
    <div class="col-sm-10">
    <input type="text"  name="telefone" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
  <button type="submit" class="btn btn-primary">Enviar</button>
  <div class="col-sm-10">

  </div>
</form>
<a href="agenda.php">Click aqui para visualizar seus contatos</a><br>
<?php
include "conexao.php";


 echo "conectado com sucesso <br>"; 
$sql = "SELECT nome, sobrenome, telefone FROM contato";
$resultado = $conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Coleta os dados do formulário
  $nome = $_POST["n"];
  $sobrenome = $_POST["s"];
  $telefone = $_POST["telefone"];

  // Insere os dados no banco de dados
  $sql = "INSERT INTO contato (nome, sobrenome, telefone) VALUES ('$nome', '$sobrenome', '$telefone')";
  if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso"."<br>";
  } else {
    echo "Erro ao inserir dados: " . $conn->error;
  }
}


$conn->close();
?>
<script src="script.js"></script>
</body>
</html>