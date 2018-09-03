<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Cadastro Horários de Motoristas</title>
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
            <img src="Imagem/logoifba.png"  class="img-responsive" alt="Imagem Responsiva">
            <div class="modal-header" style="background-color: #255625; color: white">
                <div class="col-md-12"><!---->
                    <h5 style="text-align: center"><a class="navbar-brand" href="../TelaPrincipalADM.php">Home</a>Sistema de Gestão de Viagens Institucionais - Cadastro Horários de Motoristas</h5></div></div>

        </header>

    <div class="container-fluid">
      <br><br><br><br>
        <div class=" col-md-8 col-md-offset-2">
            <form method="post">
                  
                            <div class="col-md-12">
                             <div class="col-md-1">
                             <br>
                             <label for="i2" value="Motorista:">Motorista:   </label>
                             </div>
                             <div class="col-md-6">
                             <br>
                             <input class="form-control" type="text" id="i2" class="input-texto" value="" placeholder="Motorista" name="campoMotorista:">
                             </div>
                                     <div class="col-md-1">
                                     <br>
                                     <label for="i3" value="Carga Horária:">Carga Horária:  </label>
                                     </div>
                                     <div class="col-md-3">
                                     <br>
                                     <input class="form-control" type="text" id="i3" class="input-texto" value="" placeholder="Carga Horária" name="campoCarga Horária">
                                     </div>
                                     </div>
                
                    <div class="col-md-12">
                             <div class="col-md-1">
                             <br>
                             <label for="i2" value="Data:">Data:   </label>
                             </div>
                             <div class="col-md-4">
                             <br>
                             <input class="form-control" type="date" id="i2" class="input-texto" value="" placeholder="Data" name="campoData:">
                             </div>
                                     <div class="col-md-1">
                                     <br>
                                     <label for="i3" value="Tipo Data:">Tipo Data:  </label>
                                     </div>
                                     <div class="col-md-5">
                                     <br>
                                     <input class="form-control" type="text" id="i3" class="input-texto" value="" placeholder="Tipo Data" name="campoTipo Data">
                                     </div>
                                     </div>
                                      <div class="col-md-12">
                             <div class="col-md-1">
                             <br>
                             <label for="i2" value="Hora de Entrada:">Hora de Entrada:   </label>
                             </div>
                             <div class="col-md-5">
                             <br>
                             <input class="form-control" type="text" id="i2" class="input-texto" value="" placeholder="Hora de Entrada" name="campoHora de Entrada:">
                             </div>
                                     <div class="col-md-1">
                                     <br>
                                     <label for="i3" value="Horário Volta do Almoço:">Horário Volta do Almoço:  </label>
                                     </div>
                                     <div class="col-md-4">
                                     <br>
                                     <input class="form-control" type="text" id="i3" class="input-texto" value="" placeholder="Horário Volta do Almoço" name="campoHorário Volta do Almoço">
                                     </div>
                                     </div>
                
                    <div class="col-md-12">
                             <div class="col-md-1">
                             <br>
                             <label for="i2" value="Hora de Saída:">Hora de Saída:   </label>
                             </div>
                             <div class="col-md-4">
                             <br>
                             <input class="form-control" type="text" id="i2" class="input-texto" value="" placeholder="Hora de Saída" name="campoHora de Saída:">
                             </div>
                                     <div class="col-md-1">
                                     <br>
                                     <label for="i3" value="Horário Saída do Almoço:">Horário Saída do Almoço:  </label>
                                     </div>
                                     <div class="col-md-5">
                                     <br>
                                     <input class="form-control" type="text" id="i3" class="input-texto" value="" placeholder="Horário Saída do Almoço" name="campoHorário Saída do Almoço">
                                     </div>
                                     </div>
                                             <div class="col-md-12">
                             <div class="col-md-1">
                             <br>
                             <label for="i2" value="Saldo do dia:">Saldo do dia:   </label>
                             </div>
                             <div class="col-md-5">
                             <br>
                             <input class="form-control" type="text" id="i2" class="input-texto" value="" placeholder="Saldo do dia" name="Saldo do dia:">
                             </div>
                                     <div class="col-md-1">
                                     <br>
                                     <label for="i3" value="Horas extras normais:">Horas extras normais:  </label>
                                     </div>
                                     <div class="col-md-4">
                                     <br>
                                     <input class="form-control" type="text" id="i3" class="input-texto" value="" placeholder="Horas extras normais" name="campoHoras extras normais">
                                     </div>
                                     </div>
                
                    <div class="col-md-12">
                             <div class="col-md-1">
                             <br>
                             <label for="i2" value="Horas extras noturnas:">Horas extras noturnas:   </label>
                             </div>
                             <div class="col-md-4">
                             <br>
                             <input class="form-control" type="text" id="i2" class="input-texto" value="" placeholder="Horas extras noturnas" name="campoHoras extras noturnas:">
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