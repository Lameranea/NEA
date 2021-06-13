const iconMenu = document.querySelector("#icono-menu"),
      menu = document.querySelector("#menu");

iconoMenu.addEventListener("Click, (e) => {

    menu.classList.toggle("active");
    document.body.classList.toggle("opacity");

    const rutaActual = e.target.getAttribute("src");
 
    if (rutaActual =="../Pagina web nea/Imagenes/Imagen_menu_hamburguesa.png") {
       e.target.setAttribute("src","../Pagina web nea/Imagenes/Imagen_menu_hamburguesa2.png"); 
    } else{
        e.target.setAttribute("../Pagina web nea/Imagenes/Imagen_menu_hamburguesa.png")
    }
});