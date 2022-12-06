<?php
    require "./header.php";

    require 'includes/funciones.php';

?>
<div class="contenedor">
    <div class="search_bar">
        <h1>Perfiles de donantes</h1>
        <div class="container">
            <div class="row">
                <input type="text" placeholder="Busqueda">
                <div class="icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="viewperfiles contenedor">

        <div class="filtros">
            <div class="nav_perfil">
                <ul class="tabs">
                    <li class="boton2">
                        <a href="#tab1">Todo</a>
                        <i class="fa-regular fa-address-card"></i>
                    </li>
                    <li class="boton2">
                        <a href="#tab2">A+</a>
                        <i class="fa-solid fa-hand-holding-heart"></i>
                    </li>
                    <li class="boton2">
                        <a href="#tab3">A-</a>
                        <i class="fa-solid fa-shield-heart"></i>
                    </li>
                    <li class="boton2">
                        <a href="#tab4">AO+</a>
                        <i class="fa-solid fa-shield-heart"></i>
                    </li>
                </ul>
            </div>
        </div>

        <div class="contenido__filtros">

            <div class="secciones">
                <article id="tab1">
                    <h1>Todos</h1>
                    <hr>
                    <div class="contenedor card-post">
                        
                    </div>
                </article>

                <article id="tab2">
                    <h1>Aportaciones</h1>
                    <hr>

                </article>

                <article id="tab3">
                    <h1>Tus publicaciones finalizadas</h1>
                    <hr>
                </article>

                <article id="tab4">
                    <h1>Seguridad</h1>
                    <hr>
                </article>
            </div>

        </div>

    </div>



</div>
<?php include "./footer.php"; ?>