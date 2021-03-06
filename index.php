<?php

require 'includes/funciones.php';
incluirTemplate('header');


?>

<section class="section-contenedor section-bg">
    <div class="inicio-botones ">
        <a href="https://wa.me/529878780127?text=Hola%20Cazafantasmas%20quisiera%20mas%20informacion" target="blank" class="btn-black_whatsapp ">
            <p>Contactanos</p>
            <div class="btn-black_in">
                <img class="icon-btn" src="/build/img/icon-whatsapp.svg" alt="">
                <p>whatsapp</p>
            </div>
        </a>
        <a href="https://wa.me/529878780127?text=Hola%20Cazafantasmas%20tengo%20un%20problema%20de%20roedores%20" target="blank" class="btn-simple">
            <p>¿Roedores?</p>
        </a>
    </div>
    <div class="eslogan-desktop_contenedor">
        <h2 class="desktop-eslogan">
            ¿Problemas con plagas?
        </h2>
        <h4 class="desktop-eslogan_texto">
            ¡Tenemos la solución! Con experiencia
            en servicios profesionales
            en Quintana Roo desde 2004
        </h4>
    </div>
    <div class="contenedor-desktop_header">
        <div class="utilidad-header">
            <div class="botones-desktop_header">
                <p class="titulo-banner">
                    ¿Roedores?
                </p>
                <p class="descripcion-banner_animacion">
                    Trampeo y captura, colocacion de cebos, Seguimiento
                </p>
                <a class="btn-rojo pop-up" href="/servicios.php">
                    Ver más
                </a>
            </div>
            <div class="botones-desktop_header">
                <p class="titulo-banner">
                    Desinfectamos por ti
                </p>
                <p class="descripcion-banner_animacion">
                    Con licencia sanitaria que avala nuestro servicio.
                </p>
                <a class="btn-rojo pop-up" href="/servicios.php">
                    Ver más
                </a>
            </div>
            <div class="botones-desktop_header">
                <p class="titulo-banner">
                    ¿Termitas?
                </p>
                <p class="descripcion-banner_animacion">
                    Soluciones a problemas con plagas en madera estructural y decorativa.
                </p>
                <a class="btn-rojo pop-up" href="/servicios.php">
                    Ver más
                </a>
            </div>
        </div>
    </div>
</section>

<main>
    <div class="bg-nosotros_principal"></div>
    <div class="bg2-nosotros_principal"></div>
    <div class="help">
        <div class="contenedor-help">
            <div class="ayuda-contenedor">
                <div class="contenedor-imagen">
                    <img class="imagen" src="/build/img/NosotrosPrincipal.webp" alt="">
                </div>
            </div>
            <div class="ayuda-contenedor2">
                <div class="contendor-nosotros_texto">
                    <h2 class="nosotros-titulo">Acerca de nosotros</h2>
                    <h3 class="nosotros-descripcion">
                    Somos una empresa establecida ubicada en Quintana Roo desde 2004; desde entonces hemos brindado servicios a diversos clientes del ramo residencial, comercial e industrial en localidades como Cancún, Playa del Carmen y Tulum. 
Contamos con licencia sanitaria COFEPRIS para los servicios de fumigación, desinfección y control de plagas. Además, ahora estamos registrados en REPSE.
                    </h3>
                    <a href="/nosotros.php" class="btn-simple">
                        Conocenos
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
incluirTemplate('footer');
?>