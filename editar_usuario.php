<?php 
require 'classes/usuarios.class.php';
$usuarios = new Usuarios();

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $info = $usuarios->busca($id);
    if(empty($info['email'])){
        header("Location: /agendaSenai");
        exit;
    }
}else{
    header("Location: /agendaSenai");
    exit;
}
?>

<h1>EDITAR USUÁRIOS</h1>
<form method="POST" action="editar_usuario_submit.php">
    <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
    Nome: <br>
    <input type="text" name="nome" value="<?php echo $info['nome']; ?>"><br><br>
    Email: <br>
    <input type="email" name="email" value="<?php echo $info['email']; ?>"><br><br>
    CPF: <br>
    <input type="text" name="senha" value="<?php echo $info['senha']; ?>"><br><br>
    Senha: <br>
    <input type="text" name="permissoes" value="<?php echo $info['permissoes']; ?>"><br><br>
    Permissões:
    <input type="submit"  value="SALVAR">
</form>