<?php include 'header.php'?>

<form action="cadastro.php" method="post">
    <label for="nome_aluno">Nome do aluno</label>
    <input type="text" name ="nome_aluno" id="nome_aluno">
    <label for="email_aluno">Email do aluno</label>
    <input type="text" name="email_aluno" id="email_aluno">
    <label for="telefone_aluno">Telefone do aluno</label>
    <input type="text" name="telefone_aluno" id="telefone_aluno">
    <input type="submit" value="Cadastrar aluno">
</form>

<form action="delete.php" method="delete">
    <label for="id_aluno">ID</label>
    <input type="text" name="id_aluno" id="id_aluno"> 
    <input type="submit" value="Excluir aluno">
</form>

<form action="update.php" method="update">
    <label for="id_aluno">ID</label>
    <input type="text" name="id_aluno" id="id_aluno" >
    <label for="nome_aluno">Nome do aluno</label>
    <input type="text" name ="nome_aluno" id="nome_aluno">
    <label for="email_aluno">Email do aluno</label>
    <input type="text" name="email_aluno" id="email_aluno">
    <label for="telefone_aluno">Telefone do aluno</label>
    <input type="text" name="telefone_aluno" id="telefone_aluno">
    <input type="submit" value="Atualizar aluno">
</form>

<form action="listar_alunos.php" method="get" >
    <input type="submit" value="LISTAR ALUNOS"> 
</form>

<a href="index.php">VoLTaR</a>

<?php include 'footer.php' ?>