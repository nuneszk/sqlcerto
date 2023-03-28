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
<h2>Login</h2>

<form action="" method="post">
  <div class="mb-3">
    <label for="nome" class="form-label">usuario</label>
    <div class="col-sm-10">
    <input type="text"  name="n" class="form-control" id="exampleInputEmail1" >
  </div>
  <div class="mb-3">
    <label for="sobre" class="form-label">Senha</label>
    <div class="col-sm-10">
    <input type="text"  name="s" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
  <button type="submit" class="btn btn-primary">Login</button>
  <div class="col-sm-10">
  </div>
</form>

<?php
include "conexao.php";

$nome = $_POST["n"];
$sobrenome = $_POST["s"];


echo "conectado com sucesso <br>"; 

$sql = "SELECT id FROM usuario
where senha='$nome' 
and usuario='$sobrenome'";
$resultado = $conn->query($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Coleta os dados do formulário
  $nome = $_POST["n"];
  $sobrenome = $_POST["s"];
  

  // Insere os dados no banco de dados
  $sql = "INSERT INTO contato (usuario, senha) VALUES ('$nome', '$sobrenome')";
  if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso"."<br>";
  } else {
    echo "usuario ou senha incorreto " . $conn->error;
  }
}


$conn->close();
?>
<script src="script.js"></script>
</body>
</html>