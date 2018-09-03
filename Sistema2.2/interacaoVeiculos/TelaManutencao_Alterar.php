<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manutenção de Veículos </title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" media="screen"/>

    </head>
<style media="screen">
  #quadro{
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
                    <h5 style="text-align: center"><a class="navbar-brand" href="../TelaPrincipalADM.php">Home</a>Sistema de Gestão de Viagens Institucionais - Alterar dados de manutenção</h5></div></div>

        </header>

    <div class="container-fluid">
      <br><br><br><br>
        <div class=" col-md-8 col-md-offset-2">
            <form method="post">
                  <div class="col-md-12">
                            <div class="col-md-2">
                            <label for="i1" value="Veículo:">Veículo:   </label>
                            </div>
                            <div class="col-md-10">
                            <input class="form-control" type="text" id="i1" class="input-texto" value="" placeholder="veículo" name="campoVeículo">
                            </div>
                   </div>

                   <div class="col-md-12">
                             <div class="col-md-2">
                             <br>
                             <label for="i2" value="Data:">Data:   </label>
                             </div>
                             <div class="col-md-4">
                             <br>
                             <input class="form-control" type="text" id="i2" class="input-texto" value="" placeholder="data" name="campoData">
                             </div>
                                     <div class="col-md-1">
                                     <br>
                                     <label for="i3" value="Valor:">Valor:   </label>
                                     </div>
                                     <div class="col-md-5">
                                     <br>
                                     <input class="form-control" type="text" id="i3" class="input-texto" value="" placeholder="valor" name="campoValor">
                                     </div>
                   </div>

                   <div class="col-md-12">
                           <div class="col-md-2">
                           <br>
                           <label for="i4" value="Especificação:">Especificação: </label>
                           </div>
                           <div class="col-md-10">
                           <br>
                           <input class="form-control" type="text" id="i4" class="input-texto" value="" placeholder="especificação" name="campoEspecificacao">
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
