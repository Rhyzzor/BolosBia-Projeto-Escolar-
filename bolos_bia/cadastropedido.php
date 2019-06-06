<?php session_start() ?>
  <?php include_once 'includes/header.inc.php' ?>
    <div class="quadroVisual">
        <?php include_once 'includes/menu.inc.php'  ?>

      <main>
        <div class="visual">
          <form class="" action="banco_de_dados/create_pedido.php" method="post">
                  <h2 style='text-align:center'>Cadastro de Pedidos</h2>
                        <?php
                            if(isset($_SESSION['msg'])):
                                  echo $_SESSION['msg'];
                                  session_unset();
                            endif;

                         ?>
                  <div class="row linha">
                    <!--Campo Nome!-->
                    <div class="col-md-4">
                          <div class="form-group Visual">
                            <label for="">Nome do Cliente:</label>
                            <input type="text" name="nomeCliente" class="form-control" id="" placeholder="">
                          </div>
                    </div>

                    <div class="col-md-4">
                          <div class="form-group">
                            <label for="">Produtos:</label>
                            <input type="text" name="produtoPedido" class="form-control" id="" placeholder="">
                          </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">Data do Pedido: </label>
                        <input type="date" name="dataPedido" class="form-control" id="" placeholder="">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="">Endereço:</label>
                          <input type="text" name="endereçoCliente" class="form-control"value="">
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="">Comentários Extras:</label>
                          <input type="text" name="adendos" class="form-control" value="">
                        </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label for="endereco">Valor Total: </label>
                        <input type="text" name="valorPedido" class="form-control" id="endereco" placeholder="">
                      </div>
                    </div>
                  </div>

                    <div class="row">
                      <div class="col-md-12">
                        <button type="submit" value="cadastrar" class="btn btn-large  btn-default">Cadastrar Pedido</button>
                      </div>
                    </div>
                </main>
          </form>
      </main>
    </div>
    </div>


  <?php include_once 'includes/footer.inc.php' ?>
