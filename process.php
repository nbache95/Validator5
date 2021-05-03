<?php
$url = $_GET['url']; 
$comple_url = 'https://html5.validator.nu/?doc='.$url.'&out=json' ; 
//$jsonText = file_get_contents('https://validator.w3.org/nu/?doc='.$url.'&out=json', false, $context);
//$jsonArray = json_decode($jsonText,True);
//echo $jsonArray;
//$site = file_get_contents('https://html5.validator.nu/?doc='.$url.'&out=xml');
//echo nl2br($site); 

/*$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'https://html5.validator.nu/?doc='.$url.'&out=xml');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Validator5');
$query = curl_exec($curl_handle);
$info = curl_getinfo($curl_handle);
echo $info; 
curl_close($curl_handle);*/


$json_is = $complete_url; 
$return = json_decode (file_get_contents($json_is), true); 
echo $return ; 
?>
