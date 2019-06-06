<?php
    session_start();
    include_once 'conexao.php';

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);

    $queryInsert = $link->query("insert into tb_clientes values(default, '$nome','$telefone','$endereco')");
    $affected_rows = mysqli_affected_rows($link);

    if($affected_rows > 0):
           $_SESSION['msg'] = "<p style=' text-align: center; color:green'>"."Cadastro efetuado com sucesso!"."</p>";
           header("Location:../cadastrocliente.php");

    endif;

 ?>
