<?php

require 'includes/funciones.php';
incluirTemplate('header');


?>
<section class="desktop-presentacion">
    <div class="contenedor-logotipo">
        <div class="bg-logotipo"></div>
        <object class="presentacion-logotipo" data="/build/img/logotipo.svg" width="30rem" height="20rem"></object>
    </div>
</section>

<section class="banner-carrusel">
    <h2 class="nosotros-ayuda_titulo">
        Conoce a quien hemos ayudado.
    </h2>
    <div class="nosotros-contenedor_imagen">
        <img class="nosotros-ayuda_imagen" src="" id="imagenRandom" alt="">
    </div>
</section>

<main class="size">
    <div class="bg-nosotros_principal"></div>
    <div class="nosotros-contenedor_texto">
        <h2 class="nosotros-titulo" id="tituloNosotros">
            
        </h2>
        <p class="nosotros-descripcion" id="descripcionNosotros">

        </p>
    </div>
    <div class="nosotros-contenedor_botones">
        <div class="border">
            <div class="boton" id="misionMovil">
                <p>Mision</p>
            </div>
        </div>
        <div class="border">
            <div class="boton" id="visionMovil">
                <p>Vision</p>
            </div>
        </div>
        <div class="border">
            <div class="boton" id="valoresMovil">
                <p>Valores</p>
            </div>
        </div>
    </div>
    <div class="contenedor-botones_desktop">
        <button class="boton-desktop" id="mision">Mision</button>
        <button class="boton-desktop" id="vision">Vision</button>
        <button class="boton-desktop" id="valores">Valores</button>
    </div>
</main>

<?php
incluirTemplate('footer');
?>