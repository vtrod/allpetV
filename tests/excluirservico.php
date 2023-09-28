<?php

use tests\Entity\Servico;

require __DIR__.'\..\vendor\autoload.php';




//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: conservico.php?status=error');
    exit;
}

//CONSULTA O SERVICO
$obServico = Servico::getServicos($_GET['id']);



//VALIDAÇÃO DA VAGA
if(!$obServico instanceof Servico){
    header('location: conservico.php?status=error');
    exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])){

    $obServico->excluir();

    header('location: conservico.php?status=success');
    exit;
}


?>
