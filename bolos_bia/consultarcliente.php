    <<?php session_start() ?>
    <?php include_once 'includes/header.inc.php' ?>
    <div class="quadroVisual">
      <?php include_once 'includes/menu.inc.php' ?>
      <main>
          <h3 style="text-align: center">Consulta de Cliente</h3>

          <table class="table table-bordered">
                <thead>
                      <tr>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Endereço</th>
                            <th colspan="2">Opções</th>
                      </tr>
                </thead>
                <tbody>
                      <?php include_once 'banco_de_dados/read_cliente.php' ?>
                </tbody>
          </table>
      </main>
    </div>


<?php include_once 'includes/footer.inc.php'  ?>
