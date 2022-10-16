window.addEventListener('DOMContentLoaded', (event) => {

    (function(d,c,w){

        const NICARAGUA = true;

        const id_formulario = 'form-registro';
        const formRegistro = d.getElementById(`${id_formulario}`);
        const btnRegistro = d.getElementById('btn-registro');
        const inputs = d.querySelectorAll(`#${id_formulario} input`);
        const mensaje_form = d.querySelector('.form__mensaje');
        const fechaRegistro = d.querySelector('#FechaN');
        const telefonoRegistro = d.querySelector('#Telefono');

        /* --------------------------- Resetar formulario --------------------------- */

        formRegistro.reset(); 

        /* ----------------------- Ocultar o mostrar password ----------------------- */

        mostrar_ocultar_password();

        /* ----------- Agregar Placeholder a telefono cuando este en focus ---------- */

        if (telefonoRegistro) {
            telefonoRegistro.addEventListener('focus', function(e) {
                telefonoRegistro.setAttribute('placeholder', '(331) 234-5678');
            });
            telefonoRegistro.addEventListener('blur', function(e) {
                telefonoRegistro.setAttribute('placeholder', ' ');
            });
        }

        /* -------------------------------------------------------------------------- */
        /*                        Status inicial de los campos                        */
        /* -------------------------------------------------------------------------- */

        const campos = {
            Nombre:         false,
            ApellidoP:      false,
            ApellidoM:      false,
            Genero:         false,
            FechaN:         false,
            Telefono:       false,
            Correo:         false,
            Contrasena:     false,
            Contrasena2:    false
        }

        /* -------------------------------------------------------------------------- */
        /*                              Enviar Formulario                             */
        /* -------------------------------------------------------------------------- */

        btnRegistro.addEventListener('click', function (e) {
            e.preventDefault();

            /* ---------------- Comprobar todos los campos esten validados --------------- */

            if (campos.Nombre &&
                campos.ApellidoP &&
                campos.ApellidoM &&
                campos.Genero &&
                campos.FechaN &&
                campos.Correo &&
                campos.Telefono &&
                campos.Contrasena &&
                campos.Contrasena2) 
            {
                bloquear_btn_form("btn-registro");
                Registro();    
            }
            else 
            {
                formulario_invalido(btnRegistro, mensaje_form, id_formulario);
            }
        });


        const Registro = async() => {

            const fechaFormateada = cambiarFormatoFecha(fechaRegistro.value.trim()); 
            const generoChecked = d.querySelector('input[name="Genero"]:checked');
            const urlImagen = generoChecked.value == 1 ? 'images/avatar2.png' : 'images/avatar12.png'; 
            
            const data = {
                "Nombre":           d.getElementById('Nombre').value.trim(),
                "ApellidoP":        d.getElementById('ApellidoP').value.trim(),
                "ApellidoM":        d.getElementById('ApellidoM').value.trim(),
                "Telefono":         d.getElementById('Telefono').value.trim(),
                "Genero":           d.querySelector('input[name="Genero"]:checked').value.trim(),
                "Usuario":          d.getElementById('Correo').value.trim(),
                "Contrasena":       d.getElementById('Contrasena').value.trim(),
                "FechaN":           fechaFormateada,
                "UrlImagen":        urlImagen
            };

            if (NICARAGUA) {
                data.Pais = 1;
                data.IdFormatoCorreo = 1
            }

            const myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/json");

            let requestOptions = {
                method:     'POST',
                headers:    myHeaders,
                body:       JSON.stringify(data),
            };

            try {     
                const respuesta = await fetch(app.urlConsulta + "ConsultaResultados/Registro", requestOptions);
                if (!respuesta.ok) throw respuesta; // Capturar errores

                if (respuesta.status === 200) 
                {
                    const datos = await respuesta.json();
                    c.log("datos", datos);

                    if (datos.Estatus == 1) 
                    {
                        sitioiniciarsesion(datos);
                    }
                    else if(datos.Estatus == 2)
                    {
                        Swal.fire({
                            title:  'Usuario Registrado',
                            text:   'Este usuario ya se encuentra registrado.',
                            icon:   'warning',
                            confirmButtonText: 'Cerrar',
                            showCloseButton: true,
                            footer: `<a href="${app.urlbase}/iniciar-sesion">¿Deseas iniciar sesión?</a>`
                        });
                        desbloquear_btn_form("btn-registro");
                    }
                }
            } 
            catch (error) 
            {
                if(error.status) {
                    let json = await error.json();
                    console.log(`Error ${error.status} : ${error.statusText} : Error en la funcion ${Registro.name}() : ${json.Message}`);
                    ejecutar_mensaje_error(error);
                    desbloquear_btn_form("btn-ingreso");
                    bitacora_errores(error, json);
                } else {
                    c.log(error);
                }
            }
        }

        /* -------------------------------------------------------------------------- */
        /*                         Iniciar sesion en el sitio                         */
        /* -------------------------------------------------------------------------- */

        async function sitioiniciarsesion(response)
        {

            let FiltroConsulta, dataString;

            if (NICARAGUA) 
            {
                FiltroConsulta = response.IdPaciente == 0 ? 0 : 1;

                dataString = '&Id=' + response.IdRegistro + '&Nombre=' + response.Nombre + '&ApellidoP=' + response.ApellidoP + '&ApellidoM=' + response.ApellidoM + '&Telefono=' + response.Telefono + '&Genero=' + response.Genero + '&Usuario=' + response.Usuario + '&FechaNacimiento=' + response.FechaNacimiento + '&UrlImagen=' + response.UrlImagen + '&Periodicidad=' + response.Periodicidad + '&TemasInteres=' + response.TemasInteres + '&Contrasena=' + response.Contrasena + '&UltimoIngreso=' + response.UltimoIngreso + '&EstatusRegistro=' + response.EstatusRegistro + '&IdPaciente=' + response.IdPaciente + '&FechaRegistro=' + response.FechaRegistro + '&UsuarioTicket=' + response.UsuarioTicket + '&NumeroTicket=' + response.NumeroTicket + '&FiltroConsulta=' + FiltroConsulta + '&EstatusRegistroLogeo=' + response.EstatusRegistroLogeo + '&IdSucursal=' + response.IdSucursal;
            }
            else
            {
                FiltroConsulta = response.Token == 0 ? 0 : 1;

                dataString = '&TokenEncuesta=' + encodeURIComponent(response.TokenEncuesta) + '&Nombre='+ response.Nombre + '&ApellidoP='+ response.ApellidoP + '&ApellidoM='+ response.ApellidoM + '&Telefono='+ response.Telefono + '&Genero='+ response.Genero + '&Usuario='+ response.Usuario + '&FechaNacimiento='+ response.FechaNacimiento + '&UrlImagen='+ response.UrlImagen + '&Periodicidad='+ response.Periodicidad + '&TemasInteres='+ response.TemasInteres + '&Contrasena='+ response.Contrasena + '&UltimoIngreso='+ response.UltimoIngreso + '&EstatusRegistro='+ response.EstatusRegistro + '&Token='+ encodeURIComponent(response.Token) + '&FechaRegistro='+ response.FechaRegistro + '&FiltroConsulta='+ "0" + '&EstatusRegistroLogeo='+ response.EstatusRegistroLogeo + '&IdSucursal='+ response.IdSucursal;
            }

            const myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/x-www-form-urlencoded");

            let requestOptions = {
                method:     'POST',
                headers:    myHeaders,
                body:       dataString,
                redirect:   'follow'
            };

            try {
                const respuesta = await fetch(app.urlbase + "sitioiniciarsesion", requestOptions);
                if (!respuesta.ok) throw respuesta; // Capturar errores

                if (respuesta.ok) 
                {
                    //console.log("respuesta", respuesta.text());
                    Swal.fire({
                        title:  '¡Registro Exitoso!',
                        text:   'Ya puedes iniciar sesión con tus datos',
                        icon:   'success',
                        confirmButtonText: 'Iniciar Sesión'
                    }).then((result) => {
                        
                        window.location.href = '/perfil/'

                    });
                }
            } 
            catch (error) 
            {
                if(error.status) {
                    let json = await error.json();
                    console.log(`Error ${error.status} : ${error.statusText} : Error en la funcion ${sitioiniciarsesion.name}() : ${json.Message}`);
                    ejecutar_mensaje_error(error);
                    desbloquear_btn_form("btn-ingreso");
                    bitacora_errores(error, json);
                } else {
                    c.log(error);
                }
            }
        }


        /* -------------------------------------------------------------------------- */
        /*                   Enviar datos del formulario para validar                 */
        /* -------------------------------------------------------------------------- */

        const repetirPasswordInputs = ['Contrasena', 'Contrasena2'];

        inputs.forEach((input) => {
            input.addEventListener('keyup', function(e) 
            {
                validarFormularioRegistro(e, campos, btnRegistro, fechaRegistro);
            });

            input.addEventListener('blur', function(e) {
                validarFormularioRegistro(e, campos, btnRegistro, fechaRegistro);
            });

            input.addEventListener('change', function(e) {
                validarFormularioRegistro(e, campos, btnRegistro, fechaRegistro);
            })
        });


    })(document, console, window);
});