<?php
include_once('./class/api_html.class.php');
include_once('./class/api_css.class.php');
include_once('./class/api_lien.class.php');
include_once('./class/api_mobile.class.php');
include_once('./class/api_accessibilite.class.php');

$url = $_POST['url'];
$checkValued = array();
$checkValued = $_POST['checkUrl'];



//$ctrl=sizeof($checkValued);

echo"<p>Vous avez choisi de faire ces vérifications:</p><br>";
if(is_array($checkValued)){
    foreach ($checkValued as $valeur){
        echo $valeur.".<br>";
        if($valeur == 'checkCSS'){
            $valCss = new ValidationCss($url);
            $valCss->setValUrlCss();
            echo($valCss);
        }
        if($valeur == 'checkhtml'){
            $valHtml = new ValidationHtml($url);
            $valHtml->setValUrlHtml();
            echo '<pre>';
            print_r($valHtml);
            echo '</pre><br>';
        }
        if ($valeur == 'checkMobileV'){
            $valMobile = new ValidationMobile($url);
            $valMobile->setValUrlMobile();
            echo '<pre>';
            print_r($valMobile);
            echo '</pre><br>';
        }
        if ($valeur == 'checkLink'){
            $valLien = new ValidationLien($url);
            $valLien->setValUrlLien();
            echo($valLien);
        }
        if ($valeur == 'checkAccess'){
            $valAccessibilite = new ValidationAccessibilite($url);
            $valAccessibilite->setValAccessibilite();
            echo($valAccessibilite);
        }
    }
}else{ echo "ce n'est pas un tableau<br>";}








//$tailleJsonHTML = $valHtml.message.length();
//echo $tailleJsonHTML;

//for($i=0; $i<=$tailleJsonHTML; $i++){
    
//}

// foreach ($valHtml->message as $row){
//     print_r($row->message->type);

// }

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
