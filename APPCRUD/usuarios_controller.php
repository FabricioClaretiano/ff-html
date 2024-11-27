<?php
include 'db.php';

function saveUser($nome, $telefone, $email, $senha) {
    global $conn;

    // Verifica se o email já existe
    if (!isEmailUnique($email)) {
        $_SESSION['error'] = "Este email já está registrado.";
        return false;
    }

    $hashedPassword = password_hash($senha, PASSWORD_DEFAULT);  // Criptografa a senha

    $stmt = $conn->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $telefone, $email, $hashedPassword);
    return $stmt->execute();
}

function getUsers() {
    global $conn;
    $result = $conn->query("SELECT * FROM usuarios");
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getUser($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function updateUser($id, $nome, $telefone, $email, $senha) {
    global $conn;

    // Verifica se o email já existe
    if (!isEmailUnique($email)) {
        $_SESSION['error'] = "Este email já está registrado.";
        return false;
    }

    $hashedPassword = password_hash($senha, PASSWORD_DEFAULT);  // Criptografa a senha

    $stmt = $conn->prepare("UPDATE usuarios SET nome = ?, telefone = ?, email = ?, senha = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $nome, $telefone, $email, $hashedPassword, $id);
    return $stmt->execute();
}

function deleteUser($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

function isEmailUnique($email) {
    global $conn;
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    return $stmt->num_rows === 0;  // Retorna true se o email for único
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['save'])) {
        if (saveUser($_POST['nome'], $_POST['telefone'], $_POST['email'], $_POST['senha'])) {
            $_SESSION['message'] = "Usuário salvo com sucesso!";
        }
    } elseif (isset($_POST['update'])) {
        if (updateUser($_POST['id'], $_POST['nome'], $_POST['telefone'], $_POST['email'], $_POST['senha'])) {
            $_SESSION['message'] = "Usuário atualizado com sucesso!";
        }
    }
}

// Processamento da exclusão
if (isset($_POST['delete_id'])) {
    if (deleteUser($_POST['delete_id'])) {
        $_SESSION['message'] = "Usuário excluído com sucesso!";
    }
}
?>
