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
    <script defer src="https://use.fontawesome.com/releases/v6.2.1/js/all.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v6.2.1/js/fontawesome.js"> </script>
    <title>PCZOU</title>
</head>
<body>
    
    <header class="header">
        <div class="contenedor contenido-header">
            <a href="/">
                <h1>Beats of U <img class="svg" src="/src/img/logo.svg"/></h1>
            </a>
            <nav class="navegacion-principal">
                <a href="navegacion.php">
                    <div class="nav_redirect">Explorar</div>
                    <i class="fa-regular fa-compass"></i>
                </a>
                
                <a href="#openModal">
                    <div class="nav_redirect">Publicar</div>
                    <i class="fa-regular fa-square-plus"></i>
                </a>
                
                <a href="chat.php">
                    <div class="nav_redirect">Mensajes</div>
                    <i class="fa-regular fa-comments"></i>
                </a>
                
                <a href="perfil.php">
                    <i class="fa-regular fa-circle-user user_boton"></i>
                </a>
                
            </nav>
            <!-- <div class="search">
                <input type="text" name="" id="" placeholder="BUSCAR {<i class="fa-solid fa-magnifying-glass"></i>}">
            </div> -->
        </div>
    </header>
    <center>
        <div id="openModal" class="modalDialog center_form">
            <div class="form-body border">
                <img src="https://i.pinimg.com/736x/7c/85/c8/7c85c827af06b19b40ae3a84e3df476d.jpg" alt="user-login">
                <form class="login-form">
                    <input type="text" placeholder="Nombre de usuario"><br>
                    <input type="text" placeholder="Título"><br>
                    <input type="number" placeholder="Donadores"><br>
                    <select name="select">
                        <option hidden value="value1">Tipo de sangre</option>
                        <option value="value2">A+</option>
                        <option value="value3">O+</option>
                        <option value="value3">B+</option>
                        <option value="value3">AB+</option>
                        <option value="value3">A-</option>
                        <option value="value3">O-</option>
                        <option value="value3">B-</option>
                        <option value="value3">AB-</option>
                    </select><br>
                    <input type="text" placeholder="Descripción"><br>
                    <div class="tarjeta__botones">
                        <a href="index.php">Publicar</a>
                    </div>
                </form>
            </div>
    </center>
    
    </div>
    <div class="contenedor">
        <h2 class="h2_section">Form  <i class="fa-solid fa-heart-pulse"></i></h2>
        <div class="contenedor card-post">


    
        </div>
        <h2 class="h2_section"></h2>
        <div class="contenedor">
            <h3>Nombre Usario</h3>
            
        </div>
    </div>
    
   
</body>
</html>