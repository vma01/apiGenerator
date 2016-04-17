<?php

require '../api/publisherApimethods.php';

$username=$_POST['name'];
$password=$_POST['password'];
$n=$_POST['nUrl'];
$site_name=$_POST['site'];
$defult_zone=$_POST['zone'];
$email=$_POST['email'];
$category_site=$_POST['category'];
$link_site=$_POST['link'];
$url_site=$_POST['url'];

$publisher = new Publisher_api($username, $password);

$publisher->Create_Site($n, $site_name,$email, $category_site, $url_site, $defult_zone, $link_site);
