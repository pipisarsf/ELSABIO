<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content= "IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="assets/images/logo.png" type="image/png">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="assets/css/styles.css">
   <!-- <script src="assets/js/usuario.js" defer></script> -->
   <!-- <script src="assets/js/script.js" defer></script> <!-- Defer asegura que el script se ejecute después de la carga del DOM -->
</head>
<body>
    <div class="form-body">
        <img src="assets/images/logo.png" alt="logo institucional">
        <p class="text">Iniciar sesión</p> 
        <form method="post" autocomplete="on"> <!-- Verifica la clase -->
            <input type="text" id="username" name="name" placeholder="Nombre de usuario" required>
            <input type="email" id="email" name="email" placeholder="Correo Electrónico" required>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>


            <a href="#">Olvidé mi contraseña</a>
          
            <!--BOTONES-->
            <button type="submit" name="send" value= "Registro">Registrarse</button>
            <button type="submit">Iniciar sesión</button>
        </form>
      
      <?php
            include ("send.php");
        ?>
    </div>
</body>
</html>
