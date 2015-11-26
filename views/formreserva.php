<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <!--                                  My CSS
    ===================================================================================================================================================-->   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/style.css"/>

    <!--                              CSS External Files
    ===================================================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
<body>
    
     <!--                                                Fixes Navigation with DropDown Menu
    ===================================================================================================================================================-->    

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">LOGOMARCA</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="home">Home</a></li>
                    <li><a href="formreserva">Reservas</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle"data-toggle="dropdown">Delivery<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="menu">Menu</a></li>
                        </ul>
                    </li>                   
                    <li><a href="formcontato">Contato</a></li>
                    <li><a href="formlogin">Entrar</a></a></li>
                </ul>
            </div>
        </div>                  
    </div>


<!--                                                                       Jumbotron
    ===================================================================================================================================================-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 jumbotron reserv-jumbotron">
                <div class="text-center">
                    <h1>Reservas</h1>
                    <p>Textos</p>
                    <a href="#reserva" data-toggle="modal" class="btn btn-lg btn-success">Faça já a sua</a>
                </div>
            </div>            
        </div>
    </div>

    <!--                                                                      Content
    ===================================================================================================================================================-->
    <div class="container">
        <div class="col-md-12">
            <div class="text-left">
                <p>Restaurante felizmente acomoda festas até 10 e aceita reservas até 90 dias de antecedência, com exceção de feriados. Cada visita de jantar inclui uma viagem de cortesia para o deck de observação. Nossa equipe está pronta e esperando para fazer o passeio sem esforço, assim que chegar, então você está livre para desfrutar plenamente a comida e vista.
                <br/>
                Cada assento na sala de jantar oferece uma vista panorâmica da cidade. Os assentos não são pré-atribuído. Você pode pedir para uma janela quando você check-in para reservar um quarto no nível restaurante. Se uma janela mesa não está disponível no momento do check-in, você vai ser dada a opção de esperar por um.
                <br/>
                Pronto para se juntar a nós? 
                </p>                
            </div>
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Horários Disponíveis</h3>               
                    </div>
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td>Dias</td>
                                <td>Segunda</td>
                                <td>Terça</td> 
                                <td>Quarta</td> 
                                <td>Quinta</td> 
                                <td>Sexta</td>                             
                                <td>Sábado</td> 
                                <td>Domingo</td> 
                            </tr>
                            <tr>
                                <td>Café da Manhã</td>
                                <td>7:00hrs às 11:00hrs</td>
                                <td>7:00hrs às 11:00hrs</td>                            
                                <td>7:00hrs às 11:00hrs</td>                            
                                <td>7:00hrs às 11:00hrs</td>                            
                                <td>7:00hrs às 11:00hrs</td>                            
                                <td>9:00hrs às 11:30hrs</td>
                                <td>9:00hrs às 11:30hrs</td>                                                                               
                            </tr>
                            <tr>
                                <td>Almoço</td>
                                <td>11:30hrs às 14:00hrs</td>
                                <td>11:30hrs às 14:00hrs</td>                            
                                <td>11:30hrs às 14:00hrs</td>                            
                                <td>11:30hrs às 14:00hrs</td>                            
                                <td>11:30hrs às 14:00hrs</td>                            
                                <td>12:00hrs às 16:00hrs</td>
                                <td>12:00hrs às 16:00hrs</td>                            
                            </tr>
                            <tr>
                                <td>Jantar</td>
                                <td>16:40hrs às 20:00hrs</td>
                                <td>16:40hrs às 20:00hrs</td>                            
                                <td>16:40hrs às 20:00hrs</td>                            
                                <td>16:40hrs às 20:00hrs</td>                            
                                <td>16:40hrs às 20:00hrs</td>                            
                                <td>18:00hrs às 21:00hrs</td>
                                <td>18:00hrs às 21:00hrs</td>                             
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


  
    <!--                                            Fixed Footer
    ===================================================================================================================================================-->
    <div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <div class="container">
            <div class="navbar-text pull-left">
                <p>© 2015 PHP Project</p>
            </div>              
            <div class="navbar-text pull-right">
                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                <a href="#"><i class="fa fa fa-instagram fa-2x"></i></a>
            </div>
        </div> 
    </div>        

    <!--                                             Modal and Javascript Files 
    ===================================================================================================================================================-->
    <div class="modal fade" id="reserva" role="dialog">
      <div class="modal-dialog">
         <div class="modal-content">
            <form class="form-horizontal" action="/index.php/controller/doPostReserva" method="post" accept-charset="utf-8">
                <div class="modal-header">
                  <h4>Reserve seu horário</h4>
                </div>
                <div class="modal-body">
                   <div class="form-group">
                         <label for="data" class="col-md-3 control-label">Escolha a data:</label>
                         <div class="col-md-4">
                             <input type="date" class="form-control" name="data" placeholder="DD/MM/AAAA">                        
                         </div>
                    </div>
                    <div class="form-group">    
                        <label for="hora" class="col-md-3 control-label">Selecione o horário:</label> 
                        <div class="col-md-4">
                            <select class="form-control" name="hora">
                                <option value="07:00">07:00</option>
                                <option value="07:30">07:30</option>
                                <option value="08:00">08:00</option>
                                <option value="08:30">08:30</option>
                                <option value="09:00">09:00</option>
                                <option value="09:30">09:30</option>
                                <option value="10:00">10:00</option>
                                <option value="10:30">10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:00">12:00</option>
                                <option value="12:30">12:30</option>
                                <option value="13:00">13:00</option>
                                <option value="13:30">13:30</option>
                                <option value="14:00">14:00</option>
                                <option value="14:30">14:30</option>
                                <option value="15:00">15:00</option>
                                <option value="15:30">15:30</option>
                                <option value="16:00">16:00</option>
                                <option value="16:30">16:30</option>
                                <option value="17:00">17:00</option>
                                <option value="17:30">17:30</option>
                                <option value="18:00">18:00</option>
                                <option value="18:30">18:30</option>
                                <option value="19:00">19:00</option>
                                <option value="19:30">19:30</option>
                                <option value="20:00">20:00</option>
                                <option value="20:30">20:30</option>
                                <option value="21:00">21:00</option>
                              </select>
                        </div>                                
                    </div>
                    <div class="form-group">
                       <label for="nome" class="col-md-3 control-label">Nome:</label>
                       <div class="col-md-4">
                           <input type="text" class="form-control" name="nome" placeholder="Nome Sobrenome">
                       </div>
                    </div>
                    <div class="form-group">    
                        <label for="quantidadePessoas" class="col-md-3 control-label">Para:</label> 
                        <div class="col-md-4">
                            <select class="form-control" name="quantidadePessoas">
                                <option value=">1 pessoa">1 pessoa</option>
                                <option value="2 pessoas">2 pessoas</option>
                                <option value="3 pessoas">3 pessoas</option>
                                <option value="4 pessoas">4 pessoas</option>
                                <option value="5 pessoas">5 pessoas</option>
                                <option value="6 pessoas">6 pessoas</option>
                                <option value="7 pessoas">7 pessoas</option>
                                <option value="8 pessoas">8 pessoas</option>
                                <option value="9 pessoas">9 pessoas</option>
                                <option value="10 pessoas">10 pessoas</option>
                                <option value="11 pessoas">11 pessoas</option>
                                <option value="12 pessoas">12 pessoas</option>
                                <option value="13 pessoas">13 pessoas</option>
                                <option value="14 pessoas">14 pessoas</option>
                                <option value="15 pessoas">15 pessoas</option>
                                <option value="16 pessoas">16 pessoas</option>
                                <option value="17 pessoas">17 pessoas</option>
                                <option value="18 pessoas">18 pessoas</option>
                                <option value="19 pessoas">19 pessoas</option>
                                <option value="20 pessoas">20 pessoas</option>                                
                              </select>
                        </div>                                
                  </div>
                  <h6>
                     <strong>OBS:</strong>
                     Acima de 20 pessoas entre em contato através dos telefones:<br/> 
                     (013) 3887-2533 ou (013) 3887-4521.
                  </h6>
               </div>
               <div class="modal-footer">
                  <a class="btn btn-primary" data-dismiss="modal">Fechar</a>
                  <button class="btn btn-sucess" type="submit">Enviar</button>
               </div>
            </form>
         </div>
      </div>
   </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo base_url();?>static/js/bootstrap.min.js"></script>
    
</body>
</html>

