<?php include "header.php";
include "database.php";

$read = "SELECT * FROM sge_alunos";
$consulta_db=mysqli_query($conexao, $read);

while ($dados_db = mysqli_fetch_array($consulta_db)){

    echo $dados_db['nome_aluno']."<br>";
    echo $dados_db['email_aluno']."<br>";
    echo $dados_db['telefone_aluno']."<br><br>";
}
   

