<style>
#modalTiemposEntregaResultados { color: #616161; }
#modalTiemposEntregaResultados i.icon-arrow-down { position: absolute; right: 5px; top: 22px; transform: translateY(-50%); font-size: 20px; color: #0074d9; pointer-events: none; }
#modalTiemposEntregaResultados .modal-header { padding: 10px 15px 15px 15px; border-bottom: 1px solid #e5e5e5; background: radial-gradient(ellipse at center top , #f9b132 10%, #f8ab2e 30%, #f3911b 80%); color: white; line-height: normal; font-weight: bold; }
#tituloModal { margin: 0px 50px 0px 10px; position: absolute; padding-left: 10px; border-left: 1px solid white; }
.estado_clinica_cita_modal, .clinica_cita_modal { border: 1px solid #616161; appearance: none; -webkit-appearance: none; -moz-appearance: none; -o-appearance: none; }
#clinicaSeleccionada { margin-top:20px; }
.clinicaSolicitada hr { border-color: #aaaaaa; margin: 5px 0px;}
#informacionClinica { margin: 15px 0px; }
#informacionClinica div { width:33%; padding: 0px 15px 0px 2px; }
#informacionClinica p { margin: 0px 0px 0px 20px; font-weight: bold; }
#informacionClinica span { margin: 0px 0px 0px 20px; display: block;}
#informacionClinica .icono-whatsapp { font-size: 18px; margin-top: -3px; }
.horariosClinica .iconos-ubicacion { margin-top:5px; }
.tablaTiempos{ box-shadow: 0px 2px 5px 0px rgb(61 61 61 / 50%); border-radius: 6px; margin: 15px 0px; display:flex; text-align: center; }
.tablaTiempos td { width:33%; text-align:center; padding:10px 5px;}
.tablaTiempos table { border-collapse: collapse; }
.tablaTiempos table td { border: 1px solid #aaaaaa; font-weight:bold; height: 60px; }
.tablaTiempos table tr:first-child td { border-top: 0; }
.tablaTiempos table tr td:first-child { border-left: 0; }
.tablaTiempos table tr:last-child td { border-bottom: 0; }
.tablaTiempos table tr td:last-child { border-right: 0; }

/* Nueva tabla */
.tablaTiempos .tablaColumna { width: 33.33%; }
.tablaTiempos .tablaCelda { height: 60px; display: table; border: 1px solid #aaaaaa; width:100%; }
.tablaTiempos .textoCelda { display: table-cell; vertical-align: middle; font-weight: bold; }
.tablaTiempos .tablaColumna:first-child .tablaCelda:first-child { border-top-left-radius: 5px; }
.tablaTiempos .tablaColumna:last-child .tablaCelda:first-child { border-top-right-radius: 5px; }
.tablaTiempos .tablaColumna:first-child .tablaCelda:last-child { border-bottom-left-radius: 5px; }
.tablaTiempos .tablaColumna:last-child .tablaCelda:last-child { border-bottom-right-radius: 5px; }


.clinicasSolicitadas { width:100%; display:flex; margin: 15px 0px; }
.clinicasSolicitadas .clinicaSolicitada:first-child { margin-right: 8px; }
.clinicasSolicitadas .clinicaSolicitada:last-child { margin-left: 8px; }
.clinicaSolicitada { width: 50%; box-shadow: 0px 2px 5px 1px rgb(61 61 61 / 50%); border-radius: 8px; padding:5px 10px; }
.clinicaSolicitada p {margin: 0px 0px 5px 20px;}
.clinicaSolicitada img { float: left !important; width: 15px !important; margin-top:3px;}
.nombreClinicaSolicitada p { margin: 5px 0px 0px 20px; color: #f9b233; font-weight:bold;}


/* Modal Aviso */
#modalAviso { color: #616161; }
#modalAviso .modal-dialog { margin-top: 200px;}
#modalAviso i.icon-arrow-down { position: absolute; right: 5px; top: 22px; transform: translateY(-50%); font-size: 20px; color: #0074d9; pointer-events: none; }
#modalAviso .modal-header { padding: 10px 15px 10px 15px; border-bottom: 1px solid #e5e5e5; background: radial-gradient(ellipse at center top , #f9b132 10%, #f8ab2e 30%, #f3911b 80%); color: white; line-height: normal; font-weight: bold; }
#tituloModalAviso { margin: 0px 50px 0px 10px; padding-left: 120px; border-left: 1px solid white; }
.boton-aviso {
    background-color: #0074D9;
    border: none;
    border-radius: 5px;
    color: white;
    padding: 7px 55px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px 3px;
    cursor: pointer;
    line-height: normal;
    width: 300px;
    height: 40px;
    font-weight: bold;
}


.fila {
  display: flex;
  justify-content: space-between;
}
.cajas-texto {
	position: relative;
	width: 100%;
	margin-top: 20px;
	overflow: initial !important;
}
.cajas-texto input, .cajas-texto select {
	width: 100%;
	height: 45px;
	border-radius: 4px;
	border: 1px solid #afafaf;
	padding: 8px 15px;
	outline: 0;
	margin: 0;
	background: #fff;
}

/* Estilos salud digna modal horarios */
img.iconos-ubicacion {
	width: 20px;
	float: left;
}
.tablaTiempos .textoCelda {
	display: table-cell;
	vertical-align: middle;
	font-weight: bold;
    font-size: 14px;
}
.clinicaSolicitada p {
	margin: 0px 0px 5px 20px;
    font-size: 14px;
}
#informacionClinica p {
	margin: 0px 0px 0px 20px;
	font-weight: bold;
    font-size: 14px;
}
#informacionClinica span {
	margin: 0px 0px 0px 20px;
	display: block;
    font-size: 14px;
}
.horariosClinica .iconos-ubicacion {
	margin-top: 4px;
}
#tituloModal {
	margin: 0px 50px 0px 10px;
	position: absolute;
	padding-left: 10px;
	border-left: 1px solid white;
    font-size: 14px;
}
@media screen and (max-width: 480px) {
    #Cont_Hor, #Cont_Suc, #contDatos1, #contDatos2, #contDatos3, #contDatos4 {
	    display: block;
    }
    #Cont_Suc .cajas-texto, #contDatos3 .cajas-texto {
	    width: 100% !important;
    }
}
@media screen and (max-width: 600px) {
  
}
@media screen and (max-width: 600px) {
    #informacionClinica {
        display: block !important;
    }
    #informacionClinica div {
        width: 100%;
    }
    .tablaTiempos {
        display: block !important;
    }
    .tablaTiempos .tablaColumna {
	    width: 100%;
    }
    .clinicasSolicitadas {
        display: block;
    }
    .clinicaSolicitada {
        width: 100%;
    }
    .clinicaSolicitada {
	    margin: 20px 0px!important;
    }
}

/* end Estilos salud digna modal horarios */
</style>

<!-- Modal Tiempos de Entrega Resultados -->
<div class="modal fade in" id="modalTiemposEntregaResultados" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <img src="https://salud-digna.com/LandingCitaCovid19/pcr-logo-modal.svg" style="width: 65px;">
                <span id="tituloModal">Consulta los tiempos de entrega de la prueba COVID-PCR en tu clínica más cercana.</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="fila" id="Cont_Suc" style="margin-top:0;">
                    <div class="cajas-texto" style="width:95%;margin-right:10px;margin-top:5px !important;">
                        <i class="icon-arrow-down"></i>
                        <select class="estado_clinica_cita_modal" id="estado_clinica_cita_modal" name="estado_clinica_cita_modal">
                            <option value="-1">Seleccione un estado</option>
                        </select>
                    </div>
                    <div class="cajas-texto" style="margin-top:5px !important;">
                        <i class="icon-arrow-down"></i>
                        <select class="clinica_cita_modal" id="clinica_cita_modal" name="clinica_cita_modal">
                            <option value="0">Seleccione una sucursal</option>
                        </select>
                    </div>
                </div>

                <div id="clinicaSeleccionada">
                    <p id="textoClinicaSeleccionada" style="text-align:center; font-size:20px;display:none;">Clinica Seleccionada: <strong><span id="sucursalSeleccionada">{ Sucursal }</span></strong></p>
                    <div id="informacionClinica" style="display:none !important;">
                        <div class="direccionClinica">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.752" height="15" viewBox="0 0 14.752 20" style="position:absolute; margin: 3px 0px 0px 3px;">
                        <path id="Unión_38" data-name="Unión 38" d="M7.478,20a.622.622,0,0,1-.522-.276L1.1,10.73A6.774,6.774,0,0,1,0,7.031,7.217,7.217,0,0,1,7.374,0a7.218,7.218,0,0,1,7.378,7.031,6.777,6.777,0,0,1-1.041,3.6L8.005,19.715A.612.612,0,0,1,7.483,20ZM1.222,7.031a5.655,5.655,0,0,0,.924,3.08L7.469,18.29l5.188-8.259a5.659,5.659,0,0,0,.868-3,6.023,6.023,0,0,0-6.15-5.867A6.027,6.027,0,0,0,1.222,7.031Zm2.465,0A3.61,3.61,0,0,1,7.374,3.516a3.61,3.61,0,0,1,3.689,3.515,3.6,3.6,0,0,1-3.689,3.515A3.6,3.6,0,0,1,3.687,7.031Zm1.222,0A2.412,2.412,0,0,0,7.374,9.382,2.408,2.408,0,0,0,9.838,7.031,2.415,2.415,0,0,0,7.374,4.68,2.418,2.418,0,0,0,4.908,7.031Z" fill="#616161" fill-opacity="0.8"></path>
                        </svg>
                            <p>Dirección:</p>
                            <span id="dirClinicaModal">Av. Ruiz #485 Col. Sección Primera Entre Av. Juárez Y Cuarta C.P. 22800, Ensenada</span>
                        </div>
                        <div class="contactoClinica">
                        <!-- <i class="icono-whatsapp iconos-ubicacion" style="opacity: 0.8;"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" style="fill: rgba(0, 0, 0, 1); position:absolute; margin: 1px 0px 0px -3px;opacity: 0.6;">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.446 7.446 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.413 7.413 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.112-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383a9.65 9.65 0 0 0-.429-.008.826.826 0 0 0-.599.28c-.206.225-.785.767-.785 1.871s.804 2.171.916 2.321c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.207-.151-.43-.263"></path></svg>
                            <p>Contacto:</p>
                            <p>Teléfono </p>
                            <span id="telClinicaModal">(449) 918 61 66</span>
                            <p>Envianos un mensaje:</p>
                            <p>WhatsApp:</p>
                            <span>55 3956 6729</span>
                            <p>Messenger:</p>
                            <span>@SaludDignaMx</span>
                        </div>
                        <div class="horariosClinica">
                            <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock.svg" style="width:15px;">
                            <p>Horarios:</p>
                            <span id="HorariosClinicaModal">Lunes a Viernes: <br id="brincoModalWeb">6:00 am a 7:00 pm<br>Sábado: <br id="brincoModalWeb">6:00 am a 5:00 pm<br>Domingo: <br id="brincoModalWeb">7:00 am a 2:00 pm</span>
                        </div>
                    </div>
                </div>

                <div class="tablaTiempos" style="display:none !important;">
                    <div class ="tablaColumna">
                        <div class ="tablaCelda" style="color:#f99e33;font-weight:bold;"><span class="textoCelda">Hora Corte</span></div>
                        <div class ="tablaCelda"><span class="textoCelda" id="horaCorteModal">{ Hora Corte }</span></div>
                    </div>
                    <div class ="tablaColumna">
                        <div class ="tablaCelda" style="color:#f99e33; font-weight:bold;"><span class="textoCelda">Tiempo de entrega<br>(antes de hora corte)</span></div>
                        <div class ="tablaCelda"><span class="textoCelda" id="tiempoEntregaAntesModal">{ Tiempo de entrega antes de hora corte }</span></div>
                    </div>
                    <div class ="tablaColumna">
                        <div class ="tablaCelda" style="color:#f99e33; font-weight:bold;"><span class="textoCelda">Tiempo de entrega<br>(después de hora corte)</span></div>
                        <div class ="tablaCelda"><span class="textoCelda" id="tiempoEntregaDespuesModal">{ Tiempo de entrega después de hora corte }</span></div>
                    </div>
                </div>
                
                <p style="font-size: 14px">*Toma en cuenta que la hora de entrega depende de la hora de toma de muestra, si tu muestra fue realizada antes de la hora corte, verifica ese tiempo de entrega.</p>
                
                <h3 style="font-size:20px; font-weight:bold;">Clínicas más solicitadas</h3>
                
                <!-- FILA 1 -->
                <div id="clinicasMasSolicitadas" class="clinicasSolicitadas">
                    <div class="clinicaSolicitada">
                        <div class="nombreClinicaSolicitada">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.752" height="20" viewBox="0 0 14.752 20" style="position:absolute;">
                        <path id="Unión_38" data-name="Unión 38" d="M7.478,20a.622.622,0,0,1-.522-.276L1.1,10.73A6.774,6.774,0,0,1,0,7.031,7.217,7.217,0,0,1,7.374,0a7.218,7.218,0,0,1,7.378,7.031,6.777,6.777,0,0,1-1.041,3.6L8.005,19.715A.612.612,0,0,1,7.483,20ZM1.222,7.031a5.655,5.655,0,0,0,.924,3.08L7.469,18.29l5.188-8.259a5.659,5.659,0,0,0,.868-3,6.023,6.023,0,0,0-6.15-5.867A6.027,6.027,0,0,0,1.222,7.031Zm2.465,0A3.61,3.61,0,0,1,7.374,3.516a3.61,3.61,0,0,1,3.689,3.515,3.6,3.6,0,0,1-3.689,3.515A3.6,3.6,0,0,1,3.687,7.031Zm1.222,0A2.412,2.412,0,0,0,7.374,9.382,2.408,2.408,0,0,0,9.838,7.031,2.415,2.415,0,0,0,7.374,4.68,2.418,2.418,0,0,0,4.908,7.031Z" fill="#f9b233"></path>
                        </svg>
                        <p> Huixquilucan</p>
                        </div>
                        <hr>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorte153">15:00</strong> (hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteAntes153">24 a 72 hrs</strong> (antes de hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteDespues153">24 a 72 hrs</strong> (después de hora corte)</p>
                    </div>
                    
                    <div class="clinicaSolicitada">
                        <div class="nombreClinicaSolicitada">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.752" height="20" viewBox="0 0 14.752 20" style="position:absolute;">
                        <path id="Unión_38" data-name="Unión 38" d="M7.478,20a.622.622,0,0,1-.522-.276L1.1,10.73A6.774,6.774,0,0,1,0,7.031,7.217,7.217,0,0,1,7.374,0a7.218,7.218,0,0,1,7.378,7.031,6.777,6.777,0,0,1-1.041,3.6L8.005,19.715A.612.612,0,0,1,7.483,20ZM1.222,7.031a5.655,5.655,0,0,0,.924,3.08L7.469,18.29l5.188-8.259a5.659,5.659,0,0,0,.868-3,6.023,6.023,0,0,0-6.15-5.867A6.027,6.027,0,0,0,1.222,7.031Zm2.465,0A3.61,3.61,0,0,1,7.374,3.516a3.61,3.61,0,0,1,3.689,3.515,3.6,3.6,0,0,1-3.689,3.515A3.6,3.6,0,0,1,3.687,7.031Zm1.222,0A2.412,2.412,0,0,0,7.374,9.382,2.408,2.408,0,0,0,9.838,7.031,2.415,2.415,0,0,0,7.374,4.68,2.418,2.418,0,0,0,4.908,7.031Z" fill="#f9b233"></path>
                        </svg>
                        <p> Tlalpan</p>
                        </div>
                        <hr>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorte79">18:00</strong> (hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteAntes79">12 a 24 hrs</strong> (antes de hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteDespues79">24 a 48 hrs</strong> (después de hora corte)</p>
                    </div>
                </div>
                
                <!-- FILA 2 -->
                <div id="clinicasMasSolicitadas" class="clinicasSolicitadas">
                    <div class="clinicaSolicitada">
                        <div class="nombreClinicaSolicitada">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.752" height="20" viewBox="0 0 14.752 20" style="position:absolute;">
                        <path id="Unión_38" data-name="Unión 38" d="M7.478,20a.622.622,0,0,1-.522-.276L1.1,10.73A6.774,6.774,0,0,1,0,7.031,7.217,7.217,0,0,1,7.374,0a7.218,7.218,0,0,1,7.378,7.031,6.777,6.777,0,0,1-1.041,3.6L8.005,19.715A.612.612,0,0,1,7.483,20ZM1.222,7.031a5.655,5.655,0,0,0,.924,3.08L7.469,18.29l5.188-8.259a5.659,5.659,0,0,0,.868-3,6.023,6.023,0,0,0-6.15-5.867A6.027,6.027,0,0,0,1.222,7.031Zm2.465,0A3.61,3.61,0,0,1,7.374,3.516a3.61,3.61,0,0,1,3.689,3.515,3.6,3.6,0,0,1-3.689,3.515A3.6,3.6,0,0,1,3.687,7.031Zm1.222,0A2.412,2.412,0,0,0,7.374,9.382,2.408,2.408,0,0,0,9.838,7.031,2.415,2.415,0,0,0,7.374,4.68,2.418,2.418,0,0,0,4.908,7.031Z" fill="#f9b233"></path>
                        </svg>
                        <p> Coacalco</p>
                        </div>
                        <hr>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorte98">14:50</strong> (hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteAntes98">24 a 72 hrs</strong> (antes de hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteDespues98">24 a 72 hrs</strong> (después de hora corte)</p>
                    </div>
                    
                    <div class="clinicaSolicitada">
                        <div class="nombreClinicaSolicitada">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.752" height="20" viewBox="0 0 14.752 20" style="position:absolute;">
                        <path id="Unión_38" data-name="Unión 38" d="M7.478,20a.622.622,0,0,1-.522-.276L1.1,10.73A6.774,6.774,0,0,1,0,7.031,7.217,7.217,0,0,1,7.374,0a7.218,7.218,0,0,1,7.378,7.031,6.777,6.777,0,0,1-1.041,3.6L8.005,19.715A.612.612,0,0,1,7.483,20ZM1.222,7.031a5.655,5.655,0,0,0,.924,3.08L7.469,18.29l5.188-8.259a5.659,5.659,0,0,0,.868-3,6.023,6.023,0,0,0-6.15-5.867A6.027,6.027,0,0,0,1.222,7.031Zm2.465,0A3.61,3.61,0,0,1,7.374,3.516a3.61,3.61,0,0,1,3.689,3.515,3.6,3.6,0,0,1-3.689,3.515A3.6,3.6,0,0,1,3.687,7.031Zm1.222,0A2.412,2.412,0,0,0,7.374,9.382,2.408,2.408,0,0,0,9.838,7.031,2.415,2.415,0,0,0,7.374,4.68,2.418,2.418,0,0,0,4.908,7.031Z" fill="#f9b233"></path>
                        </svg>
                        <p> Monterrey La Fe</p>
                        </div>
                        <hr>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorte137">14:30</strong> (hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteAntes137">24 a 48 hrs</strong> (antes de hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteDespues137">48 a 72 hrs</strong> (después de hora corte)</p>
                    </div>
                </div>

                <!-- FILA 3 -->
                <div id="clinicasMasSolicitadas" class="clinicasSolicitadas">
                    <div class="clinicaSolicitada">
                        <div class="nombreClinicaSolicitada">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.752" height="20" viewBox="0 0 14.752 20" style="position:absolute;">
                        <path id="Unión_38" data-name="Unión 38" d="M7.478,20a.622.622,0,0,1-.522-.276L1.1,10.73A6.774,6.774,0,0,1,0,7.031,7.217,7.217,0,0,1,7.374,0a7.218,7.218,0,0,1,7.378,7.031,6.777,6.777,0,0,1-1.041,3.6L8.005,19.715A.612.612,0,0,1,7.483,20ZM1.222,7.031a5.655,5.655,0,0,0,.924,3.08L7.469,18.29l5.188-8.259a5.659,5.659,0,0,0,.868-3,6.023,6.023,0,0,0-6.15-5.867A6.027,6.027,0,0,0,1.222,7.031Zm2.465,0A3.61,3.61,0,0,1,7.374,3.516a3.61,3.61,0,0,1,3.689,3.515,3.6,3.6,0,0,1-3.689,3.515A3.6,3.6,0,0,1,3.687,7.031Zm1.222,0A2.412,2.412,0,0,0,7.374,9.382,2.408,2.408,0,0,0,9.838,7.031,2.415,2.415,0,0,0,7.374,4.68,2.418,2.418,0,0,0,4.908,7.031Z" fill="#f9b233"></path>
                        </svg>
                        <p> Iztapalapa</p>
                        </div>
                        <hr>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorte76">19:00</strong> (hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteAntes76">12 a 24 hrs</strong> (antes de hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteDespues76">24 a 48 hrs</strong> (después de hora corte)</p>
                    </div>
                    
                    <div class="clinicaSolicitada">
                        <div class="nombreClinicaSolicitada">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.752" height="20" viewBox="0 0 14.752 20" style="position:absolute;">
                        <path id="Unión_38" data-name="Unión 38" d="M7.478,20a.622.622,0,0,1-.522-.276L1.1,10.73A6.774,6.774,0,0,1,0,7.031,7.217,7.217,0,0,1,7.374,0a7.218,7.218,0,0,1,7.378,7.031,6.777,6.777,0,0,1-1.041,3.6L8.005,19.715A.612.612,0,0,1,7.483,20ZM1.222,7.031a5.655,5.655,0,0,0,.924,3.08L7.469,18.29l5.188-8.259a5.659,5.659,0,0,0,.868-3,6.023,6.023,0,0,0-6.15-5.867A6.027,6.027,0,0,0,1.222,7.031Zm2.465,0A3.61,3.61,0,0,1,7.374,3.516a3.61,3.61,0,0,1,3.689,3.515,3.6,3.6,0,0,1-3.689,3.515A3.6,3.6,0,0,1,3.687,7.031Zm1.222,0A2.412,2.412,0,0,0,7.374,9.382,2.408,2.408,0,0,0,9.838,7.031,2.415,2.415,0,0,0,7.374,4.68,2.418,2.418,0,0,0,4.908,7.031Z" fill="#f9b233"></path>
                        </svg>
                        <p> Monterrey Lincoln</p>
                        </div>
                        <hr>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorte141">14:30</strong> (hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteAntes141">24 a 48 hrs</strong> (antes de hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteDespues141">48 a 72 hrs</strong> (después de hora corte)</p>
                    </div>
                </div>

                <!-- FILA 4 -->
                <div id="clinicasMasSolicitadas" class="clinicasSolicitadas">
                    <div class="clinicaSolicitada">
                        <div class="nombreClinicaSolicitada">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.752" height="20" viewBox="0 0 14.752 20" style="position:absolute;">
                        <path id="Unión_38" data-name="Unión 38" d="M7.478,20a.622.622,0,0,1-.522-.276L1.1,10.73A6.774,6.774,0,0,1,0,7.031,7.217,7.217,0,0,1,7.374,0a7.218,7.218,0,0,1,7.378,7.031,6.777,6.777,0,0,1-1.041,3.6L8.005,19.715A.612.612,0,0,1,7.483,20ZM1.222,7.031a5.655,5.655,0,0,0,.924,3.08L7.469,18.29l5.188-8.259a5.659,5.659,0,0,0,.868-3,6.023,6.023,0,0,0-6.15-5.867A6.027,6.027,0,0,0,1.222,7.031Zm2.465,0A3.61,3.61,0,0,1,7.374,3.516a3.61,3.61,0,0,1,3.689,3.515,3.6,3.6,0,0,1-3.689,3.515A3.6,3.6,0,0,1,3.687,7.031Zm1.222,0A2.412,2.412,0,0,0,7.374,9.382,2.408,2.408,0,0,0,9.838,7.031,2.415,2.415,0,0,0,7.374,4.68,2.418,2.418,0,0,0,4.908,7.031Z" fill="#f9b233"></path>
                        </svg>
                        <p> San Nicolás de los Garza</p>
                        </div>
                        <hr>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorte103">15:00</strong> (hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteAntes103">24 a 48 hrs</strong> (antes de hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteDespues103">48 a 72 hrs</strong> (después de hora corte)</p>
                    </div>
                    
                    <div class="clinicaSolicitada">
                        <div class="nombreClinicaSolicitada">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.752" height="20" viewBox="0 0 14.752 20" style="position:absolute;">
                        <path id="Unión_38" data-name="Unión 38" d="M7.478,20a.622.622,0,0,1-.522-.276L1.1,10.73A6.774,6.774,0,0,1,0,7.031,7.217,7.217,0,0,1,7.374,0a7.218,7.218,0,0,1,7.378,7.031,6.777,6.777,0,0,1-1.041,3.6L8.005,19.715A.612.612,0,0,1,7.483,20ZM1.222,7.031a5.655,5.655,0,0,0,.924,3.08L7.469,18.29l5.188-8.259a5.659,5.659,0,0,0,.868-3,6.023,6.023,0,0,0-6.15-5.867A6.027,6.027,0,0,0,1.222,7.031Zm2.465,0A3.61,3.61,0,0,1,7.374,3.516a3.61,3.61,0,0,1,3.689,3.515,3.6,3.6,0,0,1-3.689,3.515A3.6,3.6,0,0,1,3.687,7.031Zm1.222,0A2.412,2.412,0,0,0,7.374,9.382,2.408,2.408,0,0,0,9.838,7.031,2.415,2.415,0,0,0,7.374,4.68,2.418,2.418,0,0,0,4.908,7.031Z" fill="#f9b233"></path>
                        </svg>
                        <p> Coyoacán</p>
                        </div>
                        <hr>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorte46">19:00</strong> (hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteAntes46">24 a 72 hrs</strong> (antes de hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteDespues46">24 a 72 hrs</strong> (después de hora corte)</p>
                    </div>
                </div>
                
                <!-- FILA 5 -->
                <div id="clinicasMasSolicitadas" class="clinicasSolicitadas">
                    <div class="clinicaSolicitada">
                        <div class="nombreClinicaSolicitada">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.752" height="20" viewBox="0 0 14.752 20" style="position:absolute;">
                        <path id="Unión_38" data-name="Unión 38" d="M7.478,20a.622.622,0,0,1-.522-.276L1.1,10.73A6.774,6.774,0,0,1,0,7.031,7.217,7.217,0,0,1,7.374,0a7.218,7.218,0,0,1,7.378,7.031,6.777,6.777,0,0,1-1.041,3.6L8.005,19.715A.612.612,0,0,1,7.483,20ZM1.222,7.031a5.655,5.655,0,0,0,.924,3.08L7.469,18.29l5.188-8.259a5.659,5.659,0,0,0,.868-3,6.023,6.023,0,0,0-6.15-5.867A6.027,6.027,0,0,0,1.222,7.031Zm2.465,0A3.61,3.61,0,0,1,7.374,3.516a3.61,3.61,0,0,1,3.689,3.515,3.6,3.6,0,0,1-3.689,3.515A3.6,3.6,0,0,1,3.687,7.031Zm1.222,0A2.412,2.412,0,0,0,7.374,9.382,2.408,2.408,0,0,0,9.838,7.031,2.415,2.415,0,0,0,7.374,4.68,2.418,2.418,0,0,0,4.908,7.031Z" fill="#f9b233"></path>
                        </svg>
                        <p> Culiacán Centro</p>
                        </div>
                        <hr>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorte1">19:30</strong> (hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteAntes1">24 a 36 hrs</strong> (antes de hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteDespues1">24 a 48 hrs</strong> (después de hora corte)</p>
                    </div>
                    
                    <div class="clinicaSolicitada">
                        <div class="nombreClinicaSolicitada">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.752" height="20" viewBox="0 0 14.752 20" style="position:absolute;">
                        <path id="Unión_38" data-name="Unión 38" d="M7.478,20a.622.622,0,0,1-.522-.276L1.1,10.73A6.774,6.774,0,0,1,0,7.031,7.217,7.217,0,0,1,7.374,0a7.218,7.218,0,0,1,7.378,7.031,6.777,6.777,0,0,1-1.041,3.6L8.005,19.715A.612.612,0,0,1,7.483,20ZM1.222,7.031a5.655,5.655,0,0,0,.924,3.08L7.469,18.29l5.188-8.259a5.659,5.659,0,0,0,.868-3,6.023,6.023,0,0,0-6.15-5.867A6.027,6.027,0,0,0,1.222,7.031Zm2.465,0A3.61,3.61,0,0,1,7.374,3.516a3.61,3.61,0,0,1,3.689,3.515,3.6,3.6,0,0,1-3.689,3.515A3.6,3.6,0,0,1,3.687,7.031Zm1.222,0A2.412,2.412,0,0,0,7.374,9.382,2.408,2.408,0,0,0,9.838,7.031,2.415,2.415,0,0,0,7.374,4.68,2.418,2.418,0,0,0,4.908,7.031Z" fill="#f9b233"></path>
                        </svg>
                        <p> Río de los Remedios</p>
                        </div>
                        <hr>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorte88">19:00</strong> (hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteAntes88">12 a 24 hrs</strong> (antes de hora corte)</p>
                        <img class="iconos-ubicacion" src="https://salud-digna.com/citasCovid19/clock2.svg">
                        <p><strong id="horaCorteDespues88">24 a 48 hrs</strong> (después de hora corte)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>