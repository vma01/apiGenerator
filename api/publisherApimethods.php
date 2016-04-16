<?php

include 'curl_methods.php';

class Publisher_api extends Curl{

    public function Create_Site($username, $password, $name_site, $n, $categoryId, $email, $createDefaultZone, $url, $description, $allowPlacementBannersLinkingChange){
        
        $url = "https://".$n."/rest-api/sites/update.do";
        $timestamp = $this->define_timestamp();
        $hash = md5(md5($password).$timestamp);
        $post_data = array(
            "hash" => $hash,
            "username" => $username,
            "timestamp" => $timestamp,
            "name" => $name_site,
            "email" => $email,
            "categoryId" => $categoryId
        );
        if($createDefaultZone == true){
            array_push($post_data, $post_data['createDefaultZone']=true);
        }
        else if(strlen(trim($url))> 0){
            array_push($post_data, $post_data['url']=$url);
        }
        else if($allowPlacementBannersLinkingChange == true){
            array_push($post_data, $post_data['allowPlacementBannersLinkingChange']=true);
        }
        $this->Post_data($url, $post_data);
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
        $this->Get_data($url);
    }
}

