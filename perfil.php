<?php
    require "./header.php";

    require 'includes/funciones.php';

    
   //consultar BD
   $query = "SELECT * FROM publicaciones";
   $resultadoConsulta = mysqli_query($db, $query);
?>

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
                            <h3>Asur Damian</h3>
                            <h2>García Salazar</h2>
                        </div>
                    </div>
                    <div class="perfil_informacion_usuario">
                        <p>Estudiante. Ingenieria en Desarrollo y Gestion de Software <br>
                        Donante de sangre. <br> Tipo Sanguineo: A+ <br>
                        21 años 
                        </p>
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
                                            <img src="https://scontent.fcyw3-1.fna.fbcdn.net/v/t1.6435-9/73027837_2546620082227481_3467417618791530496_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEp7Y1zys1cAPbh1isk-v_KHEC3i2s8nPgcQLeLazyc-Ny-sdJBpmAcDBz6BbuSo5E7IUOj22kfYT0Pn8ZqXXe6&_nc_ohc=W4qPKhVNExYAX9GhnNy&_nc_ht=scontent.fcyw3-1.fna&oh=00_AfBJEkK1d8UDrXjs6-71mvg4eRpWnFWxVgrFZLvP4FLBLQ&oe=63B8E8E0" alt="xd" />
                                        </div>
                                    </div>
                                    <!-- <div class="tarjeta__persona">
                                        <h2>
                                            Necesita de ti ):
                                        </h2>
                                    </div> -->
                                    <div class="tarjeta__descripcion justificado">
                                        <p>
                                            Estudiante de Programación. 21 años. Necesita donantes de sangre para mejorar su estado de salud. Padece de una enfermedad extraña renal y terminal, pueden apoyar en el hospital que gusten. Pueden enviar mensaje en la app o al numnero 464000000 Gracias.
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
                            <div class="contenedoR">
                                <CEnter>
                                    <h1>SIN APORTACIONES POR EL MOMENTO</h1>
                                    <h3>ANIMATE A DONAR!</h3>

                                </CEnter>
                      
                            </div>
                        </article>

                        <article id="tab3">
                            <h1>Tus publicaciones finalizadas</h1>
                            <hr>
                            <div class="contenedor card-post">

                                <div class="card">
                                    <div class="tarjeta__titulo">
                                        <p>
                                            Cesar Vidal
                                        </p>
                                    </div>
                                    <div class="tarjeta__imagen">
                                        <div class="tarjeta__imagen__img border">
                                            <img src="https://scontent.fcyw3-1.fna.fbcdn.net/v/t1.6435-9/194475524_2808584886020861_2345974512644496525_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=174925&_nc_eui2=AeEX8qlsKyNTzEWNFsGrvoAJHR08mpfTMs0dHTyal9MyzXKbT6npGqHmpnlLJKHsN-Lz4R5qlfRcKr_2JWhqwxp1&_nc_ohc=syYnfRsGdLMAX8RXm7J&_nc_ht=scontent.fcyw3-1.fna&oh=00_AfCatVuALxIkJq__Hzf3E7ds0sMO10ZaqpZLsEUGggYBog&oe=63B90E29" alt="xd" />
                                        </div>
                                    </div>
                                    <div class="tarjeta__descripcion justificado">
                                        <p>
                                            Cesar Vidal. 21 A casa de un accidente los doctores solicitan sangre para el. Necesitamos donantes del tipo 0+ en el hospital general
                                    </div>

                                    <div class="tarjeta__tya">
                                        <h3>
                                            <i class="fa-solid fa-droplet"></i> <span>A+</span>
                                        </h3>
                                    </div>
                                    <div class="tarjeta__ndonantes">
                                        <h3>
                                            <i class="fa-solid fa-hand-holding-heart"></i> <span> 7 / 7</span>
                                            <h3>FINALIZADO</h3>
                                        </h3>
                                    </div>
                                </div>

                            </div>
                        </article>

                        <article id="tab4">
                            <h1>Seguridad</h1>
                            <hr>
                            <p>Información del Perfil</p><br>
                            <p>Cambiar contraseña</p>
                        </article>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <?php include "./footer.php"; ?>