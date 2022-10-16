import {
    prueba,
    capitalizarPrimeraLetra
} from "./modules.js";

window.addEventListener('DOMContentLoaded', (event) => {

    console.log(prueba);

    var swiper2 = new Swiper("#swiper2", {
        // pagination: '.swiper-pagination',
        // paginationClickable: true,
        loop: false,
        slidesPerView: 'auto',
        keyboardControl: true,
        a11y: true,
        initialSlide: 0,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });


    function cambiarInfoCategoria() {
        let cuadros = document.querySelectorAll(".item");

        cuadros.forEach(element => {
            element.addEventListener("click", function (e) {
                console.log("diste click");

                removerClases(cuadros);

                element.classList.toggle("active");

                console.log(e.target.id);

                if (e.target.id == "category_1") {
                    document.getElementById("PCREnTiempoRealInf").classList.remove("d-none");
                } else {
                    document.getElementById("PCREnTiempoRealInf").classList.add("d-none");
                }

                if (e.target.id == "category_2") {
                    document.getElementById("PruebaDeAntigenosInf").classList.remove("d-none");
                } else {
                    document.getElementById("PruebaDeAntigenosInf").classList.add("d-none");
                }

                if (e.target.id == "category_3") {
                    document.getElementById("AnticuerposTotalesInf").classList.remove("d-none");
                } else {
                    document.getElementById("AnticuerposTotalesInf").classList.add("d-none");
                }

                if (e.target.id == "category_4") {
                    document.getElementById("PagosEnLineaInf").classList.remove("d-none");
                } else {
                    document.getElementById("PagosEnLineaInf").classList.add("d-none");
                }

                if (e.target.id == "category_5") {
                    document.getElementById("ResultadosInf").classList.remove("d-none");
                } else {
                    document.getElementById("ResultadosInf").classList.add("d-none");
                }

                if (e.target.id == "category_6") {
                    document.getElementById("LaboratorioInf").classList.remove("d-none");
                } else {
                    document.getElementById("LaboratorioInf").classList.add("d-none");
                }

                if (e.target.id == "category_7") {
                    document.getElementById("LentesInf").classList.remove("d-none");
                } else {
                    document.getElementById("LentesInf").classList.add("d-none");
                }
            });
        });
    }
    cambiarInfoCategoria();


    function removerClases(cuadros) {
        cuadros.forEach(element => {
            element.classList.remove("active");
        });
    }
    function removerContenedores(contenedores) {
        contenedores.forEach(element => {
            // console.log(element);
            element.classList.add("d-none");
        });
    }

    let inputBuscar = document.getElementById("inputBuscar");
    let cuadros = document.querySelectorAll(".item");
    let contenedores = document.querySelectorAll("#categorias .contenedor");
    let identificadorDeTemporizador;

    inputBuscar.addEventListener('keyup', function (e) {
        //console.log(e.target);

        // document.getElementById(".load").classList.remove("d-none");
        document.querySelector(".nofound").classList.add("d-none");

        let buscarTexto;
        let string = e.target.value;
        // console.log(string.length);
        if (string.length > 0) {
            borrarAlerta();

            document.getElementById("nofound").classList.add("d-none");
            document.getElementById("load").classList.remove("d-none");
            document.getElementById("info-contacto").classList.add("d-none");

            buscarTexto = e.target.value.trim().toLowerCase();

            if (buscarTexto == "prueba diagnostica pcr en tiempo real" ||
                buscarTexto == "prueba" ||
                buscarTexto == "diagnostica" ||
                buscarTexto == "pcr" ||
                buscarTexto == "tiempo" ||
                buscarTexto == "real" ||
                buscarTexto == "tiempo real") {
                document.getElementById("load").classList.add("d-none");
                removerClases(cuadros);
                removerContenedores(contenedores)
                document.getElementById("category_1").parentElement.classList.add("active");
                document.getElementById("PCREnTiempoRealInf").classList.remove("d-none");
                document.getElementById("nofound").classList.add("d-none");
                swiper2.slideTo(0, false, false);
            }
            else if (buscarTexto == "prueba de antigenos covid 19" ||
                buscarTexto == "prueba de antigenos" ||
                buscarTexto == "antigenos" ||
                buscarTexto == "covid" ||
                buscarTexto == "covid 19") {
                document.getElementById("load").classList.add("d-none");
                removerClases(cuadros);
                removerContenedores(contenedores)
                document.getElementById("category_2").parentElement.classList.add("active");
                document.getElementById("PruebaDeAntigenosInf").classList.remove("d-none");
                document.getElementById("nofound").classList.add("d-none");
                swiper2.slideTo(1, false, false);
            }
            else if (buscarTexto == "nuevo estudio anticuerpos totales cuantitativos" ||
                buscarTexto == "nuevo estudio" ||
                buscarTexto == "estudio anticuerpos" ||
                buscarTexto == "estudio" ||
                buscarTexto == "anticuerpos" ||
                buscarTexto == "totales" ||
                buscarTexto == "cuantitativos") {
                document.getElementById("load").classList.add("d-none");
                removerClases(cuadros);
                removerContenedores(contenedores)
                document.getElementById("category_3").parentElement.classList.add("active");
                document.getElementById("AnticuerposTotalesInf").classList.remove("d-none");
                document.getElementById("nofound").classList.add("d-none");
                swiper2.slideTo(2, false, false);
            }
            else if (buscarTexto == "pagos en linea" ||
                buscarTexto == "pagos" ||
                buscarTexto == "pago" ||
                buscarTexto == "en linea" ||
                buscarTexto == "linea") {
                document.getElementById("load").classList.add("d-none");
                removerClases(cuadros);
                removerContenedores(contenedores)
                document.getElementById("category_4").parentElement.classList.add("active");
                document.getElementById("PagosEnLineaInf").classList.remove("d-none");
                document.getElementById("nofound").classList.add("d-none");
                swiper2.slideTo(3, false, false);
            }
            else if (buscarTexto == "resultados") {
                document.getElementById("load").classList.add("d-none");
                removerClases(cuadros);
                removerContenedores(contenedores)
                document.getElementById("category_5").parentElement.classList.add("active");
                document.getElementById("ResultadosInf").classList.remove("d-none");
                document.getElementById("nofound").classList.add("d-none");
                swiper2.slideTo(4, false, false);
            }
            else if (buscarTexto == "laboratorio" || buscarTexto == "estudios de Laboratorio") {
                document.getElementById("load").classList.add("d-none");
                removerClases(cuadros);
                removerContenedores(contenedores)
                document.getElementById("category_6").parentElement.classList.add("active");
                document.getElementById("LaboratorioInf").classList.remove("d-none");
                document.getElementById("nofound").classList.add("d-none");
                swiper2.slideTo(5, false, false);
            }
            else if (buscarTexto == "lentes" || buscarTexto == "lente" || buscarTexto == "gafas") {
                document.getElementById("load").classList.add("d-none");
                removerClases(cuadros);
                removerContenedores(contenedores)
                document.getElementById("category_7").parentElement.classList.add("active");
                document.getElementById("LentesInf").classList.remove("d-none");
                document.getElementById("nofound").classList.add("d-none");
                swiper2.slideTo(6, false, false);
            }
            else {
                temporizadorDeRetraso();
            }
        } else {
            document.getElementById("load").classList.add("d-none");
            document.getElementById("nofound").classList.add("d-none");
            borrarAlerta();
            return;
        }
    });

    function temporizadorDeRetraso() {
        identificadorDeTemporizador = setTimeout(funcionConRetraso, 3000);
    }

    function funcionConRetraso() {
        document.getElementById("load").classList.add("d-none");
        document.getElementById("nofound").classList.remove("d-none");
    }

    function borrarAlerta() {
        clearTimeout(identificadorDeTemporizador);
    }




    if (document.getElementById("estado_clinica_cita_modal")) {
        const getEstados = async () => {

            let requestOptions = {
                method: 'GET',
            }

            try {
                const respuesta = await fetch("https://api.emarketingsd.org/base/Estados/Listado?IdPais=1", requestOptions);
                // console.log(respuesta);

                if (!respuesta.ok) throw respuesta; // Capturar errores

                if (respuesta.status === 200) {
                    const datos = await respuesta.json();
                    // console.log(datos);

                    let template = '<option value="-1">Seleccione un estado</option>';
                    let nombreEstado;
                    datos.forEach(element => {
                        // console.log(element.Descripcion);
                        nombreEstado = element.Descripcion.toLowerCase();
                        template += `<option value="${element.Id}">${capitalizarPrimeraLetra(nombreEstado)}</option>`;
                    });

                    document.getElementById("estado_clinica_cita_modal").innerHTML = template;
                }

            } catch (error) {
                console.log(error)
            }
        }
        getEstados();


        // Si cambia estado
        if (document.getElementById("estado_clinica_cita_modal")) {
            const getSucursales = async () => {

                let requestOptions = {
                    method: "GET",
                }

                try {
                    const respuesta = await fetch("https://api.emarketingsd.org/base/Estados/Listado?IdPais=1", requestOptions);
                    // console.log(respuesta);

                    if (!respuesta.ok) throw respuesta; // Capturar errores

                    if (respuesta.status === 200) {
                        let estadosHTML = document.querySelectorAll("#estado_clinica_cita_modal option");
                        // console.log(estadosHTML);

                        const getMunicipioPorID = async () => {

                            let requestOptions = {
                                method: "GET"
                            }

                            try {
                                const respuesta = await fetch("https://api.emarketingsd.org/covid19/Covid/ObtenerSucursales", requestOptions);

                                if (!respuesta.ok) throw respuesta; // Capturar errores

                                if (respuesta.status === 200) {
                                    const jsonSucursales = await respuesta.json();
                                    const arraySucursales = Object.entries(jsonSucursales);
                                    await cargarSucursales(arraySucursales);
                                }

                            } catch (error) {
                                console.log(error);
                            }
                        }
                        getMunicipioPorID()
                    }

                } catch (error) {
                    console.log(error);
                }
            }
            getSucursales();


            const cargarSucursales = async (arraySucursales) => {

                document.getElementById("estado_clinica_cita_modal").addEventListener("change", function (e) {
                    const estadoId = e.target.value;
                    let template = '<option value="">Seleccione una sucursal</option>';

                    arraySucursales[1][1].forEach(element => {
                        if (element.IdEstado == estadoId) {
                            template += `<option value="${element.IdSucursal}">${capitalizarPrimeraLetra(element.Sucursal)}</option>`;
                        }
                    });
                    document.getElementById("clinica_cita_modal").innerHTML = template;
                    getSucursalDetails();
                });
            }


            const getSucursalDetails = async () => {

                document.getElementById("clinica_cita_modal").addEventListener("change", async function (e) {
                    const IdSucursal = e.target.value;
                    console.log(IdSucursal);

                    let requestOptions = {
                        method: "GET"
                    }

                    try {
                        console.log("todo bien hasta aqui");
                        const respuesta = await fetch("https://api.emarketingsd.org/base/Sucursales/Detalle?IdSucursal=" + IdSucursal, requestOptions);

                        if (!respuesta.ok) throw respuesta;

                        if (respuesta.status === 200) {
                            const json = await respuesta.json();
                            console.log(json);


                            document.getElementById("textoClinicaSeleccionada").style.display = "block";
                            document.getElementById("informacionClinica").style.display = "flex";

                            document.getElementById("sucursalSeleccionada").innerText = json[0].Descripcion;
                            let domicilio = capitalizarPrimeraLetra(json[0].Domicilio);
                            document.getElementById("dirClinicaModal").innerText = domicilio;
                            document.getElementById("telClinicaModal").innerText = json[0].Telefonos;
                            // document.getElementById("HorariosClinicaModal").innerHTML = json[0].HorarioAtencion;
                            domicilio = '';

                            cargarHorarios(IdSucursal);
                            tablaTiempos(IdSucursal);
                        }

                    } catch (error) {
                        console.log(error);
                    }

                });


                function cargarHorarios(IdSucursal) {
                    (155 != IdSucursal &&
                        148 != IdSucursal &&
                        144 != IdSucursal &&
                        73 != IdSucursal &&
                        61 != IdSucursal &&
                        59 != IdSucursal &&
                        42 != IdSucursal &&
                        9 != IdSucursal &&
                        1 != IdSucursal) ||
                        $("#HorariosClinicaModal").html("Lunes a Sabado: <br id='brincoModalWeb'>7:00 am a 7:00 pm </br> Domingo: <br id='brincoModalWeb'>7:00 am a 5:00 pm"),
                        (167 != IdSucursal &&
                            166 != IdSucursal &&
                            164 != IdSucursal &&
                            162 != IdSucursal &&
                            159 != IdSucursal &&
                            153 != IdSucursal &&
                            152 != IdSucursal &&
                            150 != IdSucursal &&
                            143 != IdSucursal &&
                            142 != IdSucursal &&
                            141 != IdSucursal &&
                            139 != IdSucursal &&
                            138 != IdSucursal &&
                            137 != IdSucursal &&
                            133 != IdSucursal &&
                            132 != IdSucursal &&
                            129 != IdSucursal &&
                            128 != IdSucursal &&
                            127 != IdSucursal &&
                            126 != IdSucursal &&
                            125 != IdSucursal &&
                            123 != IdSucursal &&
                            119 != IdSucursal &&
                            117 != IdSucursal &&
                            113 != IdSucursal &&
                            109 != IdSucursal &&
                            108 != IdSucursal &&
                            107 != IdSucursal &&
                            104 != IdSucursal &&
                            103 != IdSucursal &&
                            102 != IdSucursal &&
                            98 != IdSucursal &&
                            97 != IdSucursal &&
                            96 != IdSucursal &&
                            89 != IdSucursal &&
                            88 != IdSucursal &&
                            87 != IdSucursal &&
                            84 != IdSucursal &&
                            82 != IdSucursal &&
                            81 != IdSucursal &&
                            79 != IdSucursal &&
                            76 != IdSucursal &&
                            71 != IdSucursal &&
                            68 != IdSucursal &&
                            60 != IdSucursal &&
                            57 != IdSucursal &&
                            56 != IdSucursal &&
                            54 != IdSucursal &&
                            52 != IdSucursal &&
                            48 != IdSucursal &&
                            47 != IdSucursal &&
                            41 != IdSucursal &&
                            40 != IdSucursal &&
                            37 != IdSucursal &&
                            25 != IdSucursal &&
                            12 != IdSucursal &&
                            6 != IdSucursal &&
                            5 != IdSucursal) ||
                        $("#HorariosClinicaModal").html("Lunes a Domingo: <br id='brincoModalWeb'>7:00 am a 3:00 pm </br>"),
                        (134 != IdSucursal) ||
                        $("#HorariosClinicaModal").html("Lunes a Domingo: <br id='brincoModalWeb'>7:00 am a 11:30 am </br>"),
                        (46 != IdSucursal) ||
                        $("#HorariosClinicaModal").html("Lunes: 6:00 am a 11:55 pm <br id='brincoModalWeb'> Martes a Viernes: <br id='brincoModalWeb'>12:00 am a 11:55 pm </br> Sabado: <br id='brincoModalWeb'>12:00 am a 11:00 pm </br> Domingo: <br id='brincoModalWeb'>7:00 am a 5:00 pm"),
                        (214 != IdSucursal) ||
                        $("#HorariosClinicaModal").html("Lunes a Sabado: <br id='brincoModalWeb'>7:00 am a 3:00 pm </br> Domingo: <br id='brincoModalWeb'>7:00 am a 2:00 pm")
                }


                const tablaTiempos = async (IdSucursal) => {

                    document.querySelector(".tablaTiempos").style.display = "flex";

                    let requestOptions = {
                        method: "GET"
                    }

                    try {

                        const respuesta = await fetch("https://api-ws.salud-digna.site/covid/tiemporesultados/" + IdSucursal, requestOptions);

                        if (!respuesta.ok) throw respuesta;

                        if (respuesta.ok) {
                            const json = await respuesta.json();
                            // console.log(json);
                            document.getElementById("horaCorteModal").textContent = json.corte_covid;
                            document.getElementById("tiempoEntregaAntesModal").textContent = json.tiempo_resultados;
                            document.getElementById("tiempoEntregaDespuesModal").textContent = json.entrega_covid_corte;
                        }

                    } catch (error) {
                        console.log(error);
                    }

                }

            }


            function cargarClinicasMasSolicitadas() {
                $.ajax({
                    type: "GET",
                    url: "https://api-ws.salud-digna.site/covid/tiemporesultados/0",
                    dataType: "json",
                    contentType: "application/json",
                    global: false,
                    async: false,
                    success: function (response) {
                        response.map(function (a, i) {
                            $("#horaCorte" + a.id).text(a.corte_covid);
                            $("#horaCorteAntes" + a.id).text(a.tiempo_resultados.replaceAll("horas", "hrs"));
                            $("#horaCorteDespues" + a.id).text(a.entrega_covid_corte.replaceAll("horas", "hrs"));
                        });
                    },
                    error: function (o, a, e) {
                        console.log(e);
                    },
                });
            }
            cargarClinicasMasSolicitadas();
        }
    }
});