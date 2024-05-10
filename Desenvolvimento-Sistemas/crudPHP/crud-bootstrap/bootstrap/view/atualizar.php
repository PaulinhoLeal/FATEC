<?php include '../header.php'?>
<form action="../update.php" method="update">
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
<?php include '../footer.php'?>