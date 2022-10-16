window.addEventListener('DOMContentLoaded', (event) => {

    (function(d,c,w){

        const NICARAGUA = true;

        // if (!NICARAGUA) {
        //     app.urlConsulta = 'http://10.0.1.199:934/ConsultaResultados/';
        //     app.urlCitas = 'http://10.0.1.199:934/Citas/';
        // }

        const id_formulario     = 'form-ingreso';
        const form_ingreso      = d.getElementById(`${id_formulario}`);
        const btn_ingreso       = d.getElementById('btn-ingreso');
        const inputs            = d.querySelectorAll(`#${id_formulario} input`);
        const fecha_ingreso     = d.querySelector('#FechaN');
        const mensaje_form      = d.querySelector('.form__mensaje');

        /* --------------------- Resetear formulario al inicio ---------------------- */

        form_ingreso.reset();

        /* ----------------------- Mostrar y ocultar password ----------------------- */

        mostrar_ocultar_password();

        /* -------------------------------------------------------------------------- */
        /*                        Status inicial de los campos                        */
        /* -------------------------------------------------------------------------- */

        const campos = {
            Usuario:    false,
            Password:   false,
        }

        /* -------------------------------------------------------------------------- */
        /*                              Enviar Formulario                             */
        /* -------------------------------------------------------------------------- */

        btn_ingreso.addEventListener('click', function (e) {
            e.preventDefault();

            /* ------------- Comprobar que todos los campos esten validados ------------- */

            if (campos.Usuario &&
                campos.Password) 
            {
                bloquear_btn_form("btn-ingreso");

                const usuario_ingreso = d.getElementById('Usuario').value.trim();
                
                if (!isNaN(usuario_ingreso))
                {
                    ComprobarPaciente(usuario_ingreso);  
                }
                else
                {
                    Login();
                }
            }
            else
            {
                /* ---------------------- Procesar formulario invalido ---------------------- */
                
                formulario_invalido(btn_ingreso, mensaje_form, id_formulario);
            }
        });



        /* -------------------------------------------------------------------------- */
        /*                               Iniciar sesion                               */
        /* -------------------------------------------------------------------------- */

        const Login = async() => {

            let myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/json");

            let data = {
                "Usuario"       : document.getElementById('Usuario').value.trim(),
                "Contrasena"    : document.getElementById('Password').value.trim(),
                "Pais"          : 1
            };

            NICARAGUA == false ? delete data.Pais : '';

            let requestOptions = {
                method:     'POST',
                headers:    myHeaders,
                body:   JSON.stringify(data) // solo funciona en beta y produccion
            };

            try {

                let peticion;
                if (NICARAGUA) {
                    peticion = `ConsultaResultados/IniciarSesion?Usuario=${data.Usuario}&Contrasena=${data.Contrasena}&Pais=${data.Pais}`;
                }else{
                    peticion = `ConsultaResultados/IniciarSesion`;
                }

                const respuesta = await fetch(app.urlConsulta + peticion, requestOptions); 
                if (!respuesta.ok) throw respuesta; // Capturar errores
   
                const datos = await respuesta.json();
                console.log("datos", datos);
                

                if (datos.EstatusError != 'true') 
                { 
                    if (datos.IdSucursal != 0) 
                    {
                        if (NICARAGUA) 
                        {    
                            console.log("hola desde nicaragua");
                            const TOKEN = await getToken(datos.UsuarioTicket);
                            if (TOKEN == undefined) { return; }
                            GuardarBitacora(TOKEN, datos.IdSucursal);
                        }
                        else
                        {
                            console.log("hola desde salud-digna.org");
                            sessionStorage.setItem("TokenEncuesta", JSON.stringify(datos.TokenEncuesta));
                            GuardarBitacora(datos.Token, datos.IdSucursal);
                        }
                    }
                          
                    sitioiniciarsesion(datos);
                }
                else
                {
                    let mensaje = "Usuario o contreseña incorrecta.";
                    printAlert(mensaje_form, "danger", mensaje);
                    desbloquear_btn_form("btn-ingreso");
                }
            }
            catch(error) 
            {
                if(error.status) {
                    let json = await error.json();
                    console.log(`Error ${error.status} : ${error.statusText} : Error en la funcion ${Login.name}() : ${json.Message}`);
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

                dataString = '&Id=' + response.IdRegistro + '&Nombre=' + response.Nombre + '&ApellidoP=' + response.ApellidoP + '&ApellidoM=' + response.ApellidoM + '&Telefono=' + response.Telefono + '&Genero=' + response.Genero + '&Usuario=' + response.Usuario + '&FechaNacimiento=' + response.FechaNacimiento + '&UrlImagen=' + response.UrlImagen + '&Periodicidad=' + response.Periodicidad + '&TemasInteres=' + response.TemasInteres + '&Contrasena=' + response.Contrasena + '&UltimoIngreso=' + response.UltimoIngreso + '&EstatusRegistro=' + response.EstatusRegistro + '&IdPaciente=' + response.IdPaciente + '&FechaRegistro=' + response.FechaRegistro + '&UsuarioTicket=' + response.UsuarioTicket + '&NumeroTicket=' + response.NumeroTicket + '&FiltroConsulta=' + FiltroConsulta + '&EstatusRegistroLogeo=' + response.EstatusRegistroLogeo + '&IdSucursal=' + response.IdSucursal
            }
            else
            {
                FiltroConsulta = response.Token == 0 ? 0 : 1;

                dataString = '&TokenEncuesta=' + encodeURIComponent(response.TokenEncuesta) + '&Nombre=' + response.Nombre + '&ApellidoP=' + response.ApellidoP + '&ApellidoM=' + response.ApellidoM + '&Telefono=' + response.Telefono + '&Genero=' + response.Genero + '&Usuario=' + response.Usuario + '&FechaNacimiento=' + response.FechaNacimiento + '&UrlImagen=' + response.UrlImagen + '&Periodicidad=' + response.Periodicidad + '&TemasInteres=' + response.TemasInteres + '&Contrasena=' + response.Contrasena + '&UltimoIngreso=' + response.UltimoIngreso + '&EstatusRegistro=' + response.EstatusRegistro + '&Token=' + encodeURIComponent(response.Token) + '&FechaRegistro=' + response.FechaRegistro + '&FiltroConsulta=' + FiltroConsulta + '&EstatusRegistroLogeo=' + response.EstatusRegistroLogeo + '&IdSucursal=' + response.IdSucursal;
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
                console.log(respuesta);

                if (!respuesta.ok) throw respuesta; // Capturar errores

                if (respuesta.ok) 
                {
                    if (NICARAGUA) 
                    {
                        c.log(respuesta);
                        //w.location.href = app.urlbase + "perfil";
                    }
                    else
                    {
                        continuarLogin(response);
                    }
                }
                
            } catch (error) {
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
        /*                          Guardar sesion para citas                         */
        /* -------------------------------------------------------------------------- */
        const continuarLogin = async(datos) => {

            let myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/json");

            let data = {
                "Nombre":         eliminarAcentos(datos.Nombre),
                "ApellidoP":      eliminarAcentos(datos.ApellidoP),
                "ApellidoM":      eliminarAcentos(datos.ApellidoM),
                "FechaRegistro":  datos.FechaRegistro
            };

            let requestOptions = {
                method:     'GET',
                headers:    myHeaders,
            };
            
            try {
                const parametros = `?Nombre=${data.Nombre}&Paterno=${data.ApellidoP}&Materno=${data.ApellidoM}&FechaNacimiento=${data.FechaRegistro}`;
                const respuesta = await fetch(app.urlCitas + "Citas2/BuscarPacientePorNombre"+parametros, requestOptions); 
                if (!respuesta.ok) throw respuesta; // Capturar errores

                const response = await respuesta.json();

                if (response.ok) 
                {    
                    let flagExiste = response.Existe ? response.Existe : false;
                    let flagEsNuevo = flagExiste ? false : true;
                    let idPacienteMKT = response.Id != null ? response.Id : 0;
    
                    /* ------------------------- Si el paciente es nuevo ------------------------ */
    
                    if (!flagExiste && flagEsNuevo) 
                    {
                        idPacienteMKT = await ObtenerId();
                        c.log("idPacienteMKT", idPacienteMKT);
                        if (idPacienteMKT == undefined) {return;}
                    }
                    
                    var paciente = {};
                    paciente.Id = idPacienteMKT;
    
                    let IdSession;
                    if (d.getElementById("IdPacSisPrev")) {
                        IdSession = d.getElementById("IdPacSisPrev").value;
    
                        if (d.getElementById("IdPacSisPrev").value != "") 
                        {
                            paciente.IdPacSis = parseInt(d.getElementById("IdPacSisPrev").value);
                        } else {
                            paciente.IdPacSis = response.IdPacSis;
                        }
                    }else{
                        IdSession = null;
                    }
    
    
                    paciente.Nombre = eliminarAcentos(datos.Nombre);
                    paciente.Paterno = eliminarAcentos(datos.ApellidoP);
                    paciente.Materno = eliminarAcentos(datos.ApellidoM);
                    paciente.Sexo = datos.Genero;
                    paciente.FechaNacimiento = datos.FechaRegistro;
                    paciente.CorreoElectronico = datos.Usuario;
                    paciente.TelefonoCelular = datos.Telefono;
                    paciente.Captcha = "default";
                    paciente.RecibirPromociones = false;
                    paciente.EsNuevo = flagEsNuevo;
                    paciente.Existe = flagExiste;
                    paciente.IdSession = IdSession;
                    paciente.Registro = datos.TokenEncuesta;
                    paciente.IdDetalle = 0;
                    paciente.IdSeguro = 1;
                    paciente.Direccion = '';
                    paciente.Colonia = '';
                    paciente.CP = '';
                    paciente.Municipio = '';
                    paciente.Estado = '';
                    paciente.Pais = '';
    
    
                    GetPaciente(flagExiste, paciente, flagEsNuevo, flagExiste);
                }
            } 
            catch (error) 
            {
                if(error.status) {
                    let json = await error.json();
                    console.log(`Error ${error.status} : ${error.statusText} : Error en la funcion ${continuarLogin.name}() : ${json.Message}`);
                    ejecutar_mensaje_error(error);
                    desbloquear_btn_form("btn-ingreso");
                    bitacora_errores(error, json);
                } else {
                    c.log(error);
                }
            }
        }

        /* -------------------------------------------------------------------------- */
        /*                              DATOS DEL PACIENTE                            */
        /* -------------------------------------------------------------------------- */

        const GetPaciente = async(datosPaciente, paciente, flagEsNuevo, flagExiste) => {
            // c.log("hola desde la funcion GetPaciente");

            let myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/json");

            let requestOptions = {
                method:     'GET',
                headers:    myHeaders,
            };

            try {
                const respuesta = await fetch(app.urlCitas + `Citas2/GetPaciente?idPaciente=${paciente.Id}`, requestOptions); 
                if (!respuesta.ok) throw respuesta; // Capturar errores

                const response = await respuesta.json();
                console.log(response);

                if (response.ok) {
                    paciente.IdDetalle = response.IdDetalle;
                    paciente.IdSeguro = response.IdSeguro == 0 ? 1 : response.IdSeguro;
                    paciente.Direccion = response.Direccion;
                    paciente.Colonia = response.Colonia;
                    paciente.CP = response.CP;
                    paciente.Municipio = response.Municipio;
                    paciente.Estado = response.Estado;
                    paciente.Pais = response.Pais;

                    iniciarSesionCitas(datosPaciente, paciente, flagEsNuevo, flagExiste);
                }
                
            } 
            catch (error) 
            {
                if(error.status) {
                    let json = await error.json();
                    console.log(`Error ${error.status} : ${error.statusText} : Error en la funcion ${continuarLogin.name}() : ${json.Message}`);
                    ejecutar_mensaje_error(error);
                    desbloquear_btn_form("btn-ingreso");
                    bitacora_errores(error, json);
                } else {
                    c.log(error);
                }
            }
        }


        /* -------------------------------------------------------------------------- */
        /*                            Iniciar Sesion Citas                            */
        /* -------------------------------------------------------------------------- */

        const iniciarSesionCitas = async(dataPacienteConsulta, dataPacienteCitas, flagEsNuevo, flagExiste) => {
            
            if (parseInt($('#IdSucursalUbicacion').val()) > 0) {
                var dataString =
                  '&TokenEncuesta=' + encodeURIComponent(dataPacienteConsulta.TokenEncuesta) +
                  '&Id=' + dataPacienteCitas.Id +
                  '&Nombre=' + dataPacienteConsulta.Nombre +
                  '&ApellidoP=' + dataPacienteConsulta.ApellidoP +
                  '&ApellidoM=' + dataPacienteConsulta.ApellidoM +
                  '&Telefono=' + dataPacienteConsulta.Telefono +
                  '&Genero=' + dataPacienteConsulta.Genero +
                  '&Usuario=' + dataPacienteConsulta.Usuario +
                  '&FechaNacimiento=' + dataPacienteConsulta.FechaRegistro +
                  '&Captcha=' + "default" +
                  '&RecibirPromociones=' + false +
                  '&EsNuevo=' + flagEsNuevo +
                  '&Existe=' + flagExiste +
                  '&IdSession=' + $("#IdSession").val() +
                  '&IdPacSis=' + $("#IdPacSisPrev").val() +
                  '&CitasSucursal=' + $("#CitasSucursal").val() +
                  '&IdEstado=' + $('#CitasIdEstado').val() +
                  '&IdCiudad=' + $('#CitasIdCiudad').val() +
                  '&DescEstado=' + $('#CitasDescEstado').val() +
                  '&DescCiudad=' + $('#CitasDescCiudad').val() +
                  '&DescSucursal=' + $('#CitasDescSucursal').val() +
                  '&IdDetalle=' + dataPacienteCitas.IdDetalle +
                  '&IdSeguro=' + dataPacienteCitas.IdSeguro +
                  '&Direccion=' + dataPacienteCitas.Direccion +
                  '&Colonia=' + dataPacienteCitas.Colonia +
                  '&CP=' + dataPacienteCitas.CP +
                  '&Municipio=' + dataPacienteCitas.Municipio +
                  '&Estado=' + dataPacienteCitas.Estado +
                  '&Pais=' + dataPacienteCitas.Pais;
            
            } else {
                var dataString =
                  '&TokenEncuesta=' + encodeURIComponent(dataPacienteConsulta.TokenEncuesta) +
                  '&Id=' + dataPacienteCitas.Id +
                  '&Nombre=' + dataPacienteConsulta.Nombre +
                  '&ApellidoP=' + dataPacienteConsulta.ApellidoP +
                  '&ApellidoM=' + dataPacienteConsulta.ApellidoM +
                  '&Telefono=' + dataPacienteConsulta.Telefono +
                  '&Genero=' + dataPacienteConsulta.Genero +
                  '&Usuario=' + dataPacienteConsulta.Usuario +
                  '&FechaNacimiento=' + dataPacienteConsulta.FechaRegistro +
                  '&Captcha=' + "default" +
                  '&RecibirPromociones=' + false +
                  '&EsNuevo=' + flagEsNuevo +
                  '&Existe=' + flagExiste +
                  '&IdSession=' + $("#IdSession").val() +
                  '&IdPacSis=' + $("#IdPacSisPrev").val() +
                  '&IdDetalle=' + dataPacienteCitas.IdDetalle +
                  '&IdSeguro=' + dataPacienteCitas.IdSeguro +
                  '&Direccion=' + dataPacienteCitas.Direccion +
                  '&Colonia=' + dataPacienteCitas.Colonia +
                  '&CP=' + dataPacienteCitas.CP +
                  '&Municipio=' + dataPacienteCitas.Municipio +
                  '&Estado=' + dataPacienteCitas.Estado +
                  '&Pais=' + dataPacienteCitas.Pais;
            }

            let myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/x-www-form-urlencoded");

            let requestOptions = {
                method:     'POST',
                headers:    myHeaders,
                body:       dataString
            };

            try {

                const respuesta = await fetch(app.urlbase + "iniciarsesionregistro", requestOptions); 
                if (!respuesta.ok) throw respuesta; // Capturar errores

                const response = await respuesta.json();
                console.log(response);

                if (response.ok) {
                    
                    window.location.href = "/perfil/";
                }
            } 
            catch (error) 
            {
                if(error.status) {
                    let json = await error.json();
                    console.log(`Error ${error.status} : ${error.statusText} : Error en la funcion ${continuarLogin.name}() : ${json.Message}`);
                    ejecutar_mensaje_error(error);
                    desbloquear_btn_form("btn-ingreso");
                    bitacora_errores(error, json);
                } else {
                    c.log(error);
                }
            }

        }


        /* -------------------------------------------------------------------------- */
        /*                                 Obtener ID                                 */
        /* -------------------------------------------------------------------------- */
        const ObtenerId = async() => {

            try {
                const respuesta = await fetch(app.urlCitas + "Citas2/ObtenerId", requestOptions); 
                if (!respuesta.ok) throw respuesta; // Capturar errores
                const idPaciente = respuesta.text();
                return idPaciente;
            } 
            catch (error) 
            {
                if(error.status) {
                    let json = await error.json();
                    console.log(`Error ${error.status} : ${error.statusText} : Error en la funcion ${ObtenerId.name}() : ${json.Message}`);
                    ejecutar_mensaje_error(error);
                    desbloquear_btn_form("btn-ingreso");
                    bitacora_errores(error, json);
                } else {
                    c.log(error);
                }
            }
            
        }


        /* -------------------------------------------------------------------------- */
        /*                        Comprobar si existe paciente                        */
        /* -------------------------------------------------------------------------- */

        const ComprobarPaciente = async(usuarioTiket) => {

            let myHeaders = new Headers();
            myHeaders.append("Content-Type", "application/json");

            let requestOptions = { 
                method: 'GET', 
                headers: myHeaders
            };

            try { 
                let peticion;

                /* ------------------ Enviar peticion dependiendo de la web ----------------- */

                if (NICARAGUA) {
                    const TOKEN = await getToken(usuarioTiket);
                    if (TOKEN == undefined) { return; }
                    peticion = `ConsultaResultados/ConsultaApiTokenComprobarPaciente?Pais=1&token=${TOKEN.token}`;
                }else{
                    peticion = `ConsultaResultados/ConsultaApiTokenComprobarPaciente?usuario=${usuarioTiket}`;
                }
    
                const respuesta = await fetch(app.urlConsulta + peticion, requestOptions); 
                if (!respuesta.ok) throw respuesta; // Capturar errores
                
                if (respuesta.status === 200) 
                {
                    const datos = await respuesta.json();

                    if (datos == null) 
                    {
                        let mensaje = "Usuario o contreseña incorrecta.";
                        printAlert(mensaje_form, "danger", mensaje);
                        desbloquear_btn_form("btn-ingreso");
                    }
                    else
                    {
                        const RealfechaCompra = new Date(Date.parse(datos.FechaCompra)).toISOString().slice(0, 10);
                        const RealNacimiento = new Date(Date.parse(datos.FechaNacimiento)).toISOString().slice(0, 10);

                        if (RealfechaCompra < '2016-09-01') 
                        {
                            /* ------------------ Mostrar input de fecha de nacimiento ------------------ */

                            d.querySelector(".inputFecha-oculto").classList.add("animate__animated", "animate__fadeInUp");
                            d.querySelector(".inputFecha-oculto").style.display = "block";   
                            desbloquear_btn_form("btn-ingreso");

                            /* --------------- Comprobar que fecha de Nacimiento es valida -------------- */
                            
                            if (d.getElementById('FechaN').value != '') 
                            {
                                const fecha = d.getElementById('FechaN').value.trim();
                                const RealNacimientoInput = new Date(Date.parse(fecha)).toISOString().slice(0, 10);

                                if (RealNacimiento == RealNacimientoInput) {
                                    Login();
                                }
                                else
                                {
                                    let mensaje = "La fecha de nacimiento no coincide con la registrada.";
                                    printAlert(mensaje_form, "danger", mensaje);
                                    desbloquear_btn_form("btn-ingreso");
                                }
                            }
                        }
                        else
                        {
                            Login();
                        }
                    }
                }
            } 
            catch (error) 
            {
                if(error.status) {
                    let json = await error.json();
                    console.log(`Error ${error.status} : ${error.statusText} : Error en la funcion ${ComprobarPaciente.name}() : ${json.Message}`);
                    ejecutar_mensaje_error(error);
                    desbloquear_btn_form("btn-ingreso");
                    bitacora_errores(error, json);
                } else {
                    c.log(error);
                }
            }
        }


        /* -------------------------------------------------------------------------- */
        /*                         Solicitar Token del usuario                        */
        /* -------------------------------------------------------------------------- */

        const getToken = async(IdPaciente) => {
        
            let requestOptions = {
                method  :'GET',
                headers :{
                    'Content-Type': 'application/json charset=utf-8'
                }
            };

            try {
                const respuesta = await fetch(app.urlConsulta + `ConsultaResultados/getTokenCliente?Pais=1&IdPaciente=${IdPaciente}`, requestOptions);
                if (!respuesta.ok) throw respuesta; // Capturar errores

                if (respuesta.status === 200) 
                {
                    const Token = await respuesta.json();
                    return Token;
                }
            } 
            catch (error) 
            {
                if(error.status) {
                    let json = await error.json();
                    console.log(`Error ${error.status} : ${error.statusText} : Error en la funcion ${getToken.name}() : ${json.Message}`);
                    ejecutar_mensaje_error(error);
                    desbloquear_btn_form("btn-ingreso");
                    bitacora_errores(error, json);
                } else {
                    c.log(error);
                }
            }
        }

        
        

        /* -------------------------------------------------------------------------- */
        /*                              Guardar Bitacora                              */
        /* -------------------------------------------------------------------------- */

        const GuardarBitacora = async(TOKEN, IdSucursalSis) => {

            let requestOptions = {
                method  :'GET',
                headers :{
                    'Content-Type': 'application/json charset=utf-8'
                }
            };

            try {
                let parametros;
                if (NICARAGUA) {
                    parametros = `?Pais=1&token=${TOKEN.token}&Tipo=1&IdEstudio&IdSucursal=${IdSucursalSis}&IdReservacion`;
                }else{
                    parametros = `?token=${TOKEN}=&Tipo=1&IdEstudio&IdSucursal=${IdSucursalSis}&IdReservacion`;
                }
                const respuesta = await fetch(app.urlConsulta + `ConsultaResultados/GuardarBitacora${parametros}`, requestOptions);

                if (!respuesta.ok) throw respuesta; // Capturar errores

                if (respuesta.status === 200) 
                {
                    console.log("respuesta", respuesta);
                }
            } 
            catch (error)
            {
                if(error.status) {
                    let json = await error.json();
                    console.log(`Error ${error.status} : ${error.statusText} : Error en la funcion ${GuardarBitacora.name}() : ${json.Message}`);
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

        inputs.forEach((input) => {
            input.addEventListener('keyup', function(e) 
            {
                validarFormularioIngreso(e, campos, btn_ingreso, fecha_ingreso);
            });

            input.addEventListener('blur', function(e) {
                validarFormularioIngreso(e, campos, btn_ingreso, fecha_ingreso);
            });

            input.addEventListener('change', function(e) {
                validarFormularioIngreso(e, campos, btn_ingreso, fecha_ingreso);
            });
        });
    
    })(document, console, window);
    
});