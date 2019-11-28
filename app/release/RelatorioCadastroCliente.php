<?php
    // reference the Dompdf namespace
    include('../../plugins/dompdf/autoload.inc.php');
    use Dompdf\Dompdf;

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml('Relatorio');

    // (Optional) Setup the paper size and orientation
    // $dompdf->setPaper('A4', 'landscape');
    $dompdf->setPaper('A4');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream('release.pdf',['Attachment' => false]);
?>
