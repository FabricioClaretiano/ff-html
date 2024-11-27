<?php
// Verifica se a sessão não foi iniciada antes de chamar session_start()
if (session_status() == PHP_SESSION_NONE) {
    session_start();  // Inicia a sessão se ainda não foi iniciada
}

// Seu código do controlador de produtos aqui


include 'db.php';

// Função para salvar um novo produto
function saveProduct($nome, $descricao, $marca, $modelo, $valorUnitario, $categoria) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO produtos (nome, descricao, marca, modelo, valorUnitario, categoria) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssds", $nome, $descricao, $marca, $modelo, $valorUnitario, $categoria);
    return $stmt->execute();
}

// Função para obter todos os produtos
function getProducts() {
    global $conn;
    $result = $conn->query("SELECT * FROM produtos");
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Função para obter um produto por ID
function getProduct($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM produtos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

// Função para atualizar um produto
function updateProduct($id, $nome, $descricao, $marca, $modelo, $valorUnitario, $categoria) {
    global $conn;
    $stmt = $conn->prepare("UPDATE produtos SET nome = ?, descricao = ?, marca = ?, modelo = ?, valorUnitario = ?, categoria = ? WHERE id = ?");
    $stmt->bind_param("ssssdsi", $nome, $descricao, $marca, $modelo, $valorUnitario, $categoria, $id);
    return $stmt->execute();
}

// Função para excluir um produto
function deleteProduct($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM produtos WHERE id = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

// Processamento de dados do formulário (criar ou editar produto)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['save'])) {
        saveProduct($_POST['nome'], $_POST['descricao'], $_POST['marca'], $_POST['modelo'], $_POST['valorUnitario'], $_POST['categoria']);
    } elseif (isset($_POST['update'])) {
        updateProduct($_POST['id'], $_POST['nome'], $_POST['descricao'], $_POST['marca'], $_POST['modelo'], $_POST['valorUnitario'], $_POST['categoria']);
    }
}

// Exclusão de produto
if (isset($_GET['delete'])) {
    deleteProduct($_GET['delete']);
}
?>