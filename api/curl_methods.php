<?php

class Curl {
    
    public $username;
    public $hash;
    public $password;
    public $timestamp;
    
    public function define_timestamp(){
        return $this->timestamp = round(microtime(true) * 1000);
    }
    
    public function Post_data($url, $post_data){
       $options = array(
            CURLOPT_URL => $url,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_POST => true, // POST method is used
            CURLOPT_POSTFIELDS => http_build_query($post_data), //POST request body parameters
            CURLOPT_HTTPHEADER => array('Content-type: application/x-www-form-urlencoded'),
            CURLOPT_RETURNTRANSFER => true
        );
        $curl = curl_init();
        curl_setopt_array($curl,$options);
        $result = curl_exec($curl);
        echo $result;
    }
    
     public function Get_data($url, $post_data){
        $options = array(
            CURLOPT_URL => $url."?".http_build_query($post_data),
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_RETURNTRANSFER => true
        );
        $curl = curl_init();
        curl_setopt_array($curl,$options);
        $result = curl_exec($curl);
        echo $result;
    }
}


