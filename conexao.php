
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "prova2";
$port = 3307;
$con = mysqli_connect($hostname, $username, $password, $database, $port);


if(mysqli_connect_errno()){
    echo "Erro de Conexão: %s\n",
        mysqli_connect_error();
        exit();
}

?>