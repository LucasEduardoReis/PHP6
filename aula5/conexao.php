<?php 
$banco      = "bd_aula5";
$user       = "root";
$passwd     = "";
$hostname   = "localhost";

//Conecta ao banco de dado MySQL
$mysqli = new mysqli($hostname, $user, $passwd, $banco);
//Caso algo tenha dado errado, exibe uma menagem de erro
if(mysqli_connect_errno()) trigger_error(mysqli_connect_errno());

?>