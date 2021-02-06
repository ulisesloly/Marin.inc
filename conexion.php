<?php
error_reporting(0);

$hostname = "localhost";
$username = "id15327983_coffipark";
$password = "X!cIjY-Wp51oDy@8";
$database = "id15327983_coffiparkdb";
/*
$hostname = "localhost";
$username = "root";
$password = "";
$database = "coffepark";
*/
$conn = new mysqli($hostname, $username, $password, $database);

if ($conn ->connect_error) {
die('Error de Conexión (' . $conn->connect_errno . ') '
. $conn->connect_error);
}
$fecha=$row[fecha];
                function lafecha($fecha){
                list($fecha,$hora)=explode(" ",$fecha);
                list($anio,$mes,$dia)=explode("-",$fecha);
                $meses=array(enero,febrero,marzo,abril,mayo,junio,julio,agosto,septiembre,octubre,noviembre,diciembre);
                return "$dia / ".$meses[$mes -1]." / $anio";
                                                    }
/*else{
    echo $conn ->host_info;
}*/
?>
<?php
if(!isset($_SESSION))session_start();
?>
