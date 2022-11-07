(function (d, c, w) {

    const menu_item_show = document.querySelectorAll('.menu__item-show');
    const menu_item = document.querySelectorAll('.menu__item');

    function addClick() {

        console.log(menu_item);
        menu_item.forEach(element => {

            if (element.classList.contains('megamenu')) 
            {
                element.classList.remove('megamenu');
                element.classList.add('menu__item-show');
            }


            element.addEventListener('click', (e) => {
                // e.preventDefault();

                let subMenu = element.children[1].children[0];
                let height = 0;

                element.classList.toggle('menu__item-active');

                if (subMenu.clientHeight === 0) {
                    height = subMenu.scrollHeight;
                }
                subMenu.style.height = `${(height)}px`;


                // Convertir todos lo btnNav a main

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

                submenuMegamenu();

                //Agregar megamenu
                menu_item.forEach(element => {
                    if (element.classList.contains('mega')) 
                    {
                        element.classList.remove('menu__item-show');
                        element.classList.add('megamenu');
                    }
                });


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
        /*                             SUBMENU DE MEGAMENU                            */
        /* -------------------------------------------------------------------------- */

        const submenuMegamenu = () => {

            let menuInside = document.querySelectorAll('.megamenu .menu__nesting .menu__inside > .menu__link');
    
            menuInside.forEach(element => {

                // element.classList.remove('active');
                element.addEventListener('mouseover', () => {

                    menuInside.forEach(item => {
                        item.classList.remove('active');
                    });

                    element.classList.add('active');
                });

    
                let submenu = element.parentElement.parentElement.parentElement.parentElement.children[1];
                // console.log("submenu", submenu.children[0].children);
                let Altura = element.parentElement.parentElement.clientHeight;
                // console.log("Altura", Altura);
                let Ancho = element.parentElement.parentElement.clientWidth;
    
                submenu.style.marginLeft += Ancho + 'px';
                submenu.style.minHeight += Altura + 'px';
    
    
                // Habiliar o eliminar botonScroll 
                if (Altura > 423) {
                    // console.log("altura mayor a 423", element.parentElement.parentElement);
                    // element.parentElement.parentElement.style.cssText += "display: none;";
                    // console.log(element.parentElement.parentElement.parentElement);
                    element.parentElement.parentElement.parentElement.children[1].removeAttribute("style");
                } else {
                    //console.log("btn", element.parentElement.parentElement.parentElement.getElementsByClassName('botonScroll')[0]);
                    let botonScroll = element.parentElement.parentElement.parentElement.getElementsByClassName('botonScroll')[0];
                    botonScroll.style.cssText += "display: none;";
                }
                // Habiliar o eliminar botonScroll 
    
    
                
                let attrSubmenu = submenu.children[0].children;
                // console.log("attrSubmenu", attrSubmenu);
    
                element.addEventListener('mouseover', function (e) {
    
                    
    
                    Array.from(attrSubmenu).forEach(submega => {
                        submega.classList.add('d-none');
                    });
    
                    let item = attrSubmenu.namedItem(element.id);
                    submenu.classList.add("active");
                    // submenu.style.marginLeft += Ancho + 'px';
                    // submenu.style.minHeight += Altura + 'px';
    
                    if (item != null) {
                        if (element.id == item.getAttribute('name')) {
                            item.classList.remove('d-none');
                        } else {
                            item.classList.add('d-none');
                        }
                    }
    
                });
            });
        }
        submenuMegamenu();


        function ocultarSubmenusDeMegamenu(submenu) {
            let attrSubmenu = submenu.children[0].children;
            Array.from(submenu).forEach(item => {
                item.classList.add('d-none');
            });
        }

        /* -------------------------------------------------------------------------- */
        /*                         AUTO INICIAR SUBEMNU COVID                         */
        /* -------------------------------------------------------------------------- */

        // let menuCovid = document.getElementById('menuCovid');
        // menuCovid.addEventListener('mouseover', activarSubmenuCovid);

        // function activarSubmenuCovid(e) {
        //     if (e.target.parentElement.children[1]) {

        //         let submenu = e.target.parentElement.children[1].children[0].children[1];
        //         if (submenu) {
        //             submenu.classList.add('active');
        //             submenu.children[0].querySelectorAll("[name=pcrCovid]")[0].classList.remove('d-none');
        //             this.removeEventListener('mouseover', activarSubmenuCovid);
        //         }
        //     }
        // }
        /* -------------------------------------------------------------------------- */
        /*                       AUTO INICIAR SUBMENU SERVICIOS                       */
        /* -------------------------------------------------------------------------- */
        // let menuServicios = document.getElementById('menuServicios');
        // menuServicios.addEventListener('mouseover', activarSubmenuServicios);

        // function activarSubmenuServicios(e) {
        //     if (e.target.parentElement.children[1]) {

        //         let submenu = e.target.parentElement.children[1].children[0].children[1];
        //         if (submenu) {
        //             submenu.classList.add('active');
        //             submenu.children[0].querySelectorAll("[name=Laboratorio]")[0].classList.remove('d-none');
        //             this.removeEventListener('mouseover', activarSubmenuServicios);
        //         }
        //     }
        // }


        /* -------------------------------------------------------------------------- */
        /*       Iniciar Primera Pantalla de Megamenu al hacer hover en el menu       */
        /* -------------------------------------------------------------------------- */
        let navLinks = document.querySelectorAll('.megamenu > .menu__link');
        console.log("navLinks", navLinks);

        navLinks.forEach(navLink => {
            navLink.addEventListener('mouseover', (e) => {
                e.preventDefault();
                

                /* ------------- Reiniciar submenu activo al abrir submenuMega ------------- */

                //console.log("navLink", navLink.parentElement.children[1].children[0].children[0].children[0].children[0].children[0].children[0]);
                let subMenuMega = navLink.parentElement.children[1].children[0].children[0].children[0].children[0];
                let subMenuMegaArray = Array.of(subMenuMega.children);
           
                for (let item of subMenuMegaArray[0]) {
                    item.children[0].classList.remove('active');
                    // console.log("item", item);
                }
                subMenuMega.children[0].children[0].classList.add('active');

                /* ------------- Reiniciar submenu activoa al abrir submenuMega ------------- */



                let submenu = navLink.parentElement.children[1].children[0].children[0].children[1];
                let submenuChildren = submenu.children[0].children;

                Array.from(submenuChildren).forEach(submega => {
                    submega.classList.add('d-none');
                });

                if (submenu) {
                    submenu.children[0].children[0].classList.remove('d-none');
                   
                }
                removeEventListener('mouseover', this);
            });
        });


        /* -------------------------------------------------------------------------- */
        /*            Boton Para Ver Elementos Ocultos Del submenuMegamenu            */
        /* -------------------------------------------------------------------------- */
        const btnDownMega = document.querySelectorAll('.btnDownMega');
        btnDownMega.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                console.log('diste click', e.target.parentElement.parentElement.parentElement.parentElement.parentElement);

                let menuNesting = e.target.parentElement.parentElement.parentElement.parentElement.parentElement;

                e.target.parentElement.parentElement.style.cssText += "display: none;";

                if (menuNesting.style.cssText == "max-height: min-content;") 
                {
                    console.log('condicion 1');
                    menuNesting.removeAttribute("style");
                } else {
                    console.log('condicion 2');
                    menuNesting.style.cssText += "max-height: min-content;";
                }
            })
        });
    });

})(document, console, window);