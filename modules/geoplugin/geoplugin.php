<?php
wbRouterAdd("/module/geoplugin/(:any)/(:any)","/module/geoplugin/item:$1/fld:$2");
wbRouterAdd("/module/geoplugin/(:any)","/module/geoplugin/item:$1");
//$app->addModule("geoplugin",__DIR__,"Geo plugin");

function geoplugin__init() {
	$ip = geoplugin__getip();
  $route = $_ENV["route"];
  $call = "geoplugin__".$route["item"];
  header('Content-Type: charset=utf-8');
  header('Content-Type: application/json');


  if (is_callable($call)) {$result = @$call($ip);}

  if ($route["fld"] > "") {
      $result = json_decode($result);
      $fldname = "geoplugin_".$route["fld"];
      $result = json_encode(["{$route["fld"]}" => $result->$fldname]);
  }
  echo $result;
  die;
}

function geoplugin__getip() {
  $client  = @$_SERVER['HTTP_CLIENT_IP'];
  $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
  $remote  = @$_SERVER['REMOTE_ADDR'];

  if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
  elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
  else $ip = $remote;
  return $ip;
}

function geoplugin__info($ip = null) {
	if (!$ip) $ip = geoplugin__getip();

  if ($ip == '127.0.0.1') {
    $ip = <<<IP
      {
        "geoplugin_request":"127.0.0.1",
        "geoplugin_status":200,
        "geoplugin_delay":"0ms",
        "geoplugin_credit":"Some of the returned data includes GeoLite data created by MaxMind, available from <a href='http:\/\/www.maxmind.com'>http:\/\/www.maxmind.com<\/a>.",
        "geoplugin_city":"Localhost",
        "geoplugin_region":"Localhost",
        "geoplugin_regionCode":"LOC",
        "geoplugin_regionName":"Localhost",
        "geoplugin_areaCode":"",
        "geoplugin_dmaCode":"",
        "geoplugin_countryCode":"RU",
        "geoplugin_countryName":"Russia",
        "geoplugin_inEU":0,
        "geoplugin_euVATrate":false,
        "geoplugin_continentCode":"EU",
        "geoplugin_continentName":"Europe",
        "geoplugin_latitude":"47.2361",
        "geoplugin_longitude":"39.7189",
        "geoplugin_locationAccuracyRadius":"500",
        "geoplugin_timezone":"Europe\/Moscow",
        "geoplugin_currencyCode":"RUB",
        "geoplugin_currencySymbol":"??????",
        "geoplugin_currencySymbol_UTF8":"??????",
        "geoplugin_currencyConverter":100
      }
    IP;
    return $ip;
  }

	//$AGENT = file($_ENV["path_app"]."/uploads/agents.txt");
	//$AGENT = $AGENT[rand(0,count($AGENT)-1)];
  $AGENT = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36';
	$link = "http://www.geoplugin.net/json.gp?ip=".$ip;
	$context = stream_context_create(
	    ['http' => [
			'method' => 'GET',
			'protocol_version' => '1.1',
			'header' => ['User-Agent: '.$AGENT,
			'Connection: close',],
	    ]]
	);
	return file_get_contents($link, false, $context);
}

function ajax_geourl() {
	$ip = geoplugin__getip();
	return json_encode(["link"=>"http://www.geoplugin.net/json.gp?ip=".$ip]);
}

function geoplugin__nearby($ip = null) {
	if (!$ip) $ip = geoplugin__getip();
  return file_get_contents("http://www.geoplugin.net/extras/nearby.gp?format=json&ip=".$ip);
}
?>
