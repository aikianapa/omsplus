<?php
wbRouterAdd("/history/(:num)",'/controller:form/form:pages/mode:show/item:history/year:$1');
wbRouterAdd("/history/(:num)/(:num)",'/controller:form/form:pages/mode:show/item:history/year:$1/month:$2');


function pages_edit() {
	$out=wbGetForm("pages","edit");
	$id=$_ENV["route"]["item"];
	$Item=wbItemRead("pages",$id);
	if ($id=="_new") {
		$Item["id"]=wbNewId();
		$Item["template"]=$_ENV["settings"]["template"];
	}
	$Item["tpllist"]=wbListTpl();
	$Item=wbCallFormFunc("BeforeItemEdit",$Item);
	$out->wbSetData($Item);
	$options=$out->find("select[name=template] option");
	foreach($options as $opt) {
		if (strpos($opt->attr("value"),".inc.")) $opt->remove();
	}
	return $out;
}

function pagesAfterItemRead($Item=null) {
    if ($Item !== null) {
        if ($_ENV["route"]["mode"]=="show") {
            $Item=wbItemToArray($Item);
            if (!isset($Item["title"]) OR $Item["title"]=="") {$Item["title"]=$Item["header"];}
            if ($Item["title"]=="") {$Item["title"]=$_ENV["settings"]["header"];}
        }
    }
	return $Item;
}

function pagesBeforeItemShow($Item) {
    if ($_ENV["route"]["mode"]=="show" AND $_ENV["route"]["item"]=="history" AND $Item["id"]=="history" AND $Item["_table"]=="pages") {
        $app = new wbApp();
        $orders=$app->json("orders")->where("_creator","=",$_SESSION["user_id"])->where("payed","=","succeeded");
        $years=$orders->copy()->sortBy("_created","desc")->get();
        $years=array_keys($app->json($years)->groupBy("_year")->get());
        if (isset($_ENV["route"]["year"]) AND $_ENV["route"]["year"]>"2000") $orders=$orders->where("_year","=",$_ENV["route"]["year"]);
        if (isset($_ENV["route"]["month"]) AND $_ENV["route"]["month"]>"0") $orders=$orders->where("_month","=",$_ENV["route"]["month"]);
        $Item["list_orders"]=$orders->sortBy("id","desc")->get();
        $Item["list_years"]=$years;
    } 
    return $Item;
}

?>
