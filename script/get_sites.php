<?php

require '../api/publisherApimethods.php';

$username=$_POST['name'];
$password=$_POST['password'];
$n=$_POST['nUrl'];
$publisher_category=$_POST['category'];

$publisher = new Publisher_api($username, $password);
$publisher->Get_Sites($n);
