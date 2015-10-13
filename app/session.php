<?php
session_start();

//$SESSION['name'] ='john';

$sessionid = session_id();

//session_regenerate_id();
//$new_sessionid = session_id();

echo "Old Session: $sessionid<br />";
//echo "New Session: $new_sessionid<br />";
$_SESSION["username"] = "pilgrim";
//session_regenerate_id();
echo '<pre>';
var_dump($_SESSION);
var_dump($_SERVER);
echo '</pre>';

function get_clientserver_ip()
{
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP']) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } elseif ($_SERVER['HTTP_X_FORWARDED_FOR']) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif ($_SERVER['HTTP_X_FORWARDED']) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    } elseif ($_SERVER['HTTP_FORWARDED_FOR']) {
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } elseif ($_SERVER['HTTP_FORWARDED']) {
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    } elseif ($_SERVER['REMOTE_ADDR']) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } else {
        $ipaddress = 'UNKNOWN';
    }
    return $ipaddress;
}

function get_clientenv_ip()
{
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP')) {
        $ipaddress = getenv('HTTP_CLIENT_IP');
    } elseif (getenv('HTTP_X_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    } elseif (getenv('HTTP_X_FORWARDED')) {
        $ipaddress = getenv('HTTP_X_FORWARDED');
    } elseif (getenv('HTTP_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    } elseif (getenv('HTTP_FORWARDED')) {
        $ipaddress = getenv('HTTP_FORWARDED');
    } elseif (getenv('REMOTE_ADDR')) {
        $ipaddress = getenv('REMOTE_ADDR');
    } else {
        $ipaddress = 'UNKNOWN';
    }
    return $ipaddress;
}
$ip = get_clientserver_ip();
echo $ip;

$ip = get_clientenv_ip();
echo $ip;

session_destory();
