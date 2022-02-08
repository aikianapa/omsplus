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


    $sent = recepients($data); // в $data меняется recepients
    if (isset($_ENV["settings"]["mod_abuse"]) && $_ENV["settings"]["mod_abuse"] > '') {
        $sent=trim($_ENV["settings"]["mod_abuse"]);
        $sent=str_replace([' ',';'], ',', $sent);
        $sent=explode(',', $sent);
    }

    $html->wbSetData($data);
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($html->outerHtml());
    $mpdf->Output($pdf, $type);

    $subject = "Медицинский поверенный: жалоба ". $data['from_name'];
    $from = $data['email'].";{$data['last_name']} {$data['first_name']} {$data['middle_name']}";
    $sent=['oleg_frolov@mail.ru','info@idees.ru'];
    $attach = $pdf;
    $message = "Жалоба в прикреплённом файле";

    $res = wbMail($from , $sent, $subject, $message, $attach);

    //var_dump($res);
    //die;


    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="'.$tid.'.pdf"');
    $result = file_get_contents($pdf);
    unlink($pdf);
    echo $result;
}

function recepients(&$data)
{
    $recepients = [];
    $region = getRegion($data['region']);
    $rec=explode(',', $data['recepients']);
    $data['recepients'] = [];
    foreach ($rec as $r) {
        switch ($r) {
        case 'depart':
            // Департамент здравоохранения
            $recepients[] = $region['data']['dpzdrv_email'];
            $data['recepients'][] = ['name'=>$region['data']['dpzdrv'],'email'=>$region['data']['dpzdrv_email']];
            break;
        case 'insure':
            // Страховая компания
            $recepients[] = $data['insure_email'];
            $data['recepients'][] = ['name'=>$data['insure'],'email'=>$data['insure_email']];
            break;
        case 'tfoms':
            // Территориальный фонд ОМС
            $recepients[] = $region['data']['tfoms_email'];
            $data['recepients'][] = ['name'=>$region['data']['tfoms'],'email'=>$region['data']['tfoms_email']];
            break;
        case 'foms':
            // Фонд ОМС
            if (isset($_ENV["settings"]["email_foms"]) && $_ENV["settings"]["email_foms"] > '') {
                $recepients[] = $_ENV["settings"]["email_foms"];
                $data['recepients'][] = [
                    'name'=>'Федеральный фонд обязательного медицинского страхования',
                    'email'=>$_ENV["settings"]["email_foms"]
                ];
            }
            break;
        case 'roszn':
            // Росздравнадзор
            if (isset($_ENV["settings"]["email_roszdrav"]) && $_ENV["settings"]["email_roszdrav"] > '') {
                $recepients[] = $_ENV["settings"]["email_roszdrav"];
                $data['recepients'][] = [
                    'name'=>'Федеральная служба по надзору в сфере здравоохранения',
                    'email'=>$_ENV["settings"]["email_roszdrav"]
                ];
            } 
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
