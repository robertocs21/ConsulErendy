<body class="back">
    <div class="hed">
        <img class="imfloat" src="build/img/d1.png">
        <p class="tith"> Historia Clínica para Endodoncia </p>
    </div>
    <div class="main-container">
        <div>
       
            <form action="/historia_hecha?id=<?php echo $paciente->id;?>" method="POST" enctype="multipart/form-data">
                <ul class="ul">
                    <li class="remitidor">

                        <label class="labh"> Remitidor </label>
                        <input class="inh" type="text" placeholder="Nombre" name="remitidor" required value="<?php echo $paciente->remitidor;?>" >

                        <label class="labh"> Fecha </label>
                        <input class="inh" type="Date" name="fecha" value="<?php echo s($paciente->fecha);?>" required>

                        <label class="labh"> Folio </label>
                        <input class="inh" type="num" name="folio"value="<?php echo s($paciente->folio);?>" required>
                    </li>
                    <hr class="ruleh">
                    <h3> Datos Personales </h3>
                    <li class="personales">
                        <label for="nombreID" class="labh"> Paciente </label>
                        <input id="nombreID" class="inh" type="text" placeholder="Nombre(s)" name="nombre" required value="<?php echo s($paciente->nombre);?>" >
                        <input id="pApellidoID" class="inh" type="text" placeholder=" 1er Apellido" name="apellido" required value="<?php echo s($paciente->apellido);?>" >
                        <input id="sApellidoID" class="inh" type="text" placeholder="2do Apellido"name="sapellido" required value="<?php echo s($paciente->sapellido);?>" >

                        <label for="edadID" class="labh">Edad </label>
                        <input id="edadID" class="inhch" type="number" min="0" max="150" step="1" name="edad" value="<?php echo s($paciente->edad);?>">

                    </li>
                    <li class="personales">
                        <label for="genID" class="labh"> Género </label>
                        <select id="genID" class="inh" name="genero">
                            <option <?php echo $paciente->genero === 'Masculino' ? 'selected' :''; ?> value="Masculino">Masculino</option>
                            <option <?php echo $paciente->genero === 'Femenino'? 'selected' :''; ?> value="Femenino">Femenino</option>
                            <option <?php echo $paciente->genero === 'Otro' ? 'selected' :''; ?> value="Otro">Otro</option>
                        </select>

                        <label class="labh"> Domicilio </label>
                        <input id="calleID" class="inhl" type="text" placeholder="Calle y Número" name="calle" value="<?php echo s($paciente->calle); ?>">

                        <input id="colID" class="inh" type="text" placeholder="Colonia" name="colonia" value="<?php echo s($paciente->colonia); ?>">

                        <input id="cpID" class="inh" type="text" placeholder="Código Postal" name="cp" value="<?php echo s($paciente->cp); ?>">
                    </li>
                    <li class="personales">

                        <label for="edoCiv" class="labh"> Estado Civil </label>
                        <select id="edoCiv" class="inh" name="estado">
                            <option <?php echo $paciente->estado === 'Solter@'? 'selected' :''; ?> value="Solter@" > Solter@ </option>
                            <option <?php echo $paciente->estado === 'Casad@'? 'selected' :''; ?> value="Casad@"> Casad@ </option>
                            <option <?php echo $paciente->estado === 'Viud@'? 'selected' :''; ?> value="Viud@"> Viud@ </option>
                        </select>

                        <label for="ocupID" class="labh"> Ocupación </label>
                        <input id="ocupID" class="inh" type="text" name="ocupacion" value="<?php echo s($paciente->ocupacion);?>">

                        <label for="telID" class="labh"> Teléfono: </label>
                        <input id="telID" class="inh" type="tel" placeholder="+52" name="telefono" value="<?php echo s($paciente->telefono)?>">
                    </li>
                    <hr class="ruleh">
                    <h3> Antecedentes </h3>
                    <li class="antecedentes">
                        <label for="patoID" class="labh"> Antecedentes Patológicos Personales </label>
                        <input id="patoID" class="inhxl" placeholder="N/A" type="text" name="patologicos" value="<?php echo s($paciente->patologicos)?>">
                    </li>
                    <li class="antecedentes">
                        <label for="tratID" class="labh"> Tratamiento Médico Actual </label>
                        <input id="tratID" class="inhxl" placeholder="N/A" type="text" name="tratamientoact" value="<?php echo s($paciente->tratamientoact)?>">
                    </li>
                    <li class="antecedentes">
                        <label for="alID" id="alIDlab" class="labh"> Alergias </label>
                        <input id="alID" class="inhxl" placeholder="N/A" type="text" name="alergias" value="<?php echo s($paciente->alergias)?>">
                    </li>
                   

                    <hr class="ruleh">
                    <h3> Antecedentes del Caso </h3>
                    <textarea id="anteCasoID" class="texta" name="antcaso"><?php echo $paciente->antcaso;?> </textarea>


                    <hr class="ruleh">
                    <h3> Riesgos </h3>
                    <li class="riesgos">
                        <ul class="ulf">
                            <li>
                                <label for="cancerID" class="labh"> Cáncer </label>
                                <input type="text" id="cancerID" class="inhlpx" placeholder="N/A" name="cancer" value="<?php echo s($paciente->cancer)?>">
                            </li>
                            <li>
                                <label for="epilID" class="labh"> Epilepsia </label>
                                <input type="text" id="epilID" class="inhlpx" placeholder="N/A" name="epilepsia" value="<?php echo s($paciente->epilepsia)?>">
                            </li>
                            <li>
                                <label for="asmaID" class="labh"> Asma </label>
                                <input type="text" id="asmaID" class="inhlpx" placeholder="N/A" name="asma" value="<?php echo s($paciente->asma)?>">
                            </li>
                            <li>
                                <label for="viID" class="labh"> VIH/SIDA </label>
                                <input type="text" id="viID" class="inhlpx" placeholder="N/A" name="vih" value="<?php echo s($paciente->vih)?>">
                            </li>
                            <li>
                                <label for="fiebID" class="labh"> Fiebre Reumática </label>
                                <input type="text" id="fiebID" class="inhlpx" placeholder="N/A" name="reuma" value="<?php echo s($paciente->reuma)?>">
                            </li>
                            <li>
                                <label for="tubID" class="labh"> Tuberculosis </label>
                                <input type="text" id="tubID" class="inhlpx" placeholder="N/A" name="tuber" value="<?php echo s($paciente->tuber)?>">
                            </li>
                        </ul>
                        <ul class="ul">
                            <li>
                                <label for="diabetesID" class="labh"> Diabetes </label>
                                <input type="text" id="diabetesID" class="inhl" placeholder="N/A" name="diabetes" value="<?php echo s($paciente->diabetes)?>">
                            </li>
                            <li>
                                <label for="cardioID" class="labh"> Problemas Cardiovasculares </label>
                                <input type="text" id="cardioID" class="inhl" placeholder="N/A" name="cardio" value="<?php echo s($paciente->cardio)?>">
                            </li>
                            <li>
                                <label for="hipID" class="labh"> Hipertensión </label>
                                <input type="text" id="hipID" class="inhl" placeholder="N/A" name="hiper" value="<?php echo s($paciente->hiper)?>">
                            </li>
                            <li>
                                <label for="convID" class="labh"> Convulsiones </label>
                                <input type="text" id="convID" class="inhl" placeholder="N/A" name="convulsiones" value="<?php echo s($paciente->convulsiones)?>">
                            </li>
                            <li>
                                <label for="inmunoID" class="labh"> Inmunodeficiencia </label>
                                <input type="text" id="inmunoID" class="inhl" placeholder="N/A" name="inmuno" value="<?php echo s($paciente->inmuno)?>">
                            </li>
                            <li>
                                <label for="otroRiesgoID" class="labh"> Otro </label>
                                <input type="text" id="otroRiesgoID" class="inhl" placeholder="N/A" name="otro" value="<?php echo s($paciente->otro)?>">
                            </li>
                        </ul>


                    </li>

                    <hr class="ruleh">
                    <h3> Interpretación Médica</h3>
                    <ul class="ulf interpretacion">
                        <li>
                            <label class="labh" for="dolorID"> Dolor: </label>
                            <select class="selectxl" id="dolorID" name="dolor" >
                                <option <?php echo $paciente->dolor === 'Ausente' ? 'selected' :''; ?> value="Ausente">Ausente</option>
                                <option <?php echo $paciente->dolor === 'Espontaneo' ? 'selected' :''; ?> value="Espontaneo">Espontáneo</option>
                                <option <?php echo $paciente->dolor === 'Agudo' ? 'selected' :''; ?> value="Agudo">Agudo</option>
                                <option <?php echo $paciente->dolor === 'Persistente' ? 'selected' :''; ?> value="Persistente">Persistente</option>
                                <option <?php echo $paciente->dolor === 'Nocturno' ? 'selected' :''; ?> value="Nocturno">Nocturno</option>
                                <option <?php echo $paciente->dolor === 'Al morder' ? 'selected' :''; ?> value="Al morder">Al morder</option>
                                <option <?php echo $paciente->dolor === 'Provocado al frío' ? 'selected' :''; ?> value="Provocado al frío">Provocado al frío</option>
                                <option <?php echo $paciente->dolor === 'Provocado al calor' ? 'selected' :''; ?> value="Provocado al calor">Provocado al calor</option>
                            </select>
                        </li>
                        <li>
                            <label class="labh" for="estadoID"> Estado de la pieza a tratar: </label>
                            <select class="selectxl" id="estadoID" name="pieza">
                                <option <?php echo $paciente->pieza === 'Aparentemente Sana' ? 'selected' :''; ?> value="Aparentemente Sana">Aparentemente Sana</option>
                                <option <?php echo $paciente->pieza === 'Con Caries' ? 'selected' :''; ?> value="Con Caries">Con Caries</option>
                                <option <?php echo $paciente->pieza === 'Sin Cavidad' ? 'selected' :''; ?> value="Sin Cavidad">Sin Cavidad</option>
                                <option <?php echo $paciente->pieza === 'Con Cavidad' ? 'selected' :''; ?> value="Con Cavidad">Con Cavidad</option>
                                <option <?php echo $paciente->pieza === 'Oclusal' ? 'selected' :''; ?> value="Oclusal">Oclusal</option>
                                <option <?php echo $paciente->pieza === 'Mesial' ? 'selected' :''; ?> value="Mesial">Mesial</option>
                                <option <?php echo $paciente->pieza === 'Distal' ? 'selected' :''; ?> value="Distal">Distal</option>
                                <option <?php echo $paciente->pieza === 'Lingual' ? 'selected' :''; ?> value="Lingual">Lingual</option>
                                <option <?php echo $paciente->pieza === 'Palatina' ? 'selected' :''; ?> value="Palatina">Palatina</option>
                                <option <?php echo $paciente->pieza === 'Cervical' ? 'selected' :''; ?> value="Cervical">Cervical</option>
                                <option <?php echo $paciente->pieza === 'Radicular' ? 'selected' :''; ?> value="Radicular">Radicular</option>
                                <option <?php echo $paciente->pieza === 'Grado 1' ? 'selected' :''; ?> value="Grado 1">Grado 1</option>
                                <option <?php echo $paciente->pieza === 'Grado 2' ? 'selected' :''; ?> value="Grado 2">Grado 2</option>
                                <option <?php echo $paciente->pieza === 'Grado 3' ? 'selected' :''; ?> value="Grado 3">Grado 3</option>
                            </select>
                        </li>
                    </ul>
                    <ul class="ul">
                        <li class="interpretacion">
                            <label class="labh" for="fracID">Fractura:</label>
                            <input type="text" class="inhl" placeholder="N/A" id="fracID" name="fractura" value="<?php echo s($paciente->fractura)?>">
                        </li>
                        <li class="interpretacion">
                            <label class="labh" for="restID">Con Restauración:</label>
                            <input type="text" class="inhl" placeholder="N/A" id="restID" name="restau" value="<?php echo s($paciente->restau)?>">
                        </li>
                        <li class="interpretacion">
                            <label class="labh" for="camColorID">Cambio de Coloración:</label>
                            <input type="text" class="inhl" placeholder="N/A" id="camColorID" name="coloracion" value="<?php echo s($paciente->coloracion)?>">
                        </li>
                    </ul>
                    <hr class="rule">

                    <hr class="ruleh">

                    <li class="interpretacion">
                        <label class="enlabh" for="cliniID"> Interpretación Clínica: </label>
                        <input class="inhxl" type="text" id="cliniID" name="clinica" value="<?php echo s($paciente->clinica)?>">
                    </li>
                    <li class="interpretacion">
                        <label class="enlabh" for="radioID"> Interpretación Radiográfica: </label>
                        <input class="inhxl" type="text" id="radioID" name="radio" value="<?php echo s($paciente->radio)?>">
                    </li>
                    <li class="interpretacion">
                        <label class="enlabh" for="diagID"> Diagnóstico Clínico: </label>
                        <input class="inhxl" type="text" id="diagID" name="diag" value="<?php echo s($paciente->diag)?>">
                    </li>
                    <li class="interpretacion">
                        <label class="enlabh" for="trataID"> Tratamiento: </label>
                        <input class="inhxl" type="text" id="trataID" name="trat" value="<?php echo s($paciente->trat)?>">
                    </li>
                    <li class="interpretacion">
                        <label class="enlabh" for="pronoID"> Pronóstico: </label>
                        <input class="inhxl" type="text" id="pronoID" name="pronostico" value="<?php echo s($paciente->pronostico)?>">
                    </li>
                    <li class="interpretacion">
                        <label class="enlabh" for="diagnosticoPulparID"> Diagnóstico Pulpar: </label>
                        <select class="selectxl" id="diagnosticoPulparID" name="diagnosticoPulpar">
                            <option <?php echo $paciente->diagnosticoPulpar === 'Pulpa Normal' ? 'selected' :''; ?> value="Pulpa Normal">Pulpa Normal</option>
                            <option <?php echo $paciente->diagnosticoPulpar === 'Pulps Reversible' ? 'selected' :''; ?> value="Pulpa Reversible">Pulpa Reversible</option>
                            <option <?php echo $paciente->diagnosticoPulpar === 'Pulpa Irreversible Asintomática' ? 'selected' :''; ?> value="Pulpa Irreversible Asintomática">Pulpa Irreversible Asintomática</option>
                            <option <?php echo $paciente->diagnosticoPulpar === 'Pulpa Irreversible Sintomática' ? 'selected' :''; ?> value="Pulpa Irreversible Sintomática">Pulpa Irreversible Sintomática</option>
                            <option <?php echo $paciente->diagnosticoPulpar === 'Necrosis Pulpar' ? 'selected' :''; ?>  value="Necrosis Pulpar">Necrosis Pulpar</option>
                            <option <?php echo $paciente->diagnosticoPulpar === 'Tratado Previamente' ? 'selected' :''; ?>  value="Tratado Previamente">Tratado Previamente</option>
                            <option <?php echo $paciente->diagnosticoPulpar === 'Iniciado Previamente' ? 'selected' :''; ?>  value="Iniciado Previamente">Iniciado Previamente</option>
                        </select>
                    </li>

                    <li class="interpretacion">
                        <label for="diagnosticoPeriapicalID" class="enlabh">Diagnóstico Periapical:</label>
                        <select class="selectxl" id="diagnosticoPeriapicalID" name="diagnosticoPeriapical">
                            <option <?php echo $paciente->diagnosticoPeriapical === 'Tejido Apical Sano' ? 'selected' :''; ?> value="Tejido Apical Sano">Tejido Apical Sano</option>
                            <option <?php echo $paciente->diagnosticoPeriapical === 'Periodontitis Apical Sintomática' ? 'selected' :''; ?> value="Periodontitis Apical Sintomática">Periodontitis Apical Sintomática</option>
                            <option <?php echo $paciente->diagnosticoPeriapical === 'Periodontitis Apical Asintomática' ? 'selected' :''; ?> value="Periodontitis Apical Asintomática">Periodontitis Apical Asintomática</option>
                            <option <?php echo $paciente->diagnosticoPeriapical === 'Absceso Apical Agudo' ? 'selected' :''; ?> value="Absceso Apical Agudo">Absceso Apical Agudo</option>
                            <option <?php echo $paciente->diagnosticoPeriapical === 'Absceso Apical Crónico' ? 'selected' :''; ?> value="Absceso Apical Crónico">Absceso Apical Crónico</option>
                            <option <?php echo $paciente->diagnosticoPeriapical === 'Osteitis Condensante' ? 'selected' :''; ?> value="Osteitis Condensante">Osteitis Condensante</option>
                        </select>
                    </li>
                    <hr class="ruleh">

                    <h3>Observaciones</h3>
                    <textarea class="texta" name="observaciones" ><?php echo s($paciente->observaciones)?></textarea>
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
                                    <input type="text" class="inpInv" id="conductoID1" name="conductoID1" value="<?php echo s($paciente->conductoID1)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoMMID1" name="conductoMMID1" value="<?php echo s($paciente->conductoMMID1)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="referenciaID1" name="referenciaID1" value="<?php echo s($paciente->referenciaID1)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="lMaestraID1" name="lMaestraID1" value="<?php echo s($paciente->lMaestraID1)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="cMaestroID1" name="cMaestroID1" value="<?php echo s($paciente->cMaestroID1)?>">
                                </td>
                            </tr>
                            <tr class="tr">
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoID2" name="conductoID2" value="<?php echo s($paciente->conductoID2)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoMMID2" name="conductoMMID2" value="<?php echo s($paciente->conductoMMID2)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="referenciaID2" name="referenciaID2" value="<?php echo s($paciente->referenciaID2)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="lMaestraID2" name="lMaestraID2" value="<?php echo s($paciente->lMaestraID2)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="cMaestroID2" name="cMaestroID2" value="<?php echo s($paciente->cMaestroID2)?>">
                                </td>
                            </tr>
                            <tr class="tr">
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoID3" name="conductoID3" value="<?php echo s($paciente->conductoID3)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoMMID3" name="conductoMMID3" value="<?php echo s($paciente->conductoMMID3)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="referenciaID3" name="referenciaID3" value="<?php echo s($paciente->referenciaID3)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="lMaestraID3" name="lMaestraID3" value="<?php echo s($paciente->lMaestraID3)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="cMaestroID3" name ="cMaestroID3" value="<?php echo s($paciente->cMaestroID3)?>">
                                </td>
                            </tr>
                            <tr class="tr">
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoID4" name="conductoID4" value="<?php echo s($paciente->conductoID4)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoMMID4" name="conductoMMID4" value="<?php echo s($paciente->conductoMMID4)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="referenciaID4" name="referenciaID4" value="<?php echo s($paciente->referenciaID4)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="lMaestraID4" name="lMaestraID4" value="<?php echo s($paciente->lMaestraID4)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="cMaestroID4" name="cMaestroID4" value="<?php echo s($paciente->cMaestroID4)?>">
                                </td>
                            </tr>
                            <tr class="tr">
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoID5" name="conductoID5" value="<?php echo s($paciente->conductoID5)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="conductoMMID5" name="conductoMMID5" value="<?php echo s($paciente->conductoMMID5)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="referenciaID5" name="referenciaID5" value="<?php echo s($paciente->referenciaID5)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="lMaestraID5" name="lMaestraID5" value="<?php echo s($paciente->lMaestraID5)?>">
                                </td>
                                <td class="td">
                                    <input type="text" class="inpInv" id="cMaestroID5" name="cMaestroID5" value="<?php echo s($paciente->cMaestroID5)?>">
                                </td>
                            </tr>

                        </table>
                    </li>
                    <hr class="ruleh">
                    <hr class="rule">

                    <li class="tecnica">
                        <label class="enlabh" for="tecInstID"> Técnica de Instrumentación: </label>
                        <input class="inhxl" type="text" id="tecInstID" name="instrum" value="<?php echo s($paciente->instrum)?>">
                    </li>
                    <li class="tecnica">
                        <label for="tecObtID" class="enlabh">Técnica de Obturación:</label>
                        <input class="inhxl" type="text" id="tecObtID" name="obtur" value="<?php echo s($paciente->obtur)?>">
                    </li>
                    <li class="tecnica">
                        <label for="cemObtID" class="enlabh">Cemento de Obturación</label>
                        <input id="cemObtID" class="inhxl" type="text" name="cemento"value="<?php echo s($paciente->cemento)?>">
                    </li>
                    <li class="tecnica">
                        <label for="medIntrID" class="enlabh">Medicación Intraconducto:</label>
                        <input id="medIntrID" class="inhxl" type="text" name="intraconducto"value="<?php echo s($paciente->intraconducto)?>">
                    </li>
                    <li class="tecnica">
                        <label for="medSistID" class="enlabh">Medicación Sistémica:</label>
                        <input id="medSistID" class="inhxl" type="text" name="sistematica" value="<?php echo s($paciente->sistematica)?>">
                    </li>
                    <li class="tecnica">
                        <label for="obtProvID" class="enlabh">Obturación Provisional:</label>
                        <input class="inhxl" id="obtProvID" type="text" name="prov" value="<?php echo s($paciente->prov)?>">
                    </li>
                    <li class="tecnica">
                        <label for="procAdID" class="enlabh">Procedimientos Adicionales:</label>
                        <input class="inhxl" type="text" id="procAdID" name="adicionales" value="<?php echo s($paciente->adicionales)?>">
                    </li>
                    <hr class="rule">

                    <hr class="ruleh">
                    <h3>Observaciones Finales</h3>
                    <textarea class="texta" name="finales" ><?php echo s($paciente->finales)?></textarea>

                    <hr class="ruleh">
                    
                </ul>
        </div>
        <div class="btn-regresar-container-h">
            <a class="btn-regresar" href="buscar"> < Buscar </a>
        </div>
        
        <div class="presupuesto">
            <a class="btnh" type="submit" href="presupuestoact?folio=<?php echo $paciente->folio?>"> Presupuesto </a>
            <button class="btnh" type="submit"> Actualizar </button>
        </div>
    </div>
  
    </form>
    <footer class="foot">
        <p> CD. Erendy Anahí Hernández Pérez</p>
        <p> Céd. Prof. 8126068</p>
    </footer>
</body>