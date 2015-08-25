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
