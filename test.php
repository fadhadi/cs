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
curl_setopt($ch, CURLOPT_URL, $flashsalettime);
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
$timepr = $jsn["item"]["upcoming_flash_sale"]["start_time"];
$timpr = $jsn["item"]["upcoming_flash_sale"]["promo_name"];
$nstart = "\n"."# Flash Sale Name :".$timpr."\n";
$start = "# Flash Sale Time :".$timepr."\n";
print_r($nstart);
print_r($start);


// MENGHITUNG MAJU WAKTU
//for ($x=time();$x<$timepr;$x++){
//echo "\r \r";
//echo "\r# Waiting         :".$x;
//sleep(1);
//}


// MEMASUKAN KE KERANJANG
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://shopee.co.id/api/v2/cart/add_to_cart");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$ua1 = array(
  $useragent,
  $xcsrftoken,
  $referprduk,
  $cookieaddtocart);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data1 = $dataaddtocart;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie1.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie1.txt");
$result4 = curl_exec($ch);
$json4 = json_decode($result4);
$hasil4 = $json4->data->cart_item->quantity;
print_r("# Add to cart :".$hasil4."\n");


// MEMASUKAN KE CHECKOUT
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://shopee.co.id/api/v4/cart/checkout");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$ua8 = array(
  $useragent,
  $contentype,
  $xcsrftoken,
  $refernextcart,
  $cookiecheckout);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua8);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$data8 = $selectedorder;
curl_setopt($ch, CURLOPT_POSTFIELDS, $data8);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie11.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie11.txt");
$result8 = curl_exec($ch);
$json8 = json_decode($result8,1);
$hasil8 = $json8["error_message"];
print_r("# Selected Order :".$hasil8."\n");


// BARANG BERHASIL DI BELI
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://shopee.co.id/api/v2/checkout/place_order');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
$useragen = array(
  $useragent,
  $xcsrftoken,
  $referplace,
  $cookieplaceorder);
curl_setopt($ch, CURLOPT_HTTPHEADER, $useragen);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$checkot = $datacheckout;
curl_setopt($ch, CURLOPT_POSTFIELDS, $checkot);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cooke.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cooke.txt");
$result6 = curl_exec($ch);
//$json00 = json_decode($result6);
//$hasil00 = $json00->timestamp;
//print_r("Time Was Successfully Purchased :".$hasil00."\n");
print("                      ~ MESSAGE ~"."\n");
print_r("\n".$result6."\n\n");