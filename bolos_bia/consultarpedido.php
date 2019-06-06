<?php session_start() ?>
<?php include_once "banco_de_dados/conexao.php" ?>
<?php include_once 'includes/header.inc.php' ?>
<div class="quadroVisual">
  <?php include_once 'includes/menu.inc.php' ?>
  <main>
        <h3 style="text-align: center">Pesquisar Pedido</h3>
        <form class="" action="" method="post">
            <div class="row">
              <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Digite o nome do cliente:</label>
                      <input type="text" class="form-control" name="nome" placeholder="">
                      <input type="submit" name="SendPesqUser" class="btn btn-large  botaoPesquisar btn-default">
                      <div id="avisoJS">                            
                      </div>
                    </div>
              </div>
            </div>

        </form>
        <table class='table table-bordered'>
          <thead>
            <tr>
              <th>Nome do Cliente</th>
              <th>Produtos</th>
              <th>Data</th>
              <th>Endereço</th>
              <th>Avisos</th>
              <th>Valor Total:</th>
            </tr>
          </thead>


        <?php
            $SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
            if($SendPesqUser):
              $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
              $result_usuario =     "SELECT * FROM tb_pedido WHERE nome_cliente LIKE '%$nome%'";
              $resultado_usuario = mysqli_query($link, $result_usuario);

              while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)):
                $nome = $row_usuario['nome_cliente'];
                $produto = $row_usuario['produto'];
                $data = $row_usuario['data'];
                $valor = $row_usuario['valor'];
                $aviso = $row_usuario['adendo'];
                $endereço = $row_usuario['endereço'];

                echo "<tr>";
                echo "<td> $nome </td>";
                echo "<td> $produto </td>";
                echo "<td> $data  </td>";
                echo "<td> $endereço  </td>";
                echo "<td> $aviso  </td>";
                echo "<td> R$ $valor,00 </td>";
                echo "</tr>";

              endwhile;
            endif;
         ?>
       </table>

  </main>
</div>


<?php include_once 'includes/footer.inc.php'  ?>
