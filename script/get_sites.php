<?php

require '../api/publisherApimethods.php';

$username=$_POST['name'];
$password=$_POST['password'];
$n=$_POST['network'];
$publisher_category=$_POST['category'];



$publisher = new Publisher_api($username, $password);
$getSites= $publisher->Get_Sites($n);
$getStatus = $publisher->Get_Status();
$getTime = $publisher->Get_Time();

$results = array(
    'responseRequest' => $getSites,
    'statusResponse' => $getStatus,
    'timeResponse' => $getTime
);

header('Content-Type: application/json');
echo json_encode($results);
