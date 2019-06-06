<?php session_start() ?>
  <?php include_once 'includes/header.inc.php' ?>
    <div class="quadroVisual">
        <?php include_once 'includes/menu.inc.php'  ?>

      <main>
        <h3 style="text-align: center">Editar Registros</h3>
        <?php
            include_once 'banco_de_dados/conexao.php';
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
            $_SESSION['id'] = $id;
            $querySelect = $link->query("select * from tb_clientes where id='$id'");

            while($registros = $querySelect->fetch_assoc()):
              $id = $registros['id'];
              $nome = $registros['nome'];
              $telefone = $registros['telefone'];
              $endereço = $registros['endereço'];
            endwhile;

         ?>
         <form class="" action="banco_de_dados/update_cliente.php" method="post">
                 <div class="row linha">
                   <!--Campo Nome!-->
                   <div class="col-md-6">
                         <div class="form-group">
                           <label for="">Nome:</label>
                           <input type="text" name="nome" value="<?php echo $nome ?>" class="form-control"  placeholder="">
                         </div>
                   </div>

                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="">Telefone: </label>
                       <input type="tel" name="telefone" class="form-control" value="<?php echo $telefone ?>" placeholder="">
                     </div>
                   </div>
                 </div>

                 <div class="row">
                   <div class="col-md-12">
                     <div class="form-group">
                       <label for="endereco">Endereço: </label>
                       <input type="text" name="endereço" class="form-control" value="<?php echo $endereço ?>"  placeholder="">
                     </div>
                   </div>
                 </div>

                   <div class="row">
                     <div class="col-md-12 botoes">
                       <input type="submit" value="Alterar" class="btn btn-large  btn-default botoes alterarBotao"></button>
                       <a href="consultarcliente.php"><button type="button" class="btn btn-large  btn-danger botaoCancel botoes">Cancelar</button></a>
                     </div>
                   </div>
         </form>
      </main>
    </div>


  <?php include_once 'includes/footer.inc.php' ?>
