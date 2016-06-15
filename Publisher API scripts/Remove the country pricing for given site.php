<?php

 define("DEBUG",false);

    $username = "";
    $password = "";
    $timestamp  = round(microtime(true) * 1000);
    $hash = md5(md5($password).$timestamp);

    $url = "https://nXX.epom.com/rest-api/sites/{siteId}/pricing/{countryId}.do";
    //nXX is the network's id, e.g. n29.epom.com
    //if you have whitelabel account, please use its domain instead of nXX.epom.com

    $post_data = array(
        "hash" => $hash,
        "timestamp" => $timestamp,
        "username" => $username
        "actionId" => Null
	 );

    /*specifying curl options*/
    $options = array(
        CURLOPT_URL            => $url . '?' . http_build_query($post_data),
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
        CURLOPT_POSTFIELDS     => http_build_query($post_data),
        CURLOPT_RETURNTRANSFER => TRUE
    );

    $curl = curl_init();
    curl_setopt_array($curl, $options);
    $result = curl_exec($curl);
    echo $result;

  	if(DEBUG){
        echo "\n\n";
  		echo $url;
  		print_r($post_data);
  	}
   
	
?>