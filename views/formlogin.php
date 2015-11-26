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
    
    <!--                                            Form
    =============================================================================================================-->
    <div class="container">
        <p><br/></p>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-5">
                    <div class="panel panel-default ">
                        <div class="panel-body">
                            <div class="page=header">
                                <h3>Entre ou cadastre-se</h3><hr/>
                            </div>
                            <form role="form" action="/index.php/login/auth"  method="post" accept-charset="utf-8">
                                <div class="form-group">
                                    <label for="nomeLogin">Nome de Usuário</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                        <input type="text" class="form-control" name="nomeLogin" placeholder="Nome de Usuário"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="senha">Senha</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        <input type="password" class="form-control" name="senha" placeholder="Senha">
                                    </div>
                                    
                                </div>
                                <hr/>
                                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-lock"></span>Entrar</button>
                                <p><br/></p>
                            </form>
                        </div>
                    <div>
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