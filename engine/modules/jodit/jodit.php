<?php
function jodit__init(&$dom) {
	if (isset($_ENV["route"]["params"][0])) {
		$mode=$_ENV["route"]["params"][0];
		$call="jodit__{$mode}";
		if (is_callable($call)) {$out=@$call();}
		die;
	} else {
		$out = wbFromFile(__DIR__ ."/jodit_ui.php");
        $ats = $dom->attributes();
        foreach( $ats as $atn => $atv ) {
            if (!strpos(" ".$atn,"data-wb")) {
                $out->find(".jodit")->attr($atn,$atv);
            }
        }

        if ($out->find(".jodit")->attr('id') == '') {
            $out->find(".jodit")->attr('id', 'jd-'.wbNewId());
        }

        if ($out->find(".jodit")->attr('name') == '') {
            $out->find(".jodit")->attr('name', 'text');
        }

        $out->wbSetData();
        return $out;
	}
}
?>
