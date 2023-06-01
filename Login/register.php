<?php
// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores enviados
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // Validar las credenciales de ejemplo (¡personaliza esto según tus necesidades!)
    $validUsername = 'admin';
    $validEmail = 'admin@example.com';
    $validPassword = 'password';

    if ($username === $validUsername) {
        $errorMessage = 'El nombre de usuario ya está en uso.';
    } elseif ($email === $validEmail) {
        $errorMessage = 'El correo electrónico ya está registrado.';
    } elseif ($password !== $confirmPassword) {
        $errorMessage = 'Las contraseñas no coinciden.';
    } else {
        // Registro exitoso, redirig
        // Guardar los datos de registro en una base de datos o en otro sistema de almacenamiento
        // Aquí se omite la implementación real para simplificar el ejemplo

        // Redirigir al usuario a la página de inicio de sesión después del registro exitoso
        header('Location: login.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro - Supermercado</title>
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
        <h2><i class="fas fa-user-plus"></i> Registro</h2>
        <?php if (isset($errorMessage)) { ?>
            <p style="color: red;"><?php echo $errorMessage; ?></p>
        <?php } ?>
        <form action="register.php" method="POST">
            <div class="form-group">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirmar contraseña:</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn" value="Registrarse">
            </div>
        </form>
    </div>
</body>
</html>
