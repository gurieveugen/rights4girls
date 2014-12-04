<?php

class Repeater{
	private $request;
	//                    __  __              __    
	//    ____ ___  ___  / /_/ /_  ____  ____/ /____
	//   / __ `__ \/ _ \/ __/ __ \/ __ \/ __  / ___/
	//  / / / / / /  __/ /_/ / / / /_/ / /_/ (__  ) 
	// /_/ /_/ /_/\___/\__/_/ /_/\____/\__,_/____/                                            
	public function __construct($request)
	{
		$this->request = $request;
	}

	/**
	 * Get current page URL
	 * @return string --- current page URL
	 */
	public static function curPageURL() 
	{
		$pageURL = 'http';
		if ($_SERVER["HTTPS"] == "on") 
			$pageURL .= "s";
		$pageURL .= "://";
		if ($_SERVER["SERVER_PORT"] != "80") 
		{
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		} 
		else 
		{
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		}
		return $pageURL;
	}	

	/**
	 * Get contents 
	 * @param  string $url
	 * @return string
	 */
	public static function fileGetContentsCurl($url, $post) 
	{
	    $ch = curl_init();

	    curl_setopt($ch, CURLOPT_HEADER, 0);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	    curl_setopt($ch, CURLOPT_POST, true);
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));

	    $data = curl_exec($ch);
	    curl_close($ch);

	    return $data;
	}

	public function get()
	{
		return print_r($this->request, true).self::fileGetContentsCurl('https://app.e2ma.net/app2/audience/signup/1740275/1723850.777765322/?v=a', $this->request);
	}
}