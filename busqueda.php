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
       
       <?php include 'estilosGenerales.php' ?>

    </head>

    <body>
        <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>
	
   <?php
        include 'header.php';
    ?>
    

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
        <?php
            include 'footer.php';
            include 'scriptsGenerales.php';
        ?>

    </body>
</html>
