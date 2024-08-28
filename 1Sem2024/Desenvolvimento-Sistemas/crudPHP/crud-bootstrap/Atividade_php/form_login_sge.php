
    <h2>CADASTRE SUA CONTA</h2>
    <style >
        body{
            background-size: cover;
            background-repeat: no-repeat;
            color: black;
        }
        a{
            color:green;
        }
    </style>
    <form action="valida_jogo.php" method='post'>
        <label for="login_sge">Login</label>
        <input type="text" name= "login_sge" id="login_sge">
    
        <label for="password_sge">Pass</label>
        <input type="password" name="password_sge" id = "passworod_sge">

        <input type="submit" value="Logar">

        <p><a href="">esqueceu sua senha?</a></p>  
    </form> 
        <!-- comandos em php para validar os campos de login ecom sessão -->
    <?php
        session_start();
        if(isset($_SESSION['mensagem'])){
            $mensagem =$_SESSION['mensagem'];
            echo "<h3>", $mensagem, "</h3>";
            unset($_SESSION['mensagem']);
        }
        
    ?>
    
<?php include 'footer.php';?>