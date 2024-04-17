<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro de Usuário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .btn-submit {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            include("processamento/selectid.php");
            $row = mysqli_fetch_assoc($result);
        ?>
        <h1>Visualizar usuário (ID:<?php echo $row['idusuario'];?>)</h1>                
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" class="form-control" id="nome" value="<?php echo $row['nome'];?>" disabled>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="<?php echo $row['email'];?>" disabled>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" class="form-control" id="telefone" value="<?php echo $row['telefone'];?>" disabled>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-control" id="senha" value="<?php echo $row['senha'];?>" disabled>
            </div>            
            <a href="index.php">
                <button type="button" class="btn btn-submit">Voltar</button>
            </a>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
</body>
</html>