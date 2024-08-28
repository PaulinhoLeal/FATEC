<?php
    include 'header.php';
    session_start();
    $usuario = $_SESSION['usuario'];
    if($usuario['perfil'] != 'admin'){ ?>  
        <div class="d-grid">
            <h1>Bem Vindo ao まほう </h1>
        </div>
<?php 
}
else{ ?>
    <h2>Painel de administração まほう</h2><br>
    <hr>
    <p>Voce tem a permissao de acessso: <?php echo $usuario['perfil']; ?> </p>
    
    <div class="d-grid">
        <a href="listar_jogos.php"  class="btn btn-outline-success btn-lg" style="margin: 25px;">LISTAR JOGOS</a>
    </div>
<?php } include 'footer.php';?>

