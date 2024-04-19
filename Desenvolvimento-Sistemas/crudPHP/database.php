<?php
    //variaveis para conectar ao banco
    $server_host = "localhost";
    $server_user = "root";
    $server_password = "";
    $database_name= "sge";

    //Delcaração de constantes para conectar ao banco de dados
    define('SERVER_HOST','localhost');
    define('SERVER_USER','root');
    define('SERVER_PASSWORD','');
    define('DATABASE_NAME','sge');

    //Função para conectar ao banco de dados(direta sem tratamento de erros)
    //A conexão ao banco de dados inicialmente nao utiliza orientação a objetos
    //Função utilizando as variaveis
    $conexao = mysqli_connect($server_host,$server_user,$server_password,$database_name)
    //Função utilizando as cosntantes 
    $conexao = mysqli_connect(SERVER_HOST,SERVER_USER,SERVER_PASSWORD,DATABASE_NAME)
    //Função sem o uso de variaveis ou constantes
    
