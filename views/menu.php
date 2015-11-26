<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <!--                                  My CSS
    =============================================================================================================-->   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/style.css"/>

    <!--                              CSS External Files
    ===============================================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
<body>

   <!--                   Fixes Navigation with DropDown Menu
    =================================================================================================-->    

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
                    <li><a href="reserva">Reservas</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle"data-toggle="dropdown">Delivery<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="menu">Menu</a></li>
                        </ul>
                    </li>                   
                    <li><a href="contato">Contato</a></li>                     
                </ul>
            </div>
        </div>                  
    </div>

     <!--                                          Jumbotron
    ===========================================================================================-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Refeições Especiais</h1>
                    <p>Textos</p>
                    <p>
                        <a href="#" class="btn btn-success">Veja seu pedido</a>
                    </p>
                </div>
            </div>            
        </div>
    </div>



    <!--                                            Accordion
    ==========================================================================================================================--> 
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Pratos Principais
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <div class="container">
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>                                                          
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>                                                          
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>                                                          
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Sobremesas
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <div class="container">
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>                                                          
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static//final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>
                                                            <button class="btn btn-success">Adicionar</button
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>                                                          
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>                                                          
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Bebidas
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <div class="container">
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>
                                                            <button class="btn btn-success">Adicionar</button
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>                                                          
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>
                                                            <button class="btn btn-success">Adicionar</button
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>                                                          
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>
                                                            <button class="btn btn-success">Adicionar</button
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="thumbnail">
                                                    <img src="<?php echo base_url();?>static/img/final.png" alt="">
                                                    <div class="caption">
                                                        <h4>Nome do Prato</h4>
                                                        <p>
                                                            Descrição do prato
                                                        </p>
                                                        <h5>R$</h5>
                                                        <p>                                                          
                                                            <button class="btn btn-success">Adicionar</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div id="floatdiv">              
                <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Meus Pedidos</h3>
                            </div>
                            <div class="panel-body">
                                <h5>Quantidade:</h5>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control">

                                    </div>
                                    <button class=" btn btn-danger">Remover</button>
                                </div>
                                <br/>
                                <h5>Nome do prato</h5>
                                <h5>R$ Valor Unitário</h5><hr/>
                                <h5><strong>Subtotal</strong></h5>
                                <h5><strong>Frete</strong></h5><hr/>
                                <h4><strong>Total</strong></h4>
                            </div>
                        </div>    
                    </div>
                </div>
              </div>
            </div>          
        </div>     
    </div>
                            
    <!--                                            Fixed Footer
    =============================================================================================================-->
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

    <!--                                             Javascript Files
    ============================================================================================================-->   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo base_url();?>static/js/bootstrap.min.js"></script>
    
</body>
</html>