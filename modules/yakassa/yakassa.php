<?php
require __DIR__ . '/lib/autoload.php'; 
use YandexCheckout\Client;
function yakassa_init() {
    if (isset($_ENV["route"]["params"][0])) {
        $mode=$_ENV["route"]["params"][0];
        $call="yakassa_{$mode}";
        if (is_callable($call)) {
            echo @$call();
        }
        die;
    } else {
        return yakassa_checkout();
    }
}

function _yakassa_connect() {
    $sett = $_ENV["settings"]["yakassa"];
    if ($sett["test"] == "on") {
        $shop_id = $sett["test_id"];
        $api_key = $sett["test_key"];
    } else {
        $shop_id = $sett["id"];
        $api_key = $sett["key"];
    }
    $client = new Client();
    //$client->setAuth('620345', 'test_JEmlJS1v8xhuppg-4pKyyJSlDcU7cdCKkHJkZRMlDTM');
    $client->setAuth($shop_id, $api_key);
    return $client;
}

function yakassa_checkout($order=null,$returl=null) {
    if ($order  == null) $order  = wbItemRead("orders",$_SESSION["order_id"]);
    if ($returl == null) {
        if (substr($_ENV["settings"]["yakassa"]["backurl"],0,4)=="http") {
            $returl = $_ENV["settings"]["yakassa"]["backurl"];    
        } else if ($_ENV["settings"]["yakassa"]["backurl"] > "") {
            $returl = $_ENV["route"]["hostp"].$_ENV["settings"]["yakassa"]["backurl"];
        } else {
            $returl = $_ENV["route"]["hostp"].'/lk/';
        }
    }
    $client = _yakassa_connect();
    
    $items = [];
    
    $customer = wbItemRead("users",$order["client"]);
    $servlist=wbItemRead("pages","services");
    $servlist=wbItemToArray($servlist);

    foreach ($order["services"] as $line) {
        
        $srvname = wbTreeFindBranch($servlist["content"],"tabs->{$line['id']}");
        $srvname = $srvname[0]["name"];
        $items[] = [
            "description" => $srvname,
            "quantity" => "{$line['qty']}.00",
            "amount" => array(
                "value" => "{$line['price']}.00",
                "currency" => $order["currency"]
            ),
            "vat_code" => "2",
            "payment_mode" => "full_prepayment",
            "payment_subject" => "service"
        ];
    }
    
    
    $payment = array(
            'amount' => array(
                'value' => $order["total"],
                'currency' => $order["currency"],
            ),
            'payment_method_data' => array(
                'type' => 'bank_card',
            ),
            'confirmation' => array(
                'type' => 'redirect',
                'return_url' => $returl,
            ),
            "receipt" => array(
                            "customer" => array(
                                "full_name" => $customer["fullname"],
//                                "phone" => preg_replace("/[^0-9]/", "",$customer["phone"]),
                                "email" => $customer["email"]
                            ),
//                            "phone" => preg_replace("/[^0-9]/", "",$customer["phone"]),
                            "email" => $customer["email"],
                            "items" => $items
                        ),
            'capture' => true,
            'description' => $order["reason"],
        );
    
    //print_r($payment); 
    
    $payment = $client->createPayment($payment, uniqid('', true));
    return $payment;
}

function yakassa_ui($pay) {
    $pay=json_encode($pay);
    $pay=json_decode($pay,true);
    $out=wbFromFile(__DIR__ ."/yakassa_ui.php");
    $out->wbSetData($pay);
    return $out->outerHtml();
}

function yakassa_listen() {
  $source = file_get_contents('php://input');
  $requestBody = json_decode($source, true);
    print_r($requestBody);
}

function yakassa_settings() {
    if (wbRole("admin")) {
        $form=wbFromFile(__DIR__."/yakassa_settings.php");
        $form->wbSetData($_ENV["settings"]);  // проставляем значения
        return $form->outerHtml();
    }
}

function yakassa_result($order_id=null) {
    if (wbLoopCheck("yakassa_result",func_get_args())) return;
    wbLoopProtect("yakassa_result",func_get_args());
    
    if ($order_id == null) $order_id = $_SESSION["order_id"];
    $order=wbItemRead("orders",$order_id);
    if (!isset($order["pay_id"]) OR $order["pay_id"]=="") return;
    $pay_id=$order["pay_id"];
    $client = _yakassa_connect();
    $payment = $client->getPaymentInfo($pay_id);
    // waiting_for_capture - оплачено, ожидает списания
    // pending - отмена оплаты
    // succeeded - оплачен

    $order["payed"] = $payment["status"];
    $order["reason"] = "";
    if ($order["payed"]=="pending") $order["active"]="";
    wbItemSave("orders",$order,true);
    return $payment["status"];
}

function yakassa_success() {

}

?>