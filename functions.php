<?php
setlocale(LC_ALL, 'ru_RU', 'ru_RU.UTF-8', 'ru', 'russian');
if (!isset($_SESSION['lang'])) $_SESSION['lang'] = 'rus';


    function wbDigitsOnly($str)
    {
        return preg_replace('/\D/', '', $str);
    }


function wbBeforeEngine() {
      $var = &$_ENV["settings"];
      $var["local_phone"] = $var["phone"];
      $var["local_email"] = $var["email"];

	//$geo = json_decode(@geoplugin__info("178.155.4.56"));
	$geo = json_decode(@geoplugin__info());
	if ($geo AND $geo->geoplugin_status == 200) {
		$geo = $geo->geoplugin_regionCode;
		if (!isset($_COOKIE["area"]) OR $_COOKIE["area"] !== $geo) {
			setcookie("area",$geo,time()+(3600*24*60),"/");
			$_ENV["route"]["area"] = $geo;
		}
	}

	if (isset($_COOKIE["area"])) $_ENV["route"]["area"] = $_COOKIE["area"];
	
	if ($_ENV["route"]["area"]>"" && $_ENV["route"]["mode"] == "show") {
	  $area = wbTreeRead("area");
	  $area = $area["tree"];

	  foreach($area as $arr) {
		  $arr = json_decode(json_encode($arr));
		  if ($arr->data->iso == $_ENV["route"]["area"]) {
			  if ($arr->data->phone > "") $var["local_phone"] = $arr->data->phone;
			  if ($arr->data->email > "") $var["local_email"] = $arr->data->email;
			  break;
		  }
	  }
	}

}


function wbAfterInit() {
    if ($_ENV["route"]["tpl"] == "lk.php" AND $_SESSION["user_role"] == "user") {
        checkOrdersAndPayments();
    }
    $clinics=wbItemList("clinics",'active="on"');
    $_ENV["variables"]["count_clinics"] = count($clinics);

}

function calcPrice($price, $fmt = true) {
		isset($_COOKIE['promocode']) ? $promo = $_COOKIE['promocode'] : $promo = '';
		if ($promo > '' && intval(str_replace(' ','',$price)) > 0) {
			$tree = wbTreeRead('promo');
			$tree = $tree["tree"];
			$tree = wbTreeFindBranch($tree, $promo);
			if (isset($tree[0]['id']) && $tree[0]['id'] == $promo) {
				$expired = date('Y-m-d',strtotime($tree[0]['data']['expired']));
                $now = date('Y-m-d');
				if ($expired > $now) {
                    $discount = 1 - intval($tree[0]['data']['discount']) / 100;
                    $price = intval(str_replace(' ','',$price) * $discount);
					$fmt ? $price = number_format($price, 0, ',', ' ') : null;
				}
			}
		}
        return $price;
}


function ajax_checkPromocode() {
	header('Content-Type: text/json; charset=utf-8');
    $res = false;
    setcookie('promocode', null, 0, '/');
    isset($_POST['promo']) ? $promo = $_POST['promo'] : $promo = '';
	if (strlen($promo)>'') {
		$tree = wbTreeRead('promo');
		$tree = $tree["tree"];
		$tree = wbTreeFindBranch($tree, $promo);
        $diff = 0;
		if (isset($tree[0]['id']) && $tree[0]['id'] == $promo) {
            $res = true;
            $expired = strtotime($tree[0]['data']['expired']);
			setcookie('promocode', $promo, $expired, '/');
            $diff = intval(($expired - time())/86400);
            if ($diff < 0) {
                $diff = 0;
                $res = false;
            }
		}
	}
    echo json_encode(['result'=>$res,'days'=>$diff]);
    die;
}

function ajax_checkExpiredItems() {
    header('Content-Type: text/json; charset=utf-8');
	ini_set("max_execution_time", 9999999);
	$seven = date("Y-m-d H:i:s" ,strtotime(date("Y-m-d") ."-7 days"));
	$app = new wbApp();
	$list=array();
	//$mail=wbGetTpl("mailCheckExpiredItems.php");
    $mail = wbItemRead("pages","doc_report");
    $mail = wbFromString($mail["content"]["block1"]["data"]["text"]);

    $list = $app->json("orders")->empty("")
    ->where("report","=","")
    ->where("payed","=","succeeded")
    ->where("_created","<=",$seven)
    ->get();

	foreach($list as $item) {
		$user=wbItemRead("users",$item["_creator"]);
		$data=[
            "id"        => $item["id"]
            ,"fullname"  => $user["fullname"]
            ,"date_doc"  => date("d.m.Y",strtotime($item["_created"]))
            ,"date_rep" => date("d.m.Y")
            ,"total"    => $item["total"]
            ,"total_str"=> num2str($item['total'])
            ];

		$mailto=$user["email"];
		$mailtoname=$user["fullname"];
		if ($user) {
			$token=wbNewId();
			$out=$mail->wbSetData($data);
			$msg=$out->outerHtml();
            //            $report=wbAuthPostContents("{$_ENV["route"]["hostp"]}/module/pdfdoc/file/doc_report/", $data);
			$res=wbMail(
				"{$_ENV['settings']['email']};{$_ENV['settings']['header']}",
				"{$mailto};{$mailtoname}", //uncomment in work version
//				"oleg_frolov@mail.ru;ReceiverName",  //comment in work version
				"Отчёт по договору №{$data['id']}",
				$msg
//                ,$report
			);
//            wbFileRemove($report);

            if ($res) {
                $item["report"]=date("d.m.Y H:i:s");
                wbItemSave("orders",$item,false);
            }
		}
	}
	wbFlushDatabase();
	echo "All done";
}

function wbBeforeOutput() {
    $html=$_ENV["DOM"]->outerHtml();
    $html=str_replace(["Jan ","Feb ","Mar ","Apr ","May ","Jun ","Jul ","Aug ","Sep ","Oct ","Nov ","Dec "],["Янв ","Фев ","Мар ","Апр ","Май ","Июн ", "Июл ", "Авг ", "Сен ","Окт ","Ноя ","Дек " ],$html);
    return $html;
}


function checkOrdersAndPayments() {
    if ($_ENV["route"]["tpl"] !== "lk.php") return;
    if (isset($_SESSION["user_id"]) AND $_SESSION["user_id"]>"") {
        include_once($_ENV["path_app"]."/modules/yakassa/yakassa.php");
        $app = new wbApp();
        $orders = $app->json("orders")->where("_creator","=",$_SESSION["user_id"])->get();
        $delete = $app->json($orders)->where("payed","=","pennding")->column("id");
        wbItemRemove("orders",$delete,true);
        $checks = $app->json($orders)->where("payed","=","")->where("pay_id",">","")->column("id");
        foreach($checks as $check) {
            yakassa_result($order_id);
        }
    }
}

function text2tel($str) {
    return preg_replace("/\D/", '', $str);
}

function commentsInfo($mode="count",$id=null) {
	$cid = md5( __FUNCTION__ . $mode . $id);
	if (isset($_ENV["cache"][$cid])) return $_ENV["cache"][$cid];
	$where = 'active="on"';
	if ($id !== null) $where.= " AND id = '{$id}'";
	$comments=wbItemList("comments",$where);
    $wb = new wbApp();
	switch($mode) {
		case "count":
			$_ENV["cache"][$cid] = count($comments);
			return $_ENV["cache"][$cid];
			break;
		case "rating":
			$_ENV["cache"][$cid] = round($wb->json($comments)->avg("rating"),1);
			return $_ENV["cache"][$cid];
			break;
		case "max":
			$_ENV["cache"][$cid] = $wb->json($comments)->max("rating");
			return $_ENV["cache"][$cid];
			break;
		case "avatar":
            $_ENV["cache"][$cid] = "build/img/avamale.png";
            $gender = $wb->json($comments)->column("gender")[0];
            $user = $wb->json($comments)->column("_creator")[0];
            $user = wbItemRead("users",$user);
            if ($gender) $_ENV["cache"][$cid] = "build/img/ava{$gender}.png";
            if (isset($user["avatar"][0]["img"]) AND $user["avatar"][0]["img"]>"" AND $user["id"] !== "admin") {
                $ava = "/uploads/users/{$user['id']}/".$user["avatar"][0]["img"];
                if (is_file($_ENV["path_app"].$ava)) {
                    $_ENV["cache"][$cid] = $ava;
                }
            }
			return $_ENV["cache"][$cid];
			break;
	}
}

?>
