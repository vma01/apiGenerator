<?php

include 'curl_methods.php';

class Publisher_api extends Curl{
    
    public $username;
    public $password;
    public $timestamp;
            
    function __construct($username, $password) {
        $this->timestamp = round(microtime(true) * 1000);
        $this->password = md5(md5($password).$this->timestamp);
        $this->username = $username;
    }

    public function Create_Site($n, $name_site, $email, $categoryId, $site_url, $createDefaultZone, $allowPlacementBannersLinkingChange){
        
        $url = "https://".$n."/rest-api/sites/update.do";
        
        $post_data = array(
            "hash" => $this->password,
            "username" => $this->username,
            "timestamp" => $this->timestamp,
            "name" => $name_site,
            "email" => $email,
            "categoryId" => $categoryId,
            "url" => $site_url
        );
        
        if($createDefaultZone == true){
            array_push($post_data, $post_data['createDefaultZone']=true);
        }
        /*else if(strlen(trim($url))> 0){
            array_push($post_data, $post_data['url']=$url);
        }*/
        else if($allowPlacementBannersLinkingChange == true){
            array_push($post_data, $post_data['allowPlacementBannersLinkingChange']=true);
        }
        return $this->Post_data($url, $post_data);
    }
     
    public function Update_Site($n){
        $url = "https://".$n."/rest-api/sites/update.do";
        $this->Post_data($url);
    }
    
    public function Delete_Site($site_id, $n){
        $url="https://".$n."/rest-api/sites/".$site_id."/delete.do";
        $this->Post_data($url);
    }
    
    public function Delete_Site_CPM_Threshold(){
        return;
    }
    
    public function Get_Site_CPM_Threshold_Summary(){
        return;
    }
    
    public function Get_Site_Pricing(){
        return;
    }
    
    public function Get_Sites($n){
        $url = "https://".$n."/rest-api/sites.do";
        
        $post_data = array(
            "hash" => $this->password,
            "username" => $this->username,
            "timestamp" => $this->timestamp
        );
        return $this->Get_data($url, $post_data);
    }
}

