

	<!--/#scripts--> 
 
</html>


<!DOCTYPE html >
<html lang="pt-br" ng-app="helloWorld">
<head>

<script src="view/assets/js/angular.js"></script>

	<script>
		var app = angular.module("helloWorld", []);
		app.controller("helloWorld").controller("helloWorldCtrl", function ($scope){ 
			$scope.message = returnJson("?controller=Ranking&action=topRanking");
            $scope.numLimit = 10;

        for(var i = 0; i < $scope.message.length; i++){

            $scope.message[i].Ranking_score = parseInt($scope.message[i].Ranking_score);
            $scope.message[i].Ranking_mov = parseInt($scope.message[i].Ranking_mov);
        }


            //$scope.propertyName = 'Ranking_score';
            $scope.reverse = false;

            $scope.sortBy = function(propertyName) {
                $scope.reverse = ($scope.propertyName === propertyName) ? !$scope.reverse : false;
                $scope.propertyName = propertyName;
            };
	});


	</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Esta página é a interface web de um software de jogo de damas
desenvolvido como trabalho para a disciplina de Engenharia da Software II do curso de
Engenharia da Computação da UEMG – Campus Divinópolis.">
    <meta name="author" content="Aaron Alves,Allan Eduardo,Diego Santos,Élio Quadros,Frederico Neves,Iago André,Igor Santos,Lucas Ribeiro,Thales Menezes,Wilbert Silva">
	<!--title-->
    <title>Jogo de Damas | Engenharia de software II</title>
	
	<!--CSS-->
    <link href="view/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="view/assets/css/magnific-popup.css" rel="stylesheet">	
	<link href="view/assets/css/vegas.min.css" rel="stylesheet">
	<link href="view/assets/css/main.css" rel="stylesheet">
	<link href="view/assets/css/responsive.css" rel="stylesheet">
    <link href="view/assets/css/home.css" rel="stylesheet">

	<!--Google Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,700,800,100,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
	
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">


</head><!--/head-->
<body>
<div id="preload" class="preload"></div>
	<header id="navigation">
        <div class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#main-slider-wrapper">
                    	<img class="img-responsive" src="view/assets/images/logoo.png" style="width: 65px; margin-top: -15px;"  alt="logo">
                    </a>                    
                </div>	
                <nav id="main-menu" class="collapse navbar-collapse navbar-right">					
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#main-slider-wrapper">Home</a></li> </a></li>  
                        <li><a href="#support-us">O jogo</a></li>
                        <li><a href="#performers">Nosso time</a></li>
                        <li><a href="#ticket">Download</a></li>
						<li><a href="#ranking">Ranking</a></li>
											
                        <li><a href="#contact-us">Deixe sua opinião</a></li>   					
                    </ul>					
                </nav>
            </div>
        </div>
    </header><!--/#navigation--> 
	
	<div id="main-slider-wrapper">
		<div id="home-section">
			<div class="overlay-bg"></div>
			<div class="container main-slider">
				<div class="slider-content">
					<div class="present">
						<p>Engenharia de SoftwareII</p>
					</div>
					<h1>Jogo de Damas</h1>
					
				</div>
			</div>
		</div><!--/#slider section-->
			
		
	</div><!--/#main-slider-wrapper-->
	<!-- Saiba mais -->
	<div id="support-us">
		<div class="container text-center">
			<div class="row section-title">
				<div class="col-sm-8 col-sm-offset-2">
					<h1>SOBRE O JOGO</h1>
					<p class="saiba-mais-fonts">Este entretenimento consiste em um jogo de damas que tem
como público alvo fãs de jogos de tabuleiro. Afim de permitir que os usuários possam se
entreter a partir de um computador pessoal jogando no modo tradicional em um tabuleiro
de 64 casas (8x8), com 12 peças para cada jogador. O jogo segue basicamente as regras das
damas tradicionais, com exceção do fato que os peões não podem comer para trás. Além
disso, as damas não se movem em longa distância. A única vantagem de uma dama sobre
uma peça normal é a capacidade de se mover e capturar para trás, bem como para frente,
uma casa do tabuleiro de cada vez. A tomada é obrigatória. A peça e a dama têm o mesmo
valor para tomar ou ser tomada. Se, no mesmo lance, se apresentar mais de um modo de
tomar, é obrigatório executar o lance que tome o maior número de peças (lei da maioria).</p>
				</div>
			</div>
		</div>
	</div><!--/#support-us-->
	<!-- Encerra saiba mais -->
	<div id="performers">
		<div class="container text-center ">
			<div class="all-performers padding">
				<h1>DESENVOLVEDORES</h1>
				<div class="row">
					<div class="col-sm-3">
						<div class="performer">
							<div class="performer-image">
								<img class="img-responsive" src="view/assets/images/performers/developer1.jpg" alt="" />
							</div>
							<div class="performer-info">
								<div class="social-icons">
									<ul class="list-inline">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<h2>Aaron Alves</h2>
								<p>Análise de Documentação
e Teste</p>
							</div>
						</div>
					</div>
					<div class="col-sm-3 bottom-space">
						<div class="performer">
							<div class="performer-image">
								<img class="img-responsive" src="view/assets/images/performers/developer2.jpg" alt="" />
							</div>
							<div class="performer-info">
								<div class="social-icons">
									<ul class="list-inline">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<h2>Allan Eduardo</h2>
								<p>Análise de Documentação
e Teste</p>
							</div>
						</div>
					</div>
					<div class="col-sm-3 bottom-space">
						<div class="performer">
							<div class="performer-image">
								<img class="img-responsive" src="view/assets/images/performers/developer3.jpg" alt="" />
							</div>
							<div class="performer-info">
								<div class="social-icons">
									<ul class="list-inline">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<h2>Igor Santos</h2>
								<p>Análise de Documentação
e Teste</p>
							</div>
						</div>
					</div>
					<div class="col-sm-3 bottom-space">
						<div class="performer">
							<div class="performer-image">
								<img class="img-responsive" src="view/assets/images/performers/developer4.jpg" alt="" />
							</div>
							<div class="performer-info">
								<div class="social-icons">
									<ul class="list-inline">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<h2>Lucas Ribeiro</h2>
								<p>Análise de Requisitos e
Testes</p>
							</div>
						</div>
					</div>
<div class="col-sm-3 bottom-space">
						<div class="performer">
							<div class="performer-image">
								<img class="img-responsive" src="view/assets/images/performers/developer5.jpg" alt="" />
							</div>
							<div class="performer-info">
								<div class="social-icons">
									<ul class="list-inline">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<h2>Iago Freitas</h2>
								<p>Análise de Requisitos e
Testes</p>
							</div>
						</div>
					</div>
<div class="col-sm-3 bottom-space">
						<div class="performer">
							<div class="performer-image">
								<img class="img-responsive" src="view/assets/images/performers/developer6.jpg" alt="" />
							</div>
							<div class="performer-info">
								<div class="social-icons">
									<ul class="list-inline">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<h2>Wilbert Silva</h2>
								<p>Análise de Requisitos e
Testes</p>
							</div>
						</div>
					</div>
<div class="col-sm-3 bottom-space">
						<div class="performer">
							<div class="performer-image">
								<img class="img-responsive" src="view/assets/images/performers/developer7.jpg" alt="" />
							</div>
							<div class="performer-info">
								<div class="social-icons">
									<ul class="list-inline">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<h2>Frederico Neves</h2>
								<p>Desenvolvimento
e Infraestrutura</p>
							</div>
						</div>
					</div>
<div class="col-sm-3 bottom-space">
						<div class="performer">
							<div class="performer-image">
								<img class="img-responsive" src="view/assets/images/performers/developer8.jpg" alt="" />
							</div>
							<div class="performer-info">
								<div class="social-icons">
									<ul class="list-inline">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<h2>Diego Santos</h2>
								<p>Desenvolvimento
e Infraestrutura</p>
							</div>
						</div>
					</div>
			<div class="col-sm-3 bottom-space">
						<div class="performer">
							<div class="performer-image">
								<img class="img-responsive" src="view/assets/images/performers/developer9.jpg" alt="" />
							</div>
							<div class="performer-info">
								<div class="social-icons">
									<ul class="list-inline">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<h2>Thales Menezes</h2>
								<p>Desenvolvimento
e Infraestrutura</p>
							</div>
						</div>
					</div>
	<div class="col-sm-3 bottom-space">
						<div class="performer">
							<div class="performer-image">
								<img class="img-responsive" src="view/assets/images/performers/developer10.jpg" alt="" />
							</div>
							<div class="performer-info">
								<div class="social-icons">
									<ul class="list-inline">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
								<h2>Élio Quadros</h2>
								<p>Desenvolvimento e
Banco de Dados</p>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div><!--/#performers-->
	
	<div id="ticket" class="parallax-section">
		<div class="overlay-bg"></div>
		<div class="container">
			<div class="ticket padding text-center">
				<div class="row section-title">
					<div class="col-sm-8 col-sm-offset-2">
						<h1>Comece jogar agora mesmo! =p </h1>
						<p class="saiba-mais-fonts center">Faça download do jogo e encare o desafio de estar entre os tops 10!</p>
                        <p class="saiba-mais-fonts center"><strong id="qtdDown"><?php echo $qtDowns; ?></strong> downloads realizados e ainda contanto...</p>
			<a href="?controller=Home&action=gameDownload"><button id="downDis" class="btn btn-large btn-info button-download">Quero jogar!</button></a>
			
					</div>
				</div>
				<div class="register row">
					<div class="col-sm-6 col-sm-offset-3">
						
					</div>
				</div>
			</div>
		</div>
	</div><!--/#ticket section-->
	
	<div id="ranking">
		<div class="container text-center">
			<div class="row section-title">
				<div class="col-sm-8 col-sm-offset-2">
					<h1>CONHEÇA NOSSOS CAMPEÕES! =)</h1>

                    <div ng-controller="helloWorldCtrl">
<table class='table table-condensed'>
    <button id="refresh" class="btn btn-large btn-info button-download">Atualizar ranking</button>
<tr>

<th>Top <select ng-model="numLimit"><option selected>Todos</option><option value='10'>10</option><option value='20'>20</option><option value='30'>30</option></select></th>
<th>Nome</th>
<th id="pont" ng-click="sortBy('Ranking_score')" style='cursor:pointer;'>Pontuação <div id='set-pont' class='glyphicon glyphicon-chevron-down'></div></th>
<th id="mov" ng-click="sortBy('Ranking_mov')" style='cursor:pointer;'>Qtd Movimentos <div id='set-mov' class='glyphicon glyphicon-chevron-up'></div></th>
<th id="time" ng-click="sortBy('Ranking_game_time')" style='cursor:pointer;'>Tempo <div id='set-time' class='glyphicon glyphicon-chevron-up'></div></th>
<th id="data"  ng-click="sortBy('Ranking_mov')" style='cursor:pointer;'>Data do record <div id='set-data' class='glyphicon glyphicon-chevron-up'></div></th>
</tr>

<tr ng-repeat="item in message | limitTo:numLimit | orderBy:propertyName:reverse">
<td> {{ $index+1}} </td>
<td> {{ item.Ranking_name}} </td>
<td> {{ item.Ranking_score}} </td>
<td> {{ item.Ranking_mov}} </td>
<td> {{ item.Ranking_game_time}} </td>
<td> {{ item.Ranking_data_reg}} </td>
</tr>



</table>
</div>

				</div>

			</div>
				
		</div>
	</div><!--/#support-us-->	
	<footer id="contact-us">			
		<div class="container">
			<div class="contact-form text-center">
				<div class="row section-title">
					<div class="col-sm-8 col-sm-offset-2">
						<h1>Agradecemos a visita!</h1>
						<p>Ajude a melhorar esta aplicaçao, envie sua sugestão!</p>
					</div>
				</div>
				<form id="contact-form" name="contact-form" method="post" action="?controller=Home&action=persistMenssager">
					<div class="row">
						<div class="form-group col-sm-4">
							<input type="text" name="name" class="form-control borda " required="required" placeholder="Nome">
						</div>
						<div class="form-group col-sm-4">
							<input type="email" name="email" class="form-control borda " required="required" placeholder="Email">
						</div>
						<div class="form-group col-sm-4">
							<input type="text" name="subject" class="form-control borda " required="required" placeholder="Assunto">
						</div>						
						<div class="form-group col-sm-12">
							<textarea name="message" id="message" required="required" class="form-control borda " rows="8" placeholder="Mensagem"></textarea>
						</div> 
					</div>				                                   
					<div class="form-group">
                            <button type="submit" class="btn btn-large btn-info button">Enviar</button>
					</div>
				</form>	
			</div>
		</div><!--/#contact-form--> 
		<div id="footer-bottom">
			<div class="container text-center">
				<p>© UEMG - Divinópolis 2016 <a href="#"></a>. Todos os direitos reservados.</p>
			</div>			
		</div>
	</footer>
	
	<!--/#scripts--> 
    <script type="text/javascript" src="view/assets/js/jquery.js"></script>
    <script type="text/javascript" src="view/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="view/assets/js/jquery.parallax.js"></script>
	<script type="text/javascript" src="view/assets/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="view/assets/js/vegas.min.js"></script> 
	<script type="text/javascript" src="view/assets/js/jquery.nav.js"></script>
    <script type="text/javascript" src="view/assets/js/main.js"></script>
    <script type="text/javascript" src="view/assets/js/rankingGeneretor.js"></script>
    <script type="text/javascript" src="view/assets/js/jsonJobs.js"></script>
    <script type="text/javascript">

        var clickMov = "";
        $("#mov").click(function() {

            if(clickMov == "down"){
                $('#set-mov').removeClass('glyphicon glyphicon-chevron-down');
                $('#set-mov').addClass('glyphicon glyphicon-chevron-up');
                clickMov = "up";


            } else {

                $('#set-mov').removeClass('glyphicon glyphicon-chevron-up');
                $('#set-mov').addClass('glyphicon glyphicon-chevron-down');
                clickMov = "down";
            }
        });



	 var time = "";
        $("#time").click(function() {

            if(clickMov == "down"){
                $('#set-time').removeClass('glyphicon glyphicon-chevron-down');
                $('#set-time').addClass('glyphicon glyphicon-chevron-up');
                clickMov = "up";


            } else {

                $('#set-time').removeClass('glyphicon glyphicon-chevron-up');
                $('#set-time').addClass('glyphicon glyphicon-chevron-down');
                clickMov = "down";
            }
        });

        var clickPont = "";
        $("#pont").click(function() {


            if(clickPont == "down"){
                $('#set-pont').removeClass('glyphicon glyphicon-chevron-up');
                $('#set-pont').addClass('glyphicon glyphicon-chevron-down');
                clickPont = "up";

                window.location.href = "?controller=Home&action=index&limit="+arrayFilter['limit']+"&pont=up&mov="+arrayFilter['mov']+"&data="+arrayFilter['data']+"#ranking";

            } else {

                $('#set-pont').removeClass('glyphicon glyphicon-chevron-down');
                $('#set-pont').addClass('glyphicon glyphicon-chevron-up');
                clickPont = "down";

                window.location.href = "?controller=Home&action=index&limit="+arrayFilter['limit']+"&pont=down&mov="+arrayFilter['mov']+"&data="+arrayFilter['data']+"#ranking";
            }


        });

        var clickData = "";
        $("#data").click(function() {

            if(clickData == "down"){
                $('#set-data').removeClass('glyphicon glyphicon-chevron-down');
                $('#set-data').addClass('glyphicon glyphicon-chevron-up');
                clickData = "up";

                window.location.href = "?controller=Home&action=index&limit="+arrayFilter['limit']+"&pont="+arrayFilter['pont']+"&mov="+arrayFilter['mov']+"&data=up#ranking";

            } else {

                $('#set-data').removeClass('glyphicon glyphicon-chevron-up');
                $('#set-data').addClass('glyphicon glyphicon-chevron-down');
                clickData = "down";

                window.location.href = "?controller=Home&action=index&limit="+arrayFilter['limit']+"&pont="+arrayFilter['pont']+"&mov="+arrayFilter['mov']+"&data=down#ranking";
            }

        });



        $("#refresh").click(function() {

            location.reload();
        });

        $("#btn-down").click(function() {

           var increment = $("#qtdDown").text();

            $("#qtdDown").html(increment);
           alert(increment);
        });

        // Este evendo é acionado após o carregamento da página
        jQuery(window).load(function() {
            //Após a leitura da pagina o evento fadeOut do loader é acionado, esta com delay para ser perceptivo em ambiente fora do servidor.
            jQuery("#preload").delay(2000).fadeOut("slow");
        });

    </script>
</body>
</html>








	





    
    



