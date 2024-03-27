function gymWordPress() {
   /* if(document.querySelector('.swiper')) {
        const opciones = {
            loop: true,
            autoplay: {
                delay: 3000
            }
        }
        new Swiper('.swiper', opciones);
    }
*/
  
    const hamburger = document.querySelector('.hamburguer-menu svg')
    hamburger.addEventListener('click', function() {
        const menuPrincipal = document.querySelector('.contenedor-menu');
        menuPrincipal.classList.toggle('mostrar');
    })
}

document.addEventListener('DOMContentLoaded', gymWordPress)

window.onscroll = function() {
   const scroll = window.scrollY;

   const barraNav = document.querySelector('.barra-navegacion')

   if(scroll > 300) {
    barraNav.classList.add('fixed-top');
   } else {
    barraNav.classList.remove('fixed-top');
   }
}

/*const usuario = document.querySelector('.menu-item-204')
usuario.addEventListener('click', function() {
    const submenu = document.querySelector('ul .sub-menu');
    submenu.classList.toggle('vermenu');
})*/