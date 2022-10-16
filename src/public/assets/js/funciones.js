let app = {
    urlConsulta: 'https://api.emarketingsd.org/ConsultaResultadosUniversal/', //Nicaragua
    //urlConsulta: 'http://10.0.1.199:934/ConsultaResultados/', // Beta
    urlbase: 'http://salud-digna.test/',
    //urlbase: 'https://salud-digna.com.ni/'
    //urlCitas: 'http://10.0.1.199:934/Citas/', //beta
    //urlCitas: 'https://api.emarketingsd.org/citas/', //produccion
    //urlBitacora: 'https://api-errores-resultados.salud-digna.site/guardar/bitacoraWeb', // Bitacora Produccion
    urlBitacora: 'https://api-errores-resultados.salud-digna.site/beta/guardar/bitacoraWeb', //Bitacora Beta
}

document.getElementById('fondo-oscuro').addEventListener('click', function(){
    cerrarTodo();
});


const menu_links = document.querySelector('.menu__links');
const menu_item_show = document.querySelectorAll('.menu__item-show');
const menu_accion = document.querySelector('.menu__accion');
const hamburger = document.querySelector('.hamburger');
const fondo_oscuro = document.getElementById('fondo-oscuro');
const buscador_caja = document.querySelector('.buscador__caja');
const form_bucador = document.getElementById('form-buscador');
const input_search = document.querySelector('.buscador__input');
const buscador_interno = document.querySelector('.buscador__interno');
const btn_buscar = document.getElementById('btn-buscar');
const buscador_input = document.querySelector('.buscador__input');


function cerrarTodo() {

    document.getElementsByTagName('body')[0].removeAttribute('style');

    ocultar_menu();
    if (buscador_caja) {
        ocultar_buscador();
    }
}

function ocultar_buscador() 
{
    buscador_caja.style.height = 0;
    form_bucador.reset();
    fondo_oscuro.classList.remove('fondo-oscuro__activo');
    buscador_interno.classList.add('d-none');
}

function ocultar_menu() 
{
    if (menu_links.parentElement.classList.contains('menu__links-show')) 
    {
        menu_links.parentElement.classList.remove('menu__links-show');
        menu_accion.querySelector('.hamburger').classList.remove('is-active');
        fondo_oscuro.classList.remove('fondo-oscuro__activo');
    }
}



/* -------------------------------------------------------------------------- */
/*                     Expresiones Regulares para Validar                     */
/* -------------------------------------------------------------------------- */

function expresiones_regulares() 
{
    const expresiones = {
        nombre: /^[a-zA-Z\u00C0-\u017F\s]+$/, // letras con acentos y espacios
        usuario: /^[0-9a-zA-Z\d$@$!%*?.&_-]+$/, // letras, numeros y algunos carecteres especiales d$@$!%*?.&_-
        numerico: /^[0-9]+$/, // Solo numeros
        telefono: /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im, // valida telefono
        correo: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/, // valida correo
        fecha: /^d{1,2}\/\d{1,2}\/\d{2,4}$/, // valida fecha
        password: /^[a-zA-Z0-9\d$@$!%*?.&_-]{8,9}$/, // acepta letras, numeros y algunos carecteres especiales ( d$@$!%*?.&_- ) de 8 a 9 caracteres
        password2: /^[a-zA-Z0-9\d$@$!%ñ*?.&_-]+$/ // acepta letras, numeros y algunos carecteres especiales ( d$@$!%*?.&_- )
    }
    return expresiones;
}


/* -------------------------------------------------------------------------- */
/*                          Validar los campos vacios                         */
/* -------------------------------------------------------------------------- */

function comprobar_campos_vacios(id_formulario) 
{
    /* ----------------------- Comprobar inputs tipo text ----------------------- */

    const inputs = document.querySelectorAll(`#${id_formulario} input`);

    if (inputs) {
        inputs.forEach(input => {
            if (input.value == '') 
            {
                input.classList.add('form__input-error');
            }
        });
    }

    /* ----------------------- Comprobar inputs tipo Radio ---------------------- */

    const inputRadio = document.querySelectorAll('input[type="radio"]');

    if (inputRadio) {
        let arrayInput = Object.values(inputRadio);
        let nameRadios = [];

        arrayInput.filter((item, index) => {
            return nameRadios[index] = item.getAttribute('name');
        });

        nameRadios.filter((item, index) => {
            return nameRadios.indexOf(item) === index;
        });

        nameRadios.forEach(nameRadio => {
            if (document.querySelector(`input[name="${nameRadio}"]:checked`)) {
                document.querySelector(`input[name="${nameRadio}"]`).parentElement.classList.remove('form__input-error');
            }else{
                document.querySelector(`input[name="${nameRadio}"]`).parentElement.classList.add('form__input-error');
            }
        });   
    }
}


/* -------------------------------------------------------------------------- */
/*                        Validar Campos Del Formulario                       */
/* -------------------------------------------------------------------------- */

function validarFormularioRegistro(e, campos, btnForm, campoFecha) 
{
    let mensaje;
    let campoName = e.target.name;

    switch (campoName) 
    {
        case 'Usuario':
            mensaje = 'No se permiten caracteres especiales';
            validarInputValue(expresiones_regulares().usuario, e.target, e.target.name, mensaje, campos);
        break;

        case 'Nombre':
            mensaje = 'No se permiten numeros o caracteres especiales';
            validarInputValue(expresiones_regulares().nombre, e.target, e.target.name, mensaje, campos);
        break;

        case 'ApellidoP':
            mensaje = 'No se permiten numeros o caracteres especiales';
            validarInputValue(expresiones_regulares().nombre, e.target, e.target.name, mensaje, campos);
        break;

        case 'ApellidoM':
            mensaje = 'No se permiten numeros o caracteres especiales';
            validarInputValue(expresiones_regulares().nombre, e.target, e.target.name, mensaje, campos);
        break;

        case 'Genero':
            if (document.querySelector('input[name="Genero"]:checked')) 
            {
                validaOk(document.querySelector('input[name="Genero"]'));
                campos['Genero'] = true;
            }else{
                validaFalla(document.querySelector('input[name="Genero"]').parentElement);
            }
        break;

        case 'Telefono':
            mensaje = 'Numero de teléfono inválido';
            validarInputValue(expresiones_regulares().telefono, e.target, e.target.name, mensaje, campos);
        break;

        case 'Correo':
            mensaje = 'Correo electronico inválido';
            validarInputValue(expresiones_regulares().correo, e.target, e.target.name, mensaje, campos);
        break;

        case 'FechaN':
            mensaje = 'Fecha de nacimiento inválida';
            validarInputValue(expresiones_regulares().fecha, e.target, e.target.name, mensaje, campos);
            validar_fecha(e.target, campos);
            validaYear4Digitos(e, campoFecha);
        break;

        case 'Contrasena':
            mensaje = 'La contraseña debe tener entre 8 y 9 caracteres de longitud';
            validarInputValue(expresiones_regulares().password, e.target, e.target.name, mensaje, campos);
        break;

        case 'Contrasena2':
            mensaje = 'Las contraseñas no coinciden';
            validar_repetir_contrasena(mensaje, campos);
        break;
    }

    comprobar_campos_validos(campos, btnForm);
}


function validarFormularioIngreso(e, campos, btnForm, campoFecha)
{
    let mensaje;
    let campoName = e.target.name;

    switch (campoName) 
    {
        case 'Usuario':
            let usuarioIngreso = isNaN(document.querySelector("#"+campoName).value.trim());

            /* ------------------------- Si Usuario es numerico ------------------------- */

            if (!usuarioIngreso) 
            {
                mensaje = 'El usuario del ticket debe ser númerico';
                validarInputValue(expresiones_regulares().numerico, e.target, e.target.name, mensaje, campos);
            }
            /* ------------------------ Si usuario no es numerico ----------------------- */
            else
            {
                mensaje = 'El Correo electronico no es válido';
                validarInputValue(expresiones_regulares().correo, e.target, e.target.name, mensaje, campos);
            }
        break;

        case 'Password':
            let usuarioIngresoP = isNaN(document.querySelector("#Usuario").value);

            if (!usuarioIngresoP) {
                mensaje = 'La contraseña del ticket debe ser númerica';
                validarInputValue(expresiones_regulares().numerico, e.target, e.target.name, mensaje, campos);
            }else{
                mensaje = 'No se permiten caracteres especiales';
                validarInputValue(expresiones_regulares().password2, e.target, e.target.name, mensaje, campos);
            }
        break;

        case 'FechaN':
            mensaje = 'Fecha de nacimiento inválida';
            validarInputValue(expresiones_regulares().fecha, e.target, e.target.name, mensaje, campos);
            validar_fecha(e.target, campos);
            validaYear4Digitos(e, campoFecha);
        break;
    }

    comprobar_campos_validos(campos, btnForm);
}

/* -------------------------------------------------------------------------- */
/*               Comprobar que todos los campos esten validados               */
/* -------------------------------------------------------------------------- */

function comprobar_campos_validos(campos, btnForm) 
{

    const totalCampos = Object.keys(campos).length; // total de campos
    

    /* ----------------------- Contamos los campos validos ---------------------- */

    let campoValidado = 0;

    for (const property in campos) {
        if (campos[property]) {
            campoValidado++;
        }
    }

    /* --------------------- Si todos lo campos son validos --------------------- */

    if (campoValidado === totalCampos) {
        btnForm.classList.remove('btn__disabled');
        if (document.querySelector('.form__mensaje')) {
            document.querySelector('.form__mensaje').innerHTML = '';     
        }
    } else {
        btnForm.classList.add('btn__disabled');
        campoValidado = 0; // reinicia campos validados
    }
}

/* -------------------------------------------------------------------------- */
/*                      Validar cada input del formulario                     */
/* -------------------------------------------------------------------------- */

function validarInputValue(expresion, input, nombreCampo, mensaje, campos) 
{
    let formInput = input.parentElement.parentElement;

    if (input.value.length > 0) {
        if (expresion.test(input.value.trim())) {
            validaOk(input);
            campos[nombreCampo] = true;
        } else {
            validaFalla(input, mensaje);
            campos[nombreCampo] = false;
        }
    }
    else {
        input.classList.remove('form__input-error');
        formInput.querySelector('.form__error').classList.remove('form__error-visible');
        formInput.querySelector('.form__error').textContent = '';
        campos[nombreCampo] = false;
    }
}


/* -------------------------------------------------------------------------- */
/*                         Validar Contraseña repetida                        */
/* -------------------------------------------------------------------------- */

function validar_repetir_contrasena(mensaje, campos) 
{
    const inputContrasena1 = document.getElementById('Contrasena');
    const inputContrasena2 = document.getElementById('Contrasena2');

    if (inputContrasena2.value !== "") {
        if (inputContrasena2.value !== inputContrasena1.value) {
            validaFalla(inputContrasena2, mensaje);
            campos['Contrasena2'] = false;
        }
        else 
        {
            validaOk(inputContrasena2);
            campos['Contrasena2'] = true;
        }
    }else{
        validaFalla(inputContrasena2, mensaje);
    }
}


/* -------------------------------------------------------------------------- */
/*                      Si formulario enviado es invalido                     */
/* -------------------------------------------------------------------------- */

function formulario_invalido(btnForm, mensaje_form, id_formulario)
{
    /* ------------------- Desactivar el boton del Formulario ------------------- */

    btnForm.classList.add('btn__disabled');

    /* ----------------------- Enviar una alerta del error ---------------------- */

    let mensaje = 'Por favor rellena todos los campos marcados';
    printAlert(mensaje_form, "danger", mensaje);

    /* ---------------------- Marcar error en campos vacios --------------------- */

    comprobar_campos_vacios(id_formulario);
}


/* -------------------------------------------------------------------------- */
/*                     Validar cuando un campo es correcto                    */
/* -------------------------------------------------------------------------- */

function validaOk(input) {

    /* ---------------------- Borrar Error Marcado en input --------------------- */

    if (input.classList.contains('form__input-error')) 
    {
        input.classList.remove('form__input-error');
    }

    /* ------------------- Borrar Error Marcado en input Radio ------------------ */

    if(input.parentElement.classList.contains('form__input-error'))
    {
        input.parentElement.classList.remove('form__input-error');
    }

    /* --------------------- Borrar Aviso de error del input -------------------- */

    let formInput = input.parentElement.parentElement;
    let aviso = formInput.querySelector('.form__error');

    if(aviso){
        aviso.classList.remove('form__error-visible');
    }else{
        input.classList.remove('form__error-visible');
    }
}

/* -------------------------------------------------------------------------- */
/*                    Validar cuando un campo es incorrecto                   */
/* -------------------------------------------------------------------------- */

function validaFalla(input, mensaje) {
    input.classList.add('form__input-error');
    const formInput = input.parentElement.parentElement;
    const aviso = formInput.querySelector('.form__error');
    aviso.classList.add('form__error-visible');
    if (mensaje !== null) {
        aviso.textContent = mensaje;
    }
}

/* -------------------------------------------------------------------------- */
/*                             EJECUTAR UNA ALERTA                            */
/* -------------------------------------------------------------------------- */

function printAlert(element, tipoAlerta, mensaje) {
    // tipos de alerta: danger, warning, info, succes y dark

    element.innerHTML = `
        <div class="alert alert_${tipoAlerta}">
            <div class="alert--icon">
                <i class="icon-${tipoAlerta}"></i>
            </div>
            <div class="alert--content">
                ${mensaje}
            </div>
            <div class="alert--close">
                <i class="icon-close-outline"></i>
            </div>
        </div>
    `;

    alertas(); //Recargamos el DOM de alertas
}

/* -------------------------------------------------------------------------- */
/*                       Mensaje de error del try catch                       */
/* -------------------------------------------------------------------------- */

function ejecutar_mensaje_error(error)
{
    Swal.fire({
        title:  "Error "+error.status,
        text:   "¡Ocurrió un error al intentar iniciar sesión!. intenta de nuevo o más tarde.",
        icon:   'error',
        confirmButtonText: 'Cerrar',
        showCloseButton: true,
        footer: `<a href="javascript:void(0)">¡Reportar la falla!</a>`
    });
}


/* -------------------------------------------------------------------------- */
/*                                Validar fecha                               */
/* -------------------------------------------------------------------------- */

function validar_fecha(inputFecha, campos) 
{
    const fechaValue = cambiarFormatoFecha(inputFecha.value.trim());
    //console.log(inputFecha.name);

    if (!validarFormatoFecha(fechaValue)) {
        validaFalla(inputFecha, '* Formato de fecha inválido');
        campos[inputFecha.name] = false;
    }
    else if (!existeFecha(fechaValue)) {
        validaFalla(inputFecha, '* Formato de fecha inválido');
        campos[inputFecha.name] = false;
    }
    else if (!validarFechaMenorActual(fechaValue)) {
        validaFalla(inputFecha, '* Tu fecha de nacimiento debe ser menor a la actual');
        campos[inputFecha.name] = false;
    }
    else if (!validaRangoFecha(fechaValue)) {
        const fecha = new Date();
        const ageActual = fecha.getFullYear();
        validaFalla(inputFecha, `* Tu fecha de nacimiento de estar dentro de 1900 - ${ageActual}`);
        campos[inputFecha.name] = false;
    }
    else {
        validaOk(inputFecha);
        campos[inputFecha.name] = true;
    }
}

/* ----------------------- Validar formato de la fecha ---------------------- */

function validarFormatoFecha(fecha) {
    var RegExPattern = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
    if ((fecha.match(RegExPattern)) && (fecha != '')) {
        return true;
    } else {
        return false;
    }
}

/* ------------------------- Validar si existe fecha ------------------------ */

function existeFecha(fecha) {
    var fechaf = fecha.split("/");
    var day = fechaf[0];
    var month = fechaf[1];
    var year = fechaf[2];
    
    var date = new Date(year, month, '0');
    if ((day - 0) > (date.getDate() - 0) || month > 12) {
        return false;
    } else {
        return true;
    }
}

/* ---------------------- Validar fecha menor a actual ---------------------- */

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

/* --------------------- Cambiar formato del campo fecha -------------------- */

function cambiarFormatoFecha(fecha) {
    let fechaf = fecha.split("-");
    let year = fechaf[0];
    let month = fechaf[1];
    let day = fechaf[2];
    return `${day}/${month}/${year}`;
}

/* -------------------- Validar que año sea de 4 digitos -------------------- */

function validaYear4Digitos(e, inputFecha)
{
    let fecha = e.target.value;
    
    if (e.target.value.length > 10) 
    {
        let fechaf = fecha.split("-");
        let year = fechaf[0];
        let month = fechaf[1];
        let day = fechaf[2];
        let ageCortado = year.slice(0, -1)
        inputFecha.value = ageCortado+'-'+month+'-'+day;
    }
}

/* -------------------- Validar que Año sea mayor a 1900 -------------------- */

function validaRangoFecha(fecha)
{
    let fechaf = fecha.split("/");
    let year = fechaf[2];
    let fechainicial = "1900";

    if(Date.parse(year) < Date.parse(fechainicial)) {
        return false;
    }else{
        return true;
    }
}


/* -------------------------------------------------------------------------- */
/*                         Mostrar y Ocultar Password                         */
/* -------------------------------------------------------------------------- */

function mostrar_ocultar_password() 
{
    if (document.querySelector('.form__btn-eye')) 
    {    
        const btnEye = document.querySelectorAll('.form__btn-eye');
    
        btnEye.forEach(element => {
            element.addEventListener('click', function(e){
                element.classList.toggle('cambiar');
    
                let inputPassword = element.parentElement.querySelector('.form__input');
    
                if (element.classList.contains('cambiar')) 
                {
                    element.parentElement.querySelector('.form__input').setAttribute('type', 'text');
                }else{
                    element.parentElement.querySelector('.form__input').setAttribute('type', 'password');
                }
            });
        });
    }
}

/* -------------------------------------------------------------------------- */
/*                        Desbloquear Boton Formulario                        */
/* -------------------------------------------------------------------------- */

function desbloquear_btn_form(btnClass)
{
    if (document.querySelector('.loader__btn')) 
    {
        document.querySelector('.loader__btn').classList.remove('loader__show');
        document.getElementById(btnClass).disabled = false;
    }
}

/* -------------------------------------------------------------------------- */
/*                          Bloquear Boton Formulario                         */
/* -------------------------------------------------------------------------- */

function bloquear_btn_form(btnClass)
{
    if (document.querySelector('.loader__btn')) 
    {
        document.querySelector('.loader__btn').classList.add('loader__show');
        document.getElementById(btnClass).disabled = true;
    }
}


/* -------------------------------------------------------------------------- */
/*                           Abrir Modal del Ticket                           */
/* -------------------------------------------------------------------------- */

if (document.querySelector(".link-localizalo")) 
{    
    let link_localizalo = document.querySelector(".link-localizalo");
    
    link_localizalo.addEventListener("click", function(e){
        e.preventDefault();
    
        Swal.fire({
            imageUrl: app.urlbase+"assets/images/ticket.png",
            imageAlt: 'A tall image',
            confirmButtonText: 'Cerrar',
            showCloseButton: true,
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
        })
    });
}


/* -------------------------------------------------------------------------- */
/*                              Eliminar acentos                              */
/* -------------------------------------------------------------------------- */

function eliminarAcentos() {
    var from = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç";
    var to = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc";
    mapping = {};
  
    for (var i = 0, j = from.length; i < j; i++) {
      mapping[from.charAt(i)] = to.charAt(i);
    }
  
    return function (str) {
      var ret = [];
  
      for (var i = 0, j = str.length; i < j; i++) {
        var c = str.charAt(i);
        if (mapping.hasOwnProperty(str.charAt(i))) {
          ret.push(mapping[c]);
        } else {
          ret.push(c);
        }
      }
      return ret.join('');
    }
}


/* -------------------------------------------------------------------------- */
/*                             Bitacora de Errores                            */
/* -------------------------------------------------------------------------- */

async function bitacora_errores(error, request, body = null) 
{
    const data = {
        Api: error.url,
        Mensaje: request.Message,
        Estatus: error.status,
        EstatusMsj: error.statusText
        //Servidor: '49'
    }
    if(request.MessageDetail){
        data.Detalle = request.MessageDetail;
    }
    if(body){
        data.Data = JSON.stringify(body) 
    }
    let requestOptions = {
        method  :'POST',
        headers :{
            'Content-Type': 'application/json charset=utf-8'
        },
        body: JSON.stringify(data)
    };
    try {
        const respuesta = await fetch(app.urlBitacora, requestOptions);
        //console.log("bitacora_errores", respuesta);
    } catch (error) {
        console.log(error);
    }
}



function fadeIn(elemento) 
{
    var elem = elemento,fadeInInterval,fadeOutInterval;
    clearInterval(fadeInInterval);
    clearInterval(fadeOutInterval);

    elem.fadeIn = function(timing) {
        var newValue = 0;

        elem.style.display = 'flex';
        elem.style.opacity = 0;

        fadeInInterval = setInterval(function(){ 

            if (newValue < 1) {
                newValue += 0.1;
            } else if (newValue === 1) {
                clearInterval(fadeInInterval);   
            }

            elem.style.opacity = newValue;

        }, timing);
    }
    elem.fadeIn(10);
}


function fadeOut(elemento) 
{
    var elem = elemento,fadeInInterval,fadeOutInterval;

    clearInterval(fadeInInterval);
    clearInterval(fadeOutInterval);

    elem.fadeOut = function(timing) {
        var newValue = 1;
        elem.style.opacity = 1;

        fadeOutInterval = setInterval(function()
        { 
            if (newValue > 0) {
                newValue -= 0.01;
            } else if (newValue < 0) {
                elem.style.opacity = 0;
                elem.style.display = 'none';
                clearInterval(fadeOutInterval);
            }

            elem.style.opacity = newValue;

        }, timing);
    }
    elem.fadeOut(10);
}