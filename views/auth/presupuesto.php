
<body class="back">
    <div class="hed">
        <img class="direct-imgfloat" src="build/img/invoice.png">
        <h1 class="tith">Presupuesto</h1>
    </div>
    <div class="main-container">
    <div class="hed">
    <?php foreach($resultado as $res):?>
        <h3 class="h3-direct"> <?php echo $res->nombre?> <?php echo $res->apellido?> <?php echo $res->sapellido?></h3>
    <?php endforeach;  ?>
    </div>
    <form action="/presupuesto?folio=<?php echo $res->folio ?>" method="POST">
        <form>
            <ul class="ul">
                <li>
                    <table class="table">
                        <tr class="tr">
                            <th class="th"></th>
                            <th class="th">Monto</th>
                            <th class="th">Fecha</th>
                        </tr>
                        <tr class="tr">
                            <td class="td">
                                <p>Costo total</p>
                            </td>
                            <td class="td">
                                <input type="number" class="inpInv"  name="costo">
                            </td>
                            <td class="td">
                                
                            </td>
                        </tr>
                        <tr class="tr">
                            <td class="td">
                                <p>Paciente Abonó</p>
                            </td>
                            <td class="td">
                                <input type="number" class="inpInv"  name="abono">
                            </td>
                            <td class="td">
                                
                            </td>
                        </tr>
                        <tr class="tr">
                            <td class="td">
                                <p>Restan</p>
                            </td>
                            <?php foreach($resultado as $res):?>
                            <td class="td">
                                <input type="number" min="0.00" max="10000.00" step="0.01" class="inpInv" name="total">
                            </td>
                            <td class="td">
                                <input type="Date" class="inpInv" name="fechatotal" required>
                            </td>
                            <input type="hidden" name = "id" value="<?php echo $res->id?>">
                            <input type="hidden" name = "nombre" value="<?php echo $res->nombre?>">
                            <input type="hidden" name = "apellido" value="<?php echo $res->apellido?>">
                            <input type="hidden" name = "sapellido" value="<?php echo $res->sapellido?>">
                            <input type="hidden" name = "remitidor" value="<?php echo $res->remitidor?>">
                            <input type="hidden" name = "fecha" value="<?php echo $res->fecha?>">
                            <input type="hidden" name = "edad" value="<?php echo $res->edad?>">
                            <input type="hidden" name = "genero" value="<?php echo $res->genero?>">
                            <input type="hidden" name = "calle" value="<?php echo $res->calle?>">
                            <input type="hidden" name = "colonia" value="<?php echo $res->colonia?>">
                            <input type="hidden" name = "cp" value="<?php echo $res->cp?>">
                            <input type="hidden" name = "estado" value="<?php echo $res->estado?>">
                            <input type="hidden" name = "ocupacion" value="<?php echo $res->ocupacion?>">
                            <input type="hidden" name = "telefono" value="<?php echo $res->telefono?>">
                            <input type="hidden" name = "patologicos" value="<?php echo $res->patologicos?>">
                            <input type="hidden" name = "tratamientoact" value="<?php echo $res->tratamientoact?>">
                            <input type="hidden" name = "alergias" value="<?php echo $res->alergias?>">
                            <input type="hidden" name = "antcaso" value="<?php echo $res->antcaso?>">
                            <input type="hidden" name = "cancer" value="<?php echo $res->cancer?>">
                            <input type="hidden" name = "diabetes" value="<?php echo $res->diabetes?>">
                            <input type="hidden" name = "epilepsia" value="<?php echo $res->epilepsia?>">
                            <input type="hidden" name = "cardio" value="<?php echo $res->cardio?>">
                            <input type="hidden" name = "asma" value="<?php echo $res->asma?>">
                            <input type="hidden" name = "hiper" value="<?php echo $res->hiper?>">
                            <input type="hidden" name = "vih" value="<?php echo $res->vih?>">
                            <input type="hidden" name = "convulsiones" value="<?php echo $res->convulsiones?>">
                            <input type="hidden" name = "reuma" value="<?php echo $res->reuma?>">
                            <input type="hidden" name = "inmuno" value="<?php echo $res->inmuno?>">
                            <input type="hidden" name = "tuber" value="<?php echo $res->tuber?>">
                            <input type="hidden" name = "otro" value="<?php echo $res->otro?>">
                            <input type="hidden" name = "dolor" value="<?php echo $res->dolor?>">
                            <input type="hidden" name = "fractura" value="<?php echo $res->fractura?>">
                            <input type="hidden" name = "pieza" value="<?php echo $res->pieza?>">
                            <input type="hidden" name = "restau" value="<?php echo $res->restau?>">
                            <input type="hidden" name = "coloracion" value="<?php echo $res->coloracion?>">
                            <input type="hidden" name = "clinica" value="<?php echo $res->clinica?>">
                            <input type="hidden" name = "radio" value="<?php echo $res->radio?>">
                            <input type="hidden" name = "diag" value="<?php echo $res->diag?>">
                            <input type="hidden" name = "trat" value="<?php echo $res->trat?>">
                            <input type="hidden" name = "pronostico" value="<?php echo $res->pronostico?>">
                            <input type="hidden" name = "observaciones" value="<?php echo $res->observaciones?>">
                            <input type="hidden" name = "conductoID1" value="<?php echo $res->conductoID1?>">
                            <input type="hidden" name = "conductoID2" value="<?php echo $res->conductoID2?>">
                            <input type="hidden" name = "conductoID3" value="<?php echo $res->conductoID3?>">
                            <input type="hidden" name = "conductoID4" value="<?php echo $res->conductoID4?>">
                            <input type="hidden" name = "conductoID5" value="<?php echo $res->conductoID5?>">
                            <input type="hidden" name = "referenciaID1" value="<?php echo $res->referenciaID1?>">
                            <input type="hidden" name = "referenciaID2" value="<?php echo $res->referenciaID2?>">
                            <input type="hidden" name = "referenciaID3" value="<?php echo $res->referenciaID3?>">
                            <input type="hidden" name = "referenciaID4" value="<?php echo $res->referenciaID4?>">
                            <input type="hidden" name = "referenciaID5" value="<?php echo $res->referenciaID5?>">
                            <input type="hidden" name = "lMaestraID1" value="<?php echo $res->lMaestraID1?>">
                            <input type="hidden" name = "lMaestraID2" value="<?php echo $res->lMaestraID2?>">
                            <input type="hidden" name = "lMaestraID3" value="<?php echo $res->lMaestraID3?>">
                            <input type="hidden" name = "lMaestraID4" value="<?php echo $res->lMaestraID4?>">
                            <input type="hidden" name = "lMaestraID5" value="<?php echo $res->lMaestraID5?>">
                            <input type="hidden" name = "cMaestroID1" value="<?php echo $res->cMaestroID1?>">
                            <input type="hidden" name = "cMaestroID2" value="<?php echo $res->cMaestroID2?>">
                            <input type="hidden" name = "cMaestroID3" value="<?php echo $res->cMaestroID3?>">
                            <input type="hidden" name = "cMaestroID4" value="<?php echo $res->cMaestroID4?>">
                            <input type="hidden" name = "cMaestroID5" value="<?php echo $res->cMaestroID5?>">
                            <input type="hidden" name = "instrum" value="<?php echo $res->instrum?>">
                            <input type="hidden" name = "obtur" value="<?php echo $res->obtur?>">
                            <input type="hidden" name = "cemento" value="<?php echo $res->cemento?>">
                            <input type="hidden" name = "intraconducto" value="<?php echo $res->intraconducto?>">
                            <input type="hidden" name = "sistematica" value="<?php echo $res->sistematica?>">
                            <input type="hidden" name = "prov" value="<?php echo $res->prov?>">
                            <input type="hidden" name = "adicionales" value="<?php echo $res->adicionales?>">
                            <input type="hidden" name = "finales" value="<?php echo $res->finales?>">
                            <input type="hidden" name = "folio" value="<?php echo $res->folio?>">
                            
                            <?php endforeach;  ?>
                        </tr>
                       

                    </table>
                </li>
            </ul>
            <div class="btn-regresar-container">
            <a class="btn-regresar" href="historia_hecha?id=<?php echo $res->id?>"> < Historia Clínica </a>
        </div>
        <div class="presupuesto">
        <a class="btnh" type="submit" href="consentimiento"> Carta de Consentimiento </a>
    <button class="btnh" type="submit" > Terminar </button>
   
    </div>
        </form>
        
        
    </div>
    </form>
    <footer class="foot">
    <p> CD. Erendy Anahí Hernández Pérez</p>
    <p> Céd. Prof. 8126068</p>
    </footer>