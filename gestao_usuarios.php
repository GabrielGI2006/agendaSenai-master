<?php
include 'classes/usuarios.class.php';

$usuarios = new Usuarios();

?>
    <h1>Usuários Senai</h1>
    <hr>
    <button><a href="adicionar_usuario.php">ADICIONAR</a></button>
    <br><br>
    <hr>
    <button><a href="index.php">VOLTAR</a><button>
    <table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>SENHA</th>
        <th>PERMISÕES</th>
    </tr>
    <?php
        $lista = $usuarios->listar();
        foreach($lista as $item):
    ?>
    <tr>
        <td><?php echo $item['']; ?></td>
    </tr>