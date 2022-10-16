window.addEventListener('DOMContentLoaded', (event) => {

    const urlBase = 'http://salud-digna.test';
    const urlApi = "http://10.0.1.199:934/ConsultaResultados";

    const formRegistro = document.getElementById('form-registro');
    const btnRegistro = document.getElementById('btn-registro');
    const inputs = document.querySelectorAll('#form-registro input');
    const sexoRadioInput = document.querySelector('#option-1');
    const opciones = document.querySelectorAll('.option');
    const mensajeForm = document.querySelector('.form__mensaje');
    const fechaRegistro = document.querySelector('#FechaN');
    const telefonoRegistro = document.querySelector('#Telefono');
    const fechaInput =  document.getElementById('FechaN');
    //console.log(mensajeForm);

    formRegistro.reset();



    if (telefonoRegistro) {
        telefonoRegistro.addEventListener('focus', function(e) {
            console.log('foco');
            telefonoRegistro.setAttribute('placeholder', '(331) 234-5678');
        });
        telefonoRegistro.addEventListener('blur', function(e) {
            console.log('onblur');
            telefonoRegistro.setAttribute('placeholder', ' ');
        });
    }


    /* -------------------------------------------------------------------------- */
    /*                  Expresiones regulares para validar campos                 */
    /* -------------------------------------------------------------------------- */
    
    const expresiones = {
        nombre: /^[a-zA-Z\u00C0-\u017F\s]+$/, //acepta letras con acentos y espacios
        telefono: /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im, // valida telefono
        correo: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/, // valida correo
        fecha: /^d{1,2}\/\d{1,2}\/\d{2,4}$/, // valida fecha
        password: /^[a-zA-Z0-9\d$@$!%*?.&_-]{8,9}$/ // acepta letras, numero y algunos carecteres especiales d$@$!%*?.&_-
    }

    /* -------------------------------------------------------------------------- */
    /*                        Status inicial de los campos                        */
    /* -------------------------------------------------------------------------- */

    const campos = {
        Nombre: false,
        ApellidoP: false,
        ApellidoM: false,
        Genero: false,
        FechaN: false,
        Telefono: false,
        Correo: false,
        Contrasena: false,
        Contrasena2: false
    }


    /* -------------------------------------------------------------------------- */
    /*                     Validar si Genero fue seleccionado                     */
    /* -------------------------------------------------------------------------- */

    opciones.forEach(element => {
        element.addEventListener('click', function (e) {
            validarFormulario('genero');
        });
    });


    /* -------------------------------------------------------------------------- */
    /*                              Enviar Formulario                             */
    /* -------------------------------------------------------------------------- */

    btnRegistro.addEventListener('click', function (e) {
        e.preventDefault();

        // console.log('diste click');

        /* ------------------ Validar que este seleccionado el sexo ----------------- */

        if (!document.querySelector('input[name="Genero"]:checked')) {
            campos['Genero'] = false;
        } else {
            campos['Genero'] = true;
        }

        /* ---------------- Comprobar todos lo campos esten validados --------------- */

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

            /* ------------------- Enviar datos de formulario a la API ------------------ */

            console.log('todo bien', campos);
            btnRegistro.disabled = true;
            document.querySelector('.loader__btn').classList.add('loader__show');
            
            const fechaFormateada = newFechaFormat(fechaRegistro.value.trim()); 
            let myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/json");

            let generoChecked = document.querySelector('input[name="Genero"]:checked');
            let urlImagen = generoChecked.value == 1 ? 'images/avatar2.png' : 'images/avatar12.png'; 

            let raw = JSON.stringify({
                "Nombre":       document.getElementById('Nombre').value,
                "ApellidoP":    document.getElementById('ApellidoP').value,
                "ApellidoM":    document.getElementById('ApellidoM').value,
                "Telefono":     document.getElementById('Telefono').value,
                "Genero":       document.querySelector('input[name="Genero"]:checked').value,
                "Usuario":      document.getElementById('Correo').value,
                "Contrasena":   document.getElementById('Contrasena').value,
                "FechaN":       fechaFormateada,
                "UrlImagen":    urlImagen
            });

            let requestOptions = {
                method:     'POST',
                headers:    myHeaders,
                body:       raw,
                redirect:   'follow'
            };


            const enviarFomulario = async() => {

                try {
                    
                    const respuesta = await fetch(urlApi + "/ConsultaResultados/Registro", requestOptions);

                    if (respuesta.status === 200) 
                    {
                        document.querySelector('.loader__btn').classList.remove('loader__show');
                        btnRegistro.disabled = false;

                        const datos = await respuesta.json();
                        console.log(datos);    

                        if (datos.Estatus == 1) 
                        {
                            let dataString = '&TokenEncuesta=' + encodeURIComponent(datos.TokenEncuesta) + '&Nombre='+ datos.Nombre + '&ApellidoP='+ datos.ApellidoP + '&ApellidoM='+ datos.ApellidoM + '&Telefono='+ datos.Telefono + '&Genero='+ datos.Genero + '&Usuario='+ datos.Usuario + '&FechaNacimiento='+ datos.FechaNacimiento + '&UrlImagen='+ datos.UrlImagen + '&Periodicidad='+ datos.Periodicidad + '&TemasInteres='+ datos.TemasInteres + '&Contrasena='+ datos.Contrasena + '&UltimoIngreso='+ datos.UltimoIngreso + '&EstatusRegistro='+ datos.EstatusRegistro + '&Token='+ encodeURIComponent(datos.Token) + '&FechaRegistro='+ datos.FechaRegistro + '&FiltroConsulta='+ "0" + '&EstatusRegistroLogeo='+ datos.EstatusRegistroLogeo + '&IdSucursal='+ datos.IdSucursal;

                            requestOptions = {
                                method:     'POST',
                                headers:    myHeaders,
                                body:       dataString,
                            };

                            const respuesta2 = await fetch("/sitioiniciarsesion", requestOptions);
                            console.log('respuesta2', respuesta2);

                            Swal.fire({
                                title:  '¡Registro Exitoso!',
                                text:   'Ya puedes iniciar sesión con tus datos',
                                icon:   'success',
                                confirmButtonText: 'Iniciar Sesión'
                            }).then((result) => {
                                
                                if (respuesta2.status === 200) 
                                {
                                    window.location.href = "/wordpress/perfil/";
                                }
                            });
                            // Swal.fire({
                            //     title:  '¡Registro Exitoso!',
                            //     text:   'Ya puedes iniciar sesión con tus datos',
                            //     icon:   'success',
                            //     confirmButtonText: 'Ir al inicio'
                            // }).then((result) => {
                            //     window.location.href = urlBase;
                            // })
                        }
                        else if(datos.Estatus == 2)
                        {
                            Swal.fire({
                                title:  '¡Usuario Registrado!',
                                text:   '¡Este usuario ya se encuentra registrado! Intenta con otro correo electrónico.',
                                icon:   'warning',
                                confirmButtonText: 'Cerrar',
                                showCloseButton: true,
                                footer: `<a href="${urlBase}/iniciar-sesion">¿Deseas iniciar sesión?</a>`
                            })
                        }

                    }else if(respuesta.status === 401){
                        console.log('Error 401');  
                        document.querySelector('.loader__btn').classList.remove('loader__show');
                        btnRegistro.disabled = false;
                    }else if(respuesta.status === 404){
                        console.log('Error 404'); 
                        document.querySelector('.loader__btn').classList.remove('loader__show');
                        btnRegistro.disabled = false;
                    }else{
                        console.log('Error desconocido'); 
                        document.querySelector('.loader__btn').classList.remove('loader__show');
                        btnRegistro.disabled = false;
                    }
                } catch (error) {
                    console.log(error);

                    Swal.fire({
                        title:  '¡Registro Fallido!',
                        text:   '¡Error al intentar registrar usuario!. intenta de nuevo o más tarde.',
                        icon:   'error',
                        confirmButtonText: 'Cerrar',
                        showCloseButton: true,
                        footer: `<a href="${urlBase}/iniciar-sesion">¿Deseas iniciar sesión?</a>`
                    });

                    document.querySelector('.loader__btn').classList.remove('loader__show');
                    btnRegistro.disabled = false;
                }
            }
            //enviarFomulario(); 
            setTimeout(() => {
                enviarFomulario();            
            }, 3000);
        }
        else 
        {
            /* ------------------- Proceder en caso de error o falla ------------------- */

            //play('animate__shakeX');
            btnRegistro.classList.add('btn__disabled');
            console.log('todo mal');
            mensajeForm.innerHTML = printAlert('alert_danger', '¡Por Favor rellena el formulario correctamente!');
            // mensajeForm.innerHTML += printAlert('alert_warning', 'mensaje warning!!');

            alertas();

            /* -------------------------- Validar campos vacios ------------------------- */

            inputs.forEach(input => {
                if (input.value == '') 
                {
                    input.classList.add('form__input-error');
                }
            });

            /* ------------------------- Validar el campo Genero ------------------------ */
            
            if (!document.querySelector('input[name="Genero"]:checked')) 
            {
                sexoRadioInput.parentElement.classList.add('form__input-error');
            }

        }
    });


    function validarFormulario(e) {
        // validamos el option de genero
        if (e.target === undefined) {
            validaOk(sexoRadioInput);
            campos['Genero'] = true;
            ejecutarValidacion(null)
        }

        // validamos todos lo campos
        if (e.target !== undefined) {
            ejecutarValidacion(e)
        }

        function ejecutarValidacion(e) {

            let mensaje;
            let campoName;

            // Definir el nombre del campo a validar
            e !== null ? campoName = e.target.name : campoName = 'Genero';

            switch (campoName) {
                case 'Nombre':
                    mensaje = 'No se permiten numeros o caracteres especiales';
                    validarCampo(expresiones.nombre, e.target, e.target.name, mensaje);
                    break;
                case 'ApellidoP':
                    mensaje = 'No se permiten numeros o caracteres especiales';
                    validarCampo(expresiones.nombre, e.target, e.target.name, mensaje);
                    break;
                case 'ApellidoM':
                    mensaje = 'No se permiten numeros o caracteres especiales';
                    validarCampo(expresiones.nombre, e.target, e.target.name, mensaje);
                break;
                case 'Genero':

                    if (document.querySelector('input[name="Genero"]:checked')) {
                        validaOk(sexoRadioInput);
                        campos['Genero'] = true;
                    }else{
                        validaFalla(sexoRadioInput.parentElement);
                    }
                    break;
                case 'Telefono':
                    mensaje = 'Numero de teléfono inválido';
                    validarCampo(expresiones.telefono, e.target, e.target.name, mensaje);
                    break;
                case 'Correo':
                    mensaje = 'Correo electronico inválido';
                    validarCampo(expresiones.correo, e.target, e.target.name, mensaje);
                    break;
                case 'FechaN':
                    mensaje = 'Fecha de nacimiento inválida';
                    validarCampo(expresiones.fecha, e.target, e.target.name, mensaje);
                    validarFecha(e.target);
                    validaYear4Digitos(e);
                    break;
                case 'Contrasena':
                    mensaje = 'La contraseña debe tener entre 8 y 9 caracteres de longitud';
                    validarCampo(expresiones.password, e.target, e.target.name, mensaje);

                    mensaje = 'La contraseñas no coinciden';
                    validarContrasena2(mensaje);
                    break;
                case 'Contrasena2':
                    mensaje = 'La contraseñas no coinciden';
                    validarContrasena2(mensaje);
                 break;
            }
        }


        const totalCampos = Object.keys(campos).length; // total de campos
        let campoValidado = 0;

        // Recorremos el objeto campos
        for (const property in campos) {
            // console.log(`${property}: ${campos[property]}`);

            // por cada campo verdadero sumamos 1 al valor de bandera
            if (campos[property]) {
                campoValidado++;
            }
        }
        console.log('campoValidados', campoValidado);
        console.log('totalCampos', totalCampos);
        // Si bandera es igual al total de campos
        if (campoValidado === totalCampos) {
            btnRegistro.classList.remove('btn__disabled');
            mensajeForm.classList.remove('form__mensaje-visible');
        } else {
            btnRegistro.classList.add('btn__disabled');
            // mensajeForm.classList.add('form__mensaje-visible');
            campoValidado = 0; // reinicio campo validado
        }

    }


    /* -------------------------------------------------------------------------- */
    /*                          Validar todos los campos                          */
    /* -------------------------------------------------------------------------- */

    const validarCampo = (expresion, input, campo, mensaje) => {

        let formInput = input.parentElement.parentElement;

        if (input.value.length > 0) {
            if (expresion.test(input.value.trim())) {
                validaOk(input);
                campos[campo] = true;
            } else {
                validaFalla(input, mensaje);
                campos[campo] = false;
            }
        }
        else {
            input.classList.remove('form__input-error');
            formInput.querySelector('.form__error').classList.remove('form__error-visible');
            formInput.querySelector('.form__error').textContent = '';
            campos[campo] = false;
        }
    }

  

    /* -------------------------------------------------------------------------- */
    /*                         Validar Contraseña repetida                        */
    /* -------------------------------------------------------------------------- */

    validarContrasena2 = (mensaje) => {
        const inputContrasena1 = document.getElementById('Contrasena');
        const inputContrasena2 = document.getElementById('Contrasena2');

        if (inputContrasena1.value !== inputContrasena2.value) {
            validaFalla(inputContrasena2, mensaje);
            campos['Contrasena2'] = false;
        }
        else {
            validaOk(inputContrasena2);
            campos['Contrasena2'] = true;
        }
    }

    /* -------------------------------------------------------------------------- */
    /*                                Validar fecha                               */
    /* -------------------------------------------------------------------------- */

    function validarFecha(inputFecha) {
        console.log('validar fecha');
        // const fechaValue = inputFecha.value.trim();
        const fechaValue = newFechaFormat(inputFecha.value.trim());
        console.log(inputFecha.name);

        if (!validarFormatoFecha(fechaValue)) {
            validaFalla(inputFecha, '* Fecha de nacimiento inválida 1');
            campos[inputFecha.name] = false;
        }
        else if (!existeFecha(fechaValue)) {
            validaFalla(inputFecha, '* Fecha de nacimiento inválida 2');
            campos[inputFecha.name] = false;
        }
        else if (!validarFechaMenorActual(fechaValue)) {
            validaFalla(inputFecha, '* Fecha de nacimiento inválida 3');
            campos[inputFecha.name] = false;
        }
        else {
            validaOk(inputFecha);
            campos[inputFecha.name] = true;
        }
    }

    /* -------------------------------------------------------------------------- */
    /*                        Funciones para validar fecha                        */
    /* -------------------------------------------------------------------------- */

    // Validar formato de la fecha
    function validarFormatoFecha(fecha) {
        var RegExPattern = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
        if ((fecha.match(RegExPattern)) && (fecha != '')) {
            return true;
        } else {
            return false;
        }
    }
    // Validar si existe fecha
    function existeFecha(fecha) {
        var fechaf = fecha.split("/");
        var day = fechaf[0];
        var month = fechaf[1];
        var year = fechaf[2];

        console.log('eale', day+'--'+month+'--'+year);
        
        var date = new Date(year, month, '0');
        if ((day - 0) > (date.getDate() - 0) || month > 12) {
            return false;
        } else {
            return true;
        }
    }
    // Validar fecha menor a actual
    function validarFechaMenorActual(date) {
        var x = new Date();
        var fecha = date.split("/");
        x.setFullYear(fecha[2], fecha[1] - 1, fecha[0]);
        var today = new Date();

        if (x >= today) {
            return false;
        } else {
            return true;
        }
    }
    // Cambiar formato del campo fecha
    function newFechaFormat(fecha) {
        let fechaf = fecha.split("-");
        let year = fechaf[0];
        let month = fechaf[1];
        let day = fechaf[2];
        return `${day}/${month}/${year}`;
    }
    // Validar que año sea de 4 digitos
    function validaYear4Digitos(e){
        console.log(e.target.value.length);

        let fecha = e.target.value;
        console.log('fecha', fecha);
        
        if (e.target.value.length > 10) 
        {
            let fechaf = fecha.split("-");
            let year = fechaf[0];
            let month = fechaf[1];
            let day = fechaf[2];
            let ageCortado = year.slice(0, -1)
            console.log('fechaModif', ageCortado);
            console.log('te pasaste');
            fechaInput.value = ageCortado+'-'+month+'-'+day;
        }
    }

    /* -------------------------------------------------------------------------- */
    /*                        Procesar validacion de campos                       */
    /* -------------------------------------------------------------------------- */

    const validaFalla = (input, mensaje) => {
        input.classList.add('form__input-error');
        const formInput = input.parentElement.parentElement;
        const aviso = formInput.querySelector('.form__error');
        aviso.classList.add('form__error-visible');
        if (mensaje !== null) {
            aviso.textContent = mensaje;
        }
    }
    const validaOk = (input) => {

        if (input.classList.contains('form__input-error')) 
        {
            input.classList.remove('form__input-error');
        }

        if(input.parentElement.classList.contains('form__input-error'))
        {
            input.parentElement.classList.remove('form__input-error');
        }

        const formInput = input.parentElement.parentElement;
        const aviso = formInput.querySelector('.form__error');
        if(aviso){
            aviso.classList.remove('form__error-visible');
        }else{
            input.classList.remove('form__error-visible');
        }
    }


    /* -------------------------------------------------------------------------- */
    /*                   Enviar datos del formulario para validar                 */
    /* -------------------------------------------------------------------------- */

    inputs.forEach((input) => {
        input.addEventListener('keyup', validarFormulario);
        input.addEventListener('blur', validarFormulario);
        input.addEventListener('change', validarFormulario);
    });


    /* -------------------------------------------------------------------------- */
    /*                      OCULTAR O MOSTRAR ICON EYE INPUT                      */
    /* -------------------------------------------------------------------------- */
    
    const password1 = document.getElementById('Contrasena');
    const password2 = document.getElementById('Contrasena2');
    const btnEye1 = document.getElementById('toggle1');
    const btnEye2 = document.getElementById('toggle2');
    
    btnEye1.addEventListener('click', function(e){
    	showHide(1);
    });

    btnEye2.addEventListener('click', function(e){
        showHide(2);
    });

    function showHide(opcion) {
        if (opcion == 1) {
            if (password1.type === 'password') 
            {
                password1.setAttribute('type', 'text');
                btnEye1.classList.add('cambiar'); 
            }
            else
            {
                password1.setAttribute('type', 'password');
                btnEye1.classList.remove('cambiar');
            }
        }else{
            if (password2.type === 'password') 
            {
                password2.setAttribute('type', 'text');
                btnEye2.classList.add('cambiar'); 
            }
            else
            {
                password2.setAttribute('type', 'password');
                btnEye2.classList.remove('cambiar');
            }
        }
    }



    document.querySelector('.form__input').addEventListener('keyup', function(e) {
        if (e.keyCode == 37) {//38 para arriba
         
            console.log(e.target-1);
            //document.getElementById("myTextField").focus();
            //mover(e, -1);
        }
        if (e.keyCode == 39) {//40 para abajo
            console.log(e.target+1);
            //mover(e, 1);
        }
    });



    /* -------------------------------------------------------------------------- */
    /*                             EJECUTAR UNA ALERTA                            */
    /* -------------------------------------------------------------------------- */

    function printAlert(tipoAlerta, mensaje) {
        return `
            <div class="alert ${tipoAlerta}">
                <div class="alert--icon">
                    <i class="fas fa-times-circle"></i>
                </div>
                <div class="alert--content">
                    ${mensaje}
                </div>
                <div class="alert--close">
                    <i class="far fa-times-circle"></i>
                </div>
            </div>
        `;
    }



    // function play(tipoAnimacion) {
    //     document.querySelector(".form__mensaje").className = "form__mensaje form__mensaje-visible";

    //     window.requestAnimationFrame(function (time) {
    //         window.requestAnimationFrame(function (time) {
    //             document.querySelector(".form__mensaje").classList.add('animate__animated', tipoAnimacion);
    //         });
    //     });
    // }




    // e.addEventListener("animationstart", listener, false);
    // e.addEventListener("animationiteration", listener, false);
    // alert.addEventListener("animationend", listener, false);
    // e.className = "form__mensaje form__mensaje-visible";

    // function listener(e) {

    //   // removemos el evento
    //   // e.target.removeEventListener(e.type, listener);

    //   var l = document.createElement("li");
    //   switch(e.type) {
    //     case "animationstart":
    //       // l.innerHTML = "Iniciado: tiempo transcurrido " + e.elapsedTime;
    //       break;
    //     case "animationend":

    //       e.target.classList.add('alert_none');
    //       // document.querySelector(".form__mensaje").className = "form__mensaje";

    //       break;
    //     case "animationiteration":
    //       // l.innerHTML = "Nueva iteración comenzó a los " + e.elapsedTime;
    //       break;
    //   }
    // }

});