


document.addEventListener("DOMContentLoaded", function () {
  eventListeners();
  darkMode();
  carrusel();
  botonesNosotros();
  tapCarrusel();
});

function eventListeners() {
  const mobileMenu = document.querySelector(".menu-mobile");
  mobileMenu.addEventListener("click", navegacionResponsive); //evento para abrir el menu
}

//acceder json

//Funcion para abrir el menu

function navegacionResponsive() {
  const navegacion = document.querySelector(".nav");
  navegacion.classList.toggle("ocultar-nav");
}

//darkMode
function darkMode() {
  const preferencia = window.matchMedia("(prefers-color-scheme: dark)");

  if (preferencia.matches) {
    document.body.classList.add("dark");
  } else {
    document.body.classList.remove("dark");
  }
  const darkMode = document.querySelector(".darkIcon");

  darkMode.addEventListener("click", function () {
    document.body.classList.toggle("dark");
  });
}

//carrusel servicios

async function carrusel() {
  try {
    //se accede al array
    const resultado = await fetch("./aplicacion.json");
    const db = await resultado.json();
    const { servicios } = db;

    //variables

    const botonAgendar = document.querySelector("#botonAgendar");
    const imagenProducto = document.querySelector("#imagenProducto");
    const tituloProducto = document.querySelector("#tituloProducto");
    const descripcionProducto = document.querySelector("#descripcionProducto");
    const detallesProducto = document.querySelector("#detallesProducto");
    const botonAnterior = document.querySelector("#botonAnterior");
    const botonSiguiente = document.querySelector("#botonSiguiente");
    

    //asignar valores

    var contador = 0;
    imagenProducto.src = servicios[contador].imagen;
    tituloProducto.textContent = servicios[contador].titulo;
    descripcionProducto.textContent = servicios[contador].descripcion;
    detallesProducto.textContent = servicios[contador].detalle;
    botonAgendar.href = servicios[contador].mensaje;

    //botones
    botonAnterior.addEventListener("click", function () {
      if (contador === 0) {
        contador = 5;
      } else {
        contador--;
      }

      imagenProducto.src = servicios[contador].imagen;
      tituloProducto.textContent = servicios[contador].titulo;
      descripcionProducto.textContent = servicios[contador].descripcion;
      detallesProducto.textContent = servicios[contador].detalle;
      botonAgendar.href = servicios[contador].mensaje;
    });
    botonSiguiente.addEventListener("click", function () {
      if (contador === 5) {
        contador = 0;
      } else {
        contador++;
      }
      imagenProducto.src = servicios[contador].imagen;
      tituloProducto.textContent = servicios[contador].titulo;
      descripcionProducto.textContent = servicios[contador].descripcion;
      detallesProducto.textContent = servicios[contador].detalle;
      botonAgendar.href = servicios[contador].mensaje;
    });

    //contador
  } catch (error) {
    console.log(error);
  }
}

async function botonesNosotros() {
  try {
    //Se accede al jason
    const resultado = await fetch("./aplicacion.json");
    const db = await resultado.json();
    const { botonesNosotros } = db;

    //declaracion texto a cambiar
    const tituloNosotros = document.querySelector("#tituloNosotros");
    const descripcionNosotros = document.querySelector("#descripcionNosotros");

    //declaracionde botones

    const botonMision = document.querySelector("#mision");
    const botonVision = document.querySelector("#vision");
    const botonValores = document.querySelector("#valores");

    const misionMovil = document.querySelector("#misionMovil");
    const visionMovil = document.querySelector("#visionMovil");
    const valoresMovil = document.querySelector("#valoresMovil");

    //Asignacion de valores al texto

  
    tituloNosotros.textContent = botonesNosotros[0].titulo;
    descripcionNosotros.textContent = botonesNosotros[0].descripcion;

    //cambio de valores al hacer click

    botonMision.addEventListener("click", function () {
      tituloNosotros.textContent = botonesNosotros[0].titulo;
      descripcionNosotros.textContent = botonesNosotros[0].descripcion;
    });

    botonVision.addEventListener("click", function () {
      tituloNosotros.textContent = botonesNosotros[1].titulo;
      descripcionNosotros.textContent = botonesNosotros[1].descripcion;
    });

    botonValores.addEventListener("click", function () {
      tituloNosotros.textContent = botonesNosotros[2].titulo;
      descripcionNosotros.textContent = botonesNosotros[2].descripcion;
    });

    misionMovil.addEventListener("click", function () {
      tituloNosotros.textContent = botonesNosotros[0].titulo;
      descripcionNosotros.textContent = botonesNosotros[0].descripcion;
    });

    visionMovil.addEventListener("click", function () {
      tituloNosotros.textContent = botonesNosotros[1].titulo;
      descripcionNosotros.textContent = botonesNosotros[1].descripcion;
    });

    valoresMovil.addEventListener("click", function () {
      tituloNosotros.textContent = botonesNosotros[2].titulo;
      descripcionNosotros.textContent = botonesNosotros[2].descripcion;
    });
  } catch (error) {
    console.log(error);
  }
}

async function tapCarrusel() {
  //acceder al jason
  const resultado = await fetch("./aplicacion.json");
  const db = await resultado.json();
  const { imagenAuto } = db;

  //imagen a cambiar 

  const imagen = document.querySelector("#imagenRandom");

  var contador = 0;
  imagen.src = imagenAuto[contador].imagen;

  //tap
  imagen.addEventListener("click", function () {
    if (contador === 5) {
      contador = 0;
    } else {
      contador++;
    }

    imagen.src = imagenAuto[contador].imagen;
  });
}


