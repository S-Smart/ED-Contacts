<?php

$strAccessToken = "W3QZyQ3vT+tBsZMx6JIDeC++JM3trc053ERj/6O5wz6XoKH21t4WAb0vkS7I2D9gM2ZmsinnzL/HCKUzpP1U44mVyo6kBkZhXVPm52GHa5HJ+9vzpQni/ARrtW/Q3/FPG5VJ51Lkkw0s9yLQ0+Nz0AdB04t89/1O/w1cDnyilFU=";

$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
$strUrl = "https://api.line.me/v2/bot/message/reply";
$inputtext = $arrJson['events'][0]['message']['text'];
$w = (explode(" ",$inputtext)); //??????????? ???? ????? ?????????
    					    
$arrPostData = array();
	
if(($inputtext == "??????")||($inputtext == "Hi")||($inputtext == "Hello")||($inputtext == "??????????")||($inputtext == "?????????")||($inputtext == "????????")) {
	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "???????????????????????";
	
  //**************************************************************************************
	
} else if (($inputtext == "????????")||($inputtext == "???")||($inputtext == "??????????")) {
	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "???? '????????' ????????";
  
} else if ($inputtext == "?????????????") {
	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "???? ??? ?? ???? ???????????? ????????";
  


} else if ($inputtext == "??????") {
	$arrPostData['messages'][0]['type'] = "location";
	$arrPostData['messages'][0]['title'] = "?????? ???????-???????????????? ?????";
	$arrPostData['messages'][0]['address'] = "12 Soi G2, Pakorn Songkrohraj Road,Maptaphut, Muang, Rayong 21150 Thailand";
	$arrPostData['messages'][0]['latitude'] = "12.704393";
	$arrPostData['messages'][0]['longitude'] = "101.113156";
 
} else if ($inputtext == "??????") {
//	$arrPostData['messages'][0]['type'] = 'text';
//	$arrPostData['messages'][0]['text'] = "??????: ???1-???, ???2-????*, ???3-??? | ????: ???1-????*, ???2-????*, ???3-???";

} else if ($inputtext == "??????") {
	$arrPostData['messages'][0]['type'] = "sticker";
	$arrPostData['messages'][0]['packageId'] = "1";
	$arrPostData['messages'][0]['stickerId'] = "13";

} else if ($inputtext == "???") {
	$arrPostData['messages'][0]['type'] = "sticker";
	$arrPostData['messages'][0]['packageId'] = "1";
	$arrPostData['messages'][0]['stickerId'] = "408";

} else if ($inputtext == "??????????") {
	$arrPostData['messages'][0]['type'] = "image";
	$arrPostData['messages'][0]['originalContentUrl'] = "https://still-beach-54304.herokuapp.com/p1.jpg";
	$arrPostData['messages'][0]['previewImageUrl'] = "https://still-beach-54304.herokuapp.com/p2.jpg";

} else if (($inputtext == "?????????")||($inputtext == "BNK48")||($inputtext == "??????")||($inputtext == "????????")) {
	$arrPostData['messages'][0]['type'] = "image";
	$arrPostData['messages'][0]['originalContentUrl'] = "https://teen.mthai.com/app/uploads/2018/01/DPZXduGUQAERaye-1.jpg";
	$arrPostData['messages'][0]['previewImageUrl'] = "https://teen.mthai.com/app/uploads/2018/01/DPZXduGUQAERaye-1.jpg";
	
} else if (($inputtext == "??????")||($inputtext == "???????????????")) {
	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "https://www.youtube.com/watch?v=mfqJyKm20Z4";
	

} else if (($inputtext == "???????????")||($inputtext == "????????")||($inputtext == "??????")||($inputtext == "??????????")||($inputtext == "????????")) {
	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "http://www.avenger-planner.com/about/suwat-logpeet/";

}else{
 	$arrPostData['messages'][0]['type'] = 'text';
 	$arrPostData['messages'][0]['text'] = "???????????????????????";
}

if ($w[0] == "?????" and isset($w[1])) {
	$prov = $w[1];
  	$a = file_get_contents("http://m.smart-fttx.com/test-weather.php?prov=$prov&token=inb32XpbrlLgd8HMCzhbhZsJq7VxkqqA");
 	$arrPostData['messages'][0]['type'] = 'text';
 	$arrPostData['messages'][0]['text'] = $a;
}

$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
$arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);

?>
