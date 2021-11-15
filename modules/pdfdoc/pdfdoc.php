<?php
require 'vendor/autoload.php';


function pdfdoc_init()
{
    if (isset($_ENV["route"]["params"][0])) {
        $mode=$_ENV["route"]["params"][0];
        $call="pdfdoc_{$mode}";
        if (is_callable($call)) {
            $out=@$call();
       }
        die;
    } else {
        $out=wbFromString(file_get_contents(__DIR__ ."/pdfdoc_ui.php"));
        $out->wbSetData();
        return $out;
    }
}

function pdfdoc_file($type="F") {
/* types:
'D': download the PDF file
'I': serves in-line to the browser
'S': returns the PDF document as a string
'F': save as file $file_out
*/
	$url=$_ENV["route"]["params"];
	unset($url[0]);
	$data=$_POST;
    if (isset($data["created"])) {
        $data["date_doc"]=date("d.m.Y",strtotime($data["created"]));
        $data["date_rep"]=date("d.m.Y",strtotime($data["created"]." +7 days"));
    }
    if (isset($data["total"])) {
        $data["total_str"]  = num2str($data["total"]);
    }
	$html=wbItemRead("pages",$url[1]);
	$html=wbFromString($html["content"]["block1"]["data"]["text"]);
	$html->wbSetData($data);
	$mpdf = new \Mpdf\Mpdf();
	$mpdf->WriteHTML($html->outerHtml());
	// Output a PDF file directly to the browser
	$file=$_ENV["path_app"]."/uploads/".wbNewId().".pdf";
	$mpdf->Output($file,$type);
    chmod($file,0766);
    header('Content-Type: text/json; charset=utf-8');
    echo $file;
    die;
}

function pdfdoc_src($type="I") {
/* types:
'D': download the PDF file
'I': serves in-line to the browser
'S': returns the PDF document as a string
'F': save as file $file_out
*/
	$url=$_ENV["route"]["params"];
	unset($url[0]);
	if (count($_POST)) {
		$data=$_POST;
	} else if (isset($_ENV["route"]["params"]["data"])) {
		$data=json_decode(urldecode($_ENV["route"]["params"]["data"]),true);
		unset($url["data"]);
	}
    if (isset($data["created"])) {
        $data["date_doc"]=date("d.m.Y",strtotime($data["created"]));
        $data["date_rep"]=date("d.m.Y",strtotime($data["created"]." +7 days"));
    } else {
        $data["date_doc"]=date("d.m.Y");
    }
    if (isset($data["total"])) {
        $data["total_str"]  = num2str($data["total"]);
    }
	$html=wbItemToArray(wbItemRead("pages",trim($url[1])));
    $html=wbFromString($html["content"]["block1"]["data"]["text"]);
	$html->wbSetData($data);
	$mpdf = new \Mpdf\Mpdf();
	$mpdf->WriteHTML($html->outerHtml());
	// Output a PDF file directly to the browser
	$file=date("Y-m-d_H:i:s").".pdf";
	$mpdf->Output($file,$type);
}

/**
 * Возвращает сумму прописью
 * @author runcore
 * @uses morph(...)
 */
function num2str($num) {
	$nul='ноль';
	$ten=array(
		array('','один','два','три','четыре','пять','шесть','семь', 'восемь','девять'),
		array('','одна','две','три','четыре','пять','шесть','семь', 'восемь','девять'),
	);
	$a20=array('десять','одиннадцать','двенадцать','тринадцать','четырнадцать' ,'пятнадцать','шестнадцать','семнадцать','восемнадцать','девятнадцать');
	$tens=array(2=>'двадцать','тридцать','сорок','пятьдесят','шестьдесят','семьдесят' ,'восемьдесят','девяносто');
	$hundred=array('','сто','двести','триста','четыреста','пятьсот','шестьсот', 'семьсот','восемьсот','девятьсот');
	$unit=array( // Units
		array('копейка' ,'копейки' ,'копеек',	 1),
		array('рубль'   ,'рубля'   ,'рублей'    ,0),
		array('тысяча'  ,'тысячи'  ,'тысяч'     ,1),
		array('миллион' ,'миллиона','миллионов' ,0),
		array('миллиард','милиарда','миллиардов',0),
	);
	//
	list($rub,$kop) = explode('.',sprintf("%015.2f", floatval($num)));
	$out = array();
	if (intval($rub)>0) {
		foreach(str_split($rub,3) as $uk=>$v) { // by 3 symbols
			if (!intval($v)) continue;
			$uk = sizeof($unit)-$uk-1; // unit key
			$gender = $unit[$uk][3];
			list($i1,$i2,$i3) = array_map('intval',str_split($v,1));
			// mega-logic
			$out[] = $hundred[$i1]; # 1xx-9xx
			if ($i2>1) $out[]= $tens[$i2].' '.$ten[$gender][$i3]; # 20-99
			else $out[]= $i2>0 ? $a20[$i3] : $ten[$gender][$i3]; # 10-19 | 1-9
			// units without rub & kop
			if ($uk>1) $out[]= morph($v,$unit[$uk][0],$unit[$uk][1],$unit[$uk][2]);
		} //foreach
	}
	else $out[] = $nul;
	$out[] = morph(intval($rub), $unit[1][0],$unit[1][1],$unit[1][2]); // rub
	$out[] = $kop.' '.morph($kop,$unit[0][0],$unit[0][1],$unit[0][2]); // kop
	return trim(preg_replace('/ {2,}/', ' ', join(' ',$out)));
}

/**
 * Склоняем словоформу
 * @ author runcore
 */
function morph($n, $f1, $f2, $f5) {
	$n = abs(intval($n)) % 100;
	if ($n>10 && $n<20) return $f5;
	$n = $n % 10;
	if ($n>1 && $n<5) return $f2;
	if ($n==1) return $f1;
	return $f5;
}

?>
