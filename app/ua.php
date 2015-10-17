<?php
require_once '../vendor/autoload.php';
use UAParser\Parser;

$ua = "";

$parser = Parser::create();
$result = $parser->parse($ua);

print $result->ua->family;            // Safari
print $result->ua->major;             // 6
print $result->ua->minor;             // 0
print $result->ua->patch;             // 2
print $result->ua->toString();        // Safari 6.0.2
print $result->ua->toVersion();       // 6.0.2

print $result->os->family;            // Mac OS X
print $result->os->major;             // 10
print $result->os->minor;             // 7
print $result->os->patch;             // 5
print $result->os->patchMinor;        // [null]
print $result->os->toString();        // Mac OS X 10.7.5
print $result->os->toVersion();       // 10.7.5

print $result->device->family;        // Other

print $result->toString();            // Safari 6.0.2/Mac OS X 10.7.5
print $result->originalUserAgent;     // Mozilla/5.0 (Macintosh; Intel Ma...