<?php

namespace Core;

class Rotas{

    private $urlAtualVetor;
    private $args;

    function __construct($urlAtual,$args){
        $this->urlAtualVetor = explode("/",$urlAtual ?? "");
        $this->args = $args ;
    }

    function direcionar($url,$controller,$controllerFile){

        if(isset($url) && isset($controller)){
            $urlVetor = explode("/",$url);
            $quantidadeVerificada = 0;
            for($i = 0; $i < count($urlVetor); $i++){
                if(in_array($urlVetor[$i],$this->urlAtualVetor)){
                    $quantidadeVerificada++;

                    if($quantidadeVerificada == count($urlVetor)){
                        $metodo = "Controller\\".$controller."";
                        require_once(__DIR__."/../Controller/".$controllerFile); 
                        call_user_func($metodo,$this->args);
                        return true;
                    }
                }
            }
        }
        return false;
    }

}