<?php
// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores enviados
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Comprobar las credenciales de ejemplo (¡personaliza esto según tus necesidades!)
    $validUsername = 'admin';
    $validPassword = 'password';

    if ($username === $validUsername && $password === $validPassword) {
        // Autenticación exitosa, redirigir al usuario a la página de inicio
        header('Location: index.php');
        exit;
    } else {
        // Autenticación fallida, mostrar mensaje de error
        $errorMessage = 'Credenciales inválidas. Por favor, inténtalo de nuevo.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión - Supermercado</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #f1f1f1;
}

.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
    color: #555;
}

input[type="text"],
input[type="password"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.btn {
    display: inline-block;
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    text-align: center;
    transition: background-color 0.3s;
    border: none;
    cursor: pointer;
}

.btn:hover {
    background-color: #45a049;
}

.fa-lock,
.fa-user-plus {
    margin-right: 5px;
}

.error-message {
    color: red;
    margin-top: 10px;
    text-align: center;
}

    </style>
</head>
<body>
    <div class="container">
        <h2><i class="fas fa-lock"></i> Iniciar Sesión</h2>
        <?php if (isset($errorMessage)) { ?>
            <p style="color: red;"><?php echo $errorMessage; ?></p>
        <?php } ?>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn" value="Iniciar Sesión">
            </div>
        </form>
    </div>
</body>
</html>
