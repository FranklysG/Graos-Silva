<?php
    // reference the Dompdf namespace
    include('../model/Conn.class.php');
    include('../../plugins/dompdf/autoload.inc.php');
    
    $conn = new Conn;
    $sql = "select m.nome, 
    m.cpf, 
    m.logradouro, 
    m.bairro, 
    m.cidade,
    v.marca from motorista as m
    inner join veiculo as v on v.id = m.veiculo_id
    where m.cep = '49008-190'
    and v.marca = 'MERCEDES'";
    
    $html = "<table border='1'>";
    $html .= "<tr><th  width='280px' style='padding:4px;'> NOME </th>";
    $html .= "<th  width='140px' style='padding:4px;'> CPF </th>";
    // $html .= "<th  width='' style='padding:4px;'> ENDEREÇO </th>";
    // $html .= "<th  width='' style='padding:4px;'> BAIRRO </th>";
    $html .= "<th  width='120px' style='padding:4px;'> CIDADE </th>";
    $html .= "<th  width='130px' style='padding:4px;'> CAMINHÃO </th></tr>";
    
    $rows = $conn->sqlRows($sql);
    foreach ($rows as $row) {
        $html .= "<tr><td style='padding:4px;'>".$row['nome']."</td>";
        $html .= "<td style='padding:4px;'>".$row['cpf']."</td>";
        // $html .= "<td style='padding:4px;'>".$row['logradouro']."</td>";
        // $html .= "<td style='padding:4px;'>".$row['bairro']."</td>";
        $html .= "<td style='padding:4px;'>".$row['cidade']."</td>";
        $html .= "<td style='padding:4px;'>".$row['marca']."</td></tr>";
    }
    
    $html .= "</table>";
    use Dompdf\Dompdf;

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml('<center><h3>MOTORISTA DE CIDADE DE BALSAS COM VEICULOS MERCEDES</h3></center>'.$html);

    // (Optional) Setup the paper size and orientation
    // $dompdf->setPaper('A4', 'landscape');
    $dompdf->setPaper('A4');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream('release.pdf',['Attachment' => false]);
?>
