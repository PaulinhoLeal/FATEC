<?php 
    include "header.php";
    include "database.php";
    $read = "SELECT * FROM sge_alunos";
    $consulta_db = mysqli_query($conexao,$read);

?>
<!-- Tabela para listar os dados -->
<table>
    <!-- Cabeçalho da tabela -->
    <thead>
        <!-- tr - table row -->
        <tr>
            <!-- th - o nome que vai no indice da coluna -->
            <th>Nome:</th>
            <th>Email:</th>
            <th>Telefone:</th>
        </tr>
    </thead>
    <!-- Corpo da tabela -->
    <tbody>
        <?php while($dados_db = mysqli_fetch_array($consulta_db)){?>
        <tr>
            <!-- td- table data -->
            <td><?php echo $dados_db['nome_aluno'];?></td>
            <td><?php echo $dados_db['email_aluno'];?></td>
            <td><?php echo $dados_db['telefone_aluno'];?></td>
        </tr>
        <?php }; ?>
    </tbody>
</table>

<?php include 'footer.php';?>
