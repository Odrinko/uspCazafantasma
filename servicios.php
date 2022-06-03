<?php

require 'includes/funciones.php';
incluirTemplate('header');


?>

<section>
    <div class="contenedor-bg">
        <div class="seccion-corporativo">
            <div class="btn-simple">
                <p>Corporativo</p>
            </div>
            <div class="contenedor-img">
                <img class="img-servicios corporativo-image" src="/build/img/serviciosCorporativos.webp" alt="">
            </div>
        </div>
        <div class="seccion-hogar">
            <div class="btn-simple">
                <p>Hogar</p>
            </div>
            <div class="contenedor-img">
                <img class="img-servicios hogar-image" src="/build/img/serviciosParaelHogar.webp" alt="">
            </div>
        </div>
    </div>
</section>

<main>
    <div class="bg-nosotros_principal"></div>
    <div class="contenedor-carrusel">
        <div class="contenedor-titulo">
            <h2 class="titulo-producto">Servicios Corporativos</h2>
        </div>
        <div class="mobile-help">
            <div class="contenedor-imagen">
                <img id="imagenProducto" class="imagen_servicio" src="" alt="">
            </div>
            <div class="contenedor-bordes">
                <div class="contenedor-descripcion">
                    <h4 id="tituloProducto" class="producto-titulo">

                    </h4>
                    <p id="descripcionProducto" class="producto-descripcion">

                    </p>
                </div>
            </div>
            <div class="contenedor-bordes_detalles">
                <div class="contenedor-descripcion">
                    <h4 class="producto-titulo">
                        Detalles
                    </h4>
                    <p id="detallesProducto" class="producto-descripcion">

                    </p>
                </div>
            </div>
        </div>
        <div class="contenedor-carrusel_btn">

            <div id="botonAnterior" class="btn-simple">
                <p>Anterior</p>
            </div>
            <a class="btn-simple btn-caracteristicas" id="botonAgendar" href="#" target="blank">
                <p>Agendar</p>
            </a>
            <div id="botonSiguiente" class="btn-simple">
                <p>Siguiente</p>
            </div>
        </div>
    </div>

</main>


<?php
incluirTemplate('footer');
?>