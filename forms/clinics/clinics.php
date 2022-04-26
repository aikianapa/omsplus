<?php
function clinics_listview() {
    $tpl = wbGetTpl("clinics.php");
    $tpl = $tpl->find("#clinicsListview",0);
    $tpl->find("[data-wb-where]",0)->attr("data-wb-where",'region="'.$_ENV["route"]["item"].'"');
    $tpl->wbSetData();
    echo $tpl->outerHtml();
}

?>