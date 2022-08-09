<?php

include 'vendor/autoload.php';

use Classes\Config\Usuario;
use Classes\Categoria;
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$html = '';
for ($n = 0; $n < 10; $n++){
    $html .= 'oh o pente <br>';
}
$dompdf->loadHtml('<h1>Ola Mundo, estou aprendendo PHP!</h1>'.$html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();