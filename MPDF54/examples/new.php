<?php
//require_once("dompdf_config.inc.php");

$conexion = mysql_connect("localhost", "root", "anres");
mysql_select_db("sisdef", $conexion);

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
$html ="<html><head></head><body>".$html;
$html = preg_replace('/<table(.*)width: 606(.*)?>/U', '', $html);
$html = preg_replace('/<table(.*)width=\"606(.*)?>/U', '', $html);
$html = preg_replace('/<table(.*)width=\"614(.*)?>/U', '', $html);
$html=str_replace('<table width="90%" cellspacing="2" cellpadding="2" border="0">',"", $html);
$html = str_replace('<table width="746" height="2170" border="0" style="margin-left: auto; margin-right: auto;">',"", $html);
$html=$html."</body></html>";

include("../mpdf.php");

$html=str_replace("ó","&oacute;", $html);
$html=str_replace("é","&eacute;", $html);
$html=str_replace("í","&iacute;", $html);
$html=str_replace("á","&aacute;", $html);
$html=str_replace("ú","&uacute;", $html);
$html=str_replace("ñ","&ntilde;", $html);
$html=str_replace("Ñ","&Ntilde;", $html);
$html=str_replace("http://www.ssadvisors.net/defensoria/", "http://localhost/userfiles/image/", $html);

$mpdf=new mPDF('c','Letter','','',30,20,20,20,16,13);
$mpdf->WriteHTML($html);
$mpdf->Output();
exit;
?>
