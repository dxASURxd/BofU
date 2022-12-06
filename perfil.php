<?php
    require "./header.php";

    require 'includes/funciones.php';

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

                        <article id="tab3">
                            <h1>Tus publicaciones finalizadas</h1>
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

                        <article id="tab4">
                            <h1>Seguridad</h1>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea numquam odio voluptate. Aliquam incidunt similique, et quasi ducimus quos aut autem non dignissimos dicta sit provident, voluptatibus ut blanditiis perspiciatis cum, vel temporibus minima enim. Asperiores omnis placeat officiis a tenetur sit recusandae, reprehenderit neque. Tempora quibusdam, perferendis id ratione culpa dolorum! Nemo, animi? Eveniet eaque perspiciatis, libero quia, pariatur iusto, ipsum porro quod, ut tempora cum quo non illum. Non eligendi incidunt sequi, molestias quia perspiciatis architecto repudiandae quod.</p><br>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam ipsa ducimus amet at cumque sed numquam, explicabo impedit optio quas iste aperiam quidem ipsam rerum libero voluptatibus perferendis officiis voluptatum!</p>
                        </article>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <?php include "./footer.php"; ?>