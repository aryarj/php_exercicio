<?php
$servername='localhost';
$database='cis_aula';
$username='root';
$password='';
$conn=new mysqli($servername, $username, $password, $database);
if(!$conn){
    die('conexão falhou:'.mysqli_connect_error());
}
else{
    echo 'conectado ao Banco!';
}
?>