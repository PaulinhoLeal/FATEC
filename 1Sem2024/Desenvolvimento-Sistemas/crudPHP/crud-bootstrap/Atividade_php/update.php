<?php include './database.php';

$id = $_GET['id_aluno'];
$nome = $_GET['nome_aluno'];
$email = $_GET['email_aluno'];
$tel = $_GET['telefone_aluno'];  
$update = "UPDATE sge_alunos SET nome_aluno = '$nome', email_aluno = '$email', telefone_aluno = '$tel' WHERE sge_alunos.id_aluno = $id;";

if(mysqli_query($conexao,$update)){
    header("Location: index.php");
}