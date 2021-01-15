<?php
    require('tfpdf/tfpdf.php');

    $mysqli = new mysqli("localhost","f0505640_edgar","1234","f0505640_edgar");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к БД";
    }

    $pdf = new tFPDF();
    $pdf->AddFont('PDFFont','','pixel.ttf');
    $pdf->SetFont('PDFFont','',12);
    $pdf->AddPage();

    $pdf->Cell(80);
    $pdf->Cell(30,10,'Вклады');
    $pdf->Ln(20);

    $pdf->SetFillColor(200,200,200);
    $pdf->SetFontSize(6);

    $header = array("п/п","Название банка","Страна","Класс","Дата создания вклада","Название программы","Стартовая сумма вклада");
    $w = array(6,30,25,25,25,25,25);
    $h = 10;
    for ($c = 0; $c < 7; $c++){
        $pdf->Cell($w[$c],$h,$header[$c],'LRTB','0','',true);
    }
    $pdf->Ln();

    // Запрос на выборку сведений о пользователях
    $result = $mysqli->query("SELECT
        banks.name as name,
        banks.country as country,
        banks.clas as clas,
        cont.date as date,
        dep_prog.name as name_dep,
        cont.st_cont
        FROM cont
        LEFT JOIN banks ON cont.id_dep=banks.id
        LEFT JOIN dep_prog ON cont.id_dep=dep_prog.id
        "
    );

    if ($result){
        $counter = 1;
        // Для каждой строки из запроса
        while ($row = $result->fetch_row()){
            $pdf->Cell($w[0],$h,$counter,'LRBT','0','C',true);
            $pdf->Cell($w[1],$h,$row[0],'LRB');

            for ($c = 2; $c < 7; $c++){
                $pdf->Cell($w[$c],$h,$row[$c-1],'RB');
            }
            $pdf->Ln();
            $counter++;
        }
    }

    $pdf->Output("I",'Cont.pdf',true);
?>
