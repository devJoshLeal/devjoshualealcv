<script setup>
import { ref } from 'vue';
let modalExperience = ref("");
// Estado para controlar la visibilidad del modal
const isModalOpen = ref(false);

// Métodos para abrir y cerrar el modal
const closeModal = () => {
    isModalOpen.value = false;
};

function toNewTab(url){
    window.open(url, '_blank');
};

function openModal(experience){
    modalExperience.value = experience;
    isModalOpen.value = true;
};
import DialogModal from '@/Components/DialogModal.vue';
</script>
<template>
    <div>
        <div class="mx-auto">
            <a @click="openModal('tecnosinergia')" >
                <img id="tecnosinergia" class="w-32 h-12" src="https://tecnosinergia.com/imgs/tecno/logo-svg.svg">
            </a>
            <a @click="openModal('benotto')" >
                <img id="benotto" class="w-32 h-12" src="https://tienda.benotto.com/images/usrGallery/Imagenes/Benotto/LogoFooterAcutal.png">
            </a>
            <a @click="openModal('denedig')" >
                <img id="denedig" class="w-32 h-12" src="https://denedig.online/assets/images/footer-logo-9.png">
            </a>
        </div>
        <!-- Botón para abrir el modal -->
        <DialogModal :show="isModalOpen" @close="closeModal">
                <template #title>
                    <h2 class="text-lg text-center capitalize">Mi experiencia en {{modalExperience}}</h2>
                </template>
                <template #content>
                    <div v-if="modalExperience=='tecnosinergia'" id="about_tecnosinergia" class="grid md:flex">
                        <div class="md:w-1/2 text-center">
                            <b class="mx-auto">Da clic en el logo para más información</b>
                            <a @click="toNewTab('https://tecnosinergia.com/about/tecnosinergia')" >
                                <img id="logo-tecnosinergia" class="w-48 h-20 mx-auto" src="https://tecnosinergia.com/imgs/tecno/logo-svg.svg">
                            </a>
                            <b class="mx-auto">Feb 2024 - Oct 2024</b>
                        </div>
                        <div class="md:w-1/2">
                            <div>
                                <div class="text-center">
                                    <b class="text-lg ">Herramientas</b>
                                </div>
                                <ul class="m-2 text-center">
                                    <li class="flex justify-center">
                                        <i class="fas fa-toolbox px-1 mx-1"></i>
                                        Laravel, Netsuite, Vue.js, JavaScript, SQL, Git, Tailwind.
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <div class="text-center">
                                    <b class="text-lg ">Actividades</b>
                                </div>
                                <ul class="m-2 text-justify">
                                    <li class="flex">
                                        <i class="fas fa-star mx-2"></i>
                                        Implementación de un sistema automatizado de
                                        facturación integrado con Netsuite
                                    </li>
                                    <li class="flex">
                                        <i class="fas fa-star mx-2"></i>
                                        Desarrollo de una aplicación web para la gestión de
                                        inventario utilizando Vue.js
                                    </li>
                                    <li class="flex">
                                        <i class="fas fa-star mx-2"></i>
                                        Mantenimiento de la página web oficial
                                        resolviendo conflictos e implementando módulos
                                        de uso intuitivo para los usuarios.
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div v-if="modalExperience=='benotto'" id="about_benotto" class="grid md:flex">
                        <div class="md:w-1/2 text-center">
                            <b class="mx-auto">Da clic en el logo para más información</b>
                            <a @click="toNewTab('https://tienda.benotto.com/Acerca-de-Benotto.html')" >
                                <div class="bg-blue-700 ">
                                    <img id="logo-benotto" class="w-48 h-20 mx-auto" src="https://tienda.benotto.com/images/usrGallery/Imagenes/Benotto/LogoFooterAcutal.png">
                                </div>
                            </a>
                            <b class="mx-auto">Jul 2023 - Ene 2024</b>
                        </div>
                        <div class="md:w-1/2">
                            <div>
                                <div class="text-center">
                                    <b class="text-lg ">Herramientas</b>
                                </div>
                                <ul class="m-2 text-center">
                                    <li class="flex justify-center">
                                        <i class="fas fa-toolbox px-1 mx-1"></i>
                                        PHP, CodeIgniter, Yii 2.0, JavaScript, SQL Server, MySQL, Bootstrap.
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <div class="text-center">
                                    <b class="text-lg ">Actividades</b>
                                </div>
                                <ul class="m-2 text-justify">
                                    <li class="flex">
                                        <i class="fas fa-star mx-2"></i>
                                        Implementación de un sistema que calcula el costo
                                        promedio ponderado de los artículos en inventario,
                                        utilizando PHP y SQL Server.
                                    </li>
                                    <li class="flex">
                                        <i class="fas fa-star mx-2"></i>
                                        Desarrollo de un sistema de gestión de inventario
                                        mejorando el rendimiento en la actualización y
                                        consulta de productos en tiempo real.
                                    </li>
                                    <li class="flex">
                                        <i class="fas fa-star mx-2"></i>
                                        Mantenimiento de la pagina web oficial,
                                        e implementación de pagos con Paypal.
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div v-if="modalExperience=='denedig'" id="about_denedig" class="grid md:flex">
                        <div class="md:w-1/2 text-center">
                            <b class="mx-auto">Da clic en el logo para más información</b>
                            <a @click="toNewTab('https://denedig.online/historia.php')" >
                                <div >
                                    <img id="logo-denedig" class="w-48 h-20 mx-auto" src="https://denedig.online/assets/images/logo-denedig.png">
                                </div>
                            </a>
                            <b class="mx-auto">May 2020 - Jun 2023</b>
                        </div>
                        <div class="md:w-1/2">
                            <div>
                                <div class="text-center">
                                    <b class="text-lg ">Herramientas</b>
                                </div>
                                <ul class="m-2 text-center">
                                    <li class="flex justify-center">
                                        <i class="fas fa-toolbox px-1 mx-1"></i>
                                        PHP, Yii 2.0, JavaScript MySQL, Bootstrap, Wordpress.
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <div class="text-center">
                                    <b class="text-lg ">Actividades</b>
                                </div>
                                <ul class="m-2 text-justify">
                                    <li class="flex">
                                        <i class="fas fa-star mx-2"></i>
                                        Desarrollador principal y cocreador de un sistema web
                                        e-learning, Conoce Tu Pasión, el producto insignia de la
                                        empresa, que permite la creación y administración de
                                        cursos en línea enriquecidos
                                        con materiales audiovisuales, y la integración de
                                        evaluaciones para medir el progreso y los resultados
                                        de los estudiantes.
                                    </li>
                                    <li class="flex">
                                        <i class="fas fa-star mx-2"></i>
                                        Desarrollo de paginas web para clientes destacados, con
                                        implementación de pagos con Paypal para sus servicios.
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </template>
                <template #footer>
                    <button @click="closeModal" class="px-4 py-2 bg-gray-600 text-white rounded">Cerrar</button>
                </template>
        </DialogModal>
    </div>
</template>
