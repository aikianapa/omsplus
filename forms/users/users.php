<?php
wbRouterAdd("/lk",'/controller:form/form:users/mode:show/tpl:lk.php');

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
