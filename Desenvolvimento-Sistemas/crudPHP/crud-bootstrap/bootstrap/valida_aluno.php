<?php

include 'database.php';

//iniciar seção
session_start();

//Recupérar as informações enviadas no fprmulario
$login = $_POST['login_sge'];
$password = $_POST['password_sge'];

if(empty($login)){
    $_SESSION['mensagem'] = 'Preehca o cmapo logrin';
    header('Location: form_login_sge.php');
}
elseif(empty($password)){
    $_SESSION['mensagem'] = 'pRENencha o campo password';
    header('Location: form_login_sge.php');     
}
else{
    $slq_login= "SELECT * FROM sge_login_alunos WHERE login_sge = '$login'
    AND password_sge = '$password'";

}
$consulta_login = mysqli_query($conexao, $slq_login);
$dado_login = mysqli_fetch_array($consulta_login);


if($dado_login['login_sge'] == $login && $dado_login['password_sge']==$password){
    $usuario = array("login" => $dado_login['login_sge'],
    "senha" => $dado_login['password_sge'],
    "perfil" => $dado_login['profile_sge']);

    $_SESSION['usuario'] = $usuario;

    header("Location: painel_sge.php");
}
else{
    $_SESSION ['mensagem'] = 'login ou senha inválidos';
    header("Location: form_login_sge.php");
}

?>