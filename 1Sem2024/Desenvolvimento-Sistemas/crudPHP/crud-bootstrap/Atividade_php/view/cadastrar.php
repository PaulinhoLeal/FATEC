<?php include '../header.php'?>  

<div class="mb-3 mt-3" style="margin: 25px;">
<form action="../cadastro.php" method="post">
    <label for="nome_aluno">Nome do Jogo</label>
    <input type="text" name ="nome_aluno" id="nome_aluno" class="form-control">

    <label for="email_aluno">Email do Jogo</label>
    <input type="text" name="email_aluno" id="email_aluno" class="form-control">

    <label for="telefone_aluno">Telefone do Jogo</label>
    <input type="text" name="telefone_aluno" id="telefone_aluno" class="form-control"><br>

    <div class="d-grid">
        <input type="submit" value="Cadastrar Jogo" class="btn btn-success" ><br>
        <a href="../index.php" class="btn btn-dark">VOLTAR </a>
    </div>  
</form>
</div>      

<?php include '../footer.php' ?>