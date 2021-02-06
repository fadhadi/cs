<?php

function fetch_value($str,$find_start,$find_end) {
	$start = @strpos($str,$find_start);
	if ($start === false) {
		return "";
	}
	$length = strlen($find_start);
	$end = strpos(substr($str,$start +$length),$find_end);
	return trim(substr($str,$start +$length,$end));
}

include "config.php";
include "cookie.php";
// WAKTU MULAI FLASH SALE SELANJUTNYA

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $flashsalettime);// LINK SHOPID DAN ITEMID
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$a = array(
  $useragent, 
  $referprduk,
  $cookieflashsale);
curl_setopt($ch, CURLOPT_HTTPHEADER, $a);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "kie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "kie.txt");
$result = curl_exec($ch);
$jsn = json_decode($result,1);

// PARSING DATA
$timep = $jsn["item"]["name"];
$timepr = $jsn["item"]["itemid"];
$timew = $jsn["item"]["models"]["0"]["price_stocks"]["0"]["shop_id"];
$tiw = $jsn["item"]["upcoming_flash_sale"]["hidden_price_display"];
$modelid1 = $jsn["item"]["models"]["0"]["price_stocks"]["0"]["model_id"];
$pricemodelid1 = $jsn["item"]["models"]["0"]["price_stocks"]["0"]["price"];
$modelid2 = $jsn["item"]["models"]["1"]["price_stocks"]["0"]["model_id"];
$pricemodelid2 = $jsn["item"]["models"]["1"]["price_stocks"]["0"]["price"];
$timpfs = $jsn["item"]["upcoming_flash_sale"]["promo_name"];
// MENAMPILKAN
$timefss = "[+] Flash Sale Time :".$timefs."\n\n";
$nstar = "\n\n"."[+] Nama Produk : ".$timep."\n\n";
$nst = "[+] Shop Id : ".$timew."\n\n";
$nstart = "[+] Item Id : ".$timepr."\n\n";
$titiw = "[+] Price Flash sale : Rp.".$tiw."\n\n";
$pmodelid1 = "[+] Model Id (1) / Price : ".$modelid1." / ".$pricemodelid1."\n\n";
$pmodelid2 = "[+] Model Id (2) / Price : ".$modelid2." / ".$pricemodelid2."\n\n";

//PRINT
print_r($nstar);
print_r($nst);
print_r($nstart);
printf($pmodelid1);
printf($pmodelid2);
print_r($timefss);
print_r($titiw);