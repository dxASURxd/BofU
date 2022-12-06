<?php
    // BD

    require "./header.php";

    require 'includes/funciones.php';


   //consultar BD
    $query = "SELECT * FROM publicaciones";
    $resultadoConsulta = mysqli_query($db, $query);



?>
    <div class="contenedor">
        <h2 class="h2_section">Similares a ti <i class="fa-solid fa-heart-pulse"></i></h2>
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
                        <i class="fa-solid fa-hand-holding-heart"></i> <span> <?php echo $publicacion['num_donantes']; ?></span>
                    </h3>
                </div>
                </div>

            <?php endwhile; ?>
        </div>
        <h2 class="h2_section">Noticias</h2>
        <div class="contenedor">
            <?php ?>
        </div>
    </div>
    
<?php include "./footer.php"; ?>