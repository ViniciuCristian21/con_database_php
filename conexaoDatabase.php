<?php
    //parametros paar conectar com o banco
    $host = "localhost";
    $user = "admin";
    $password = "admin";
    $db = "conectiontest";

    // Fazer a conexão com o banco
    $conexao = mysqli_connect($host, $user, $password, $db);

    //verificar conexao com o  banco de dados se não houve falhas

    if(mysqli_connect_errno()){
        printf("Falha na conexão com o banco de dados: %s\n", mysqli_connect_error());
        exit();
    }

?>