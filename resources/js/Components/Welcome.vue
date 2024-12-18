<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Photo from  '@/Components/CV/Photo.vue';
import Experience from '@/Components/CV/Experience.vue';
const detailClass="text-white text-sm leading-relaxed my-2 mx-6 px-6";
const subDetailClass="text-white text-sm leading-relaxed my-0.5 mx-4 px-4";
</script>

<template>
    <div class="md:flex bg-gray-600">
        <div>
            <div class="flex justify-center">
                <ApplicationLogo class="block h-12 w-auto lg:hidden" />
                <h1 class="mt-2 ml-4 text-2xl font-medium text-blue-400 lg:hidden">
                            Conoce a Joshua Leal Diaz
                </h1>
            </div>
            <Photo></Photo>
            <div id="experiencia" >
                <div class="my-2 flex justify-center">
                    <i class="fas fa-dragon px-1 mx-1 text-blue-400"></i>
                    <h2 class="ms-3 text-xl font-semibold text-blue-400">
                        Experiencia
                    </h2>
                </div>

                <div id="experienciaDetalle" class="my-2 mx-4">
                    <Experience/>
                </div>
            </div>
            <div id="contact" class="text-white text-center mt-6">
                <table class="w-full">
                    <tbody>
                        <tr class="flex items-center justify-center">
                            <td class="px-4">
                                <i class="fa-brands fa-linkedin"></i>
                            </td>
                            <td>
                                <a class="hover:text-blue-500" href="https://www.linkedin.com/in/dev-joshualealdiaz/" target="_blank">Mi Linkedin </a>
                            </td>
                        </tr>
                        <tr class="flex items-center justify-center">
                            <td class="px-4">
                                <i class="fas fa-envelope"></i>
                            </td>
                            <td>
                                <a class="hover:text-blue-500" href="mailto:dev.joshualealdiaz@gmail.com">Contáctame por correo </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <div class="m-4 lg:m-6">
                <div class="flex">
                    <ApplicationLogo class="hidden lg:block h-12 w-auto"/>

                    <h1 class="hidden lg:block mt-2 ml-2 text-2xl font-medium text-blue-400">
                        Conoce a Joshua Leal Diaz
                    </h1>
                </div>
                <p :class="detailClass">
                    Ingeniero en informática con más de 4 años de experiencia en Desarrollo Web Full Stack, lo que incluye manejo de bases de datos, programación orientada a objetos y diseño de interfaces de usuario.
                    Usando tecnologías como Laravel, Vue.js, JavaScript, HTML5, CSS3, MySQL, con tal de
                    brindar soluciones innovadoras y efectivas a los clientes, asi como mantener una alta calidad en el código y la documentación.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 m-3 lg:m-4">
                <div id="mision">
                    <div class="flex items-center">
                        <i class="fas fa-dragon px-1 mx-1 text-blue-400"></i>
                        <h2 class="ms-3 text-xl font-semibold text-blue-400">
                            Misión
                        </h2>
                    </div>

                    <p id="misionDetalle" :class="detailClass">
                        Entregar soluciones eficientes y de calidad, con una intuitiva y accesible experiencia del usuario.
                        Promoviendo la participación activa y la colaboración en el desarrollo de proyectos.

                    </p>
                </div>
                <div id="vision">
                    <div class="flex items-center">
                        <i class="fas fa-dragon px-1 mx-1 text-blue-400"></i>
                        <h2 class="ms-3 text-xl font-semibold text-blue-400">
                            Visión
                        </h2>
                    </div>

                    <p id="visionDetalle" :class="detailClass">
                        Caminar hacia el futuro donde la tecnología se utilice para el bien común, priorizando la ética, la responsabilidad y un saludable entorno de trabajo en cada proyecto que emprenda.
                    </p>
                </div>

            </div>
            <div class=" grid grid-cols-1 gap-6 lg:gap-8 p-3 lg:p-4">
                <div id="valores">
                    <div class="flex items-center">
                        <i class="fas fa-dragon px-1 mx-1 text-blue-400"></i>
                        <h2 class="ms-3 text-xl font-semibold text-blue-400">
                            Valores
                        </h2>
                    </div>

                    <div id="valoresDetalle" :class="detailClass">
                        <ul class="col-span-1">
                            <li class="text-white text-sm leading-relaxed">
                                <div>
                                    <i class="fas fa-check-circle text-blue-400"></i>
                                    <span class="ml-2">Integridad</span>
                                    <p :class="subDetailClass">
                                        Actuando con honestidad y transparencia en todas las acciones y decisiones,
                                        priorizando la confianza y la credibilidad.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <ul class="col-span-1">
                            <li class="text-white text-sm leading-relaxed">
                                <div>
                                    <i class="fas fa-check-circle text-blue-400"></i>
                                    <span class="ml-2">Responsabilidad</span>
                                    <p :class="subDetailClass">
                                        Tratando con seguridad y confianza las tareas asignadas, y asumiendo la responsabilidad de los resultados.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <ul class="col-span-1">
                            <li class="text-white text-sm leading-relaxed">
                                <div>
                                    <i class="fas fa-check-circle text-blue-400"></i>
                                    <span class="ml-2">Innovación</span>
                                    <p :class="subDetailClass">
                                        Buscando constantemente nuevas formas de mejorar y innovar en nuestros procesos y
                                        servicios.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <ul class="col-span-1">
                            <li class="text-white text-sm leading-relaxed">
                                <div>
                                    <i class="fas fa-check-circle text-blue-400"></i>
                                    <span class="ml-2">Colaboración</span>
                                    <p :class="subDetailClass">
                                        Trabajando en equipo y colaborar con otros para lograr objetivos comunes,
                                        respetando y valorando las contribuciones de cada uno.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <ul class="col-span-1">
                            <li class="text-white text-sm leading-relaxed">
                                <div>
                                    <i class="fas fa-check-circle text-blue-400"></i>
                                    <span class="ml-2">Paciencia</span>
                                    <p :class="subDetailClass">
                                        Con mentalidad calmada y actitud perseverante en la búsqueda de soluciones y en la resolución de problemas.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>
