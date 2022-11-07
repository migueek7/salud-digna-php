window.addEventListener('DOMContentLoaded', (event) => {

    (function(d,c,w){

        if (form_bucador) {
    
            form_bucador.reset();

            // btn_buscar.addEventListener('click', function() {
            //     cerrarTodo();
            //     fondo_oscuro.classList.toggle('fondo-oscuro__activo');
                
            //     if (buscador_caja.clientHeight) {
            //         //ocultar_buscador();
            //         cerrarTodo();
            //     } else {
            //         mostrar_buscador();     
            //     }
            // });


            function mostrar_buscador() 
            {
                let contenedor = document.querySelector('.buscador__caja .contenedor');
                buscador_caja.style.height = contenedor.clientHeight + "px";
                form_bucador.children[0].focus();
                fondo_oscuro.classList.add('fondo-oscuro__activo');
            }

            

            buscador_input.addEventListener('keyup', buscador_interno_keyup);

            function buscador_interno_keyup() {
                
                let filter = buscador_input.value.toUpperCase();
                let li = buscador_caja.getElementsByTagName('li');
                

                // Recorriendo elementos a filtrat mediante los "li"
                for (let i = 0; i < li.length; i++) {
                    
                    a = li[i].getElementsByTagName('a')[0];
                    textValue = a.textContent || a.innerText;
                

                    if (textValue.toUpperCase().indexOf(filter) > -1) {

                        li[i].style.display = "";
                        //buscador_interno.style.display = "block";
                        buscador_interno.classList.remove('d-none');

                        if (buscador_input.value === '') {
                            // buscador_interno.style.display = "none";
                            buscador_interno.classList.add('d-none');
                        }
                    }
                    else 
                    {
                        li[i].style.display = "none"
                    }
                }
            }




            // Navegar con teclado en buscador interno
            var ul = document.querySelector('.buscador__interno .list');
            var liSelected;
            var index = -1;

            document.addEventListener('keydown', function (event) {
                var len = ul.getElementsByTagName('li').length - 1;
                //var len = ul.getElementsByTagName('li').document.querySelectorAll('').length - 1;
                if (event.which === 40) {
                    index++;
                    //down 
                    if (liSelected) {
                        removeClass(liSelected, 'selected');
                        next = ul.getElementsByTagName('li')[index];
                        if (typeof next !== undefined && index <= len) {

                            liSelected = next;
                        } else {
                            index = 0;
                            liSelected = ul.getElementsByTagName('li')[0];
                        }
                        addClass(liSelected, 'selected');
                        console.log(index);
                    } else {
                        index = 0;

                        liSelected = ul.getElementsByTagName('li')[0];
                        addClass(liSelected, 'selected');
                    }
                } else if (event.which === 38) {

                    //up
                    if (liSelected) {
                        removeClass(liSelected, 'selected');
                        index--;
                        console.log(index);
                        next = ul.getElementsByTagName('li')[index];
                        if (typeof next !== undefined && index >= 0) {
                            liSelected = next;
                        } else {
                            index = len;
                            liSelected = ul.getElementsByTagName('li')[len];
                        }
                        addClass(liSelected, 'selected');
                    } else {
                        index = 0;
                        liSelected = ul.getElementsByTagName('li')[len];
                        addClass(liSelected, 'selected');
                    }
                }
            }, false);

            function removeClass(el, className) {
                if (el.classList) {
                    el.classList.remove(className);
                } else {
                    el.className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
                }
            };

            function addClass(el, className) {
                if (el.classList) {
                    el.classList.add(className);
                } else {
                    el.className += ' ' + className;
                }
            };

        }

    })(document, console, window);
});