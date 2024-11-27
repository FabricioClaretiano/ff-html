<?php
session_start();

// Verifica se o usuário está logado; caso contrário, redireciona para a página de login
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

include 'usuarios_controller.php';

// Pega todos os usuários para preencher os dados da tabela
$users = getUsers();

// Variável que guarda o ID do usuário que será editado
$userToEdit = null;

// Verifica se existe o parâmetro edit pelo método GET
// e se há um ID para edição de usuário
if (isset($_GET['edit'])) {
    $userToEdit = getUser($_GET['edit']);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Usuários</title>
    <!-- Inclui o CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function clearForm() {
            document.getElementById('nome').value = '';
            document.getElementById('telefone').value = '';
            document.getElementById('email').value = '';
            document.getElementById('senha').value = '';
            document.getElementById('id').value = '';
        }
    </script>
</head>
<body>

<header class="bg-success text-white text-center py-4 mb-4 shadow">
    <h1>Gerenciamento de Usuários</h1>
</header>

<main class="container">
    <h2 class="text-center my-4">Cadastro de Usuários</h2>
    <form method="POST" action="" class="bg-light p-4 rounded shadow-sm">
        <input type="hidden" id="id" name="id" value="<?php echo $userToEdit['id'] ?? ''; ?>">
        
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $userToEdit['nome'] ?? ''; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $userToEdit['telefone'] ?? ''; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $userToEdit['email'] ?? ''; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        
        <div class="form-group">
            <button type="submit" name="save" class="btn btn-success">Salvar</button>
            <button type="submit" name="update" class="btn btn-primary">Atualizar</button>
            <button type="button" onclick="clearForm()" class="btn btn-secondary">Novo</button>
        </div>
    </form>

    <h2 class="text-center my-4">Usuários Cadastrados</h2>
    <table class="table table-bordered table-striped shadow-sm">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['nome']; ?></td>
                    <td><?php echo $user['telefone']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td>
                        <a href="?edit=<?php echo $user['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="?delete=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>

<footer class="bg-success text-white text-center py-3 mt-4">
    <p>CRUD de Usuários &copy; <?php echo date("Y"); ?> - Todos os direitos reservados</p>
</footer>

<!-- Inclui o JavaScript do Bootstrap e dependências -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
