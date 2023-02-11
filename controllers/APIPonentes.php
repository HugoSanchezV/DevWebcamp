<?php

namespace Controllers;

use Model\EventoHorario;
use Model\Ponente;

class APIPonentes {
    public static function index(){
        $ponentes = Ponente::all();
        echo json_encode($ponentes);
    }
}