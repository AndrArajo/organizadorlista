<?php

$rota->direcionar("lista","ListaController::index","ListaController.php");
$rota->direcionar("","ListaController::index","ListaController.php");
$rota->direcionar("organizar","ListaController::organizar","ListaController.php");