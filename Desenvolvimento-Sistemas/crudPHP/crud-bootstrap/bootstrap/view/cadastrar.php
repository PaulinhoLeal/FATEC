<?php include '../header.php'?>  

<form action="../cadastro.php" method="post">
<div class="mb-3 mt-3">
    <label for="nome_aluno">Nome do aluno</label>
    <input type="text" name ="nome_aluno" id="nome_aluno" class="form-control">
    <label for="email_aluno">Email do aluno</label>
    <input type="text" name="email_aluno" id="email_aluno" class="form-control">
    <label for="telefone_aluno">Telefone do aluno</label>
    <input type="text" name="telefone_aluno" id="telefone_aluno" class="form-control"><br>
    <div class="d-grid">
        <input type="submit" value="Cadastrar aluno" class="btn btn-success" >
    </div>
</div>  
</form>

<?php include '../footer.php' ?>