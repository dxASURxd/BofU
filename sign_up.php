<?php
    // BD
    require './includes/config/db.php';
    $db = conectarDB();

    //validador en caso de errores
    $errores = [];
    
    $nombres = ' ';
    $apellidop = ' ';
    $apellidom = ' ';
    $born = ' ';
    $typablod = ' ';
    $peso = ' ';
    $sexo = ' ';
    $pais = ' ';
    $municipio = ' ';
    $estado = ' ';
    $cp = ' ';
    $correo = ''; 
    $contrasena = '';        
    $telefono = '';
    
    if( $_SERVER['REQUEST_METHOD'] === 'POST'){

        $nombres = mysqli_real_escape_string( $db, $_POST['nombres'] );
        $apellidop = mysqli_real_escape_string( $db, $_POST['apellidop']);
        $apellidom = mysqli_real_escape_string( $db, $_POST['apellidom']);
        $born = mysqli_real_escape_string( $db, $_POST['born']);
        $typablod = mysqli_real_escape_string( $db, $_POST['typablod']);
        $peso = mysqli_real_escape_string( $db, $_POST['peso']);
        $sexo = mysqli_real_escape_string( $db, $_POST['sexo']);
        $pais = mysqli_real_escape_string( $db, $_POST['pais']);
        $municipio = mysqli_real_escape_string( $db, $_POST['municipio']);
        $estado = mysqli_real_escape_string( $db, $_POST['estado']);
        $cp = mysqli_real_escape_string( $db, $_POST['cp']);
        $correo = mysqli_real_escape_string( $db, $_POST['correo']);
        $contrasena = mysqli_real_escape_string( $db, $_POST['contrasena']);
        $telefono = mysqli_real_escape_string( $db, $_POST['telefono']);

        $passwordHash = password_hash($contrasena, PASSWORD_BCRYPT);

        // Asignar files hacia una variable
        $imagen = $_FILES['imagen'];

        if(!$nombres) {
            $errores[] = "El nombre es obligatorio!";
        }
        if(!$apellidop) {
            $errores[] = "El apellido paterno es obligatorio!";
        }
        if(!$apellidom) {
            $errores[] = "El apellido materno es obligatorio!";
        }
        if(!$born) {
            $errores[] = "La fecha de nacimiento es obligatoria!";
        }
        if(!$typablod) {
            $errores[] = "El tipo de sangre es obligatorio!";
        }
        if(!$peso) {
            $errores[] = "El peso es obligatorio!";
        }
        if(!$sexo) {
            $errores[] = "El sexo se requiere!";
        }
        if(!$pais) {
            $errores[] = "El pais es obligatorio!";
        }
        if(!$municipio) {
            $errores[] = "El Municipio es obligatorio!";
        }
        if(!$estado) {
            $errores[] = "La estado es obligatorio!";
        }
        if(!$cp) {
            $errores[] = "El cp es necesario!";
        }
        if(!$correo) {
            $errores[] = "El correo es obligatorio!";
        }
        if(!$contrasena) {
            $errores[] = "La contraseña es obligatoria!";
        }
        if(!$telefono) {
            $errores[] = "El telefono es oblicagorio!";
        }

        if(!$imagen['name'] || $imagen['error'] ) {
            $errores[] = 'La Imagen es Obligatoria';
        }

        // Validar por tamaño 4mb máximo)
        $medida = 5000 * 5000;
        //verificador del tamaño
        if($imagen['size'] > $medida ) {
            $errores[] = 'La Imagen es muy pesada';
        }

        //revisar que no haya errores ($error[] vacio)
        if(empty($errores)){

            /** SUBIDA DE ARCHIVOS */
            // Crear carpeta para imagenes
            $carpetaImagenes = './src/img';

            if(!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }

            // Generar un nombre único
            $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

            // Subir la imagen
            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen );

            //insertar a la BD
            $query = " INSERT INTO usuarios (nombres, apellidop, apellidom, born, typablod, peso, sexo, pais, municipio, estado, cp, correo, contrasena, telefono, imagen) VALUES ( '$nombres', '$apellidop', '$apellidom', '$born', '$typablod', '$peso', '$sexo', '$pais', '$municipio', '$estado', '$cp', '$correo', '${passwordHash}', '$telefono', '$nombreImagen')";

            // pa pruebaszzz
            // echo $query;
            // exit;
        
            $resultado = mysqli_query($db, $query);
            if($resultado) {
                // Redireccionar al usuario.
                header('Location: /login.php?resultadolog=1');
            }
        } else{
            $errores[] = "Todos los campos son obligatorios";
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

    <div class="contenedor">
        <div class="login-box">
            <img src="/src/img/logo.svg" alt="logo">
            <h2>Registro</h2>
            <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
            <?php endforeach; ?>
            
            <form class="grid_form" action="./sign_up.php" method="POST" enctype="multipart/form-data">
                <div class="user-box user_name">
                    <input type="text" name="nombres" required="">
                    <label>Nombre(s)</label>
                </div>
                <div class="user-box user_ap">
                    <input type="text" name="apellidop" required="">
                    <label>Primer Apellido</label>
                </div>
                <div class="user-box user_apm">
                    <input type="text" name="apellidom" required="">
                    <label>Segundo Apellido</label>
                </div>
                <div class="user-box user_date">
                    <input type="date" name="born" required="">
                    <label>Fecha de nacimiento</label>
                </div>
                <div class="user-box user_blood">
                    <input type="text" name="typablod" required="">
                    <label>Tipo sanguineo</label>
                </div>
                <div class="user-box user_peso">
                    <input type="text" name="peso" required="">
                    <label>Peso</label>
                </div>
                <div class="user-box user_sexo">
                    <input type="text" name="sexo" required="">
                    <label>Sexo</label>
                </div>
                <div class="user-box user_pais">
                    <input type="text" name="pais" required="">
                    <label>Pais</label>
                </div>
                <div class="user-box user_municipio">
                    <input type="text" name="municipio" required="">
                    <label>Municipio</label>
                </div>
                <div class="user-box user_estado">
                    <input type="text" name="estado" required="">
                    <label>Estado</label>
                </div>
                <div class="user-box user_cp">
                    <input type="text" name="cp" required="">
                    <label>Codigo postal</label>
                </div>
                <div class="user-box user_correo">
                    <input type="text" name="correo" required="">
                    <label>Correo</label>
                </div>
                <div class="user-box user_telefono">
                    <input type="text" name="telefono" required="">
                    <label>Telefono</label>
                </div>
                <div class="user-box user_pass">
                    <input type="text" name="contrasena" required="">
                    <label>Contraseña</label>
                </div>
                <div class="user-box user_password">
                    <input type="text" name="" required="">
                    <label>Repite tu contraseña</label>
                </div>
                
                <div class="user-box user_foto">
                    <label for="imagen">Imagen</label>
                    <input name="imagen" type="file" id="imagen" accept="image/jpeg, image/png">
                </div>

                <input type="submit" value="Registrar" class="tarjeta__botones">

            </form>
        </div>
    </div>

</body>

</html>