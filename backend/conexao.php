<?php
$servername = "localhost";
$username = "R_0_o_T";
$password = "senha___######";
$database = "MY_bd_#####";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
