<?php include '../header.php'?>
<div class="mb-3 mt-3" style="margin: 25px;">
<form action="../update.php" method="update">
    <label for="id_aluno">ID</label>
    <input type="text" name="id_aluno" id="id_aluno" class="form-control" >

    <label for="nome_aluno">Nome do aluno</label>
    <input type="text" name ="nome_aluno" id="nome_aluno" class="form-control">

    <label for="email_aluno">Email do aluno</label>
    <input type="text" name="email_aluno" id="email_aluno" class="form-control">

    <label for="telefone_aluno">Telefone do aluno</label>
    <input type="text" name="telefone_aluno" id="telefone_aluno" class="form-control">
    <div class="d-grid">
        <br>
        <input type="submit" value="Atualizar aluno"  class="btn btn-primary"><br>
        <a href="../index.php" class="btn btn-dark">VOLTAR </a>
    </div>
</form>
</div>
<?php include '../footer.php'?>