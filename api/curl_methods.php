<?php

class Curl {
    
    public $username;
    public $hash;
    public $password;
    public $timestamp;
    public $curl;


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
        $this->curl = curl_init();
        curl_setopt_array($this->curl,$options);
        $result = curl_exec($this->curl);
        return $result;
    }
    
    public function Get_data($url, $post_data){
        $options = array(
            CURLOPT_URL => $url."?".http_build_query($post_data),
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_RETURNTRANSFER => true
        );
        $this->curl = curl_init();
        curl_setopt_array($this->curl,$options);
        $result = curl_exec($this->curl);
        return $result;
    }
    
    public function Get_Status(){
        $status = curl_getinfo($this->curl, CURLINFO_HTTP_CODE); 
        return $status;
    }
    
     public function Get_Time(){
        $time = curl_getinfo($this->curl, CURLINFO_TOTAL_TIME);
        return $time;
    }
    public function DownloadSampleCode($fileurl){
        $filename = $fileurl;
        header("Content-Length: " . filesize($filename));
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=something.doc');
        
        return readfile($filename);
    }
}


