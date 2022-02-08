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

    $subject = "Медицинский поверенный: жалоба ". $data['from_name'];
    $from = $data['email'].";{$data['last_name']} {$data['first_name']} {$data['middle_name']}";
    $sent = recepients($data);
    print_r($sent);
    $sent='oleg_frolov@mail.ru';
    $attach = $pdf;
    $message = "Жалоба в прикреплённом файле";


    //$res = mail($sent,$subject,$message);

    $res = wbMail($from , $sent, $subject, $message, $attach);
    unlink($pdf);

    var_dump($res);
    die;


    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="'.$tid.'.pdf"');
    $result = file_get_contents($pdf);
    unlink($pdf);
    echo $result;
}

function recepients($data)
{
    $recepients = [];
    $region = getRegion($data['region']);
    $rec=explode(',', $data['recepients']);
    foreach ($rec as $r) {
        switch ($r) {
        case 'depart':
            $recepients[] = $region['data']['dpzdrv_email'];
            break;
        case 'insure':
            $recepients[] = $data['insure_email'];
            break;
        case 'tfoms':
            $recepients[] = $region['data']['tfoms_email'];
            break;
        case 'foms':
            //
            break;
        case 'roszn':
            //
            break;
        }
    }
    return $recepients;
}

function getRegion($id)
{
    $regions = wbTreeRead('area');
    $regions = $regions['tree'];
    foreach ($regions as $r) {
        if ($r['id'] == $id) {
            return $r;
        }
    }
    return null;
}
