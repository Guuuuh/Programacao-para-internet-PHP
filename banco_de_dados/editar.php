<?php 
    $id = $_GET['id']; 

    require('conexao.php');
    $resultado = mysqli_query($conexao, "SELECT * FROM usuarios WHERE id = $id");
    $usuario = mysqli_fetch_assoc($resultado);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="card m-4 bg-secondary"> 
      <div class="card-body">
        <form action="update.php" method="post">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?=$usuario['nome']?>">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?=$usuario['email']?>">
          </div>
          <div class="mb-3">
            <label for="usuario" class="form-label">Usuário:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" value="<?=$usuario['user']?>">
          </div>
          <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha">
          </div>
          <div class="mb-3 ">
            <input type="submit" class="form-control w-25 bg-primary">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
