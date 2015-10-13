<?php
//remove before production
ini_set('display_errors', 'on');

//connecting to sqlite database
//setting trow exception mode
try {
    $db = new PDO('sqlite:../data/analytics.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
    echo $ex->getMessage();
    die();
}
//querying all records in user table
try {
    $results = $db->query('select * from user');
} catch (Exception $ex) {
    echo $ex->getMessage();
    die();
}
//looping through all users in the user table
$users = $results->fetchAll(PDO::FETCH_ASSOC);
foreach ($users as $user) {
    echo "{$user['ip']} {$user['session']}<br>";
}
//making sure $user_id is always a number
$user_id = intval($user_id = '9dddkdkdk');
//querying one user in the user table
//using prepare statements to prevent sql injection
try {
    $result = $db->prepare("select * from user where id = ?");
    $result->bindParam(1, $user_id);
    $result->execute();
} catch (Exception $ex) {
    echo $ex->getMessage();
    die();
}
//Displayig only one user from the sql query
$user = $result->fetch(PDO::FETCH_ASSOC);
if (isset($user['ip'])) {
    echo "One user query {$user['ip']} {$user['session']} <br>";
} else {
    echo "user not found <br>";
}
//Inserting into user table using PDO prepare statments
try {
    $insert = $db->prepare("INSERT INTO user (ip,session) VALUES (:ip,:session)");
    $insert->bindParam(':ip', $ip);
    $insert->bindParam(':session', $session);
    $ip = '8999.88.888';
    $session = 'narutonarutonaruto';
    $insert->execute();
} catch (Exception $ex) {
    echo $ex->getMessage();
    die();
}
//closing connection
$db = null;
