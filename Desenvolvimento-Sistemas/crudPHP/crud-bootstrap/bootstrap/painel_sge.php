<?php
    include 'header.php';
    session_start();
    $usuario = $_SESSION['usuario'];
    if($usuario['perfil'] != 'admin'){ ?>  
        <div class="d-grid">
            <a href="#">Cadastrar aluno</a>
        </div>
<?php 
}
else{ ?>
    <h2>Painel adminsitrativo SGE</h2><br>
    <hr>
    <p>Voce tem a permissao de acessso: <?php echo $usuario['perfil']; ?> </p>
<?php } include 'footer.php';?>