<?php

//remove before production
ini_set('display_errors', 'on');

try {
    $db = new PDO('sqlite:../data/analytics.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
    echo $ex->getMessage();
    die();
}
try {
    $results = $db->query('select * from user');
} catch (Exception $ex) {
    echo $ex->getMessage();
}


$users = $results->fetchAll(PDO::FETCH_ASSOC);
foreach ($users as $user){
    echo "{$user['ip']} <br>";
}

