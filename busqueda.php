<?php
    include_once("scripts_php/conexion.php");
    $select="select empresas.*,estados.nombre as estado,municipios.nombre as municipio from empresas inner join estados on state=estados.id inner join municipios on city=municipios.id";

    if($_GET['estados']==0 && $_GET['municipios']==0 && $_GET['categoria']==0){
        //Buscando de todo
        $query = $select;
    }else{
        if($_GET['estados']==0){
            //Buscando por categoria
            $query = $select." where categoria=".$_GET['categoria'];
        }else{
            if($_GET['municipios']==0){
                if($_GET['categoria']==0){
                    //Buscando por estados
                    $query = $select." where state=".$_GET['estados'];
                }else{
                    //Buscando por estados y categoria
                    $query = $select." where state=".$_GET['estados']." && categoria=".$_GET['categoria'];
                }
            }else{
                if($_GET['categoria']==0){
                    //Buscando por estados y municipio
                    $query = $select." where state=".$_GET['estados']." && city=".$_GET['municipios'];
                }else{
                    //Buscando por estados, municipio y categoria
                    $query = $select." where state=".$_GET['estados']." && categoria=".$_GET['categoria']." && city=".$_GET['municipios'];
                }
            }
        }
    }

    $result = mysqli_query($conexion,$query);
    $row_cnt = mysqli_num_rows($result);
    
?>
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

    </head>

    <body>
        <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
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
        <div style="width: 100%;height: 160px;"></div>
        
        <!-- ***** Inicio contenido de busqueda***** -->
        
        <div class="container-fluid">
            <?php
            if($row_cnt == 0){ ?>
                <div style="width: 100%;margin-bottom:60px;">
                    <h1 style="color: red;">No se encontraron resultados de la busqueda</h1>
                </div>
            <?php
            }else{
                while ($row = mysqli_fetch_array($result)){
            ?>
                    <div class="row" style="margin-bottom:30px;
                                            ">
                        <div class="col-sm-3">
                            <img src="img/logosEmp/2.png" style="float: left; margin-top:20px;margin-bottom:20px;max-height:120px">
                            <p style="margin-left: 200px;margin-top: 35px;"><?php echo $row['name']; ?></p>
                            <p style="margin-left: 200px;"><?php echo $row['estado']; ?></p>
                            <p style="margin-left: 200px;"><?php echo $row['municipio']; ?></p>
                            <p style="margin-left: 200px;"><?php echo "Marcanos al: +". $row['phone']; ?></p>
                        </div>
                        <div class="col-sm-5">
                            <a href="https://api.whatsapp.com/send?phone=<?php echo $row['phone'] ?>"><img src="img/iconos/whats.png" style="float: left; margin-top:40px;margin-bottom:20px;max-height:60px"></a>
                            <a href="tel:+<?php echo $row['phone'] ?>"><img src="img/iconos/tel.png" style="float: left; margin-top:40px;margin-bottom:20px;max-height:60px"></a>
                        </div>
                        <?php if($row['tipo']==1){ ?>
                        <div class="col-sm-4">
                                <form action="/pofiles/basic/empresa.html" method="get">
                                    <input type="hidden" name="empresa" value="<?php echo $row['id'] ?>">
                                    <button type="submit" class="btn dorne-btn margen-btn"> Ver mas</button>
                                </form>
                            </div>
                            <?php } ?>
                        <?php if($row['tipo']==2){ ?>
                        <div class="col-sm-4">
                                <form action="/pofiles/pro/empresa.html" method="get">
                                    <input type="hidden" name="empresa" value="<?php echo $row['id'] ?>">
                                    <button type="submit" class="btn dorne-btn margen-btn"> Ver mas</button>
                                </form>
                            </div>
                            <?php } ?>
                    </div>   
                        
            <?php
                }
            }
            ?>
            
            
        </div>
        
        <!-- ***** Fin contenido de busqueda ***** -->
        
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
    </body>
</html>
