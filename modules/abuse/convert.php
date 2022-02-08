<?php
require $_SERVER['DOCUMENT_ROOT']."/engine/functions.php";
wbInit();

$reg = wbItemRead('tree', 'area');
$tfoms = wbItemList('tfoms');
$reg = wbItemToArray($reg);
foreach($tfoms as $foms) {
    foreach($reg['tree'] as &$r) {
        if ($r['id'] == $foms['region']) {
            $r['data']['tfoms_email'] = $foms['email'];
            $r['data']['tfoms'] = "Территориальный фонд ОМС ({$r['name']})";
        }
    }
}
//wbItemSave('tree', $reg);
print_r($reg);

function region(&$item) {

    isset($_ENV['tmp']) ? null : $_ENV['tmp'] = [];
    if (isset($_ENV['tmp']['area'])) {
        $area = $_ENV['tmp']['area'];
    }  else {
        $reg = wbTreeRead('area');
        $reg = $reg['tree'];
        $area = [];
        foreach ($reg as $r) {
            $r['name'] = mb_strtolower($r['name']);
            $r['name'] = trim(str_replace('-', ' ', $r['name']));
            $area[$r['name']] = $r['id'];
        }
        $_ENV['tmp']['area'] = $area;
        print_r($area);
    }

    $region = mb_strtolower($item['region']);
    $region = trim(str_replace('г.', '', $region));
    $region = trim(str_replace('авт. окр.', 'автономный округ', $region));
    $region = trim(str_replace('й ао', 'й автономный округ', $region));
    $region = trim(str_replace('авт. область', 'автономная область', $region));
    $region = trim(str_replace('я ао', 'я автономная область', $region));
    $region = trim(str_replace('-', ' ', $region));


    foreach ($area as $rname => $rnum) {
        if ($region == $rname) {
            $item['region'] = $rnum;
            break;
        }
    }


    if (mb_substr($region,-11) == ' республика' && count(explode(' ',mb_substr($region, -11))) > 1) {
        $region = 'республика '.mb_substr($region, 0, -11);
    }
    foreach ($area as $rname => $rnum) {
        if ($region == $rname) {
            $item['region'] = $rnum;
            break;
        } 
    }

        echo "<br>$region<br>";


}
?>