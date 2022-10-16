window.addEventListener('DOMContentLoaded', (event) => {
    (function(d,c,w){

        const NICARAGUA = true;

        const id_formulario = 'form-enviar';
        const btnEnviar =  d.getElementById("btn-enviar");
        const inputs = d.querySelectorAll(`#${id_formulario} input`);
        const mensaje_form = d.querySelector('.form__mensaje');

        /* --------------------------- Resetar formulario --------------------------- */

        d.getElementById(id_formulario).reset(); 

        /* -------------------------------------------------------------------------- */
        /*                        Status inicial de los campos                        */
        /* -------------------------------------------------------------------------- */

        const campos = {
            Correo:         false,
        }
        
        /* -------------------------------------------------------------------------- */
        /*                              Enviar Formulario                             */
        /* -------------------------------------------------------------------------- */

        btnEnviar.addEventListener('click', function (e) {
            e.preventDefault();

            /* ---------------- Comprobar todos los campos esten validados --------------- */

            if (campos.Correo) 
            {
                bloquear_btn_form("btn-enviar");
                EnviarCorreo();    
            }
            else 
            {
                formulario_invalido(btnEnviar, mensaje_form, id_formulario);
            }

        });


        /* -------------------------------------------------------------------------- */
        /*                                Enviar correo                               */
        /* -------------------------------------------------------------------------- */

        const EnviarCorreo = async() => {

            const usuario = {
                Usuario:            d.getElementById('Correo').value,
                IdFormatoCorreo:    2
            };
            if (NICARAGUA) usuario.Pais = 1;

            const myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/json");

            let requestOptions = {
                method:     'POST',
                headers:    myHeaders,
                body:      JSON.stringify(usuario)
            };

            try {

                const respuesta = await fetch(app.urlConsulta + "ConsultaResultados/RestablecerPasword", requestOptions);
                c.log(respuesta);
                if (!respuesta.ok) throw respuesta; // Capturar errores

                if (respuesta.ok) 
                {
                    const datos = await respuesta.json();
                    c.log(respuesta);
                    if (datos.Estatus != "false") 
                    {
                        const passwordUrl = 'LoginSD2017';
                        let encrypted;

                        if (NICARAGUA) {
                            encrypted = CryptoJS.AES.encrypt('Id=' + datos.IdRegistro + '&Usuario=' + datos.Usuario + '&Password=' + datos.Contrasena, passwordUrl).toString();
                            usuario.Pais = 1
                        }else{
                            encrypted = CryptoJS.AES.encrypt('Token='+datos.Token+'&Usuario='+datos.Usuario+'&Password='+datos.Contrasena, passwordUrl).toString();
                        }

	                    usuario.Url = encrypted;
	                    usuario.Nombre = datos.Nombre;
	                    usuario.ApellidoP = datos.ApellidoP;
	                    usuario.ApellidoM = datos.ApellidoM;
	                    usuario.Contrasena = datos.Contrasena;

                        EnviaCorreoRestablecerPass(usuario);
                    }
                    else
                    {
                        let mensaje = "El correo enviado no esta registrado.";
                        printAlert(mensaje_form, "danger", mensaje);
                        desbloquear_btn_form("btn-enviar");
                    }
                }
            } 
            catch (error) 
            {
                if(error.status) {
                    let json = await error.json();
                    console.log(`Error ${error.status} : ${error.statusText} : Error en la funcion ${EnviarCorreo.name}() : ${json.Message}`);
                    ejecutar_mensaje_error(error);
                    desbloquear_btn_form("btn-enviar");
                    bitacora_errores(error, json);
                } else {
                    c.log(error);
                }
            }
        }

        /* -------------------------------------------------------------------------- */
        /*                    Enviar correo de retablecer password                    */
        /* -------------------------------------------------------------------------- */

        const EnviaCorreoRestablecerPass = async(usuario) => {

            const myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/json");

            let requestOptions = {
                method:     'POST',
                headers:    myHeaders,
                body:      JSON.stringify(usuario)
            };
            
            try {
                const respuesta = await fetch(app.urlConsulta + "ConsultaResultados/EnviaCorreoRestablecerPass", requestOptions);
                c.log(respuesta);
                if (!respuesta.ok) throw respuesta; // Capturar errores

                if (respuesta.ok) 
                {
                    const datos = await respuesta.json();
                    
                    if (datos.Estatus == true) 
                    {
                        Swal.fire({
                            html:
                                `<h2 class="title font-size-lg mt-0 text-left">¡Correo enviado!</h2>
                                <img class="my-2" src="https://beta.salud-digna.site/wp-content/themes/SaludDigna/Consulta-Resultados/images/correo-enviado.svg" alt="icono correo enviado">
                                <p class="text-left line">
                                    Envíamos un mensaje a <span class="link"> ${usuario.Usuario} </span> para que pueda elegír su nueva contraseña.
                                </p>
                                <p class="text-left line">
                                    ¿No es tu dirección de correo electrónico? 
                                    <a href="${app.urlbase}restablecer-contrasena" class="link">Inténtalo de nuevo.</a>
                                </p>
                                <br>
                                <div class="d-flex align-items-center mt-0">
                                    <i class="icon-info-outline"></i>
                                    <p class="text-left pl-2 my-0" style="font-size: 14px;"> 
                                        Si no recibes el correo en la bandeja de entrada en los próximos minutos, revisa la bandeja de no deseados. Cualquier duda o aclaración, contáctanos a través de nuestro chat. 
                                    </p>
                                </div>`,
                            confirmButtonText: 'Aceptar',
                            showCloseButton: true,
                            allowOutsideClick: false,
                            allowEscapeKey: false,
                            showClass: {
                                popup: 'animate__animated animate__fadeInDown'
                            },
                            hideClass: {
                                popup: 'animate__animated animate__fadeOutUp'
                            }
                        }).then((result) => {
                            window.location.href = app.urlbase;   
                        });

                        desbloquear_btn_form("btn-enviar");
                    }
                }
            }
            catch (error) 
            {
                if(error.status) {
                    let json = await error.json();
                    console.log(`Error ${error.status} : ${error.statusText} : Error en la funcion ${EnviaCorreoRestablecerPass.name}() : ${json.Message}`);
                    ejecutar_mensaje_error(error);
                    desbloquear_btn_form("btn-enviar");
                    bitacora_errores(error, json);
                } else {
                    c.log(error);
                }
            }
        }

        /* -------------------------------------------------------------------------- */
        /*                   Enviar datos del formulario para validar                 */
        /* -------------------------------------------------------------------------- */

        inputs.forEach((input) => {
            input.addEventListener('keyup', function(e) 
            {
                validarFormularioRegistro(e, campos, btnEnviar);
            });

            input.addEventListener('blur', function(e) {
                validarFormularioRegistro(e, campos, btnEnviar);
            });

            input.addEventListener('change', function(e) {
                validarFormularioRegistro(e, campos, btnEnviar);
            })
        });

    })(document, console, window);
});