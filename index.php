<?php
    require_once(__DIR__."/Core/Rotas.php");
    
    $rota = new \Core\Rotas($_REQUEST['url'] ?? "/",$_REQUEST);

    require_once(__DIR__."/Rotas/web.php");
 


 