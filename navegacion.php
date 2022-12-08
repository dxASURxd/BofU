<?php
    // BD

    require "./header.php";

    require 'includes/funciones.php';

   //consultar BD
    $query = "SELECT * FROM publicaciones";
    $resultadoConsulta = mysqli_query($db, $query);

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
                        
                    <?php while($publicacion = mysqli_fetch_assoc($resultadoConsulta)): ?>
                <div class="card">
                    <div class="tarjeta__titulo">
                        <p>
                            <?php echo $publicacion['titulo_publicacion']; ?>
                        </p>
                    </div>
                    <div class="tarjeta__imagen">
                        <div class="tarjeta__imagen__img border">
                            <img src=" ./src/img/post/<?php echo $publicacion['imagen']; ?>">
                            
                        </div>
                    </div>
                    <div class="tarjeta__descripcion justificado">
                        <p>
                        <?php echo $publicacion['descripcion']; ?>
                        </p>
                    </div>
                    <div class="tarjeta__tya">
                        <h3>
                            <i class="fa-solid fa-droplet"></i> <span><?php echo $publicacion['typablod']; ?></span>
                        </h3>
                    </div>
                    <div class="tarjeta__ndonantes">
                        <h3>
                            <i class="fa-solid fa-hand-holding-heart"></i> 0 / <span> <?php echo $publicacion['num_donantes']; ?> </span>
                        </h3>
                    </div>
                    <div class="tarjeta__botones">
                        <a href="#openModalSeeMore" class="">Leer Más </a>
                        <a href="#openModalContribuir">Contribuir</a>
                    </div>
                </div>

            <?php endwhile; ?>

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