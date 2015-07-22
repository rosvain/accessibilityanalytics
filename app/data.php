<?php
//require_once 'database.php'; select * from user\
require_once 'sql.php';
$db = new SQLite3('../data/analytics.db');

$db->exec($query['insert_user']);
$results = $db->query($query['all']);
while ($row = $results->fetchArray()) {
    echo '<pre>';
    var_dump($row);
    echo '</pre>';
}

