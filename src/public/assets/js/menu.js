(function (d, c, w) {

    function addClick() {

        menu_item_show.forEach(element => {
            element.addEventListener('click', (e) => {
                // e.preventDefault();

                let subMenu = element.children[1].children[0];
                let height = 0;

                element.classList.toggle('menu__item-active');

                if (subMenu.clientHeight === 0) {
                    height = subMenu.scrollHeight;
                }
                subMenu.style.height = `${(height)}px`;
            })
        });
    }

    function borrarStyleAltura() {
        menu_item_show.forEach(element => {
            if (element.children[1].children[0].getAttribute('style')) {
                element.children[1].children[0].removeAttribute('style');
                element.classList.remove('menu__item-active');
            }
        });
    }

    function animacion_btn_hamburger() {
        menu_links.classList.toggle('nav-menu__visible');
        hamburger.classList.toggle('is-active');


        if (menu_links.classList.contains('nav-menu__visible')) {
            hamburger.setAttribute('aria-label', 'Cerrar menu');
            fondo_oscuro.classList.add('fondo-oscuro__activo');
        } else {
            hamburger.setAttribute('aria-label', 'Abrir menu');
            fondo_oscuro.classList.remove('fondo-oscuro__activo');
        }
    }

    window.addEventListener('DOMContentLoaded', (event) => {
        if (window.innerWidth <= 991) {
            addClick();
        } else {
            borrarStyleAltura();
        }

        window.addEventListener('resize', () => {
            if (window.innerWidth > 991) {

                borrarStyleAltura();
                d.getElementsByTagName('body')[0].removeAttribute('style');
                fondo_oscuro.classList.remove('fondo-oscuro__activo');
                hamburger.classList.remove('is-active');

                if (menu_links.parentElement.classList.contains('menu__links-show')) {
                    menu_links.parentElement.classList.remove('menu__links-show');
                    menu_links.parentElement.removeAttribute('style');
                }
            } else {
                addClick();
            }
        });


        hamburger.addEventListener('click', function (e) {
            e.preventDefault();

            animacion_btn_hamburger();

            if (menu_links.parentElement.classList.contains('menu__links-show')) {
                ocultar_menu();
            }
            else {
                cerrarTodo();
                fondo_oscuro.classList.add('fondo-oscuro__activo');
                menu_links.parentElement.classList.add('menu__links-show');
            }

            if (d.getElementsByTagName('body')[0].style.overflow === 'hidden') {
                d.getElementsByTagName('body')[0].removeAttribute('style');
            } else {
                d.getElementsByTagName('body')[0].style.overflow = 'hidden';
            }
        });


        window.onscroll = function () {
            let y = window.scrollY;
            if (y > 30) {
                menu_links.parentElement.style.top = '59px';
            } else {
                menu_links.parentElement.style.top = '102px';
            }
        };


        /* -------------------------------------------------------------------------- */
        /*                             SUBMENU DE SUBMENU                             */
        /* -------------------------------------------------------------------------- */

        let menuInside = document.querySelectorAll('.megamenu .menu__nesting .menu__inside > .menu__link');

        menuInside.forEach(element => {

            let submenu = element.parentElement.parentElement.parentElement.children[1];
            let Altura = element.parentElement.parentElement.clientHeight;
            let Ancho = element.parentElement.parentElement.clientWidth;

            // ocultarTodos();
            element.addEventListener('mouseover', function (e) {

                let attrSubmenu = submenu.children[0].children;
                Array.from(attrSubmenu).forEach(submega => {
                    submega.classList.add('d-none');
                });

                let item = attrSubmenu.namedItem(element.id);
                submenu.classList.add("active");
                submenu.style.marginLeft += Ancho + 'px';
                submenu.style.minHeight += Altura + 'px';

                if (item != null) {
                    if (element.id == item.getAttribute('name')) {
                        item.classList.remove('d-none');
                    } else {
                        item.classList.add('d-none');
                    }
                }

            });
        });

        /* -------------------------------------------------------------------------- */
        /*                         AUTO INICIAR SUBEMNU COVID                         */
        /* -------------------------------------------------------------------------- */

        let menuCovid = document.getElementById('menuCovid');
        menuCovid.addEventListener('mouseover', activarSubmenuCovid);

        function activarSubmenuCovid(e) {
            if (e.target.parentElement.children[1]) {

                let submenu = e.target.parentElement.children[1].children[0].children[1];
                if (submenu) {
                    submenu.classList.add('active');
                    submenu.children[0].querySelectorAll("[name=pcrCovid]")[0].classList.remove('d-none');
                    this.removeEventListener('mouseover', activarSubmenuCovid);
                }
            }
        }
        /* -------------------------------------------------------------------------- */
        /*                       AUTO INICIAR SUBMENU SERVICIOS                       */
        /* -------------------------------------------------------------------------- */
        let menuServicios = document.getElementById('menuServicios');
        menuServicios.addEventListener('mouseover', activarSubmenuServicios);

        function activarSubmenuServicios(e) {
            if (e.target.parentElement.children[1]) {

                let submenu = e.target.parentElement.children[1].children[0].children[1];
                if (submenu) {
                    submenu.classList.add('active');
                    submenu.children[0].querySelectorAll("[name=Laboratorio]")[0].classList.remove('d-none');
                    this.removeEventListener('mouseover', activarSubmenuServicios);
                }
            }
        }

    });

})(document, console, window);