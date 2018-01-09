<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">



    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <meta name="description" content="">



    <meta name="author" content="">


  <title>Auto Cred Car</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">

  <link href="css/responsive2.css" rel="stylesheet"  media=" (min-device-width:300px) and (max-device-width:500px)">
  <link href="css/responsive3.css" rel="stylesheet"  media=" (min-device-width:501px) and (max-device-width:700px)">
  <link href="css/carousel.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.flexisel.js"></script>
  <script type="text/javascript" src="js/carousel.js"></script>
  <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script>

<script type="text/javascript">
    $(function(){
       $(".sobre").click(function(){
         $('html,body').animate({
             scrollTop:$("#about").offset().top
         },2000);
       });
    });

     $(function(){
       $(".contact").click(function(){
         $('html,body').animate({
             scrollTop:$("#contact").offset().top
         },2000);
       });
    });

      $(function(){
       $(".consulta").click(function(){
         $('html,body').animate({
             scrollTop:$("#explore").offset().top
         },2000);
       });
    });



           $(document).ready(function() {

      /* Every time the window is scrolled ... */
      $(window).scroll( function(){

          /* Check the location of each desired element */
          $('.lazy').each( function(i){

              var bottom_of_object = $(this).offset().top + $(this).outerHeight();
              var bottom_of_window = $(window).scrollTop() + $(window).height();

              /* If the object is completely visible in the window, fade it it */
              if( bottom_of_window > bottom_of_object ){

                  $(this).animate({'opacity':'1'},500);
              }
          });
      });
});




</script>


    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="http://52.207.244.218/sistema/webfiles/img/favicon.png">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">

    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">

    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">

    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

</head><!--/head-->

<body>

	<header id="header" role="banner">

		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">

						<!-- <a href="#"><i class="fa fa-twitter"></i></a>

						<a href="#"><i class="fa fa-facebook"></i></a>

						<a href="#"><i class="fa fa-google-plus"></i></a>

						<a href="#"><i class="fa fa-youtube"></i></a> -->

					</div>
				</div>
		        <div class="row">
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

		                    <span class="sr-only">Toggle navigation</span>

		                    <span class="icon-bar"></span>

		                    <span class="icon-bar"></span>

		                    <span class="icon-bar"></span>

		                </button>

                            <a class="navbar-brand" href="index.php">

		                	<img class="img-responsive" src="images/logo.png" alt="logo">

		                	<img style="margin-top: 200px; margin-left: 25px;" width="110" height="110" src="http://52.207.244.218/sistema/webfiles/img/selo.png" />
		                </a>



		            </div>

		           <div class="collapse navbar-collapse fixed">

		                <ul class="nav navbar-nav navbar-right">

		                    <li class="scroll active"><a href="" onclick="home();">Home</a></li>

		                    <li><a href="" onclick="consulta();">Consultas</a></li>

		                    <li class="sobre"><a  href="">Sobre</a></li>

		                    <li><a href="" onclick="entrar();">Acessar</a></li>

		                    <li class="contact"><a href="" >Contato</a></li>

		                </ul>

                        <ul id="consultaUl">

                            <li class="consulta">
                                <a>
                                    <img width="58" src="images/seta.png" class="image_seta">
                                </a>
                            </li>
                        </ul>
		            </div>

		        </div>

	        </div>

        </div>

    </header>
    <!--/#header-->
    <section id="home">
		<div id="main-slider" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div>
					<img  style="height:600px"class="img-responsive" src="images/consuta.jpeg" alt="slider" >

					<div class="carousel-caption lazy">

						<h1 id="consulta" >Faça sua consulta! </h1>

					</div>

				</div>

			</div>
		</div>

    </section>
	<!--/#home-->

	<section>

		<div class="container">
				<div class="row">
					<h2 class="text-center titulo lazy">Consultas AUTO</h2>
				</div>
        <div class="principal">
          <div >
            <div>
              <ul id="ulConsulta">
              <div class="row">
                  <li>
                    <div class="col-md-3 divPrincipal lazy">
                        <div class="card" >
                            <div class="col-md-4 col-xs-2"><img src="images/autocompleta.svg" class="image-svg" alt=""></div>
                            <div class="col-md-8">
                                 <h1><strong>Auto Completa</strong>   </h1>
                                       <p>
                                             Consulta de veículos a nível nacional, por meio da placa, retorna informações completas para Laudos, Perícias, Vistorias e Comercialização de Automóveis.
                                       </p>
                            </div>
                              <div class="botoes" data-toggle="modal" data-target=".autocompleta">
                                <input onclick="entrar();"  type="button" class="btnConsultar" name="btnConsultar" value="Consultar"/>
                                <input type="button" class="btnSaibaMais" name="btnSaibaMais" value="Saiba Mais"/>
                              </div>
                        </div>
                    </div>
                  </li>
                  <li>
        					<div class="col-md-3 divPrincipal lazy">
        						<div class="card"  >
        							<div class="col-md-4 col-xs-2"><img src="images/autopericia.svg" class="image-svg" alt=""></div>
        							<div class="col-md-8">
                                         <h1><strong>Auto Perícia</strong></h1>
                                        <p>
                                            Consulta de veículos a nível nacional, por meio da placa, retorna informações necessárias para Laudos, Perícias, Vistorias e Comercialização de Automóveis.
                                        </p>
                                    </div>
                      <div class="botoes" data-toggle="modal" data-target=".autopericia">
                        <input  onclick="entrar();" type="button" class="btnConsultar" name="btnConsultar" value="Consultar"/>

                        <input type="button" class="btnSaibaMais" name="btnSaibaMais" value="Saiba Mais"/>
                      </div>
        						</div>
        					</div>
                  </li>
                  <li>
        					<div class="col-md-3 divPrincipal lazy">
        						<div class="card"  >
        							<div class="col-md-4 col-xs-2"><img src="images/autobaseestadual.svg" class="image-svg"  alt=""></div>
        							<div class="col-md-8">
                                         <h1><strong>Auto Base Estudal</strong></h1>
                                        <p>
                                            Consulta sobre as características dos veículos em seu Estado atual, assim como Restrições vinculadas à ele.
                                        </p>
                                    </div>
                      <div class="botoes" data-toggle="modal" data-target=".autobaseestadual">
                        <input onclick="entrar();" type="button" class="btnConsultar" name="btnConsultar" value="Consultar"/>
                        <input type="button" class="btnSaibaMais" name="btnSaibaMais" value="Saiba Mais"/>
                      </div>
        						</div>
        					</div>
                  </li>
                  <li>
        					<div class="col-md-3 divPrincipal lazy">
        						<div class="card"  data-toggle="modal" data-target=".binleilao">
        							<div class="col-md-4 col-xs-2"><img src="images/binleilao.svg" class="image-svg" alt=""></div>
        							<div class="col-md-8">
                                        <h1><strong>Auto Bin + Leilão</strong></h1>
                                        <p>
                                            Consulta nível nacional por meio do CPF/CNPJ sobre cheques sem fundos, pendências e restrições financeiras, dívidas vencidas, duplicatas e endereço de cadastro.
                                        </p>
                                    </div>
        						</div>
                   <div class="botoes" data-toggle="modal" data-target=".binleilao">
                      <input onclick="entrar();" type="button" class="btnConsultar" name="btnConsultar" value="Consultar"/>
                      <input type="button" class="btnSaibaMais" name="btnSaibaMais" value="Saiba Mais"/>
                    </div>
        					</div>
                  </li>
        				</div>
              </ul>

          </div>
        </div>
      </div>


				<div class="row"  data-anijs="if: scroll, on: window, do: rollIn animated, before: $scrollReveal repeat">
					<h2 class="text-center titulo  lazy">Consultas Crédito</h2>
				</div>
        <div class="principal" data-anijs="if: scroll, on: window, do: rollIn animated, before: $scrollReveal repeat" >
          <div>
            <div >
              <ul id="flexiselDemo1" class="nbs-flexisel-ul" style="display:block">
                <div class="row">
                  <li>
                    <div class="col-md-3 divPrincipal lazy">
          						<div class="card" >
          							<div class="col-md-4 col-xs-2"><img src="images/creditomix.svg" class="image-svg" alt=""></div>
          							<div class="col-md-8 lazy">
                                        <h1><strong>Crédito Mix</strong></h1></div>
                                    <p>
                                        Consulta nível nacional por meio do CPF/CNPJ sobre cheques sem fundos, pendências e restrições financeiras, dívidas vencidas, duplicatas e endereço de cadastro.

                                    </p>
                        <div class="botoes" data-toggle="modal" data-target=".creditomix">
                          <input onclick="entrar();" type="button" class="btnConsultar" name="btnConsultar" value="Consultar"/>
                          <input type="button" class="btnSaibaMais" name="btnSaibaMais" value="Saiba Mais"/>
                        </div>
          						</div>
          					</div>
                  </li>
        					<li>
                    <div class="col-md-3 divPrincipal lazy">
          						<div class="card">
          							<div class="col-md-4 col-xs-2"><img src="images/mixcompleta.svg" class="image-svg" alt=""></div>
          						<div class="col-md-8">
                                        <h1><strong>Mix Completa</strong></h1></div>
                                    <p>
                                       Consulta nível nacional por meio do CPF/CNPJ sobre cheques sem fundos, pendências e restrições financeiras, dívidas, protestos, endereço e ultimas consultas.
                                    </p>
                        <div class="botoes" data-toggle="modal" data-target=".mixcompleta">
                          <input onclick="entrar();" type="button" class="btnConsultar" name="btnConsultar" value="Consultar"/>
                          <input type="button" class="btnSaibaMais" name="btnSaibaMais" value="Saiba Mais"/>
                        </div>
          						</div>
          					</div>
                  </li>
        					<li>
                    <div class="col-md-3 divPrincipal lazy">
          						<div class="card"  >
          							<div class="col-md-4 col-xs-2"><img src="images/localizacao.svg" class="image-svg" alt=""></div>
          							<div class="col-md-8">
                                        <h1><strong>Localização</strong></h1>
                                        <p>
                                            Busca por CPF/CNPJ, retorna dados básicos de cadastro, nome, sexo, data de nascimento, nome da mãe, entre outros, telefones, endereço, e-mail.
                                        </p>
                                    </div>
                        <div class="botoes" data-toggle="modal" data-target=".localizacao">
                          <input onclick="entrar();" type="button" class="btnConsultar" name="btnConsultar" value="Consultar"/>
                          <input type="button" class="btnSaibaMais" name="btnSaibaMais" value="Saiba Mais"/>
                        </div>
          						</div>
          					</div>
                  </li>

        				</div>
              </ul>

            </div>
          </div>
        </div>
      </div>

	</section><!--/#explore-->


  <section id="ComoConsultar">
      <div class="w-container content-wrapper lazy">

			<div data-ix="show-up-element-on-scroll-1" class="titulogrande branco lazy" style="opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); transition: opacity 300ms, transform 300ms;">Como realizar uma <strong data-new-link="true">consulta?</strong></div>

			<p data-ix="show-up-element-on-scroll-2" class="paragraph-white centered lazy" style="opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); transition: opacity 900ms, transform 900ms;">Veja nosso passo a passo e tire todas as suas dúvidas sobre como realizar uma consulta.</p>

			<div class="w-row row-4 lazy">

				<div data-ix="show-up-element-on-scroll-1" class="w-col w-col-3 column-5 lazy" style="opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); transition: opacity 300ms, transform 300ms;"><img width="100" src="images/icone1.png">


					<p class="passostitulo" >1) Faça seu cadastro gratuitamente</p>


					<p class="team-member-description">Basta preencher todos os campos solicitados. É rápido e fácil!</p>



				</div>



				<div data-ix="show-up-element-on-scroll-1" class="w-col w-col-3 column-5" style="opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); transition: opacity 300ms, transform 300ms;"><img width="100" src="https://www.consultefacil.com.br/images/icone2.png">



					<p class="passostitulo">2) Insira créditos em sua conta</p>



					<p class="team-member-description">Os créditos ficarão sempre disponíveis até que você os utilize.</p>



				</div>



				<div data-ix="show-up-element-on-scroll-1" class="w-col w-col-3 column-5" style="opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); transition: opacity 300ms, transform 300ms;"><img width="100" src="https://www.consultefacil.com.br/images/icone3.png">



					<p class="passostitulo">3) Aguarde a liberação de seu crédito</p>



					<p class="team-member-description">Assim que seus créditos forem liberados, faça o login e clique em “Realizar Consulta”</p>



				</div>



				<div data-ix="show-up-element-on-scroll-1" class="w-col w-col-3 column-5" style="opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px); transition: opacity 300ms, transform 300ms;"><img width="100" src="https://www.consultefacil.com.br/images/icone4.png">



					<p class="passostitulo">4) Agora é só realizar sua consulta!</p>



					<p class="team-member-description">Clique no tipo de consulta, digite o CPF ou CNPJ que deseja consultar e pronto!</p>



				</div>



			</div>



			<a href="consulta.php"  data-ix="show-up-element-on-scroll-1" class="button consultasbt" style="transition: background-color 0.2s ease 0s, opacity 300ms, transform 300ms; opacity: 1; transform: translateX(0px) translateY(0px) translateZ(0px);">veja nossas consultas</a>

				</div>

  </section><!--/#como consultar-->


	<section id="about">

		<div class="about-content lazy">

					<h2 class="lazy">A AutoCredCar</h2>
					<p class="lazy"> Com suporte 24 horas para você tirar as suas duvidas. conta com o maior banco de dados privados de veículos automotores da América do Sul para garantir o sucesso de seus negócios com informações precisas e eficientes e cobertura nacional.

					Constantemente orientada para soluções inovadoras em informações cadastrais de veículos automotores e de pessoas físicas e jurídicas, Auto Cred Car vem, nos últimos anos, incorporando continuamente os mais avançados serviços de identificação e de autenticidade, proporcionando melhores condições de análise de informações veiculares.. </p>



		</div>

		<div class="about-content lazy">

		<h2>Missão, visão e valores</h2>

		<p>A satisfação dos nossos clientes e a entrega de soluções de qualidade nos direcionam a se consolidar como uma das grandes empresas de informações comerciais do Brasil. E veiculares tendo assim a certeza de um grande negócio é o objetivo da Auto Cred Car.</p>

		</div>
	</section><!--/#about-->



	<section id="contact">

		<div class="contact-section">

	<!--/#map-->

<!-- 			<div class="ear-piece">



				<img class="img-responsive" src="images/ear-piece.png" alt="">



			</div> -->


			<div class="container lazy">

				<div class="row lazy contato" >

                <div class="contact-text lazy">

                    <table id="tbl_contact_text lazy">

                        <tr>

                            <td><h3>Contato</h3></td>
                            <td><h3>Matriz</h3></td>
                            <td><h3>Filial</h3></td>
                        </tr>
                        <tr>

                            <td>
                                <address>

								E-mail: vendas@autocredcar.com.br <br>

								Fone: Tel: 11 2450-7877 <br>
								Fone: Tel: 21 3090-2078 <br>
							</address>

                            </td>
                            <td>
                            <address>

								Av. Paulista,<br>

								1765 - 72,<br>

								Bela Vista<br>

								São Paulo

							</address>
                            </td>
                            <td>

                            <address>

								Av. Rio Branco,<br>

								26 - Sobreloja,<br>



								Centro<br>



								Rio de Janeiro



							</address>
                            </td>


                        </tr>


                    </table>

                </div>


                </div>




			</div>



		</div>

                <div id="map" >

			             <img class="lazy" src="images/GeoAutocredcar.png" alt=""
                            style="width:700px;height:300px">

		              </div>
                <div class="col-sm-5 lazy" style="float:right;margin-top:-350px;">

						<div id="contact-section" >

							<h3>Enviar uma mensagem</h3>



					    	<div class="status alert alert-success" style="display: none"></div>

					    	<form id="main-contact-form" class="contact-form" name="contact-form" method="POST" action="sendemail.php">

					            <div class="form-group">

					                <input type="text" name="nome" class="form-control" required="required" placeholder="Nome">

                                </div>

					            <div class="form-group">

					                <input type="email" name="email" class="form-control" required="required" placeholder="Email">

					            </div>

					            <div class="form-group">

					                <textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Escreva sua mensagem aqui"></textarea>

					            </div>

					            <div class="form-group">
					                <button class="btn btn-primary pull-right btn-submit">Enviar</button>

					            </div>
					        </form>
					    </div>
					</div>

	</section>



    <!--/#contact-->








		<?php include("modals.php"); ?>




	<footer id="footer">


        <div class="container lazy" style="text-align:center">

            	<img src="img/parceiros/selo.png" class="img_footer">

              <img src="img/parceiros/selo2.png" class="img_footer" >

        </div>



    </footer>

    <footer id="footer" style="margin-top: -20px;">



        <div class="container" >



            <div class="text-center">



                <p> AutoCredCar  &copy;2017 Todos os Direitos Reservados</p>



            </div>



        </div>



    </footer>



    <!--/#footer-->



	<script type="text/javascript" src="js/jquery.js"></script>



    <script type="text/javascript" src="js/bootstrap.min.js"></script>



  	<script type="text/javascript" src="js/gmaps.js"></script>



	<script type="text/javascript" src="js/smoothscroll.js"></script>



    <script type="text/javascript" src="js/jquery.parallax.js"></script>



    <script type="text/javascript" src="js/coundown-timer.js"></script>



    <script type="text/javascript" src="js/jquery.scrollTo.js"></script>



    <script type="text/javascript" src="js/jquery.nav.js"></script>



    <script type="text/javascript" src="js/main.js"></script>



	<script>



		$('.btn-submit').click(function(){



			event.preventDefault();







			var data = $('#main-contact-form').serialize();





			$.ajax({



				url:'sendemail.php',



				data: data,



				type: 'POST',



				dataType:"json",
				success: function(data){

					alert("Mensagem enviada com sucesso!");

					 location.href = "index.php";


				},



				error: function(data){



					alert("Mensagem não foi enviada, tente mais tarde!");


					 location.href = "index.php";



				}



			});



		});



		var entrar = function(){

			location.href="sistema/entrar";

		}
          var consulta = function(){

			location.href="consulta.php";

		}

         var home = function(){

          location.href="index.php";

        }



	</script>



</body>



</html>
