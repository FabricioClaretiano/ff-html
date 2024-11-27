<?php
session_start(); // Inicia a sessão para acessar o nome do usuário
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Conteúdo do seu site -->

    <footer class="bg-dark text-white d-flex align-items-center" style="height: 1cm;">
        <div class="container text-center">
            <p class="mb-0">
                &copy; <?php echo date("Y"); ?> Seu Nome ou Empresa. Todos os direitos reservados.
                <?php if (isset($_SESSION['username'])): ?>
                    | Usuário logado: <?php echo htmlspecialchars($_SESSION['username']); ?>
                <?php endif; ?>
            </p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
