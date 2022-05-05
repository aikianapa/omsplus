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
    $data = $_POST;
    $file = __DIR__.'/abuse.html';
    $pathtmp = $_ENV['path_app'].'/uploads/tmp/';
    $tid = 'abs_'.wbNewId();
    $pdf = $pathtmp.$tid.$key.'.pdf';
    $html = wbFromFile($file);
    $html->wbSetData($_POST);
    $message = $html->outerHtml();
    $sent = $data['recep'];
    if (isset($_ENV["settings"]["mod_abuse"]) && $_ENV["settings"]["mod_abuse"] > '') {
        $sent=trim($_ENV["settings"]["mod_abuse"]);
        $sent=str_replace([' , ',' ,',', ',';'], ',', $sent);
        $sent=explode(',', $sent);
    }
    $subject = "Медицинский поверенный: жалоба от ". $data['person'];
    $from = $data['email'].";{$data['last_name']} {$data['first_name']} {$data['middle_name']}";
    $attach = null;
    //$res = wbMail($from , $sent, $subject, $message, $attach);
print_r($_FILES);

    return;

    $type = 'F';
    $data = &$_POST;
    $data['date'] = date('d.m.Y');
    $file = __DIR__.'/abuse.html';
    $pathtmp = $_ENV['path_app'].'/uploads/tmp/';
    $tid = 'abs_'.wbNewId();
    $pdf = $pathtmp.$tid.$key.'.pdf';
    $sent = $data['recep'];

    if (isset($_ENV["settings"]["mod_abuse"]) && $_ENV["settings"]["mod_abuse"] > '') {
        $sent=trim($_ENV["settings"]["mod_abuse"]);
        $sent=str_replace([' , ',' ,',', ',';'], ',', $sent);
        $sent=explode(',', $sent);
    }

    $html->wbSetData($data);
    //$mpdf = new \Mpdf\Mpdf();
    //$mpdf->WriteHTML($html->outerHtml());
    //$mpdf->Output($pdf, $type);

    $subject = "Медицинский поверенный: жалоба ". $data['from_name'];
    $from = $data['email'].";{$data['last_name']} {$data['first_name']} {$data['middle_name']}";

    //$attach = $pdf;
    $attach = null;
    //$message = "Жалоба в прикреплённом файле";
    $message = $html->outerHtml();

    //$res = wbMail($from , $sent, $subject, $message, $attach);

    //var_dump($res);
    //die;


    //header('Content-type: application/pdf');
    //header('Content-Disposition: inline; filename="'.$tid.'.pdf"');


    header('Content-type: text/html');
    header('Content-Disposition: inline; filename="'.$tid.'.htm"');


    //$result = file_get_contents($pdf);
    //unlink($pdf);
    $result = $message;
    echo $result;
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
