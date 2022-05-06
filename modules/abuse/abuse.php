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
    $data = &$_POST;
    $file = __DIR__.'/abuse.html';
    $data['num'] = file_get_contents(__DIR__.'/abuse.num');
    $data['num'] = intval($data['num']) + 1;
    file_put_contents(__DIR__.'/abuse.num',$data['num']);
    $html = wbFromFile($file);
    $html->wbSetData($data);
    $message = $html->outerHtml();
    $sent = $data['recep'];
    if (isset($_ENV["settings"]["mod_abuse"]) && $_ENV["settings"]["mod_abuse"] > '') {
        $sent=trim($_ENV["settings"]["mod_abuse"]);
        $sent=str_replace([' , ',' ,',', ',';'], ',', $sent);
        $sent=explode(',', $sent);
    }
    $subject = "Медицинский поверенный: жалоба от ". $data['person'];
    $from = $data['email'].";{$data['last_name']} {$data['first_name']} {$data['middle_name']}";
    $attach = $_FILES;
    if (isset($data['addemail'])) {
        foreach($data['addemail'] as $add) {
            if (!in_array($add,$sent)) $sent[] = $add;
        }
    }
    $err = wbMail($from , $sent, $subject, $message, $attach);
    header("Content-type:application/json");
    if ($err) {
        echo '{"error":true,"msg":"Ошибка отправки писем!"}';
    } else {
        echo '{"error":false,"msg":"Почта отправлена!"}';
    }
    return;
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
