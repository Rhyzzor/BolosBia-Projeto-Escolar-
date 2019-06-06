<?php session_start() ?>
  <?php include_once 'includes/header.inc.php' ?>
    <div class="quadroVisual">
        <?php include_once 'includes/menu.inc.php'  ?>

      <main>
          <form class="" action="banco_de_dados/create_cliente.php" method="post">
                  <h2 style='text-align:center'>Cadastro de Clientes</h2>
                        <?php
                            if(isset($_SESSION['msg'])):
                                  echo $_SESSION['msg'];
                                  session_unset();
                            endif;

                         ?>
                  <div class="row linha">
                    <!--Campo Nome!-->
                    <div class="col-md-6">
                          <div class="form-group">
                            <label for="">Nome:</label>
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="">
                          </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Telefone: </label>
                        <input type="tel" name="telefone" class="form-control" id="telefone" placeholder="">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="endereco">Endereço: </label>
                        <input type="text" name="endereco" class="form-control" id="endereco" placeholder="">
                      </div>
                    </div>
                  </div>

                    <div class="row">
                      <div class="col-md-12">
                        <button type="submit" value="cadastrar" class="btn btn-large  btn-default">Cadastrar</button>
                      </div>
                    </div>
                </main>
          </form>
      </main>
    </div>


  <?php include_once 'includes/footer.inc.php' ?>
