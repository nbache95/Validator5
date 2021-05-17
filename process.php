<?php
include_once('./class/api_html_class.php');
include_once('./class/api_css_class.php');
include_once('./class/api_lien_class.php');
include_once('./class/api_mobile_class.php');

$url = $_POST['url'];


$valHtml		= new ValidationHtml($url);
$valCss			= new ValidationCss($url);
$valMobile		= new ValidationMobile($url);
$valLien		= new ValidationLien($url);







/*$site = file_get_contents('https://html5.validator.nu/?doc='.$url.'&out=xml');
echo nl2br($site); */

/*$curl_handle=curl_init();
curl_setopt($curl_handle, CURLOPT_URL,'https://html5.validator.nu/?doc='.$url.'&out=xml');
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Validator5');
$query = curl_exec($curl_handle);
$info = curl_getinfo($curl_handle);
echo $info; 
curl_close($curl_handle);*/


/*$return = json_decode (file_get_contents($comple_url), true); 
echo $return ; */



//$response = file_get_contents('http://domain/path/to/uri', false, $context);
?>
