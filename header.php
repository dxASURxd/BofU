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
                <form class="login-form" action="" method="">
                    <input type="text" placeholder="Nombre de usuario"><br>
                    <input type="text" placeholder="Título"><br>
                    <input type="number" placeholder="Donadores"><br>
                    <select name="select">
                        <option hidden value="value1">Tipo de sangre</option>
                        <option value="A+">A+</option>
                        <option value="O+">O+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="A-">A-</option>
                        <option value="O-">O-</option>
                        <option value="B-">B-</option>
                        <option value="AB-">AB-</option>
                    </select><br>
                    <input type="text" placeholder="Descripción"><br>
                    <div class="tarjeta__botones">
                        <a href="./agregar.php">Publicar</a>
                    </div>
                </form>
            </div>
        </div>
    </center>
    
    <center>
        <div id="openModalContribuir" class="modalDialog center_form">
            <div class="form-body border">
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png" alt="user-login">
                <form class="login-form">
                    <h2>Verifica que tus datos sean correctos</h2>
                    <p>Nombre completo: <span>EXAMPLE EXAMPLE EXAMPLE </span></p>
                    <p>Tipo sanguineo:  <span>A +</span></p>
                    <hr>
                    <h3>Ayudaras a <span>Nombre User ID</span></h3>
                    <hr>
                    <p>Anota los datos de a quien querras ayudar</p>
                    <p>Ubicación a donde puedes donar: <span>Ubicación</span></p>
                    <p>Nombre completo del tratado: <span>EXAMPLE</span></p>
                    <P>Tipo sanguineo: <span>A +</span> ¡COMPATIBLE!</P>
                    <p>Establece el horario al que acuidar a donar <input type="time"> </p>
                    <div class="tarjeta__botones">
                        <a href="index.php">Agendar</a>
                    </div>
                </form>
            </div>
        </div>
    </center>

    <center>
        <div id="openModalSeeMore" class="modalDialog center_form">
            <div class="form-body border">
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png" alt="user-login">
                <div class="login-form">
                    <h2>Nombre: <span>EXAMPLE</span></h2>
                    <p>Tipo de sangre: <span>EXAMPLE</span></p>
                    <p>Numero de donantes:  <span> 0 </span></p>
                    <p>Descripción: <span> TXT TXT TXT</span></p>
                    <p>Ubicación a donde puedes donar: <span>Ubicación</span></p>
                    <div class="tarjeta__botones">
                        <a href="#openModalContribuir">Contribuir</a>
                    </div>
                </div>
            </div>
        </div>
    </center>
