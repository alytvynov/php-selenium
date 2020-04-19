<?php

require __DIR__ . '/vendor/autoload.php';

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;

$url = 'https://google.com';
$host = 'http://localhost:4444';

$driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
$driver->get($url);

echo sprintf("The title is '%s'\n", $driver->getTitle());
echo $driver->getPageSource();

$driver->quit();

