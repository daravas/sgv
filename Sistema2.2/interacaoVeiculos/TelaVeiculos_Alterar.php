<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Veículos </title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" media="screen"/>

    </head>
<style media="screen">
  #quadro {
    border-color:black;
  }
</style>
        <body>
          <!--CABEÇALHO-->
        <header>
            <!-- LOGO SUPERIOR IFBA -->
            <img src="../imagens/logoifba.png" class="img-responsive" alt="Imagem Responsiva">
            <div class="modal-header" style="background-color: #255625; color: white">
                <div class="col-md-12"><!---->
                    <h5 style="text-align: center"><a class="navbar-brand" href="../TelaPrincipalADM.php">Sair</a>Sistema de Gestão de Viagens Institucionais - Alterar dados de veículos</h5></div></div>

        </header>

    <div class="container-fluid">
      <br><br><br><br>
        <div class=" col-md-8 col-md-offset-2">
            <form method="post">
                  <div class="col-md-12">
                            <div class="col-md-1">
                            <label for="i1" value="Modelo:">Modelo:   </label>
                            </div>
                            <div class="col-md-3">
                            <input class="form-control" type="text" id="i1" class="input-texto" value="" placeholder="modelo" name="campoModelo">
                            </div>
                                      <div class="col-md-1">
                                      <label for="i2" value="Ano:">Ano:   </label>
                                      </div>
                                      <div class="col-md-3">
                                      <input class="form-control" type="text" id="i2" class="input-texto" value="" placeholder="ano" name="camoAno">
                                      </div>
                                                  <div class="col-md-1">
                                                  <label for="i3" value="Placa:">Placa:   </label>
                                                  </div>
                                                  <div class="col-md-3">
                                                  <input class="form-control" type="text" id="i3" class="input-texto" value="" placeholder="placa" name="campoPlaca">
                                                  </div>
                   </div>

                   <div class="col-md-12">
                           <div class="col-md-1">
                           <br> <br>
                           <label for="i4" value="Chassi:">Chassi: </label>
                           </div>
                           <div class="col-md-3">
                           <br> <br>
                           <input class="form-control" type="text" id="i4" class="input-texto" value="" placeholder="chassi" name="campoChassi">
                           </div>
                                     <div class="col-md-1">
                                     <br> <br>
                                     <label for="i5" value="Última Revisão:">Última Revisão: </label>
                                     </div>
                                     <div class="col-md-3">
                                     <br> <br>
                                     <input class="form-control" type="text" id="i5" class="input-texto" value="" placeholder="última revisão" name="campoÚltimaRevisão">
                                     </div>
                                               <div class="col-md-1">
                                               <br> <br>
                                               <label for="i6" value="Próxima Revisão:">Próxima Revisão: </label>
                                               </div>
                                               <div class="col-md-3">
                                               <br> <br>
                                               <input class="form-control" type="text" id="i6" class="input-texto" value="" placeholder="próxima revisão" name="campoPróximaRevisão">
                                               </div>
                   </div>

                   <div class="col-md-12">
                           <div class="col-md-1">
                           <br>
                           <label for="i7" value="Status:">Status:</label>
                           </div>
                           <div class="col-md-11">
                           <br>
                           <input class="form-control" type="text" id="i7" class="input-texto" value="" placeholder="status" name="campoStatus">
                           </div>
                     </div>

           </div>

               <div class="col-sm-1 col-md-offset-8">
               <br><br>
               <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-success"  >
               </div>

               <div class="col-sm-1 ">
               <br><br>
               <a type="submit" value="" class="btn btn-success" href="../TelaPrincipalADM.php">Voltar</a>
               </div>

          </form>
        </div>
      </body>

  </html>
