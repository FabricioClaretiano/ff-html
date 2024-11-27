<?php 
session_start();
include 'produtos_controller.php'; 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>
</head>
<body>
    <h2>Cadastro de Produto</h2>
    
    <form method="POST" action="">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" required>
        </div>
        <div>
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" required>
        </div>
        <div>
            <label for="preco">Preço</label>
            <input type="number" step="0.01" name="preco" required>
        </div>
        <div>
            <button type="submit" name="save">Salvar Produto</button>
        </div>
    </form>
</body>
</html>