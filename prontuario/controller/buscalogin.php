<?php
include_once("../model/conexao.php");

$emaile = $_POST["emaile"];
$senhae = $_POST["senhae"];

$vlogin = " SELECT * FROM login WHERE email = '$emaile' AND senha = '$senhae' ";

//echo("Login: $vlogin <br><br>");

$rlogin = mysqli_query($conn, $vlogin);

//print_r($rlogin);

$quantidade = $rlogin->num_rows;

if($quantidade == 1)
{
    // echo("<br>Bem-Vindo");
    header('Location: ../home.html');
}else{
    // echo("Canalha, tentando invadir!");
    header('Location: ../index.html?erro=DadosErrados');
}

?>