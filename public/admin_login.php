<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Administrador · Global Car Metepec</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- HOJA DE ESTILOS CON VERSIÓN PARA ROMPER CACHÉ (v6) -->
    <link rel="stylesheet" href="assets/css/admin.css?v=6">
</head>
<body>
    <div class="login-container">
        <div class="login-box" style="position: relative;">
            <!-- Flecha para volver al inicio (ruta relativa corregida para XAMPP) -->
            <a href="../index.php" style="position: absolute; top: 20px; left: 20px; color: #c9a74d; font-size: 1.5rem; text-decoration: none;">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div class="login-header">
                <i class="fas fa-crown" style="color: #c9a74d;"></i>
                <h2>Global Car Metepec</h2>
                <p>Acceso exclusivo para administradores</p>
            </div>
<<<<<<< HEAD

            <?php if (isset($error)): ?>
                <div class="error-message">
                    <i class="fas fa-exclamation-circle"></i> <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <form method="post" action="">
                <!-- Campo de usuario con mayor separación inferior -->
                <div class="form-group" style="margin-bottom: 35px;">
                    <label><i class="fas fa-user" style="color: #c9a74d;"></i> USUARIO</label>
=======
            
            <div id="error-message" class="error-message" style="display: none;"></div>
            
            <form method="post">
                <div class="form-group">
                    <label for="username">USUARIO</label>
>>>>>>> 954410783ea690ab57c66da374f860dba3801cfa
                    <div class="input-wrapper">
                        <i class="fas fa-user" style="color: #c9a74d;"></i>
                        <input type="text" name="username" required placeholder="Ingresa tu usuario">
                    </div>
                </div>

                <div class="form-group">
                    <label><i class="fas fa-lock" style="color: #444;"></i> CONTRASEÑA</label> <!-- Candado gris oscuro (#444) -->
                    <div class="input-wrapper">
                        <i class="fas fa-lock" style="color: #444;"></i> <!-- Candado gris oscuro -->
                        <input type="password" name="password" id="password" required placeholder="••••••••">
                        <i class="fas fa-eye toggle-password" onclick="togglePassword()"></i>
                    </div>
                </div>

                <button type="submit" name="login" class="btn-login">
                    <i class="fas fa-sign-in-alt"></i> INGRESAR AL PANEL
                </button>
            </form>
<<<<<<< HEAD
=======
            
            <div style="margin-top:20px; text-align:center; font-size:0.8rem; color:var(--gray);">
                <i class="fas fa-shield-alt"></i> Acceso restringido
            </div>
>>>>>>> 954410783ea690ab57c66da374f860dba3801cfa
        </div>
    </div>

    <script>
        // Función para mostrar u ocultar la contraseña escrita
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.querySelector('.toggle-password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
<<<<<<< HEAD
=======
        
        // Inyecta el mensaje de error de PHP en caso de credenciales inválidas
        <?php if (isset($error)): ?>
        document.getElementById('error-message').style.display = 'block';
        document.getElementById('error-message').innerText = '<?php echo addslashes($error); ?>';
        <?php endif; ?>
>>>>>>> 954410783ea690ab57c66da374f860dba3801cfa
    </script>
</body>
</html>
