<?php
//require_once("dompdf_config.inc.php");

$conexion = mysql_connect("localhost", "root", "anres");
mysql_select_db("elearning", $conexion);

    $queEmp = "SELECT contenido FROM concepto_def where radicado='".$_GET['radicado']."'";
    $resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
    $totEmp = mysql_num_rows($resEmp);
$html ='';

if ($totEmp> 0) {
   while ($rowEmp = mysql_fetch_assoc($resEmp)) {
   		$html = $rowEmp['contenido'];
   		break;
   }
}
die($html);
$html ="<html><head></head><body>".$html;
$html = preg_replace('/<table(.*)width: 606(.*)?>/U', '', $html);
$html = preg_replace('/<table(.*)width=\"606(.*)?>/U', '', $html);
$html = preg_replace('/<table(.*)width=\"614(.*)?>/U', '', $html);
$html=str_replace('<table width="90%" cellspacing="2" cellpadding="2" border="0">',"", $html);
$html=$html."</body></html>";


include("../mpdf.php");

$html=str_replace("?","&oacute;", $html);
$html=str_replace("?","&oacute;", $html);
$html=str_replace("?","&oacute;", $html);
$html=str_replace("?","&oacute;", $html);
$html=str_replace("?","&oacute;", $html);
$html=str_replace("?","&ntilde;", $html);
$html=str_replace("?","&Ntilde;", $html);
$html=str_replace("http://www.ssadvisors.net/defensoria/", "http://190.147.158.205/userfiles/image/", $html);

$mpdf=new mPDF('c','Letter','','',30,20,20,20,16,13);
$mpdf->WriteHTML($html);
 $mpdf->Output('Ficha-Contrato.pdf','I');
exit;
?>