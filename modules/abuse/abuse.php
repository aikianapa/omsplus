<?php

require $_SERVER['DOCUMENT_ROOT'].'/modules/pdfdoc/vendor/autoload.php';
require_once(__DIR__.'/petrovich/Petrovich.php');


function abuse_init()
{
    if (isset($_ENV["route"]["params"][0])) {
        $mode=$_ENV["route"]["params"][0];
        $call="abuse_{$mode}";
        if (is_callable($call)) {
            $out=@$call();
        }
        die;
    } else {
        $out=wbFromString(file_get_contents(__DIR__ ."/abuse_ui.php"));
        $out->wbSetData();
        return $out;
    }
}

function abuse_print()
{
    /* types:
    'D': download the PDF file
    'I': serves in-line to the browser
    'S': returns the PDF document as a string
    'F': save as file $file_out
    */
    $type = 'F';
    $data = &$_POST;
    $data['date'] = date('d.m.Y');
    $file = __DIR__.'/abuse.html';
    $pathtmp = $_ENV['path_app'].'/uploads/tmp/';
    $tid = 'abs_'.wbNewId();
    $pdf = $pathtmp.$tid.$key.'.pdf';

    $gender = 

    $petrovich = new Petrovich(Petrovich::GENDER_ANDROGYNOUS);
    $gender = $petrovich->detectGender($data['middle_name']);
    $petrovich = new Petrovich($gender);
    $data['from_name'] = $petrovich->lastname($data['last_name'], Petrovich::CASE_GENITIVE).' '.
            $petrovich->firstname($data['first_name'], Petrovich::CASE_GENITIVE).' '.
            $petrovich->middlename($data['middle_name'], Petrovich::CASE_GENITIVE);
    $html = wbFromFile($file);
    $html->wbSetData($data);
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($html->outerHtml());
    $mpdf->Output($pdf, $type);
    $data = file_get_contents($pdf);
    
    $subject = "Медицинский поверенный: жалоба ". $data['from_name'];
    $from = 'Медицинский поверенный;'.$_ENV['settings']['email'];
    $sent = 'oleg_frolov@mail.ru';
    $attach = $pdf;
    $message = "Жалоба в прикреплённом файле";
    $res = wbMail($from = null, $sent = null, $subject = null, $message = null, $attach = null);



    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="'.$tid.'.pdf"');
    unlink($pdf);
    echo $data;
}

