<?php
//require_once("dompdf_config.inc.php");

$conexion = mysql_connect("localhost", "root", "anres");
mysql_select_db("sisdef", $conexion);
$queEmp ="";
if($_GET['tipo']==1)
    $queEmp = "SELECT contenido FROM replica_carta  where radicado='".$_GET['radicado']."' and idReplica='".$_GET['idReplica']."' and fecha='".$_GET['fecha']."'";
else
    $queEmp = "SELECT concepto as contenido FROM replica_def where radicado='".$_GET['radicado']."' and idReplica='".$_GET['idReplica']."' and fechaFin='".$_GET['fecha']."'";

    $resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
    $totEmp = mysql_num_rows($resEmp);
$html ='';

if ($totEmp> 0) {
   while ($rowEmp = mysql_fetch_assoc($resEmp)) {
   		$html = $rowEmp['contenido'];
   		break;
   }
}
$html ="<html><head></head><body>".$html;
$html = preg_replace('/<table(.*)width: 606(.*)?>/U', '', $html);
$html = preg_replace('/<table(.*)width=\"606(.*)?>/U', '', $html);
$html = preg_replace('/<table(.*)width=\"614(.*)?>/U', '', $html);
$html=str_replace('<table width="90%" cellspacing="2" cellpadding="2" border="0">',"", $html);
$html=$html."</body></html>";


include("../mpdf.php");

$html=str_replace("�","&oacute;", $html);
$html=str_replace("�","&eacute;", $html);
$html=str_replace("�","&iacute;", $html);
$html=str_replace("�","&aacute;", $html);
$html=str_replace("�","&uacute;", $html);
$html=str_replace("�","&ntilde;", $html);
$html=str_replace("�","&Ntilde;", $html);
$html=str_replace("http://www.ssadvisors.net/defensoria/", "http://localhost/userfiles/image/", $html);

$mpdf=new mPDF('c','Legal','','',30,20,20,20,16,13);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>
