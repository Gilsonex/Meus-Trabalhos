<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Listagem de Usuários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .table {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Listagem de Usuários</h1>
        <a href="cadastrar.php">
            <button type="button" class="btn btn-success btn-sm">Cadastrar</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php                
                require("processamento/select.php");
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['idusuario'] ?></td>
                    <td><?php echo $row['nome'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['telefone'] ?></td>
                    <td>
                        <?php 
                            if($row['status'])
                                echo "Ativo";
                            else
                                echo "Inativo"; 
                        ?>
                    </td>
                    <td>
                        <a href="visualizar.php?id=<?php echo $row['idusuario'] ?>">
                            <button type="button" class="btn btn-primary btn-sm">Visualizar</button>
                        </a>
                        <a href="editar.php?id=<?php echo $row['idusuario'] ?>">
                            <button type="button" class="btn btn-secondary btn-sm">Editar</button>
                        </a>
                        <a href="processamento/delete.php?id=<?php echo $row['idusuario'] ?>">
                            <button type="button" class="btn btn-danger btn-sm">Deletar</button>
                        </a>
                    </td>
                </tr>          
                <?php                
                }
                ?>
                <!-- Adicione mais usuários conforme necessário -->
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
</body>
</html>