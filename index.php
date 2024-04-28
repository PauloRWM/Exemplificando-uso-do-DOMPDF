<?php 

require_once("./vendor/autoload.php");
use Dompdf\Dompdf;

$modelo = file_get_contents("./modelo.html");


$dompdf = new Dompdf();
$dompdf->loadHtml($modelo);
$customPaper = array(0,0,360,360);
$dompdf->setPaper($customPaper, 'landscape');
$dompdf->render();
//echo ($modelo);
$dompdf->stream("exemploUsoDomPDF_Portifolio",array("Attachment" => false));



