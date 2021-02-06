<?php 
error_reporting(E_ALL ^ E_NOTICE);
require_once('conexion.php');
?>
 <?php
$max=12;
$pag=0;
if(isset($_GET[pag]) && $_GET[pag] <>""){
$pag=$_GET[pag];
}
$inicio=$pag * $max;
$query=" SELECT * FROM productos ORDER BY fecha DESC";
$query_limit= $query ." LIMIT $inicio,$max";
$resource = $conn->query($query_limit);
if (isset($_GET[total])) {
$total = $_GET[total];
} else {
$resource_total = $conn -> query($query);
$total = $resource_total->num_rows;
}
$total_pag = ceil($total/$max)-1;
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("head.php");?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">

  </head>
  <body>
   
    <!-- header -->
    <?php include("header.php");?>
    <!-- fin header -->
            
    <!-- Menu Principal -->
    <?php include("menu.php");?>    
    <!-- End Menu Principal -->
    <!-- Slider Area -->
    
    <div class="slider-area wow fadeIn">
        <div class="zigzag-bottom"></div>
        <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">
            
            <div class="slide-bulletz">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="carousel-indicators slide-indicators">
                                <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                                <li data-target="#slide-list" data-slide-to="1"></li>
                                <li data-target="#slide-list" data-slide-to="2"></li>
                            </ol>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="single-slide">
                        <div class="slide-bg slide-one"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>Carrito de Compras </h2>
                                                <p>Para hacer sus pedido utilizaremos tecnologia de acuerdo a los tiempos de hoy "carrito de compras" adaptado a sus necesidades</p>
                                                <a href="tienda.php" class="readmore">Visite la tienda <i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-two"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>Compre desde su casa</h2>
                                                <p>Nuestro sitio web ha sido creado para llevar a su hogar nuestro servicio integral e innovador en la venta de nuestros platillos a domicilio.</p>
                                                <a href="registro.php" class="readmore">Registrese En Nuestro Sitio <i class="fa fa-users"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-three"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>¿Dudas En su compra?</h2>
                                                <p>Déjenos su consulta y pronto nos comunicaremos con usted</p>
                                                <p>Puede escribirnos a través de nuestro formulario web</p>
                                                <a href="contacto.php" class="readmore">Llene EL Formulario</a>
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
    </div> <!-- End slider area -->
    
    <div class="promo-area wow fadeIn">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
               <h2 class="section-title wow">Nosotros</h2>
               <article class="col-md-6 wow fadeIn">
                   <h3>Reciba sus productos en la comodidad de su hogar</h3>
                   <p>Nuestro servicio de cafeteria y comida a domicilio a través de COFFE PARK le proporciona la seguridad y calidad en sus compras desde la comodidad de su hogar, oficina o lugar de trabajo, usted puede hacer su pedido via internet con nuestro moderno sistema de "carrito de compras" incorporado a este sitioweb.</p>
                   <a href="nosotros.php" class="readmore">Lea mas de Nosotros</a>
               </article>
               <article class="col-md-6 wow fadeIn">
                   <h3>Reparto a Domicilio (Desayunos, comidas, postres)</h3>
                   <ul class="list-unstyled">
                       <li><b>Compra Mínima:</b> La cantidad mínima de compra es $ 15.000.</li>
                       <li><b>Días de Entrega:</b>De Lunes a Sabado.</li>
                       <li><b>Horarios de Pedidos:</b> Coffe Park entrega su pedido durante las tardes, mañanas y noches.</li>
                       <li><b>Forma de Pago:</b> Una vez confirmado su pedido, usted recibira sus productos al recepcionar su pedido. El pago se hará en efectivo, cheque o transferencia bancaria.</li>
                       <li><b>Carrito de Compras:</b> Para hacer sus pedido utilizaremos tecnologia de acuerdo a los tiempos de hoy "carrito de compras" adaptado a sus necesidades</li>
                   </ul>
               </article>
            </div>
        </div>
    </div> <!-- End promo area -->

    <!--SECCION DE DESCRIPCION LUGAR-->
    
        <section class="seccion contenedor">
            <h2 class="estiloh2">El mejor lugar para comer en Pachuca de Soto</h2>
            <center>
                <p>
                    Una cafeteria que esta en constante evolucion aunque nuestro estilo lo catalogamos como vintage. Si gustas de pasar
                    un rato agradable con tu pareja, familia o amigos, no dudes en contactarnos para poder darte un servicio de calidad 
                    con el cual te quedaras con ganas de mas. 
                    Te esperamos una vez terminada la situacion actual. O comunicate con nosotros para poder agendar una cita ya que solo operamos 
                    con el 20% de nuestra capacidad de servicio.
                </p>
            </center>
        </section>
    
    <br><br>
<!--ENTRADA MAPA-->
    <div id="mapa" class="mapa">
        <h2 class="estiloh2">Ubicación</h2>
        <center>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3746.3075009168338!2d-98.73549368489597!3d20.121214986496998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d109e46be55113%3A0x4a7403ed182c054c!2sCoffee%20Park%20612!5e0!3m2!1ses!2smx!4v1601622691505!5m2!1ses!2smx"
            width="95%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0">
        </iframe>
        </center>
    </div>
<!--FIN MAPA-->

    <br><br>                

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <h3 class="cofis">Coffe Park Pachuca</h3>
            <div class="bottomNormal">
                <a href="tienda.php" target="_blank"><i>Tienda</i></a>
            </div>
        </div>
    </div>
    <br><br>                
    <!-- Footer -->
    <?php include("footer.php");?>
    <!--End Footer -->
    <!-- JS -->
    <?php include("js.php");?><!-- End JS -->
  </body>
</html>