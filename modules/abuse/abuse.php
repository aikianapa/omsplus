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
    $data['num'] .= "/".date("dmY");
    $data['date'] = date("d.m.Y");
    file_put_contents(__DIR__.'/abuse.num',$data['num']);
    $tmp = $data['recep'];
    $data['recep'] = [];
    $data['orgtype'] = ($data['orgtype'] == 'stat') ? 'стационаре' : 'поликлинике';
    $petrovich = new Petrovich(Petrovich::GENDER_ANDROGYNOUS);
    $name = $data['last_name'].' ' . $data['first_name'] . ' ' . $data['middle_name'];
    $data['gender'] = $petrovich->detectGender($name);

    $sent=[];
    foreach($tmp as $recep) {
        $recep = explode(';',$recep);
        $data['recep'][] = ['email'=>$recep[0],'name'=>$recep[1]];
        $sent[] = $recep[0];
    }
    $html = wbFromFile($file);
    $html->wbSetData($data);
    $message = $html->outerHtml();
    if (isset($_ENV["settings"]["mod_abuse"]) && $_ENV["settings"]["mod_abuse"] > '') {
        $sent=trim($_ENV["settings"]["mod_abuse"]);
        $sent=str_replace([' , ',' ,',', ',';'], ',', $sent);
        $sent=explode(',', $sent);
    }
    $tmp = explode(" ",$data['person']);
    $short = $tmp[0].' ';
    isset($tmp[1]) ? $short .= mb_substr($tmp[1],0,1).'.' : null;
    isset($tmp[2]) ? $short .= mb_substr($tmp[2],0,1).'.' : null;

    $types = [
        1 => "Жалоба на оказание медицинской помощи",
        2 => "Жалоба на качество медицинской помощи",
        3 => "Жалоба на лекарственное обеспечение"
    ];
    $type = $types[$data['type']];

    $subject = "Обращение {$short} ($type) {$data['num']} от {$data['date']}";
    $from = $data['email'].";{$data['last_name']} {$data['first_name']} {$data['middle_name']}";
    $attach = $_FILES;
    if (isset($data['addemail'])) {
        foreach($data['addemail'] as $add) {
            if (!in_array($add,$sent)) $sent[] = $add;
        }
    }

    $err = wbMail($from , $sent, $subject, $message, $attach);
    header("Content-type:application/json");
    if (!$err) {
        echo '{"error":true,"msg":"ОШИБКА ОТПРАВКИ СООБЩЕНИЯ. ПОПРОБУЙТЕ ПОЗЖЕ"}';
    } else {
        echo '{"error":false,"msg":"ВАШЕ СООБЩЕНИЕ УСПЕШНО ОТПРАВЛЕНО. НА ПОЧТУ, УКАЗАННУЮ КАК КОНТАКТНАЯ, ПРИДЕТ ПИСЬМО С НОМЕРОМ ОТПРАВЛЕНИЯ"}';
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
