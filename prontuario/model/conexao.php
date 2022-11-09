<?php
//error_reporting(0);

$usuario = "root";
$senha = "root";
$bd="bdprontuario";
$servidor="localhost";

if($conn = mysqli_connect($servidor, $usuario, $senha, $bd)){
    echo("UHULLLL Conectou");
}else{
    echo("Deu Ruim = ".mysqli_connect_errno($conn) . " -- " .mysqli_connect_error($conn));
}

?>