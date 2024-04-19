<?php include 'database.php'

$nome = $_POST['nome_aluno']
$email = $_POST['email_aluno']
$tel = $_POST['telefone_aluno']

//Construir uma string para cadastrar as informaçôes
$sql = "INSERT INTO sge_alunos( nome_aluno, email_aluno, telefone_aluno)
VALUES ('$nome','$email','$tel')"

//Função para cadastrar no banco de dados
if(mysqli_query($conexao,$sql)){
    //Função para redirecionar para a página indicada
    header("Location: listar_alunos.php");
}