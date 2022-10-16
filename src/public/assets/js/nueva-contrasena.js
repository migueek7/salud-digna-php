window.addEventListener('DOMContentLoaded', (event) => {
    (function(d,c,w){

        const NICARAGUA = true;

        const id_formulario = 'form-enviar';
        const btnCambiar =  d.getElementById("btn-enviar");
        const inputs = d.querySelectorAll(`#${id_formulario} input`);
        const mensaje_form = d.querySelector('.form__mensaje');

        /* --------------------------- Resetar formulario --------------------------- */

        d.getElementById(id_formulario).reset(); 

        /* ----------------------- Mostrar y ocultar password ----------------------- */

        mostrar_ocultar_password();

        /* ------------------------- Obener llave de la url ------------------------- */

        const passwordUrl = 'LoginSD2017';
        const url = window.location.search.replace('?', '');
        if (!url) w.location.href = app.urlbase;

         /* -------------------- Desencriptar llave de la url ------------------- */

        let decrypted = CryptoJS.AES.decrypt(url, passwordUrl);
        decrypted = decrypted.toString(CryptoJS.enc.Utf8);

        /* ---------------------- Obtener parametros de la url ---------------------- */

        const params = new URLSearchParams(decrypted); // obtener parametros
        let Id,Token;
        NICARAGUA ? Id = params.get("Id") : Token = params.get("Token");
        const Usuario = params.get("Usuario");
        const Password = params.get("Password");

        /* -------------------------------------------------------------------------- */
        /*                        Status inicial de los campos                        */
        /* -------------------------------------------------------------------------- */

        const campos = {
            Contrasena:     false,
            Contrasena2:    false
        }
        
        /* -------------------------------------------------------------------------- */
        /*                              Enviar Formulario                             */
        /* -------------------------------------------------------------------------- */

        btnCambiar.addEventListener('click', function (e) {
            e.preventDefault();

            /* ---------------- Comprobar todos los campos esten validados --------------- */

            if (campos.Contrasena && campos.Contrasena2) 
            {
                bloquear_btn_form("btn-enviar");

                const CambiaPassword = async() => {
                    const usuario = {};
                    NICARAGUA ? usuario.IdRegistro = Id : usuario.Token = Token;
                    usuario.Contrasena = Password;
                    usuario.ContrasenaNueva = d.getElementById("Contrasena").value;
                    usuario.Usuario = Usuario;
                    usuario.IdFormatoCorreo = 3;
                    if (NICARAGUA) usuario.Pais = 1;
    
                    const myHeaders = new Headers();
                    myHeaders.append("Content-Type", "application/json");
    
                    const requestOptions = {
                        method:     'POST',
                        headers:    myHeaders,
                        body:   JSON.stringify(usuario)
                    };

                    try {

                        const respuesta = await fetch(app.urlConsulta + 'ConsultaResultados/CambiaPassword', requestOptions); 
                        if (!respuesta.ok) throw respuesta; // Capturar errores
                        
                        const datos = await respuesta.json();
                        console.log("datos", datos);
    
                        if (datos.Estatus == true) 
                        {
                            Swal.fire({
                                html:
                                    `<h2 class="title font-size-lg mt-0 text-left">Contraseña restablecida</h2>
                                    <p class="text-left line">Inicia sesión con tu correo y contraseña nueva.</p>
                                    <img class="my-2" src="https://salud-digna.com/consulta-resultados/contrasena-restablecida.svg" alt="icono contraseña restablecida">`,
                                confirmButtonText: 'Iniciar sesión',
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
                                w.location.href = app.urlbase+"iniciar-sesion";   
                            });
    
                            desbloquear_btn_form("btn-enviar");
                        }
                        else 
                        {
                            if(datos.EstatusToken == false) {
                                Swal.fire({
                                    title:  '¡Token Incorrecto!',
                                    text:   'El Token expiro o es incorrecto, solicita de nuevo el cambio de contraseña.',
                                    icon:   'error',
                                    confirmButtonText: 'Aceptar',
                                    showCloseButton: true,
                                }).then((result) => {
                                    w.location.href = app.urlbase+"restablecer-contrasena";   
                                });
                            }
                            
                            if(datos.Opcion == 'passwordigual'){
                                printAlert(mensaje_form, "danger", datos.MensajeError);
                                desbloquear_btn_form("btn-enviar");
                            }
                        }

                    } 
                    catch (error) 
                    {
                        if(error.status) {
                            let json = await error.json();
                            console.log(`Error ${error.status} : ${error.statusText} : Error en la funcion ${CambiaPassword.name}() : ${json.Message}`);
                            ejecutar_mensaje_error(error);
                            desbloquear_btn_form("btn-enviar");
                            bitacora_errores(error, json);
                        } else {
                            c.log(error);
                        }
                    }   
    
                } 
                CambiaPassword();
            }
            else 
            {
                formulario_invalido(btnCambiar, mensaje_form, id_formulario);
            }
        });
       

        inputs.forEach((input) => {
            input.addEventListener('keyup', function(e) 
            {
                validarFormularioRegistro(e, campos, btnCambiar);
            });

            input.addEventListener('blur', function(e) {
                validarFormularioRegistro(e, campos, btnCambiar);
            });

            input.addEventListener('change', function(e) {
                validarFormularioRegistro(e, campos, btnCambiar);
            })
        });

    })(document, console, window);
});