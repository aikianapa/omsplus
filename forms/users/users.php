<?php
wbRouterAdd("/lk",'/controller:form/form:users/mode:show/tpl:lk.php');


function users_list()
{
    $out=wbGetForm($_ENV["route"]["form"], $_ENV["route"]["mode"]);
    $flag="";
    //$where='fullname > "" ';
    $Item=array();
    if (isset($_ENV["route"]["item"])) {
        $where='role="'.$_ENV["route"]["item"].'"';
	//	if ($_ENV["route"]["item"] == 'user') $where .= ' AND fullname > "" ';
    }
    $Item["result"]=wbItemList($_ENV["route"]["form"], $where);
    $Item["result"]=wbArraySort($Item["result"], "email");
    $Item["_table"]=$_ENV["route"]["form"];
    $out->wbSetData($Item);
    //if ($flag=="category") {$out->replaceWith($out->find("#{$_ENV["route"]["form"]}List .list")->html());}
    return $out;
}


function users_remove_empty()
{
    if ($_SESSION["user_role"]=="admin") {
		$where='role="user" AND fullname="" AND isgroup="" ';
		$list = wbItemList("users", $where);
        foreach($list as $item) {
			$rem = wbItemRemove("users", $item['id'], false);
		}
		wbTableFlush("users");
        $res=["error"	=> false, "msg"	=> "Выполнено"];
    } else {
		$res=["error"	=> true, "msg"	=> "Ошибка"];
	}
	header('Content-Type: application/json; charset=utf-8');
    echo json_encode($res);
}


function ajax_change_password() {
	if ($_SESSION["user_role"]!=="user") return;
	$user=wbItemRead("users",$_SESSION["user_id"]);
	$res=["error"	=> false, "msg"	=> "Пароль успешно изменён."];
	if ($_POST["new_pass"] !== $_POST["chk_pass"]) {
		$res=["error"	=> true, "msg"	=> "Проверочный пароль не совпадает с оригиналом."];
	} else {
		if (wbCheckPassword($_POST["old_pass"],$user["password"])) {
			$user["password"]=wbMakePassword($_POST["new_pass"]);
			if (!wbItemSave("users",$user)) {
				$res=["error"	=> true, "msg"	=> "Что-то пошло не так. Пароль не изменён."];
			} else {
				$_SESSION["user"]=$user;
			}
		} else {
			$res=["error"	=> true, "msg"	=> "Неправильный пароль."];
		}
	}
	return json_encode($res);
}
?>
