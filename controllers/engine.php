<?php
function engine_controller_signup() {
	$app = new wbApp();
	$app->fromTpl("login.htm");

	//$app->dom->find("#login-block .active")->removeClass("active show");
	//$app->dom->find("#login-block .nav-tabs a:first")->addClass("active");
	//$app->dom->find("#login-block #registration")->addClass("active show");
	if (isset($_REQUEST["email"]) AND is_email($_REQUEST["email"])) {
		$users=$app->json("users")->where("email","=",$_REQUEST["email"])->get();
		if (count($users)) {
			// такой пользователь уже есть
			$app->dom->find("#login-block .active")->removeClass("active show");
			$app->dom->find("#login-block .nav-tabs a:last")->addClass("active");
			$app->dom->find("#login-block #autorization")->addClass("active show");
			$app->dom->find("[name=l]")->attr("value",$_REQUEST["email"]);
		} else {
			// процесс регистрации
			$id = md5($_REQUEST["email"]);
			$pass=str_replace([".","@","-","_"],"",str_split($_REQUEST["email"]));
			shuffle($pass);
			$pass=substr(implode("",$pass),0,6);
			$newuser=[
				 "id"		=> $id
				,"role" 	=> "user"
				,"email"	=> $_REQUEST["email"]
				,"password"	=> md5($pass)
				,"active"	=> "on"
			];
			$saved=$app->itemSave("users",$newuser,true);
            $subj="Регистрация на ".$_ENV["settings"]["header"];
            $subj = mb_encode_mimeheader($subj,"UTF-8");
            $message="<p>Вы успешно зарегистрированы на сайте {$_ENV["route"]["hostp"]} - {$_ENV["settings"]["header"]}</p><p>Логин: {$_REQUEST["email"]}<br>Пароль: {$pass}";
            wbMail("{$_ENV['settings']['email']};{$_ENV['settings']['header']}",$_REQUEST["email"],$subj,$message);
            if ($saved) engine__controller_login_success($newuser);
		}
	}
	echo $app->dom;
}

function engine_controller_recovery() {
	$token=base64_decode($_ENV["route"]["token"]);
	$param=explode(";",$token);
	$out=wbGetTpl("login.htm");
	if (count($param)!==3) {
		header('Location: /login');
		die;
	}
	if (strpos($param[1],"@")) {
		$users=wbItemList("users",'email="'.$param[1].'"');
		foreach($users as $key => $item) {
			$user_id=$item["id"];
			break;
		}
	}
	if ($user=wbItemRead("users", $user_id)) {
		if ($user["pwdtoken"]==$param[2] AND $user["email"]==$param[1] AND $user["password"]==$param[0]) {
			if (isset($_POST["_token"]) AND $user["pwdtoken"]==$_POST["_token"] AND $_POST["_pwd1"] == $_POST["_pwd2"]) {
				$user["password"]=md5($_POST["_pwd1"]);
				$user["pwdtoken"]=null;
				$res=wbItemSave("users",$user,true);
				$out->find(".recovery-success")->removeClass("d-none");
				$out->find('.login-block')->addClass('d-none');
				$out->find('.recovery-password')->addClass('d-none');
				$out->find('.recovery-block')->addClass('d-none');
				$out->wbSetData();
				echo $out;
				die;
			} else if (!isset($_POST["_token"])) {
				$out->find('.login-block')->addClass('d-none');
				$out->find('.recovery-block')->removeClass('d-none');
				$out->wbSetData(["login"=>$param[1],"_token"=>$param[2],"_email"=>$param[1]]);
                $out->find('#password-tab')->addClass("active");
				echo $out;
                die;
			}
		} else {
			header("HTTP/1.0 404 Not Found");
			die;
		}
	} else {
		header('Location: /login');
		die;
	}
    die;
}
?>
