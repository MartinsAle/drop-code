<?php 
require_once('control/CrtContato.php');
$crt_contato = new CrtContato();
if(isset($_POST['sendForm'])){
    $retorno = $crt_contato->cadastrarContato();
}