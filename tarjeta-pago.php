<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("conexion.php")?>
<?php
if(!$_SESSION[user_id]){
$_SESSION[volver]=$_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];
header("Location: login.php");
}
?>
<?php
	if(isset($_GET[idElm])&& $_GET[idElm]<>""){
		$q="DELETE FROM compras WHERE 1 AND id='$_GET[idElm]'";
		$r=$conn->query($q);
	}
      $q="SELECT * FROM compras WHERE 1 AND cliente='$_SESSION[user_id]' ORDER BY fecha DESC";
      $r = $conn->query($q);
      $t = $r->num_rows;

    $query=" SELECT id, nombre, frase_promocional, precio, codigo, categoria FROM productos ORDER BY fecha DESC";
      ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("head.php");?>
    <style>
    .descuento{
        display: none;
        background-color: greenyellow;
    }
    </style>
    <link rel="stylesheet" href="css/css_pago.css">
    <script src="js/js_pago.js"></script>
  </head>
  <body>

    <!-- header -->
    <?php include("header.php");?><!-- fin header -->
    <!-- Menu Principal -->
    <?php include("menu.php");?>
    <!-- End Menu Principal -->



    <div class="product-big-title-area wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Pago Con Tarjeta</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="product-content-right">
                        <div class="woocommerce">
                              <div class="table-responsive">

                                <div class="">
                                    <div class="modal__container">
                                      <div class="modal__featured">
                                          <svg class="nc-icon glyph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="auto" viewBox="0 0 32 32">
                                            <g><path fill="#ffffff" d="M1.293,15.293L11,5.586L12.414,7l-8,8H31v2H4.414l8,8L11,26.414l-9.707-9.707 C0.902,16.316,0.902,15.684,1.293,15.293z"></path> </g></svg>
                                          <span class="visuallyhidden">Return to Product Page</span>
                                        </button>
                                        <div class="modal__circle"></div>
                                          <img src="img/coffee.jpg" class="img_p2 modal__product" />
                                          <img src="img/LogoCoffe.svg" class="img_p modal__product" />

                                      </div>
                                      <div class="modal__content">
                                        <h2>Detales de pago</h2>

                                        <form method="post" action="confirmacion.php">
                                          <ul class="form-list">
                                            <li class="form-list__row">
                                              <label>Titular</label>
                                              <input type="text" name="" required="" />
                                            </li>
                                            <li class="form-list__row">
                                              <label>Numero de tareta</label>
                                              <div id="input--cc" class="creditcard-icon">
                                                <input type="text" name="cc_number" required="" maxlength="16" onkeypress='return validaNumericos(event)'/>
                                                <script type="text/javascript">
                                                	function validaNumericos(event) {
                                                    if(event.charCode >= 48 && event.charCode <= 57){
                                                      return true;
                                                     }
                                                     return false;        
                                                }
                                                </script>
                                              </div>
                                            </li>
                                            <li class="form-list__row form-list__row--inline">
                                              <div>
                                                <label>Fecha de vencimieto</label>
                                                <div class="form-list__input-inline">
                                                  <input type="text" name="cc_month" placeholder="MM"  minlength="2" maxlength="2" required="" onkeypress='return validaNumericos(event)'/>
                                                  <input type="text" name="cc_year" placeholder="YY"   minlength="2" maxlength="2" required="" onkeypress='return validaNumericos(event)'/>
                                                </div>
                                              </div>
                                              <div>
                                                <label>
                                                  CVV

                                                  <a href="#cvv-modal" class="button--transparent modal-open button--info">
                                                    <svg class="nc-icon glyph" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16"><g> <path fill="#35a4fb" d="M8,0C3.6,0,0,3.6,0,8s3.6,8,8,8s8-3.6,8-8S12.4,0,8,0z M8,13c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1s1,0.4,1,1 C9,12.6,8.6,13,8,13z M9.5,8.4C9,8.7,9,8.8,9,9v1H7V9c0-1.3,0.8-1.9,1.4-2.3C8.9,6.4,9,6.3,9,6c0-0.6-0.4-1-1-1 C7.6,5,7.3,5.2,7.1,5.5L6.6,6.4l-1.7-1l0.5-0.9C5.9,3.6,6.9,3,8,3c1.7,0,3,1.3,3,3C11,7.4,10.1,8,9.5,8.4z"></path> </g></svg>
                                                    <span class="visuallyhidden">Que es CVV?</span>
                                                  </a>
                                                </label>
                                                <input type="text" name="cc_cvc" placeholder="123"  minlength="3" maxlength="3" required="" onkeypress='return validaNumericos(event)' />
                                              </div>
                                            </li>
                                            <li class="form-list__row form-list__row--agree">
                                              <label>
                                                <input type="checkbox" disabled="true" name="save_cc" >
                                                Guardar mi tarjeta para futuros pagos.
                                              </label>
                                            </li>
                                            <li>
                                                  <button type="submit" class="button">Pagar ahora</button>

                                            </li>
                                          </ul>
                                        </form>
                                      </div> <!-- END: .modal__content -->
                                    </div> <!-- END: .modal__container -->
                                  </div> <!-- END: .modal -->
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include("footer.php");?><!-- End Footer -->
    <!-- JS -->
    <?php include("js.php");?><!-- End JS -->

  </body>
</html>
