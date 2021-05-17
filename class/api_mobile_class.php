<?php

	class ValidationMobile {
		
		public $url;
		public $xml;
		
		public function __construct ($url){
			
			$this->url = $url;
			/*$url_encode = urlencode($url);
			echo $url_encode;
			echo '<br> ----------------------------------<br>';
			$comple_url = 'http://jigsaw.w3.org/css-validator/validator?uri='.$url_encode.'&warning=0&profile=css3' ; 
			/*echo $comple_url;
			echo '<br>----------------------------------<br>';
			$options  = array('http' => array('user_agent' => 'User-Agent: W3C Validation bot'));
			/*echo $options;
			echo '<br> ----------------------------------<br>';
			$context  = stream_context_create($options);
			/*echo $context;
			echo '<br> ----------------------------------<br>';
			$jsonText = file_get_contents($comple_url, false, $context);
			print_r($jsonText);

			echo '<br> ----------------------------------<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
			$jsonArray = json_decode($jsonText, false);*/
			//echo '<pre>';
			//print_r($jsonArray);
			//echo '</pre>';
			/*$ch = curl_init();
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				'Content-Type: application/json',
				'Accept: application/json'
				));
			curl_setopt($ch, CURLOPT_USERAGENT, 'https://searchconsole.googleapis.com/v1/urlTestingTools/mobileFriendlyTest:run?key=AIzaSyA4WVYApWoOhrC55TBF2purhUcO8M1K_cg');
			curl_setopt($ch, CURLOPT_URL, $url);
			$out = curl_exec($ch);
			echo '<pre>';
			print_r(curl_getinfo($ch));
			echo '</pre>';
			echo curl_error($ch);
			curl_close($ch);*/
				$ch = curl_init();

				curl_setopt($ch, CURLOPT_URL, 'https://searchconsole.googleapis.com/v1/urlTestingTools/mobileFriendlyTest:run?key=AIzaSyA4WVYApWoOhrC55TBF2purhUcO8M1K_cg');
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"url\":\"$url\"}");
				curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

				$headers = array();
				$headers[] = 'Accept: application/json';
				$headers[] = 'Content-Type: application/json';
				curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

				$result = curl_exec($ch);
				if (curl_errno($ch)) {
					echo 'Error:' . curl_error($ch);
				}
				else {
					echo '<pre>';
					print_r(curl_getinfo($ch));
					echo '</pre>';
					}
				curl_close($ch);

				}


		}

 //curl -H 'Content-Type: application/json' --data '{url: "http://cinemaneverland.alwaysdata.net/"}' 'https://searchconsole.googleapis.com/v1/urlTestingTools/mobileFriendlyTest:run?key=AIzaSyA4WVYApWoOhrC55TBF2purhUcO8M1K_cg'







?>

