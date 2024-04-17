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
        <h1>Atualização de usuário (ID:<?php echo $row['idusuario'];?>)</h1>        
        <form action="processamento/update.php" method="post">
            <input type="hidden" name="idusuario" value="<?php echo $row['idusuario'];?>">
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" class="form-control" value="<?php echo $row['nome'];?>" id="nome" placeholder="Digite seu nome completo" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $row['email'];?>" id="email" placeholder="Digite seu email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" class="form-control" value="<?php echo $row['telefone'];?>" id="telefone" placeholder="Digite seu telefone" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-control" value="<?php echo $row['senha'];?>" id="senha" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn btn-submit">Atualizar</button>
            <a href="index.php">
                <button type="button" class="btn btn-submit">Voltar</button>
            </a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
</body>
</html>