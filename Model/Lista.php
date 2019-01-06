<?php
namespace Model;

class Lista{

    static function organizar($itens){
        usort($itens,function($a,$b){
            return (strcasecmp($a,$b))*-1;
        });
        return $itens;
    }

}