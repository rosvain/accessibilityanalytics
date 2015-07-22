<?php

function start_session() {
    session_start();
    //$SESSION['name'] ='john';
    
}

start_session();
$_SESSION["username"] = "Callum";
    session_regenerate_id();
echo '<pre>';
var_dump($_SESSION);
echo '</pre>';

session_destory();
