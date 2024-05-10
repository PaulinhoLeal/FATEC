<?php include 'database.php';

$id = $_GET['id_aluno'];  

$delete = "DELETE FROM sge_alunos WHERE sge_alunos.id_aluno = $id";

if(mysqli_query($conexao,$delete)){
    header("Location: index.php");
}