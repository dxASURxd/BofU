<?php

    $resultadolog = $_GET['resultadolog'] ?? null;

    require 'includes/config/db.php';
    $db = conectarDB();

    $errores = [];


    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $correo = mysqli_real_escape_string($db, filter_var ($_POST['correo'], FILTER_VALIDATE_EMAIL ) );
        $contrasena = mysqli_real_escape_string($db, $_POST['contrasena'] );

        if(!$correo){
            $errores[] = "El correo no es valido";
        }
        if(!$contrasena){
            $errores[] = "La contraseña es obligatoría";
        }

        if(empty($errores)){

            //Admin
            //revisar si el usuario existe
            $query = " SELECT * FROM usuarios WHERE correo = '${correo}' ";
            
            $resultado = mysqli_query($db, $query);

            if( $resultado->num_rows ){
                //Revisar si el contrasena es correcto
                $usuario = mysqli_fetch_assoc($resultado);

                //Verificar el contrasena
                $auth = password_verify($contrasena, $usuario['contrasena']);
                
                if($auth){
                    //El usuario esta autenticado
                    session_start();

                    //Llenar arreglo de sesión
                    $_SESSION['usuario'] = $usuario['nombres'];
                    // $_SESSION['login'] = true;
                    //ejemplo para el rol
                    // $_SESSION['rol'] = $usuario['1 o 2'];

                    header('Location: /index.php');

                } else{
                    $errores[] = "El contrasena es incorrecto";
                }

            }else{
                $errores[] = "El usuario no existe";
            }

        }

    }

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/css/app.css">
    <link rel="shortcut icon" href="/src/img/logo.svg" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v6.2.1/js/all.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v6.2.1/js/fontawesome.js"> </script>
    <title>PCZOU</title>
</head>

<body>

    <div class="">
        <div class="login-box">
            <img src="/src/img/logo.svg" alt="logo">
            <h2>Iniciar Sesión</h2>
            <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
            <?php endforeach; ?>
            <form action="./login.php" method="POST">
                <div class="user-box">
                    <input type="email" name="correo" required>
                    <label>Correo</label>
                </div>
                <div class="user-box">
                    <input type="password" name="contrasena" required>
                    <label>Contraseña</label>
                </div>
                <input type="submit" value="Iniciar sesión" class="tarjeta__botones boton">
                <hr>
                <a href="sign_up.php"> O registrate</a>
            </form>
        </div>
    </div>

</body>

</html>