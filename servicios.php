<?php

require 'includes/funciones.php';
incluirTemplate('header');


?>



<main>
    <div class="bg-nosotros_principal"></div>
    <div class="contenedor-carrusel">
        <div class="contenedor-titulo">
            <h2 class="titulo-producto">Conoce nuestros servicios</h2>
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

            <a id="botonAnterior" class="btn-simple">
                <p>Anterior</p>
            </a>
            <a class="btn-simple btn-caracteristicas" id="botonAgendar" href="#" target="blank">
                <p>Agendar</p>
            </a>
            <a id="botonSiguiente" class="btn-simple">
                <p>Siguiente</p>
            </a>
        </div>
    </div>

</main>
<section>
    <div class="contenedor-titulo">
        <h2 class="titulo-producto">¿Tienes mas dudas?</h2>
    </div>
    <div class="contenedor-bg">

        <div class="seccion-corporativo">

            <div class="contenedor-img">
                <div class="helper">
                    <a class="btn-simple" target="blank" href="https://wa.me/529878780127?text=Hola%20Cazafantasmas%20tengo%20dudas%20sobre%20un%20Control%20de%20insectos%20Basico">
                        <p>Control de insectos basico</p>
                    </a>
                    <a class="btn-simple" target="blank" href="https://wa.me/529878780127?text=Hola%20Cazafantasmas%20tengo%20dudas%20sobre%20un%20Control%20de%20insectos%20adicional">
                        <p>Control de insectos adicional</p>
                    </a>
                    <a class="btn-simple" target="blank" href="https://wa.me/529878780127?text=Hola%20Cazafantasmas%20tengo%20dudas%20sobre%20un%20servicio%20de%20Control%20de%20voladores">
                        <p>Control de voladores</p>
                    </a>
                </div>
                <img class="img-servicios corporativo-image" src="/build/img/serviciosCorporativos.webp" alt="">
            </div>
        </div>
        <div class="seccion-hogar">

            <div class="contenedor-img">
                <div class="helper">
                    <a class="btn-simple" target="blank" href="https://wa.me/529878780127?text=Hola%20Cazafantasmas%20tengo%20dudas%20sobre%20un%20servicio%20de%20control%20de%20roedores">
                        <p>Control de roedores</p>
                    </a>
                    <a class="btn-simple" target="blank" href="https://wa.me/529878780127?text=Hola%20Cazafantasmas%20tengo%20dudas%20sobre%20que%20es%20el%20tratamiento%20de%20plagas%20de%20madera">
                        <p>Tratamiento plagas de madera</p>
                    </a>
                    <a class="btn-simple" target="blank" href="https://wa.me/529878780127?text=Hola%20Cazafantasmas%20tengo%20dudas%20sobre%20la%20desifeccion%20patogena">
                        <p>Desinfeccion patogena</p>
                    </a>
                </div>
                <img class="img-servicios hogar-image" src="/build/img/serviciosParaelHogar.webp" alt="">
            </div>
        </div>
    </div>
</section>


<?php
incluirTemplate('footer');
?>