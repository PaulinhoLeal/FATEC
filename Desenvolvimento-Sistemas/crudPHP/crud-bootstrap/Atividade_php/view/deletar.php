<?php include "../header.php"; ?>
<div class="mb-3 mt-3" style="margin: 25px;">
<form action="../delete.php" method="delete">
    <label for="id_aluno">ID</label>
    <input type="text" name="id_aluno" id="id_aluno" class="form-control"> 
    <br>
    <div class="d-grid">
        <input type="submit" value="Excluir Jogo" class="btn btn-danger" ><br>
        <a href="../index.php" class="btn btn-dark" >VOLTAR </a>
    </div>
</form>
</div>

