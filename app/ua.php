<?php
// include classes or rely on Composer autoloader
require_once 'pua/lib/phpUserAgent.php';
require_once 'pua/lib/phpUserAgentStringParser.php';

// Create a user agent
$userAgent = new phpUserAgent();

// Interrogate the user agent
echo $userAgent->getBrowserName();      // firefox
echo $userAgent->getBrowserVersion();   // 3.6
echo $userAgent->getOperatingSystem();  // linux
echo $userAgent->getEngine();
