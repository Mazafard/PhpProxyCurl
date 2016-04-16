<?PHP

	
	include("curl_proxy.php");
	
	
	$proxy_list = "
			
			8.8.8.8,
			4.2.2.4
									
		";
	
	$seconds		= 10;
	$url			= "http://test.ir/";
	$port			= 80;
	$user_agent		= "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:37.0) Gecko/20100101 Firefox/37.0";
	
	$Proxycurl = new ProxyCurl($url, $port, $user_agent, $proxy_list);
?>

<html>
	<head> <meta http-equiv="refresh" content="<?PHP echo $seconds ; ?>" > </head>
</html>