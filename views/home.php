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

    <!--                                             Carousel
    ===================================================================================================================================================-->

    <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
           	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
           	<li data-target="#myCarousel" data-slide-to="1"></li>
           	<li data-target="#myCarousel" data-slide-to="2"></li>
           	<li data-target="#myCarousel" data-slide-to="3"></li>
           	<li data-target="#myCarousel" data-slide-to="4"></li>
           	<li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
           	<div class="item active">
           		<img src="<?php echo base_url();?>static/img/slide01.jpg" alt="Restaurante"  class="img-responsive">
           		<div class="container">
           			<div class="carousel-caption">
           				<h1>Meu Título</h1>
           				<p>Meu texto explicativo vai aqui</p>
           				<p><a class="btn btn-large btn-primary">Entrar</a></p>
           			</div>           						
           		</div>           				       				
           	</div>
	        <div class="item">
	           	<img src="<?php echo base_url();?>static/img/slide02.jpg" alt="Mesa do restaurante" class="img-responsive">
	           	<div class="container">
	           		<div class="carousel-caption">
	           			<h1>Meu Título</h1>
	           			<p>Meu texto explicativo vai aqui</p>           						
	           		</div>           						
	           	</div>           				       				
	        </div>
	        <div class="item">
	        	<img src="<?php echo base_url();?>static/img/slide03.jpg" alt="Peixe grelhado" class="img-responsive">
	           	<div class="container">
	           		<div class="carousel-caption">
	           			<h1>Meu Título</h1>
	           			<p>Meu texto explicativo vai aqui</p>           						
	           		</div>           						
	        	</div>           				       				
	        </div>
			<div class="item">
				<img src="<?php echo base_url();?>static/img/slide04.jpg" alt="Salada" class="img-responsive">
				<div class="container">
					<div class="carousel-caption">
						<h1>Meu Título</h1>
						<p>Meu texto explicativo vai aqui</p>
					</div>           						
				</div>           				       				
			</div>
	        <div class="item">
	           	<img src="<?php echo base_url();?>static/img/slide05.jpg" alt="Carne" class="img-responsive">
	           	<div class="container">
	           		<div class="carousel-caption">
	           			<h1>Meu Título</h1>
	           			<p>Meu texto explicativo vai aqui</p>
	           		</div>           						
	           	</div>           				       				
	        </div>
	        <div class="item">
		        <img src="<?php echo base_url();?>static/img/slide06.jpg" alt="Sobremesa" class="img-responsive">
	           	<div class="container">
	           		<div class="carousel-caption">
	           			<h1>Meu Título</h1>
	           			<p>Meu texto explicativo vai aqui</p>
	           		</div>           						
	           	</div>           				       				
	        </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
           	<span class="glyphicon glyphicon-chevron-left"></span>           			
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
           	<span class="glyphicon glyphicon-chevron-right"></span>           			
        </a>
    </div>         
	   
	<!--                                           Grid System
	===================================================================================================================================================-->
   	<div class="container">
        <div class="row">
            <div id="articleOne" class="col-md-12">
            	<h2>Bem-vindo ao Restaurante</h2>
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultrices, leo non auctor consectetur, turpis est ultricies orci, 
            	ac rhoncus arcu magna sit amet est. Maecenas porta ante eu tellus accumsan, at suscipit est efficitur. Lorem ipsum dolor sit amet, 
            	consectetur adipiscing elit. Praesent condimentum mattis mauris, non facilisis mauris mollis quis.</p>
            </div>
	        <div class="col-sm-4">
	        	<a href="tradicional.html" class="thumbnail home-thumbnail">
	           		<img src="<?php echo base_url();?>static/img/mini01.jpg" alt="Refeição Tradicional" class="img-responsive">
	        	</a>
            	<h2>Tradicional</h2>          			
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultrices, leo non auctor consectetur, turpis est ultricies orci, 
            	ac rhoncus arcu magna sit amet est. Maecenas porta ante eu tellus accumsan, at suscipit est efficitur. Lorem ipsum dolor sit amet, 
            	consectetur adipiscing elit. Praesent condimentum mattis mauris, non facilisis mauris mollis quis.</p>
            	<a href="tradicional.html" class="btn btn-danger">Ver Mais</a>
            </div>            		
            <div class="col-sm-4">
            	<a href="vegetariano.html" class="thumbnail home-thumbnail">
            		<img src="<?php echo base_url();?>static/img/mini02.jpg" alt="Refeição Vegetariana" class="img-responsive">
            	</a>          	
            	<h2>Vegetariano</h2>           			
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultrices, leo non auctor consectetur, 
            	turpis est ultricies orci, ac rhoncus arcu magna sit amet est. Maecenas porta ante eu tellus accumsan, at suscipit est efficitur. 
            	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent condimentum mattis mauris, non facilisis mauris mollis quis.</p>
            	<a href="<?php echo base_url();?>static/vegetariano.html" class="btn btn-danger">Ver Mais</a>
            </div>
            <div class="col-sm-4">
            	<a href="vegano.html" class="thumbnail home-thumbnail">
            		<img src="<?php echo base_url();?>static/img/mini03.jpg" alt="Refeição Vegana" class="img-responsive">
            	</a>
            	<h2>Vegano</h2>         			
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultrices, leo non auctor consectetur, turpis est ultricies orci, 
            	ac rhoncus arcu magna sit amet est. Maecenas porta ante eu tellus accumsan, at suscipit est efficitur. Lorem ipsum dolor sit amet, 
            	consectetur adipiscing elit. Praesent condimentum mattis mauris, non facilisis mauris mollis quis.</p>
            	<a href="vegano.html" class="btn btn-danger">Ver Mais</a>
            </div>
            <div  id="articleTwo" class="col-md-12">
            	<h2>Serviços Oferecidos</h2>
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultrices, leo non auctor consectetur, turpis est ultricies orci, 
            	ac rhoncus arcu magna sit amet est. Maecenas porta ante eu tellus accumsan, at suscipit est efficitur. Lorem ipsum dolor sit amet, 
            	consectetur adipiscing elit. Praesent condimentum mattis mauris, non facilisis mauris mollis quis.</p>
            </div>
            <div class="col-sm-6">
            	<a href="buffet.html" class="thumbnail home-thumbnail">
            		<img src="<?php echo base_url();?>static/img/mini02.jpg" alt="Serviço Buffet" class="img-responsive">
            	</a>
            	<h2>Buffet</h2>           			
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultrices, leo non auctor consectetur, turpis est ultricies orci, 
            	ac rhoncus arcu magna sit amet est. Maecenas porta ante eu tellus accumsan, at suscipit est efficitur. Lorem ipsum dolor sit amet, 
            	consectetur adipiscing elit. Praesent condimentum mattis mauris, non facilisis mauris mollis quis.</p>
            	<a href="buffet.html" class="btn btn-danger">Detalhes</a>
            </div>            		
            <div class="col-sm-6">
            	<a href="delivery.html" class="thumbnail home-thumbnail">
            		<img src="<?php echo base_url();?>static/img/mini03.jpg" alt="Serviço Delivery" class="img-responsive">
            	</a>
            	<h2>Delivery</h2>            			
            	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultrices, leo non auctor consectetur, turpis est ultricies orci, 
            	ac rhoncus arcu magna sit amet est. Maecenas porta ante eu tellus accumsan, at suscipit est efficitur. Lorem ipsum dolor sit amet, 
            	consectetur adipiscing elit. Praesent condimentum mattis mauris, non facilisis mauris mollis quis.</p>
            	<a href="<?php echo base_url();?>static/delivery.html" class="btn btn-danger">Pedir já</a>
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