<?php

require '../api/publisherApimethods.php';

$username=$_POST['name'];
$password=$_POST['password'];
$n=$_POST['nUrl'];
$site_id=$_POST['idParam'];

$publisher = new Publisher_api($username, $password);
$publisher->Delete_Site($site_id, $n);
