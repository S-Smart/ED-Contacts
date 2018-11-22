<?php

$strAccessToken = "W3QZyQ3vT+tBsZMx6JIDeC++JM3trc053ERj/6O5wz6XoKH21t4WAb0vkS7I2D9gM2ZmsinnzL/HCKUzpP1U44mVyo6kBkZhXVPm52GHa5HJ+9vzpQni/ARrtW/Q3/FPG5VJ51Lkkw0s9yLQ0+Nz0AdB04t89/1O/w1cDnyilFU=";

$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
$strUrl = "https://api.line.me/v2/bot/message/reply";
$inputtext = $arrJson['events'][0]['message']['text'];
$w = (explode(" ",$inputtext)); //ถ้าถามอากาศ เช่น อากาศ เชียงใหม่
    					    
$arrPostData = array();
	
if(($inputtext == "สวัสดี")||($inputtext == "Hi")||($inputtext == "Hello")||($inputtext == "สวัสดีครับ")||($inputtext == "สวัสดีค่ะ")||($inputtext == "อินเตอร์")) {
	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "มีอะไรให้รับใช้ครับท่าน \n038-685155";
  
} else if (($inputtext == "ชื่ออะไร")||($inputtext == "ใคร")||($inputtext == "คุณเป็นใคร")) {
	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "ผมชื่อ 'อินเตอร์' ครับท่าน";
  
} else if ($inputtext == "ทำอะไรได้บ้าง") {
	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "ค้าหาเบอร์ติดต่อของฝ่ายวิศวกรรมและซ่อมบำรุง\n \nในอนาคตเราจะใช้ช่องทางนี้เพื่ออำนวยความสะดวกให้กับท่าน";
	

} else if (($inputtext == "ed manager")||($inputtext == "manager")||($inputtext == "Manager")||($inputtext == "ผู้จัดการ")||($inputtext == "ผจส.")||($inputtext == "ผจส")||($inputtext == "ผจฝ.")||($inputtext == "ผจส")) {
 	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "Manager ( ID:21)  คุณบุญชัย   BW  2200  1858  094-4789929\n Manager ( ID:31)  คุณศฎายุทธ  SYK  2201  1709  065-6495551\n Manager ( ID:32)  คุณสืบสอง  SKH  2230  1710  081-9399963\n Manager ( ID:72)  คุณกมล  KHO  2250  1746  092-2592097\n Manager ( ID:1154)  K. Makoto  MH  2231  1701  061-3848087\n Manager ( ID:1155)  K. Shinsuke  SS  2211  1702  063-2074991";

} else if (($inputtext == "ee")||($inputtext == "ee eng")||($inputtext == "eng ee")||($inputtext == "EE")||($inputtext == "ไฟฟ้า")||($inputtext == "วิศวกรไฟฟ้า")||($inputtext == "ส่วนไฟฟ้า")) {
 	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "Engineer ( ID:80)  คุณโอภาส  OPU  2233  1717  081-3449792\n Engineer ( ID:84)  คุณเชาวน์ดล  CM  2234  1715  085-9999873\n Engineer ( ID:100)  คุณจิตติกรณ์  JTK  2234  1345  085-0850374\n Engineer ( ID:746)  คุณสุรชาติ  SK  2233  1711  089-5849553\n Engineer ( ID:828)  คุณประกาศิต  PKS  2233  1588  089-4803555\n Engineer ( ID:837)  คุณสมิทธ์  SMJ  2234  1555  086-8863863\n Engineer ( ID:840)  คุณธรรมนูญ  TPT  2234  1871  094-4974874\n Engineer ( ID:1051)  คุณณฤพล  NR  2233  1928  085-6788846\n Engineer ( ID:1092)  คุณศาสตรา  PSK  2233  1716  085-4229358\n Engineer ( ID:1127)  คุณธราธร  TRS  2233  1945  083-5536129\n Engineer ( ID:1087)  คุณสุวัฒนานนท์  SY  2233  -  080-6745804\n Engineer ( ID:1085)  คุณศักดิ์บุรุษ   SRC  2223  1932  080-4020462\n Engineer ( ID:1197)  คุณวรวลัญช์  ปินตา  WRP  2234  -  091-0691871";
	
} else if (($inputtext == "me")||($inputtext == "me eng")||($inputtext == "eng me")||($inputtext == "ME")||($inputtext == "เครื่องกล")||($inputtext == "วิศวกรเครื่องกล")||($inputtext == "ส่วนเครื่องกล")) {
 	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "Engineer ( ID:107)  คุณวณัยชนก  ชูรักษา  WNC  2212  1478  099-4296461\n Engineer ( ID:108)  คุณประกิต  ปฐมสุบรรณกุล  POP  2212  1480  089-0388525\n Engineer ( ID:546)  คุณฤทธิชัย  กระจ่างจิต  RTK  2212  1721  086-9894823\n Engineer ( ID:564)  คุณรัฎฐพงษ์  ชูเมือง  RC  2212  1518  085-9600059\n Engineer ( ID:565)  คุณสรวิชญ์  บุญยรัตน์  SWB  2214  1517  089-2458483\n Engineer ( ID:608)  คุณคุณากร  เติมคุนานนท์  KT  2212  1728  083-1301133\n Engineer ( ID:679)  คุณทีปกร  แก้วพวง  TPK  2212  1598  085-9012388\n Engineer ( ID:1035)  คุณยชนา  เวทวงค์  YW  2212  1926  086-8401304\n Engineer ( ID:113)  คุณกิตติ  วชิรอนันต์    2226  1718  081-5768394\n Engineer ( ID:192)  คุณขวัญ  ว่องเมธากุล    2227  1361  081-8645198\n Engineer ( ID:1199)  คุณภาสกร  โกศลกิติวงศ์  PKK  2214  -  083-0140857\n Engineer ( ID:1195)  คุณพัฒนพงศ์   ใจเย็น  PJ  2214  -  084-5027628\n Engineer ( ID:1198)  คุณอัษฎา      นุชรัตน์  ATN  2214  -  081-3430066";

} else if (($inputtext == "eng.")||($inputtext == "eng. eng")||($inputtext == "eng eng.")||($inputtext == "ENG")||($inputtext == "เทคโนโลยีเครื่องจักร")||($inputtext == "วิศวกรเทคโนโลยีเครื่องจักร")||($inputtext == "ส่วนเทคโนโลยีเครื่องจักร")) {
 	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "Engineer ( ID:611)  คุณอดิศร   สมศิริตระกูล  ADS  2272  1726  089-4222959\n Engineer ( ID:627)  คุณวิชชุดา   พาฤทธิ์  WP  2272  1516  086-2303051\n Engineer ( ID:956)  คุณไชยวัฒน์  พรนพรัตน์  CP  2272  1727  088-0083964\n Engineer ( ID:1049)  คุณภรัณยู  บุญรักษา  PB  2251  1924  089-4324291\n Engineer ( ID:1052)  คุณสุวัฒน์  ธรรมเสนา  ST  2233  1927  061-6856441";

/*
} else if ($inputtext == "ON Air Condition") {
  	//$mode = curl_init("https://178.128.24.220:9443/4c90321be6474713b4f99b51a40e3c5e/update/V36?value=1");
  	//curl_exec($mode);
  	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "https://178.128.24.220:9443/4c90321be6474713b4f99b51a40e3c5e/update/V36");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_HEADER, FALSE);

	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");

	curl_setopt($ch, CURLOPT_POSTFIELDS, "[
	  \"1\"
	]");

	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	  "Content-Type: application/json"
	));

	$response = curl_exec($ch);
	curl_close($ch);

	var_dump($response);
	
	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "Air condition is ON";


} else if ($inputtext == "ความชื้น") {
	$s = file_get_contents("http://128.199.137.43:3000/smtbot2017/variable/humidity");
 	 $h = json_decode($s, true);
  	$hu = $h['humidity'];
	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "ความชื้นสัมพัธน์ตอนนี้ " . $hu . "%";

} else if ($inputtext == "อุณหภูมิ") {
  	$s = file_get_contents("http://128.199.137.43:3000/smtbot2017/variable/temperature");
  	$h = json_decode($s, true);
  	$hu = $h['temperature'];
	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "อุณหภูมิตอนนี้ " . $hu . " C";

} else if ($inputtext == "Air Condition Status") {
	//$ch = curl_init();

	$s = file_get_contents("http://178.128.24.220:9443/4c90321be6474713b4f99b51a40e3c5e/get/V1");
	//$humi = curl_setopt($ch, CURLOPT_URL,"https://178.128.24.220:9443/4c90321be6474713b4f99b51a40e3c5e/get/V2";
	//curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	//curl_setopt($ch, CURLOPT_HEADER, FALSE);
	$h = json_decode($s, true);
  	$hu = $h['temperature'];
	
	//curl_exec($ch);
	//curl_close($ch);

    	//var_dump($ch);

			    
  	//$s = file_get_contents("https://178.128.24.220:9443/4c90321be6474713b4f99b51a40e3c5e/get/V1");
  	//$h = json_decode($s, true);
  	//$hu = $h['V1'];
 	//$s2 = file_get_contents("https://178.128.24.220:9443/4c90321be6474713b4f99b51a40e3c5e/get/V2");
 	//$h2 = json_decode($s2, true);
 	//$hu2 = $h2['V2'];
	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "อุณหภูมิ " . $hu . " C | ความชื้น " . $humi . " %";
*/
} else if ($inputtext == "แผนที่") {
	$arrPostData['messages'][0]['type'] = "location";
	$arrPostData['messages'][0]['title'] = "บริษัท เอ็นเอส-สยามยูไนเต็ดสตีล จำกัด";
	$arrPostData['messages'][0]['address'] = "12 Soi G2, Pakorn Songkrohraj Road,Maptaphut, Muang, Rayong 21150 Thailand";
	$arrPostData['messages'][0]['latitude'] = "12.704393";
	$arrPostData['messages'][0]['longitude'] = "101.113156";
 
} else if ($inputtext == "รายงาน") {
//	$arrPostData['messages'][0]['type'] = 'text';
//	$arrPostData['messages'][0]['text'] = "หลอดไฟ: นอน1-ปิด, นอน2-เปิด*, นอน3-ปิด | แอร์: นอน1-เปิด*, นอน2-เปิด*, นอน3-ปิด";

} else if ($inputtext == "เยี่ยม") {
	$arrPostData['messages'][0]['type'] = "sticker";
	$arrPostData['messages'][0]['packageId'] = "1";
	$arrPostData['messages'][0]['stickerId'] = "13";

} else if ($inputtext == "บาย") {
	$arrPostData['messages'][0]['type'] = "sticker";
	$arrPostData['messages'][0]['packageId'] = "1";
	$arrPostData['messages'][0]['stickerId'] = "408";

} else if ($inputtext == "ดูรูปหน่อย") {
	$arrPostData['messages'][0]['type'] = "image";
	$arrPostData['messages'][0]['originalContentUrl'] = "https://still-beach-54304.herokuapp.com/p1.jpg";
	$arrPostData['messages'][0]['previewImageUrl'] = "https://still-beach-54304.herokuapp.com/p2.jpg";

} else if (($inputtext == "ชอบวงอะไร")||($inputtext == "BNK48")||($inputtext == "น่ารัก")||($inputtext == "ร้องเพลง")) {
	$arrPostData['messages'][0]['type'] = "image";
	$arrPostData['messages'][0]['originalContentUrl'] = "https://teen.mthai.com/app/uploads/2018/01/DPZXduGUQAERaye-1.jpg";
	$arrPostData['messages'][0]['previewImageUrl'] = "https://teen.mthai.com/app/uploads/2018/01/DPZXduGUQAERaye-1.jpg";
	
} else if (($inputtext == "ขอเพลง")||($inputtext == "คุกกี้เสี่ยงทาย")) {
	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "https://www.youtube.com/watch?v=mfqJyKm20Z4";
	

} else if (($inputtext == "ON Air Condition")||($inputtext == "OFF Air Condition")) {
	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "ขอบคุณที่ให้ผมได้ช่วยเหลือคุณ แต่..ขณะนี้ผมยังไม่สามารถสั่งงานได้ครับ";
	
} else if (($inputtext == "ใครสร้างคุณ")||($inputtext == "ใครสร้าง")||($inputtext == "สุดยอด")||($inputtext == "เบื้องหลัง")) {
	$arrPostData['messages'][0]['type'] = 'text';
	$arrPostData['messages'][0]['text'] = "http://www.avenger-planner.com/about/suwat-logpeet/";

}else{
 	$arrPostData['messages'][0]['type'] = 'text';
 	$arrPostData['messages'][0]['text'] = "ไม่เข้าใจคำสั่งครับท่าน";
}

if ($w[0] == "อากาศ" and isset($w[1])) {
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
