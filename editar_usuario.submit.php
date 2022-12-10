<?php
require 'classes/usuarios.class.php';
$usuarios = new Usuarios();

if(!empty($_POST['id'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $permissoes = $_POST['permissoes'];
    $id = $_POST['id'];

    if(!empty($email)){
        $contato->editar($nome, $email, $senha, $permissoes, $id);
    }
    header("Location: /agendaSenai");
}