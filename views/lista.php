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

	<!--                   				Fixes Navigation with Dropdown Menu
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
    
     <!--                                                                      Content
    ===================================================================================================================================================-->
    <div class="container">
        <div class="col-md-12">
            <h3>Página Reservada ao ADM</h3>
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Mensagens Recebidas</h3>               
                    </div>
                    <?php
                        echo "<table class=" . "table table-bordered table-striped" . ">";
                        echo "<tr><td>Assunto</td>";
                        echo "<td>Nome</td>";
                        echo "<td>Email</td>";
                        echo "<td>Título</td>";
                        echo "<td>Mensagem</td></tr>";
                        foreach ($contatos as $c) {
                            echo "<tr><td>" . $c->assunto . "</td>";
                            echo "<td>" . $c->nome . "</td>";
                            echo "<td>" . $c->email . "</td>";
                            echo "<td>" . $c->tituloMensagem . "</td>";
                            echo "<td>" . $c->conteudoMensagem . "</td></tr>";
                        }
                        echo "</tbody></table>";
                    ?>
                </div><hr/>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Reservas</h3>               
                    </div>
                    <?php
                        echo "<table class=" . "table table-bordered table-striped" . ">";
                        echo "<tr><td>Data</td>";
                        echo "<td>Hora</td>";
                        echo "<td>Reservado para</td>";
                        echo "<td>Quantidade de Pessoas</td>";
                        
                        foreach ($reservas as $r) {
                            echo "<tr><td>" . $r->data . "</td>";
                            echo "<td>" . $r->hora . "</td>";
                            echo "<td>" . $r->nome . "</td>";
                            echo "<td>" . $r->quantidadePessoas . "</td></tr>";
                            
                        }
                        echo "</tbody></table>";
                    ?>
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
            	<a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
            	<a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
            	<a href="http://www.instagram.com" target="_blank"><i class="fa fa fa-instagram fa-2x"></i></a>
            </div>
        </div> 
    </div>        

    <!--                                             Javascript Files
    ===================================================================================================================================================-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="<?php echo base_url();?>static/js/bootstrap.min.js"></script>

</body>
</html>