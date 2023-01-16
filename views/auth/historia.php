<style>
.labh2{
        color: red;
        margin-top: 10px;
        margin-right: 10px;
        margin-left: 10px;
        font-size: 1.5rem;
        font-weight: 800;
        font-family: 'Roboto', sans-serif;
    }
    .inhxl2{
        height: 40px;
        width: 50%;
        background-color: rgba(255,255,255,0.07);
        border-radius: 10px;
        border-color: rgba(255, 255, 255, 0.16);
        padding: 0 10px;
        margin-top: 8px;
        font-size: 16px;
        font-weight: 800;
        color : red;
    }
    </style>
<body class="back">
    <div class="hed">
        <img class="imfloat" src="build/img/d1.png">
        <p class="tith"> Historia Clínica para Endodoncia </p>
    </div>
    <div class="main-container">
        <div>
            <form action="/historia" method="POST">
                <ul class="ul">
                    <li class="remitidor">

                        <label class="labh"> Remitidor </label>
                        <input class="inh" type="text" placeholder="Nombre" name="remitidor" required value=<?php echo s($paciente->remitidor)?> >

                        <label class="labh"> Fecha </label>
                        <input class="inh" type="Date" name="fecha" value=<?php echo s($paciente->fecha)?> required>

                        <label class="labh"> Folio </label>
                        <input class="inh" type="num" name="folio"value=<?php echo s($paciente->folio)?> required>
                    </li>
                    <hr class="ruleh">
                    <h3> Datos Personales </h3>
                    <li class="personales">
                        <label for="nombreID" class="labh"> Paciente </label>
                        <input id="nombreID" class="inh" type="text" placeholder="Nombre(s)" name="nombre" required value=<?php echo s($paciente->nombre)?> >
                        <input id="pApellidoID" class="inh" type="text" placeholder=" 1er Apellido" name="apellido" required value=<?php echo s($paciente->apellido)?> >
                        <input id="sApellidoID" class="inh" type="text" placeholder="2do Apellido"name="sapellido" required value=<?php echo s($paciente->sapellido)?> >

                        <label for="edadID" class="labh">Edad </label>
                        <input id="edadID" class="inhch" type="number" min="0" max="150" step="1" name="edad" value=<?php echo s($paciente->edad)?>>

                    </li>
                    <li class="personales">
                        <label for="genID" class="labh"> Género </label>
                        <select id="genID" class="inh" name="genero">
                            <option>Masculino</option>
                            <option>Femenino</option>
                            <option>Otro</option>
                        </select>

                        <label class="labh"> Domicilio </label>
                        <input id="calleID" class="inhl" type="text" placeholder="Calle y Número" name="calle" value=<?php echo s($paciente->calle)?>>

                        <input id="colID" class="inh" type="text" placeholder="Colonia" name="colonia" value=<?php echo s($paciente->colonia)?>>

                        <input id="cpID" class="inh" type="text" placeholder="Código Postal" name="cp" value=<?php echo s($paciente->cp)?>>
                    </li>
                    <li class="personales">

                        <label for="edoCiv" class="labh"> Estado Civil </label>
                        <select id="edoCiv" class="inh" name="estado">
                            <option value="Soltero"> Solter@ </option>
                            <option value="Casado"> Casad@ </option>
                            <option value="Viudo"> Viud@ </option>
                        </select>

                        <label for="ocupID" class="labh"> Ocupación </label>
                        <input id="ocupID" class="inh" type="text" name="ocupacion" value=<?php echo s($paciente->ocupacion)?>>

                        <label for="telID" class="labh"> Teléfono: </label>
                        <input id="telID" class="inh" type="tel" placeholder="+52" name="telefono" value=<?php echo s($paciente->telefono)?>>
                    </li>
                    <hr class="ruleh">
                    <h3> Antecedentes </h3>
                    <li class="antecedentes">
                        <label for="patoID" class="labh"> Antecedentes Patológicos Personales </label>
                        <input id="patoID" class="inhxl" placeholder="N/A" type="text" name="patologicos" value=<?php echo s($paciente->patologicos)?>>
                    </li>
                    <li class="antecedentes">
                        <label for="tratID" class="labh"> Tratamiento Médico Actual </label>
                        <input id="tratID" class="inhxl" placeholder="N/A" type="text" name="tratamientoact" value=<?php echo s($paciente->tratamientoact)?>>
                    </li>
                    <li class="antecedentes">
                        <label for="alID" id="alIDlab" class="labh2"> Alergias </label>
                        <input id="alID" class="inhxl2" placeholder="N/A" type="text" name="alergias" value=<?php echo s($paciente->alergias)?>>
                    </li>
                   

                    <hr class="ruleh">
                    <h3> Antecedentes del Caso </h3>
                    <textarea id="anteCasoID" class="texta" name="antcaso" value=<?php echo s($paciente->antcaso)?>> </textarea>


                    <hr class="ruleh">
                    <h3> Riesgos </h3>
                    <li class="riesgos">
                        <ul class="ulf">
                            <li>
                                <label for="cancerID" class="labh"> Cáncer </label>
                                <input type="text" id="cancerID" class="inhlpx" placeholder="N/A" name="cancer" value=<?php echo s($paciente->cancer)?>>
                            </li>
                            <li>
                                <label for="epilID" class="labh"> Epilepsia </label>
                                <input type="text" id="epilID" class="inhlpx" placeholder="N/A" name="epilepsia" value=<?php echo s($paciente->epilepsia)?>>
                            </li>
                            <li>
                                <label for="asmaID" class="labh"> Asma </label>
                                <input type="text" id="asmaID" class="inhlpx" placeholder="N/A" name="asma" value=<?php echo s($paciente->asma)?>>
                            </li>
                            <li>
                                <label for="viID" class="labh"> VIH/SIDA </label>
                                <input type="text" id="viID" class="inhlpx" placeholder="N/A" name="vih" value=<?php echo s($paciente->vih)?>>
                            </li>
                            <li>
                                <label for="fiebID" class="labh"> Fiebre Reumática </label>
                                <input type="text" id="fiebID" class="inhlpx" placeholder="N/A" name="reuma" value=<?php echo s($paciente->reuma)?>>
                            </li>
                            <li>
                                <label for="tubID" class="labh"> Tuberculosis </label>
                                <input type="text" id="tubID" class="inhlpx" placeholder="N/A" name="tuber" value=<?php echo s($paciente->tuber)?>>
                            </li>
                        </ul>
                        <ul class="ul">
                            <li>
                                <label for="diabetesID" class="labh"> Diabetes </label>
                                <input type="text" id="diabetesID" class="inhl" placeholder="N/A" name="diabetes" value=<?php echo s($paciente->diabetes)?>>
                            </li>
                            <li>
                                <label for="cardioID" class="labh"> Problemas Cardiovasculares </label>
                                <input type="text" id="cardioID" class="inhl" placeholder="N/A" name="cardio" value=<?php echo s($paciente->cardio)?>>
                            </li>
                            <li>
                                <label for="hipID" class="labh"> Hipertensión </label>
                                <input type="text" id="hipID" class="inhl" placeholder="N/A" name="hiper" value=<?php echo s($paciente->hiper)?>>
                            </li>
                            <li>
                                <label for="convID" class="labh"> Convulsiones </label>
                                <input type="text" id="convID" class="inhl" placeholder="N/A" name="convulsiones" value=<?php echo s($paciente->convulsiones)?>>
                            </li>
                            <li>
                                <label for="inmunoID" class="labh"> Inmunodeficiencia </label>
                                <input type="text" id="inmunoID" class="inhl" placeholder="N/A" name="inmuno" value=<?php echo s($paciente->inmuno)?>>
                            </li>
                            <li>
                                <label for="otroRiesgoID" class="labh"> Otro </label>
                                <input type="text" id="otroRiesgoID" class="inhl" placeholder="N/A" name="otro" value=<?php echo s($paciente->otro)?>>
                            </li>
                        </ul>


                    </li>

                    <hr class="ruleh">
                    <h3> Interpretación Médica</h3>
                    <ul class="ulf interpretacion">
                        <li>
                            <label class="labh" for="dolorID"> Dolor: </label>
                            <select class="selectxl" id="dolorID" name="dolor">
                                <option value="Ausente">Ausente</option>
                                <option value="Espontaneo">Espontáneo</option>
                                <option value="Agudo">Agudo</option>
                                <option value="Persistente">Persistente</option>
                                <option value="Nocturno">Nocturno</option>
                                <option value="Morder">Al morder</option>
                                <option value="Provocado al frío">Provocado al frío</option>
                                <option value="Provocado al calor">Provocado al calor</option>
                                <option value="A la percusión">A la percusión</option>
                                <option value="Sordo">Sordo</option>
                            </select>
                        </li>
                        <li>
                            <label class="labh" for="estadoID"> Estado de la pieza a tratar: </label>
                            <select class="selectxl" id="estadoID" name="pieza">
                                <option value="Aparentemente Sana">Aparentemente Sana</option>
                                <option value="Con Caries">Con Caries</option>
                                <option value="Sin Cavidad">Sin Cavidad</option>
                                <option value="Con Cavidad">Con Cavidad</option>
                                <option value="Oclusal">Oclusal</option>
                                <option value="Mesial">Mesial</option>
                                <option value="Distal">Distal</option>
                                <option value="Lingual">Lingual</option>
                                <option value="Palatina">Palatina</option>
                                <option value="Cervical">Cervical</option>
                                <option value="Radicular">Radicular</option>
                                <option value="Grado 1">Grado 1</option>
                                <option value="Grado 2">Grado 2</option>
                                <option value="Grado 3">Grado 3</option>
                            </select>
                        </li>
                    </ul>
                    <ul class="ul">
                        <li class="interpretacion">
                            <label class="labh" for="fracID">Fractura:</label>
                            <input type="text" class="inhl" placeholder="N/A" id="fracID" name="fractura" value=<?php echo s($paciente->fractura)?>>
                        </li>
                        <li class="interpretacion">
                            <label class="labh" for="restID">Con Restauración:</label>
                            <input type="text" class="inhl" placeholder="N/A" id="restID" name="restau" value=<?php echo s($paciente->restau)?>>
                        </li>
                        <li class="interpretacion">
                            <label class="labh" for="camColorID">Cambio de Coloración:</label>
                            <input type="text" class="inhl" placeholder="N/A" id="camColorID" name="coloracion" value=<?php echo s($paciente->coloracion)?>>
                        </li>
                    </ul>
                    <hr class="rule">

                    <hr class="ruleh">

                    <li class="interpretacion">
                        <label class="enlabh" for="cliniID"> Interpretación Clínica: </label>
                        <input class="inhxl" type="text" id="cliniID" name="clinica" value=<?php echo s($paciente->clinica)?>>
                    </li>
                    <li class="interpretacion">
                        <label class="enlabh" for="radioID"> Interpretación Radiográfica: </label>
                        <input class="inhxl" type="text" id="radioID" name="radio" value=<?php echo s($paciente->radio)?>>
                    </li>
                    <li class="interpretacion">
                        <label class="enlabh" for="diagID"> Diagnóstico Clínico: </label>
                        <input class="inhxl" type="text" id="diagID" name="diag" value=<?php echo s($paciente->diag)?>>
                    </li>
                    <li class="interpretacion">
                        <label class="enlabh" for="trataID"> Tratamiento: </label>
                        <input class="inhxl" type="text" id="trataID" name="trat" value=<?php echo s($paciente->trat)?>>
                    </li>
                    <li class="interpretacion">
                        <label class="enlabh" for="pronoID"> Pronóstico: </label>
                        <input class="inhxl" type="text" id="pronoID" name="pronostico" value=<?php echo s($paciente->pronostico)?>>
                    </li>
                    <li class="interpretacion">
                        <label class="enlabh" for="diagID"> Diagnóstico Clínico: </label>
                        <input class="inhxl" type="text" id="diagID" name="diag" value=<?php echo s($paciente->diag)?>>
                    </li>
                    <li class="interpretacion">
                        <label class="enlabh" for="diagnosticoPulparID"> Diagnóstico Pulpar: </label>
                        <select class="selectxl" id="diagnosticoPulparID" name="diagnosticoPulpar" value=<?php echo s($paciente->diagnosticoPulpar)?>>
                            <option value="Pulpa Normal">Pulpa Normal</option>
                            <option value="Pulpitis Reversible">Pulpitis Reversible</option>
                            <option value="Pulpitis Irreversible Asintomática">Pulpitis Irreversible Asintomática</option>
                            <option value="Pulpitis Irreversible Sintomática">Pulpitis Irreversible Sintomática</option>
                            <option value="Necrosis Pulpar">Necrosis Pulpar</option>
                            <option value="Tratado Previamente">Tratado Previamente</option>
                            <option value="Iniciado Previamente">Iniciado Previamente</option>
                        </select>
                    </li>

                    <li class="interpretacion">
                        <label for="diagnosticoPeriapicalID" class="enlabh">Diagnóstico Periapical:</label>
                        <select class="selectxl" id="diagnosticoPeriapicalID" name="diagnosticoPeriapical" value=<?php echo s($paciente->diagnosticoPeriapical)?>>
                            <option value="Tejido Apical Sano">Tejido Apical Sano</option>
                            <option value="Periodontitis Apical Sintomática">Periodontitis Apical Sintomática</option>
                            <option value="Periodontitis Apical Asintomática">Periodontitis Apical Asintomática</option>
                            <option value="Absceso Apical Agudo">Absceso Apical Agudo</option>
                            <option value="Absceso Apical Crónico">Absceso Apical Crónico</option>
                            <option value="Osteitis Condensante">Osteitis Condensante</option>
                        </select>
                    </li>
                    <hr class="ruleh">

                    <h3>Observaciones</h3>
                    <textarea class="texta" name="observaciones" value=<?php echo s($paciente->observaciones)?>></textarea>
                    <hr class="rule">

                    <hr class="ruleh">
                    <hr class="rule">

                    <li class="conductos">
                        <table class="table">
                            <tr class="tr">
                                <th class="th">Conducto</th>
                                <th class="th">Conducto (MM)</th>
                                <th class="th">Referencia</th>
                                <th class="th">Lima Maestra</th>
                                <th class="th">Cono Maestro</th>
                            </tr>
                            <tr class="tr">
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoID1" name="conductoID1" value=<?php echo s($paciente->conductoID1)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoMMID1" name="conductoMMID1" value=<?php echo s($paciente->conductoMMID1)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="referenciaID1" name="referenciaID1" value=<?php echo s($paciente->referenciaID1)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="lMaestraID1" name="lMaestraID1" value=<?php echo s($paciente->lMaestraID1)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="cMaestroID1" name="cMaestroID1" value=<?php echo s($paciente->cMaestroID1)?>>
                                </td>
                            </tr>
                            <tr class="tr">
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoID2" name="conductoID2" value=<?php echo s($paciente->conductoID2)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoMMID2" name="conductoMMID2" value=<?php echo s($paciente->conductoMMID2)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="referenciaID2" name="referenciaID2" value=<?php echo s($paciente->referenciaID2)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="lMaestraID2" name="lMaestraID2" value=<?php echo s($paciente->lMaestraID2)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="cMaestroID2" name="cMaestroID2" value=<?php echo s($paciente->cMaestroID2)?>>
                                </td>
                            </tr>
                            <tr class="tr">
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoID3" name="conductoID3" value=<?php echo s($paciente->conductoID3)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoMMID3" name="conductoMMID3" value=<?php echo s($paciente->conductoMMID3)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="referenciaID3" name="referenciaID3" value=<?php echo s($paciente->referenciaID3)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="lMaestraID3" name="lMaestraID3" value=<?php echo s($paciente->lMaestraID3)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="cMaestroID3" name ="cMaestroID3" value=<?php echo s($paciente->cMaestroID3)?>>
                                </td>
                            </tr>
                            <tr class="tr">
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoID4" name="conductoID4" value=<?php echo s($paciente->conductoID4)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoMMID4" name="conductoMMID4" value=<?php echo s($paciente->conductoMMID4)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="referenciaID4" name="referenciaID4" value=<?php echo s($paciente->referenciaID4)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="lMaestraID4" name="lMaestraID4" value=<?php echo s($paciente->lMaestraID4)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="cMaestroID4" name="cMaestroID4" value=<?php echo s($paciente->cMaestroID4)?>>
                                </td>
                            </tr>
                            <tr class="tr">
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoID5" name="conductoID5" value=<?php echo s($paciente->conductoID5)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoMMID5" name="conductoMMID5" value=<?php echo s($paciente->conductoMMID5)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="referenciaID5" name="referenciaID5" value=<?php echo s($paciente->referenciaID5)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="lMaestraID5" name="lMaestraID5" value=<?php echo s($paciente->lMaestraID5)?>>
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="cMaestroID5" name="cMaestroID5" value=<?php echo s($paciente->cMaestroID5)?>>
                                </td>
                            </tr>

                        </table>
                    </li>
                    <hr class="ruleh">
                    <hr class="rule">

                    <li class="tecnica">
                        <label class="enlabh" for="tecInstID"> Técnica de Instrumentación: </label>
                        <input class="inhxl" type="text" id="tecInstID" name="instrum" value=<?php echo s($paciente->instrum)?>>
                    </li>
                    <li class="tecnica">
                        <label for="tecObtID" class="enlabh">Técnica de Obturación:</label>
                        <input class="inhxl" type="text" id="tecObtID" name="obtur" value=<?php echo s($paciente->obtur)?>>
                    </li>
                    <li class="tecnica">
                        <label for="cemObtID" class="enlabh">Cemento de Obturación</label>
                        <input id="cemObtID" class="inhxl" type="text" name="cemento"value=<?php echo s($paciente->cemento)?>>
                    </li>
                    <li class="tecnica">
                        <label for="medIntrID" class="enlabh">Medicación Intraconducto:</label>
                        <input id="medIntrID" class="inhxl" type="text" name="intraconducto"value=<?php echo s($paciente->intraconducto)?>>
                    </li>
                    <li class="tecnica">
                        <label for="medSistID" class="enlabh">Medicación Sistémica:</label>
                        <input id="medSistID" class="inhxl" type="text" name="sistematica" value=<?php echo s($paciente->sistematica)?>>
                    </li>
                    <li class="tecnica">
                        <label for="obtProvID" class="enlabh">Obturación Provisional:</label>
                        <input class="inhxl" id="obtProvID" type="text" name="prov" value=<?php echo s($paciente->prov)?>>
                    </li>
                    <li class="tecnica">
                        <label for="procAdID" class="enlabh">Procedimientos Adicionales:</label>
                        <input class="inhxl" type="text" id="procAdID" name="adicionales" value=<?php echo s($paciente->adicionales)?>>
                    </li>
                    <hr class="rule">

                    <hr class="ruleh">
                    <h3>Observaciones Finales</h3>
                    <textarea class="texta" name="finales" value=<?php echo s($paciente->finales)?>></textarea>

                    <hr class="ruleh">
                    <input type="hidden" name = "total" value="0">
                    <input type="hidden" name = "fechatotal" value="0">
                    
                </ul>
        </div>
        <div class="btn-regresar-container-h">
            <a class="btn-regresar" href="direc"> < Directorio </a>
        </div>
        <div class="presupuesto">
            <button class="btnh" type="submit"> Presupuesto </button>
        </div>
    </div>
    </form>
    <footer class="foot">
        <p> CD. Erendy Anahí Hernández Pérez</p>
        <p> Céd. Prof. 8126068</p>
    </footer>