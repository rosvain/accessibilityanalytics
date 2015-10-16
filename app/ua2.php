<?php
require_once '../vendor/autoload.php';

// Create a user agent
$userAgent = new phpUserAgent();

// Interrogate the user agent
echo $userAgent->getBrowserName();      // firefox
echo $userAgent->getBrowserVersion();   // 3.6
echo $userAgent->getOperatingSystem();  // linux
echo $userAgent->getEngine();
