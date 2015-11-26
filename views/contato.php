<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">

    <!--                                  My CSS
    ======================================================================================================-->   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>static/css/style.css"/>

    <!--                              CSS External Files
    =======================================================================================================-->
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
                            <li><a href="tradicional">Tradicional</a></li>
                            <li><a href="vegetariano">Vegetariano</a></li>
                            <li><a href="vegano">Vegano</a></li>
                        </ul>
                    </li>                   
                    <li><a href="contato">Contato</a></li>                     
                </ul>
            </div>
        </div>                  
    </div>

    <!--                                              Form
    ============================================================================================================-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <h2>Entre em Contato</h2> <hr/>
               

                <form class="form-horizontal" action="contato_submit" method="post" accept-charset="utf-8">

                    <div class="form-group">    
                        <label for="assunto" class="col-sm-3 control-label">Selecione o assunto:</label> 
                        <div class="col-sm-6">
                            <select class="form-control">
                                <option value="elogio">Elogio</option>
                                <option value="duvida">Dúvida</option>
                                <option value="sugestao">Sugestão</option>
                                <option value="critica">Crítica</option>
                                <option value="outros">Outros</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group">    
                        <label for="nome" class="col-sm-3 control-label">Nome:</label> 
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Digite seu nome"/>
                        </div>                                
                    </div>
                    <div class="form-group">    
                        <label for="email" class="col-sm-3 control-label">Email:</label> 
                        <div class="col-sm-6">
                            <input type="email" class="form-control" placeholder="Digite seu email"/>
                        </div>                                
                    </div>
                    <div class="form-group">    
                        <label for="titulo" class="col-sm-3 control-label">Título:</label> 
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Digite o título da mensagem"/>
                        </div>                                
                    </div>
                    <div class="form-group">    
                        <label for="mensagem" class="col-sm-3 control-label">Mensagem:</label> 
                        <div class="col-sm-6">
                            <textarea  class="form-control" rows="3" name="" placeholder="Digite sua mensagem"></textarea> 
                        </div>                                
                    </div>
                    <div class="form-group">    
                        <div class="col-sm-offset-8 col-sm-6">                                    
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>                                
                </form>                   
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