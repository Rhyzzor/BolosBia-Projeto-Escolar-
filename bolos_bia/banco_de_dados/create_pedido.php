<?php
    session_start();
    include_once 'conexao.php';

    $nome = filter_input(INPUT_POST, 'nomeCliente', FILTER_SANITIZE_SPECIAL_CHARS);
    $produto = filter_input(INPUT_POST, 'produtoPedido', FILTER_SANITIZE_SPECIAL_CHARS);
    $data = filter_input(INPUT_POST, 'dataPedido');
    $adendos = filter_input(INPUT_POST, 'adendos');
    $valor = filter_input(INPUT_POST, 'valorPedido');
    $endereço = filter_input(INPUT_POST, 'endereçoCliente', FILTER_SANITIZE_SPECIAL_CHARS);

    $queryInsert = $link->query("insert into tb_pedido values(default, '$nome','$produto','$data', '$valor', '$endereço', '$adendos')");
    $affected_rows = mysqli_affected_rows($link);

    if($affected_rows > 0):
           $_SESSION['msg'] = "<p style=' text-align: center; color:green'>"."Pedido efetuado com sucesso!"."</p>";
           header("Location:../cadastropedido.php");

    endif;
?>
