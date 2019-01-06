<?php

namespace Controller;

require_once(__DIR__."/../Model/Lista.php");

use Model;


class ListaController{

    static function index($args){
        require_once(__DIR__."/../view/lista.php");
    }
    static function organizar($args){
        header('Content-Type: application/json');

        $novaLista = Model\Lista::organizar($args['itens'] ?? []);

        print json_encode($novaLista);
    }

}