<?php
 class Curl 
{
	public function Getdata($url)
	{
		//  Initiate curl
		$ch = curl_init();
		// Disable SSL verification
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		// Will return the response, if false it print the response
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// Set the url
			curl_setopt($ch, CURLOPT_URL,$url);
		// Execute
		   curl_getinfo($ch, CURLINFO_HTTP_CODE);
			$result=curl_exec($ch);
		// Closing
			curl_close($ch);
		
		// Will dump a beauty json :3
			return json_decode($result, true);
	}

	
	
}
