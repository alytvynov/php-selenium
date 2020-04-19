<?php

require __DIR__ . '/vendor/autoload.php';

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;

$url = 'https://google.com';

$host = 'http://localhost:4444';
$driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
$driver->get($url);
echo "The title is '" . $driver->getTitle() . "'\n";
$driver->wait(30);
$itemsSpan = $driver->findElement(
    WebDriverBy::cssSelector('title')
);
$text = $itemsSpan->getText();

echo $driver->getPageSource();

shell_exec(sprintf('echo "%s" >> ./%s.html', $driver->getPageSource(), time()));

$driver->quit();

