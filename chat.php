<?php

    require "./header.php";

    require 'includes/funciones.php';

?>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <body> 
        <section class="h-screen flex overflow-hidden"><!--Contenedor de todo el chat--> 
            <div class="bg-white w-3/12 p-6"><!--contenedor donde aparecen todos los usuarios en linea parte superior izquierda--> 
                <h3 class="text-2xl mb-8">Chat en línea</h3>
                <div class="flex overflow-auto w-full mb-8">
                    <div class="self-center text-center mr-4">
                        <div class="relative w-12 mb-2">
                            <img src="https://picsum.photos/200/200" class="rounded-full">
                            <div class="absolute bg-green-300 p-1 rounded-full bottom-0 right-0
                            border-gray-800 border-2"></div>
                        </div>
                            <small>Diego</small>
                    </div>
                    <div class="self-center text-center mr-4">
                        <div class="relative w-12 mb-2">
                            <img src="https://picsum.photos/100/100" class="rounded-full">
                            <div class="absolute bg-green-300 p-1 rounded-full bottom-0 right-0
                            border-gray-800 border-2"></div>
                        </div>
                            <small>Diego</small>
                    </div>
                    <div class="self-center text-center mr-4">
                        <div class="relative w-12 mb-2">
                            <img src="https://picsum.photos/300/300" class="rounded-full">
                            <div class="absolute bg-green-300 p-1 rounded-full bottom-0 right-0
                            border-gray-800 border-2"></div>
                        </div>
                            <small>Diego</small>
                    </div>
                    <div class="self-center text-center mr-4">
                        <div class="relative w-12 mb-2">
                            <img src="https://picsum.photos/400/400" class="rounded-full">
                            <div class="absolute bg-green-300 p-1 rounded-full bottom-0 right-0
                            border-gray-800 border-2"></div>
                        </div>
                            <small>Diego</small>
                    </div>
                    <div class="self-center text-center mr-4">
                        <div class="relative w-12 mb-2">
                            <img src="https://picsum.photos/500/500" class="rounded-full">
                            <div class="absolute bg-green-300 p-1 rounded-full bottom-0 right-0
                            border-gray-800 border-2"></div>
                        </div>
                            <small>Diego</small>
                    </div>
                    <div class="self-center text-center mr-4">
                        <div class="relative w-12 mb-2">
                            <img src="https://picsum.photos/600/600" class="rounded-full">
                            <div class="absolute bg-green-300 p-1 rounded-full bottom-0 right-0
                            border-gray-800 border-2"></div>
                        </div>
                            <small>Diego</small>
                    </div>
                    <div class="self-center text-center mr-4">
                        <div class="relative w-12 mb-2">
                            <img src="https://picsum.photos/700/700" class="rounded-full">
                            <div class="absolute bg-green-300 p-1 rounded-full bottom-0 right-0
                            border-gray-800 border-2"></div>
                        </div>
                            <small>Diego</small>
                    </div>
                    <div class="self-center text-center mr-4">
                        <div class="relative w-12 mb-2">
                            <img src="https://picsum.photos/800/800" class="rounded-full">
                            <div class="absolute bg-green-300 p-1 rounded-full bottom-0 right-0
                            border-gray-800 border-2"></div>
                        </div>
                            <small>Diego</small>
                    </div>
                    <div class="self-center text-center mr-4">
                        <div class="relative w-12 mb-2">
                            <img src="https://picsum.photos/900/900" class="rounded-full">
                            <div class="absolute bg-green-300 p-1 rounded-full bottom-0 right-0
                            border-gray-800 border-2"></div>
                        </div>
                            <small>Diego</small>
                    </div>
                </div>
                <div class="overflow-auto">
                    <div class="flex bg-gray-100 rounded p-4 mb-4">
                        <img src="https://picsum.photos/200/200" class="rounded-full w-20 mr-5">
                        <div class="w-full overflow-hidden">
                            <div class="flex mb-1">
                                <p class="flex-grow">Asur Garcia</p>
                                <small class="font-light text-gray-500">09:00 am</small>
                            </div>
                            <small class="overflow-ellipsis overflow-hidden whitespace-nowrap block font-light text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi optio non 
                            ratione in eius, quaerat recusandae nesciunt saepe repudiandae ipsam ducimus 
                            nihil! Fugiat quibusdam distinctio pariatur dolores cupiditate, consectetur adipisci?</small>
                        </div>            
                    </div>
                </div>
             </div>
            <div class="bg-gray-200 w-9/12">
                <div class="px-20 py-6 bordeer-b"><!--Barra donde se muestra con que usuaio se esta hablando, parte superior de los chats--> 
                    <div class="flex">
                        <div class="flex flex-grow">
                            <div class="relative w-12 mr-4">
                                <img src="https://picsum.photos/200/200" class="rounded-full">
                                <div class="absolute bg-green-100 p-1 rounded-full bottom-0 right-0 border-gray-800 border-2"></div>
                            </div>
                            <div class="self-center">
                                <p class="font-medium">Asur Garcia</p>
                                <small class="text-gray-00 font-light">En línea</small>
                            </div>
                        </div>
                        <div class="flex">
                            <svg class="w-6 text-gray-500" mlns="http://www.w3.org/2000/svg" fill="none"
                            viewbox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="py-6 px-20 overflow-auto h-3/4"><!--Div de todos los mensajes del usuario--> 
                    <div class="flex mb-12">
                        <img src="https://picsum.photos/200/200" class="self-end rounded-full w-12 mr-4">
                        <div class="flex flex-col">
                            <div class="bg-white p-6 w-96 rounded-3x1 rounded-bl-none shadow-sm 
                            mb-2">
                                <p class="mb-1">Asur Garcia</p>
                                <small class="text-gray-500 font-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
                                quam quidem? Exercitationem quod inventore, sed perferendis totam maxime
                                cum eaque nostrum odio numquam est non beatae animi quas voluptatum
                                necessitatibus!</small>
                            </div>
                            <small class="text-gray-500 font-light">09:55 am</small>
                        </div>
                    </div>
                    
                    <div class="flex mb-12 flex-row-reverse ">
                        <img src="https://picsum.photos/100/100" class="self-end rounded-full w-12 ml-4">
                        <div class="flex flex-col">
                            <div class="bg-red-300 p-6 w-96 rounded-3x1 rounded-br-none shadow-sm 
                            mb-2">
                                <p class="mb-1">Furry:v</p>
                                <small class=" text-gray-500 font-light text-slate-50">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
                                quam quidem? Exercitationem quod inventore, sed perferendis totam maxime
                                cueaque nostrum odio numquam est non beatae animi quas voluptatum
                                necessitatibus!</small>
                            </div>
                            <small class="text-gray-500 font-light self-end">09:55 am</small>
                        </div>
                    </div>

                    <div class="flex mb-12">
                        <img src="https://picsum.photos/200/200" class="self-end rounded-full w-12 mr-4">
                        <div class="flex flex-col">
                            <div class="bg-white p-6 w-96 rounded-3x1 rounded-bl-none shadow-sm 
                            mb-2">
                                <p class="mb-1">Asur Garcia</p>
                                <small class="text-gray-500 font-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
                                quam quidem? Exercitationem quod inventore, sed perferendis totam maxime
                                cum eaque nostrum odio numquam est non beatae animi quas voluptatum
                                necessitatibus!</small>
                            </div>
                            <small class="text-gray-500 font-light">09:55 am</small>
                        </div>
                    </div>

                    <div class="flex mb-12 flex-row-reverse">
                        <img src="https://picsum.photos/100/100" class="self-end rounded-full w-12 ml-4">
                        <div class="flex flex-col">
                            <div class="bg-red-300	 p-6 w-96 rounded-3x1 rounded-br-none shadow-sm 
                            mb-2">
                                <p class="mb-1">Furry:v</p>
                                <small class="text-white text-gray-500 font-light">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia,
                                quam quidem? Exercitationem quod inventore, sed perferendis totam maxime
                                cum eaque nostrum odio numquam est non beatae animi quas voluptatum
                                necessitatibus!</small>
                            </div>
                            <small class="text-gray-500 font-light self-end">09:55 am</small>
                        </div>
                    </div>
                </div>
                <div class="py-6 px-20 flex border-t"><!--parte infeerior de la barra de texto--> 
                    <input type="text" class="px-4 py-2 bg-gray-100 w-full focus:outline-none font-light" placeholder="Escribe tu mensaje...">
                    <p>icon</p>
                    <p>icon</p>
                    <a href="" class="bg-red-500	 text-white rounded px-4 py-2">Enviar</a>
                </div>
            </div>
        </section>

<?php include "./footer.php"; ?>