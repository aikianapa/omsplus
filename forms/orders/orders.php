<?php
function orders_create() {
    if ($_ENV["route"]["item"] !== "_new") return;
    include_once($_ENV["path_app"]."/modules/yakassa/yakassa.php");
    include_once($_ENV["path_app"]."/modules/autoinc/autoinc.php");
    $_SESSION["order_id"]=autoinc_id("orders");
    $servlist=wbItemRead("pages","services");
    $servlist=wbItemToArray($servlist);
    $services = [];
    $names = [];
    $total = 0;
    foreach($_POST["service"] as $i => $srv) {
        if ($srv > "") {
            $serv = wbTreeFindBranch($servlist["content"],"tabs->{$srv}");
            $price = calcPrice($serv[0]["data"]["prop"]["price"]["value"],false);
            $price = intval(str_replace(" ","",$price));
            if ($_POST["extr"] == "on") $price = $price * 1.5; // +50%
            $names[] = $serv[0]["name"];
            $qty = $_POST["qty"][$i];
            $total += $price * $qty;
            $services[$i] = [
                "id"    =>  $srv,
                "price" =>  $price,
                "qty"   =>  $qty
            ];
        }
    }
    $names = strip_tags(implode(", ", $names));
    $promo = isset($_COOKIE['promocode']) ? $_COOKIE['promocode'] : '';
    $order=[
        "id"        => $_SESSION["order_id"],
        "client"    => $_SESSION["user_id"],
        "region"    => $_POST["region"],
        "extr"      => $_POST["extr"],
        "services"  => $services,
        "payed"     => "",
        "report"    => "",
        "active"    => "on",
        "reason"    => "Оплата по договору №{$_SESSION["order_id"]} за выполнение услуги: «{$names}»",
        "currency"  => 'RUB',
        "total"     => $total,
        "promo"     => $promo
    ];
    
    $_ENV["yakassa_text"]="По вашей заявке на оказание услуг создан договор №{$_SESSION["order_id"]}. Стоимость услуги составляет: {$total} рублей.";
    $pay=yakassa_checkout($order);
    $order["pay_id"]=$pay["id"];
    wbItemSave("orders",$order,true);
    $out=yakassa_ui($pay);
    return $out;
}

function ordersAfterItemRead($Item) {
    $created=strtotime($Item["_created"]);
    $Item["_year"]=date("Y",$created);
    $Item["_month"]=date("m",$created);
    if ($Item["payed"]=="" AND $Item["pay_id"]>"" AND $Item["_created"] > date("Y-m-d H:i:s",strtotime("-10 days"))) {
        $Item["payed"] = yakassa_result($Item["id"]);
        if ($Item["payed"]=="pending") $Item["active"]="";
    }
    return $Item;
}

?>
