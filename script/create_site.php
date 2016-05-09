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

/*
 * get status for request. Example code

$url = $publisher->Create_Site($n, $site_name,$email, $category_site, $url_site, $defult_zone, $link_site);;
$header = get_headers($url);
print_r($header);
$status_code = $header[0];
echo $status_code;
?>

Output -->

Array
(
    [0] => HTTP/1.0 200 OK
    [1] => Cache-Control: max-age=604800
    [2] => Content-Type: text/html
    [3] => Date: Sun, 07 Feb 2016 13:04:11 GMT
    [4] => Etag: "359670651+gzip+ident"
    [5] => Expires: Sun, 14 Feb 2016 13:04:11 GMT
    [6] => Last-Modified: Fri, 09 Aug 2013 23:54:35 GMT
    [7] => Server: ECS (cpm/F9D5)
    [8] => Vary: Accept-Encoding
    [9] => X-Cache: HIT
    [10] => x-ec-custom-error: 1
    [11] => Content-Length: 1270
    [12] => Connection: close
)

HTTP/1.0 200 OK 
 */
