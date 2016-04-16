<?php

require '../api/publisherApimethods.php';

$username=$_POST['name'];
/*$password=$_POST['password'];
$n=$_POST['nUrl'];
$site_name=$_POST['site'];
$zone_id=$_POST['zone'];
$email_site=$_POST['email'];
$category_site=$_POST['category'];
$description_site=$_POST['description'];
$link_site=$_POST['link'];
$url_site=$_POST['url'];*/

var_dump($username);
die();

$publisher = new Publisher_api();
$publisher->Create_Site($username, $password, $site_name, $n, $category_site, $email_site, $category_site, $url, $description_site, $link_site);
