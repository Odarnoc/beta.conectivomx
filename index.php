<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!-- Title -->
    <title>ConectivoMX</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="css/slider/slider.css">
	
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>    
    <script src="js/estado_minicipios/functions.js"></script>
    <script src="js/estado_minicipios/functionsM.js"></script>
    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                facebook: "1509407995788075", // Facebook page ID
                whatsapp: "+52(317)100-0454", // WhatsApp number
                call: "+523331667321", // Call phone number
                email: "ant.qa3@gmail.com", // Email
                telegram: "jhgjh", // Telegram bot username
                snapchat: "kig", // Snapchat username
                line: "asd", // Line QR code URL
                vkontakte: "as", // VKontakte page name

                call_to_action: "Contactanos", // Call to action
                button_color: "#FF6550", // Color of button
                position: "absolute", // Position may be 'right' or 'left'
                order: "facebook,whatsapp,call,email,telegram,snapchat,line,vkontakte", // Order of buttons
            };
            var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /WhatsHelp.io widget -->
      <link rel="stylesheet" type="text/css" href="./slick/slick.css">
      <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
      <style type="text/css">
        html, body {
          margin: 0;
          padding: 0;
        }

        * {
          box-sizing: border-box;
        }

        .slider {
            width: 90%;
            margin: 100px auto;
        }

        .slick-slide {
          margin: 0px 20px;
        }

        .slick-slide img {
          width: 100%;
        }

        .slick-prev:before,
        .slick-next:before {
          color: black;
        }


        .slick-slide {
          transition: all ease-in-out .3s;
          opacity: .2;
        }

        .slick-active {
          opacity: .5;
        }

        .slick-current {
          opacity: 1;
        }
      </style>
    <?php 
        if (!isset($_GET['m'])) {
         echo 
            "<script>
                $(document).ready(function(){
                $('#myModal').modal('show')
                });
            </script>";   
        }
        
    ?>

</head>


<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>
    
    
    <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Recibe Promociones Exclusivas!!!!</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="/scripts_php/registrar_visitante.php" method="post">
                    <p style="margin-top:5px;">Nombre</p>
                    <input class="form-control form-control" type="text" style="width: 100%;" name="nombreM">
                    <p style="margin-top:5px;">Email</p>
                    <input class="form-control form-control" type="text" style="width: 100%;" name="correoM"><br>
                    <select class="custom-select" name="estadosM" id="estadosM" style="width: 100%;">
                        <option selected value="0">Estado</option>
                    </select><br><br>
                    
                    <select class="custom-select" name="municipiosM" id="municipiosM" style="width: 100%;">
                        <option selected value="0">Municipio</option>
                    </select><br><br>
                    <p>Deseas obtener información sobre nuestros partners?</p>
                    <div class="form-check-inline">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="novedades" value="1">SI
                      </label>
                    </div>
    
                    <div class="form-check-inline">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="novedades" value="0">NO
                      </label>
                    </div><br><br>
                    <p>Al elegir la opción Siguiente, aceptas los <a href="/terminos_uso"><b>Terminos y condiciones de uso de la información</b></a> de ConectivoMX</p>
                    <button type="submit" class="btn btn-primary" onclick="ocultar_modal();" style="float:right;">Siguiente</button>
                </form>
            </div>
          </div>
        </div>
      </div>
	
	<!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Introdusca su busqueda">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** header area ***** -->
    <header class="header_area" id="header" style="border-bottom: 3px solid purple;background-color:rgba(89,37,140,0.99);">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg"> 
						<a class="navbar-brand" href="index.php">
						<img class="logoInicial" src="img/core-img/logoC.png" alt="ConectivoMX">
						</a>					
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="dorne-signin-btn">
                                    <a class="nav-link" href="index.php">INICIO <span class="sr-only">(current)</span></a>
                                </li>
								<li class="dorne-signin-btn">
                                    <a class="nav-link" href="http://conectivomx.com/conocenos.php">CONOCENOS <span class="sr-only">(current)</span></a>
                                </li>
								<li class="dorne-signin-btn">
                                    <a class="nav-link" href="http://conectivomx.com/eventos.php">EVENTOS <span class="sr-only">(current)</span></a>
                                </li>
								<li class="dorne-signin-btn">
                                    <a class="nav-link" href="http://conectivomx.com/noticias.php">NOTICIAS <span class="sr-only">(current)</span></a>
                                </li>
								<li class="dorne-signin-btn">
                                    <a class="nav-link" href="http://conectivomx.com/contactos.php">CONTACTO <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="dorne-signin-btn">
                                    <a class="nav-link" href="/logn_in.php"><i class="fa fa-user" aria-hidden="true"></i> Iniciar Iniciar sesión<span class="sr-only">(current)</span></a>
                                </li>
                                
                            </ul>
							<!-- Search btn -->
                            <div class="dorne-search-btn">
                                <a class="nav-link" id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> Buscar</a>
                            </div>
                        </div>
						
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    
    <!-- ***** Area de Slider ***** -->
	<div class="contenedor">
		<ul>
			<li><img src="img/slider/1.jpg" alt=""></li>
			<li><img src="img/slider/2.jpg" alt=""></li>
		</ul>
	</div>
    <!-- ***** Final area de Slider ***** -->
	
	<!-- ***** Area de busqueda ***** -->
    <section class="Buqueda" style="width:100%">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <!-- Hero Search Form -->
                    <div class="hero-search-form" style="margin-top: 50px;margin-bottom: 50px;">
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent" >
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab" style="width: 97%;">
                                <h6>¿Que desea buscar?</h6>
                                <form action="/busqueda.php" method="get">
                                    <select class="custom-select" name="estados" id="estados">
                                        <option selected value="0">Estado</option>
                                    </select>
                                    <select class="custom-select" name="municipios" id="municipios">
                                        <option selected value="0">Municipio</option>
                                    </select>
                                    <select class="custom-select" name="categoria" id="categoria">
                                        <option selected value="0">Categoria</option>
                                        <option value="1">Abarrotes</option>
                                        <option value="2">Abastecedoras</option>
                                        <option value="74">Academias Artísticas</option>
                                        <option value="3">Agencias de Publicidad</option> 
                                        <option value="4">Agencias de Marketing</option>
                                        <option value="5">Agencias de Modelos y Edecanes</option> 
                                        <option value="6">Agencias de Seguros</option> 
                                        <option value="7">Agencias de Viajes</option>
                                        <option value="8">Agroindustrias</option> 
                                        <option value="9">Alimentos y Bebidas</option>
                                        <option value="10">Almacenes y Bodegas</option> 
                                        <option value="70">Articulos de Regalos y Novedades</option>
                                        <option value="11">Autopartes</option>
                                        <option value="12">Arte y Cultura</option> 
                                        <option value="13">Arquitectura y Construcci&oacuten</option>
                                        <option value="14">Bares y Antros</option> 
                                        <option value="15">Bancos y Financieras</option>
                                        <option value="69">Boutique</option>
                                        <option value="16">Carnicerias</option> 
                                        <option value="17">Carpinterias</option> 
                                        <option value="18">Cines</option> 
                                        <option value="19">Centros Comerciales</option> 
                                        <option value="20">Comercializadoras</option>
                                        <option value="21">Computaci&oacuten y Sistemas</option> 
                                        <option value="22">Construcci&oacuten</option>
                                        <option value="23">Despachos Jur&iacutedicos</option> 
                                        <option value="24">Electricidad y Agua</option>
                                        <option value="72">Electr&oacutenicos</option>
                                        <option value="25">Escuelas</option>
                                        <option value="26">Fabricantes de Ropa y Calzado</option> 
                                        <option value="27">Fabricantes de Tequila</option>
                                        <option value="28">Fabricantes de Muebles</option> 
                                        <option value="29">Farmacias</option>
                                        <option value="30">Ferreter&iacuteas</option>
                                        <option value="75">Florer&iacuteas</option>
                                        <option value="31">Ganader&iacuteas</option>
                                        <option value="32">Herrerias</option>
                                        <option value="33">Hoteles</option>
                                        <option value="34">Hospitales y Cl&iacutenicas</option>
                                        <option value="35">Importaci&oacuten y Exportaci&oacuten</option>
                                        <option value="36">Inmobiliarias</option>
                                        <option value="37">Log&iacutestica </option>
                                        <option value="38">Mantenimiento</option>
                                        <option value="39">Miner&iacutea y Metal&uacutergicas</option>                  
                                        <option value="40">M&uacutesicos y Artistas</option>
                                        <option value="41">Muebler&iacuteas</option>
                                        <option value="42">Panader&iacuteas</option>
                                        <option value="43">Pasteler&iacuteas</option>
                                        <option value="44">Papeler&iacuteas</option>
                                        <option value="45">Parques y Lugares de Esparcimiento</option>
                                        <option value="46">Pescader&iacuteas</option>
                                        <option value="47">Petr&oacuteleo y Derivados</option>
                                        <option value="48">Productores y Proveedores de Alimentos y Bebidas</option>
                                        <option value="49">Reposter&iacuteas</option>
                                        <option value="50">Representaciones Art&iacutesticas</option>
                                        <option value="63">Restaurantes</option>
                                        <option value="51">Salones para Eventos</option>
                                        <option value="52">Servicios Art&iacutesticos y Musicales</option>
                                        <option value="53">Salud y Belleza</option>
                                        <option value="54">Servicios Especializados</option>
                                        <option value="68">Servicios Funerarios</option>
                                        <option value="55">Servicios de Limpieza</option>
                                        <option value="56">Servicio de Paqueter&iacutea</option>
                                        <option value="57">Servicio de Transporte</option>
                                        <option value="58">Servicio de Televici&oacuten</option>
                                        <option value="76">Spa</option>
                                        <option value="59">Suministros Industriales</option>
                                        <option value="60">Telecomunicaci&oacuten</option>
                                        <option value="61">Televisoras y Radio</option>
                                        <option value="71">Tiendas de Deportes</option> 
                                        <option value="62">Tiendas de Ropa</option>
                                        <option value="64">Veterinarias</option>
                                        <option value="65">Vidrier&iacuteas</option>
                                        <option value="66">Vinater&iacuteas</option>
                                        <option value="67">Zapater&iacuteas</option>
                                    </select>
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Buscar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Hero Social Btn -->
        <div class="hero-social-btn" style="left:0px ;top: 30px;">
            <div class="social-btns" style="background-color: rgba(0,0,0,0.5);width:60px; height:240px">
                <a href="#"><i class="fa fa-youtube" aria-haspopup="true" style="margin-left:30px ;margin-top:10px;"></i></a>
                <a href="#"><i class="fa fa-google" aria-hidden="true"style="margin-left:30px ;"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"style="margin-left:30px ;"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-haspopup="true"style="margin-left:30px ;"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-haspopup="true"style="margin-left:30px ;"></i></a>
            </div>
        </div>
    </section>
	
    <!-- ***** Final area de busqueda ***** -->
    
    <!-- ***** About Area Start ***** -->
    <section class="dorne-about-area section-padding-0-100" style="background-image: url(img/bg-img/bg-about.jpg);">
        <div class="container" style="background-color: rgba(255,255,255,0.2);">
            <div class="row" >
                <div class="col-12">
                    <div class="about-content text-center" style="margin-top: 50px;">
                        <h2 >Encuentra Todo con <br><span>Conectivomx</span></h2>
                        <p>Conectivomx es una plataforma donde podrás encontrar empresas de cualquier categoría y hacer verdaderos negocios en linea.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area End ***** -->

    <!-- ***** Clients Area Start ***** -->
    <div class="about-content text-center" style="margin-top: 50px;">
        <h2> Nuestros partners</h2>
    </div>
    <section class="center slider" style="margin-bottom:100px;">
        <div>
            <a href="supagina1.com"><img src="http://placehold.it/350x300?text=1"></a>
        </div>
        <div>
            <a href="supagina2.com"><img src="http://placehold.it/350x300?text=2"></a>
        </div>
        <div>
            <a href="supagina3.com"><img src="http://placehold.it/350x300?text=3"></a>
        </div>
        <div>
            <a href="supagina4.com"><img src="http://placehold.it/350x300?text=4"></a>
        </div>
        <div>
            <a href="supagina5.com"><img src="http://placehold.it/350x300?text=5"></a>
        </div>
        <div>
            <a href="supagina6.com"><img src="http://placehold.it/350x300?text=6"></a>
        </div>
        <div>
            <a href="supagina7.com"><img src="http://placehold.it/350x300?text=7"></a>
        </div>
        <div>
            <a href="supagina8.com"><img src="http://placehold.it/350x300?text=8"></a>
        </div>
        <div>
            <a href="supagina9.com"><img src="http://placehold.it/350x300?text=9"></a>
        </div>
    </section>
    <!-- ***** Clients Area End ***** -->
    
    <!-- ***** Area de video ***** -->
    <div class="contenedorvideo" style="height: 0;overflow: hidden;padding-bottom: 56.25%;padding-top: 30px;position: relative;">
        <iframe width="720" height="480" src="https://www.youtube.com/embed/XmZXEG80aJI?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="height: 100%;left: 0;position: absolute;top: 0;width: 100%;"></iframe>
    </div>
	
    <!-- ***** Final area de video ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="dorne-contact-area d-md-flex" id="contact" style="align-content: center">
        <!-- Contact Form Area -->
        <div class="contact-form-area2 equal-height" style="padding: 50px 20px;-webkit-box-flex: 0;-ms-flex: 0 0 100%;flex: 0 0 100%;width: 100%;">
            <div class="contact-text">
                <h4 style="text-align: center">Ponte en contacto con nosotros</h4>
                <p style="text-align: center">Unete a nuestra comunidad de negocios</p>
                <div class="contact-info d-lg-flex">
                    <div class="single-contact-info">
                        <h6><i class="fa fa-map-signs" aria-hidden="true"></i> Avenida Guadalajara, Jal</h6>
                        <h6><i class="fa fa-map-signs" aria-hidden="true"></i> No. 25-33</h6>
                    </div>
                    <div class="single-contact-info">
                        <h6><i class="fa fa-envelope-o" aria-hidden="true"></i> info.conectivomx@gmail.com</h6>
                        <h6><i class="fa fa-phone" aria-hidden="true"></i> 3324107713</h6>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <div class="contact-form-title">
                    <h6>Contacto de Negocios</h6>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Correo electronico">
                        </div>
                        <div class="col-12">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="col-12">
                            <textarea name="message" class="form-control" id="Mensaje" cols="30" rows="10" placeholder="Tu Mensaje"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn dorne-btn">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area End ***** -->

    <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area" style="background-color:black">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
						<img src="img/core-img/logoC2.png" style="width: 30%;height: auto; ">
                        <p>
						© 2017 Conectivo MX. Professional Advertising Company. All Rights Reserved.
                        </p>
                    </div>
                    <div class="footer-social-btns">
                        <a href="#"><i class="fa fa-youtube" aria-haspopup="true" style=""></i></a>
						<a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
						<a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>

    <script src="./slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).on('ready', function() {

              $('.center').slick({
              centerMode: true,
              centerPadding: '60px',
              slidesToShow: 5,
              autoplay: true,
              autoplaySpeed: 3000,
              dots: true,
              responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                  }
                }
              ]
            });

        });
    </script>
    

</body>

</html>