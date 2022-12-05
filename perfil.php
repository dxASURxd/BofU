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
                    <i class="fa-regular fa-circle-user user_boton2"></i>
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
                    <div class="tarjeta__boton2es">
                        <a href="index.php">Publicar</a>
                    </div>
                </form>
            </div>
    </center>

    <center>
        <div id="openModalEditPerfil" class="modalDialog center_form">
            <div class="form-body border">
                <img src="https://avatars.githubusercontent.com/u/78565438?v=4" alt="Foto del perfil">
                <form class="login-form">
                    <p>Asur Damian</p>
                    <p>García Salazar</p>
                    <p>Tipo sanguineo: O+</p>
                    <p>Fecha de nacimiento: 10/10/10</p>
                    <p>Peso: 90kg</p>
                    <hr>
                    <h3>Información de contacto</h3>
                    <p>Telefono: 4640000000</p>
                    <p>Correo: correo@correo.com</p>
                    <div class="boton2">
                        <a href="#">cambiar contraseña</a>
                    </div>
                    <div class="boton2">
                        <a href="#">Guardar</a>
                    </div>
                </form>
            </div>
    </center>

    <div class="perfil__usiario">
        <div class="nav_perfil">
            <ul class="tabs">
                <li class="boton2">
                    <a href="#tab1">Publicaciones</a>
                    <i class="fa-regular fa-address-card"></i>
                </li>
                <li class="boton2">
                    <a href="#tab2">Aportaciones</a>
                    <i class="fa-solid fa-hand-holding-heart"></i>
                </li>
                <li class="boton2">
                    <a href="#tab3">finalizados</a>
                    <i class="fa-solid fa-shield-heart"></i>
                </li>
                <li class="boton2">
                    <a href="#tab4">Seguridad</a>
                    <i class="fa-solid fa-shield-heart"></i>
                </li>
            </ul>
        </div>

        <div class="contenedor">
            <div class=" contenedor_perfil">
                <div class="barraL">
                    <div class="user_foto_nombres">
                        <div class="perfil_foto_usuario">
                            <img src="https://avatars.githubusercontent.com/u/78565438?v=4" alt="Foto del perfil">
                        </div>
                        <div class="perfil_nombre_usuario">
                            <h2>Nombre</h2>
                            <h3>Apellidos</h3>
                        </div>
                    </div>
                    <div class="perfil_informacion_usuario">
                        <p>Descripción Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum enim dicta, similique sunt aliquam, soluta dignissimos illo, nisi aperiam odit ducimus magni nam facere nemo ratione! Sit consequuntur veritatis ratione?</p>
                    </div>
                    <!-- <div class="donativos_contador">
                        <h3>Donativos</h3>
                        <a href=""><i class="fa-solid fa-hand-holding-droplet"></i> A mi </a>
                        <a href=""><i class="fa-solid fa-hand-holding-heart"></i> Di</a>
                    </div> -->
                    <div class="perfil_editar_info boton2">
                        <a href="#openModalEditPerfil">
                            Editar perfil
                        </a>
                    </div>
                </div>

                <div class="barraR">
                    <div class="secciones">

                        <article id="tab1">
                            <h1>Publicaciones</h1>
                            <hr>
                            <div class="contenedor card-post">

                                <div class="card">
                                    <div class="tarjeta__titulo">
                                        <p>
                                            Jacqueline Castillo Ceja
                                        </p>
                                    </div>
                                    <div class="tarjeta__imagen">
                                        <div class="tarjeta__imagen__img border">
                                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png" alt="xd" />
                                        </div>
                                    </div>
                                    <!-- <div class="tarjeta__persona">
                                        <h2>
                                            Necesita de ti ):
                                        </h2>
                                    </div> -->
                                    <div class="tarjeta__descripcion justificado">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima ex earum libero iure molestias et dicta provident animi impedit sed quisquam corporis commodi, reiciendis iusto natus quae, optio fuga?
                                        </p>
                                    </div>
                                        
                                    <div class="tarjeta__tya">
                                        <h3>
                                            <i class="fa-solid fa-droplet"></i> <span>A+</span>
                                        </h3>
                                    </div>
                                    <div class="tarjeta__ndonantes">
                                        <h3>
                                            <i class="fa-solid fa-hand-holding-heart"></i> <span> 0 / 7</span>
                                        </h3>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="tarjeta__titulo">
                                        <p>
                                            Jacqueline Castillo Ceja
                                        </p>
                                    </div>
                                    <div class="tarjeta__imagen">
                                        <div class="tarjeta__imagen__img border">
                                            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png" alt="xd" />
                                        </div>
                                    </div>
                                    <!-- <div class="tarjeta__persona">
                                        <h2>
                                            Necesita de ti ):
                                        </h2>
                                    </div> -->
                                    <div class="tarjeta__descripcion justificado">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima ex earum libero iure molestias et dicta provident animi impedit sed quisquam corporis commodi, reiciendis iusto natus quae, optio fuga?
                                        </p>
                                    </div>
                                        
                                    <div class="tarjeta__tya">
                                        <h3>
                                            <i class="fa-solid fa-droplet"></i> <span>A+</span>
                                        </h3>
                                    </div>
                                    <div class="tarjeta__ndonantes">
                                        <h3>
                                            <i class="fa-solid fa-hand-holding-heart"></i> <span> 0 / 7</span>
                                        </h3>
                                    </div>
                                </div>

                            </div>
                        </article>
                        
                        <article id="tab2">
                            <h1>Aportaciones</h1>
                            <hr>
                            <div class="card">
                                <div class="tarjeta__titulo">
                                    <p>
                                        Jacqueline Castillo Ceja
                                    </p>
                                </div>
                                <div class="tarjeta__imagen">
                                    <div class="tarjeta__imagen__img border">
                                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png" alt="xd" />
                                    </div>
                                </div>
                                <!-- <div class="tarjeta__persona">
                                    <h2>
                                        Necesita de ti ):
                                    </h2>
                                </div> -->
                                <div class="tarjeta__descripcion justificado">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima ex earum libero iure molestias et dicta provident animi impedit sed quisquam corporis commodi, reiciendis iusto natus quae, optio fuga?
                                    </p>
                                </div>
                                    
                                <div class="tarjeta__tya">
                                    <h3>
                                        <i class="fa-solid fa-droplet"></i> <span>A+</span>
                                    </h3>
                                </div>
                                <div class="tarjeta__ndonantes">
                                    <h3>
                                        <i class="fa-solid fa-hand-holding-heart"></i> <span> 0 / 7</span>
                                    </h3>
                                </div>
                            </div>
                        </article>
                        
                        <article id="tab3">
                            <h1>Tus publicaciones finalizadas</h1>
                            <hr>
                            <div class="card">
                                <div class="tarjeta__titulo">
                                    <p>
                                        Jacqueline Castillo Ceja
                                    </p>
                                </div>
                                <div class="tarjeta__imagen">
                                    <div class="tarjeta__imagen__img border">
                                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png" alt="xd" />
                                    </div>
                                </div>
                                <!-- <div class="tarjeta__persona">
                                    <h2>
                                        Necesita de ti ):
                                    </h2>
                                </div> -->
                                <div class="tarjeta__descripcion justificado">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima ex earum libero iure molestias et dicta provident animi impedit sed quisquam corporis commodi, reiciendis iusto natus quae, optio fuga?
                                    </p>
                                </div>
                                    
                                <div class="tarjeta__tya">
                                    <h3>
                                        <i class="fa-solid fa-droplet"></i> <span>A+</span>
                                    </h3>
                                </div>
                                <div class="tarjeta__ndonantes">
                                    <h3>
                                        <i class="fa-solid fa-hand-holding-heart"></i> <span> 0 / 7</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="card">
                                <div class="tarjeta__titulo">
                                    <p>
                                        Jacqueline Castillo Ceja
                                    </p>
                                </div>
                                <div class="tarjeta__imagen">
                                    <div class="tarjeta__imagen__img border">
                                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png" alt="xd" />
                                    </div>
                                </div>
                                <!-- <div class="tarjeta__persona">
                                    <h2>
                                        Necesita de ti ):
                                    </h2>
                                </div> -->
                                <div class="tarjeta__descripcion justificado">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima ex earum libero iure molestias et dicta provident animi impedit sed quisquam corporis commodi, reiciendis iusto natus quae, optio fuga?
                                    </p>
                                </div>
                                    
                                <div class="tarjeta__tya">
                                    <h3>
                                        <i class="fa-solid fa-droplet"></i> <span>A+</span>
                                    </h3>
                                </div>
                                <div class="tarjeta__ndonantes">
                                    <h3>
                                        <i class="fa-solid fa-hand-holding-heart"></i> <span> 0 / 7</span>
                                    </h3>
                                </div>
                            </div>
                            <div class="card">
                                <div class="tarjeta__titulo">
                                    <p>
                                        Jacqueline Castillo Ceja
                                    </p>
                                </div>
                                <div class="tarjeta__imagen">
                                    <div class="tarjeta__imagen__img border">
                                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png" alt="xd" />
                                    </div>
                                </div>
                                <!-- <div class="tarjeta__persona">
                                    <h2>
                                        Necesita de ti ):
                                    </h2>
                                </div> -->
                                <div class="tarjeta__descripcion justificado">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus minima ex earum libero iure molestias et dicta provident animi impedit sed quisquam corporis commodi, reiciendis iusto natus quae, optio fuga?
                                    </p>
                                </div>
                                    
                                <div class="tarjeta__tya">
                                    <h3>
                                        <i class="fa-solid fa-droplet"></i> <span>A+</span>
                                    </h3>
                                </div>
                                <div class="tarjeta__ndonantes">
                                    <h3>
                                        <i class="fa-solid fa-hand-holding-heart"></i> <span> 0 / 7</span>
                                    </h3>
                                </div>
                            </div>
                        </article>
                        
                        <article id="tab4">
                            <h1>Seguridad</h1>
                            <hr>                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea numquam odio voluptate. Aliquam incidunt similique, et quasi ducimus quos aut autem non dignissimos dicta sit provident, voluptatibus ut blanditiis perspiciatis cum, vel temporibus minima enim. Asperiores omnis placeat officiis a tenetur sit recusandae, reprehenderit neque. Tempora quibusdam, perferendis id ratione culpa dolorum! Nemo, animi? Eveniet eaque perspiciatis, libero quia, pariatur iusto, ipsum porro quod, ut tempora cum quo non illum. Non eligendi incidunt sequi, molestias quia perspiciatis architecto repudiandae quod.</p><br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam ipsa ducimus amet at cumque sed numquam, explicabo impedit optio quas iste aperiam quidem ipsam rerum libero voluptatibus perferendis officiis voluptatum!</p>
                        </article>
                    </div>
                </div>
                
            </div>

        </div>
    </div>

	