<?php

function start_session() {
    session_start();
    //$SESSION['name'] ='john';
    
}

start_session();

$old_sessionid = session_id();

session_regenerate_id();

$new_sessionid = session_id();

echo "Old Session: $old_sessionid<br />";
echo "New Session: $new_sessionid<br />";
$_SESSION["username"] = "Callum";
    session_regenerate_id();
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

session_destory();
