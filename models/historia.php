<?php

namespace Model;

class Historia extends ActiveRecord{
    protected static $tabla = 'pacientes';
    protected static $columnasDB = ['id',
    'remitidor',
    'fecha',
    'nombre',
    'apellido',
    'sapellido',
    'edad',
    'genero',
    'calle',
    'colonia',
    'cp', 
    'estado',
    'ocupacion',
    'telefono',
    'patologicos',
    'tratamientoact',
    'alergias',
    'antcaso',
    'cancer',
    'diabetes',
    'epilepsia',
    'cardio',
    'asma',
    'hiper',
    'vih',
    'convulsiones',
    'reuma',
    'inmuno',
    'tuber',
    'otro',
    'dolor',
    'fractura',
    'pieza',
    'restau',
    'coloracion',
    'clinica',
    'radio',
    'diag',
    'trat',
    'pronostico',
    'observaciones',
    'conductoID1',
    'conductoID2',
    'conductoID3',
    'conductoID4',
    'conductoID5',
    'conductoMMID1',
    'conductoMMID2',
    'conductoMMID3',
    'conductoMMID4',
    'conductoMMID5',
    'referenciaID1',
    'referenciaID2',
    'referenciaID3',
    'referenciaID4',
    'referenciaID5',
    'lMaestraID1',
    'lMaestraID2',
    'lMaestraID3',
    'lMaestraID4',
    'lMaestraID5',
    'cMaestroID1',
    'cMaestroID2',
    'cMaestroID3',
    'cMaestroID4',
    'cMaestroID5',
    'instrum',
    'obtur',
    'cemento',
    'intraconducto',
    'sistematica',
    'prov',
    'adicionales',
    'finales',
    'folio',
    'total',
    'fechatotal',
    'diagnosticoPulpar',
    'diagnosticoPeriapical'];

   public $id;
   public $remitidor;
   public $fecha;
   public $nombre;
   public $apellido;
   public $sapellido;
   public $edad;
   public $genero;
   public $calle;
   public $colonia;
   public $cp;
   public $estado;
   public $ocupacion;
   public $telefono;
   public $patologicos;
   public $tratamientoact;
   public $alergias;
   public $antcaso;
   public $cancer;
   public $diabetes;
   public $epilepsia;
   public $cardio;
   public $asma;
   public $hiper;
   public $vih;
   public $convulsiones;
   public $reuma;
   public $inmuno;
   public $tuber;
   public $otro;
   public $dolor;
   public $fractura;
   public $pieza;
   public $restau;
   public $coloracion;
   public $clinica;
   public $radio;
   public $diag;
   public $trat;
   public $pronostico;
   public $observaciones;
   public $conductoID1;
   public $conductoID2;
   public $conductoID3;
   public $conductoID4;
   public $conductoID5;
   public $conductoMMID1;
   public $conductoMMID2;
   public $conductoMMID3;
   public $conductoMMID4;
   public $conductoMMID5;
   public $referenciaID1;
   public $referenciaID2;
   public $referenciaID3;
   public $referenciaID4;
   public $referenciaID5;
   public $lMaestraID1;
   public $lMaestraID2;
   public $lMaestraID3;
   public $lMaestraID4;
   public $lMaestraID5;
   public $cMaestroID1;
   public $cMaestroID2;
   public $cMaestroID3;
   public $cMaestroID4;
   public $cMaestroID5;
   public $instrum;
   public $obtur;
   public $cemento;
   public $intraconducto;
   public $sistematica;
   public $prov;
   public $adicionales;
   public $finales;
   public $folio;
   public $total;
   public $fechatotal;
   public $diagnosticoPulpar;
   public $diagnosticoPeriapical;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->remitidor = $args['remitidor'] ?? '';
        $this->fecha = $args['fecha'] ?? '0000/00/00';
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->sapellido = $args['sapellido'] ?? '';
        $this->edad = $args['edad'] ?? '0';
        $this->genero = $args['genero'] ?? '';
        $this->calle = $args['calle'] ?? '';
        $this->colonia = $args['colonia'] ?? '';
        $this->cp = $args['cp'] ?? '0';
        $this->estado = $args['estado'] ?? '';
        $this->ocupacion = $args['ocupacion'] ?? '';
        $this->telefono = $args['telefono'] ?? '0';
        $this->ocupacion = $args['ocupacion'] ?? '';
        $this->patologicos = $args['patologicos'] ?? '';
        $this->tratamientoact = $args['tratamientoact'] ?? '';
        $this->alergias = $args['alergias'] ?? '';
        $this->antcaso = $args['antcaso'] ?? '';
        $this->cancer = $args['cancer'] ?? '';
        $this->diabetes = $args['diabetes'] ?? '';
        $this->epilepsia = $args['epilepsia'] ?? '';
        $this->cardio = $args['cardio'] ?? '';
        $this->asma = $args['asma'] ?? '';
        $this->hiper = $args['hiper'] ?? '';
        $this->vih = $args['vih'] ?? '';
        $this->convulsiones = $args['convulsiones'] ?? '';
        $this->reuma = $args['reuma'] ?? '';
        $this->inmuno = $args['inmuno'] ?? '';
        $this->tuber = $args['tuber'] ?? '';
        $this->otro = $args['otro'] ?? '';
        $this->dolor = $args['dolor'] ?? '';
        $this->fractura = $args['fractura'] ?? '';
        $this->pieza = $args['pieza'] ?? '';
        $this->restau = $args['restau'] ?? '';
        $this->coloracion = $args['coloracion'] ?? '';
        $this->clinica = $args['clinica'] ?? '';
        $this->radio = $args['radio'] ?? '';
        $this->diag = $args['diag'] ?? '';
        $this->trat = $args['trat'] ?? '';
        $this->pronostico = $args['pronostico'] ?? '';
        $this->observaciones = $args['observaciones'] ?? '';
        $this->conductoID1 = $args['conductoID1'] ?? '';
        $this->conductoID2 = $args['conductoID2'] ?? '';
        $this->conductoID3 = $args['conductoID3'] ?? '';
        $this->conductoID4 = $args['conductoID4'] ?? '';
        $this->conductoID5 = $args['conductoID5'] ?? '';
        $this->conductoMMID1 = $args['conductoMMID1'] ?? '';
        $this->conductoMMID2 = $args['conductoMMID2'] ?? '';
        $this->conductoMMID3 = $args['conductoMMID3'] ?? '';
        $this->conductoMMID4 = $args['conductoMMID4'] ?? '';
        $this->conductoMMID5 = $args['conductoMMID5'] ?? '';
        $this->referenciaID1 = $args['referenciaID1'] ?? '';
        $this->referenciaID2 = $args['referenciaID2'] ?? '';
        $this->referenciaID3 = $args['referenciaID3'] ?? '';
        $this->referenciaID4 = $args['referenciaID4'] ?? '';
        $this->referenciaID5 = $args['referenciaID5'] ?? '';
        $this->lMaestraID1 = $args['lMaestraID1'] ?? '';
        $this->lMaestraID2 = $args['lMaestraID2'] ?? '';
        $this->lMaestraID3 = $args['lMaestraID3'] ?? '';
        $this->lMaestraID4 = $args['lMaestraID4'] ?? '';
        $this->lMaestraID5 = $args['lMaestraID5'] ?? '';
        $this->cMaestroID1 = $args['cMaestroID1'] ?? '';
        $this->cMaestroID2 = $args['cMaestroID2'] ?? '';
        $this->cMaestroID3 = $args['cMaestroID3'] ?? '';
        $this->cMaestroID4 = $args['cMaestroID4'] ?? '';
        $this->cMaestroID5 = $args['cMaestroID5'] ?? '';
        $this->instrum = $args['instrum'] ?? '';
        $this->obtur = $args['obtur'] ?? '';
        $this->cemento = $args['cemento'] ?? '';
        $this->intraconducto = $args['intraconducto'] ?? '';
        $this->sistematica = $args['sistematica'] ?? '';
        $this->prov = $args['prov'] ?? '';
        $this->adicionales = $args['adicionales'] ?? '';
        $this->finales = $args['finales'] ?? '';
        $this->folio = $args['folio'] ?? '0';
        $this->total = $args['total'] ?? '';
        $this->fechatotal = $args['fechatotal'] ?? '';
        $this->diagnosticoPulpar = $args['diagnosticoPulpar'] ?? '';
        $this->fechatotal = $args['diagnosticoPeriapical'] ?? '';
    
        

    }



}
