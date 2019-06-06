<?php
    include_once "conexao.php";

    $querySelect =  $link->query("select * from tb_clientes");
    while ($registros = $querySelect->fetch_assoc()):
      $nome = $registros ['nome'];
      $telefone = $registros['telefone'];
      $endereço = $registros['endereço'];
      $id = $registros['id'];

      echo "<tr>";
      echo "<td> $nome </td>";
      echo "<td> $telefone </td>";
      echo "<td> $endereço </td>";
      echo "<th><a href='editarcliente.php?id=$id'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a></th>";
      echo "<th><a href='banco_de_dados/delete_cliente.php?id=$id'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a></th>";
      echo "</tr>";
    endwhile;
