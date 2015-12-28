<?php
$packageRoot = realpath(__DIR__ . '/../..');
define('LALBERT_FR_FR_ROOT', $packageRoot);

if(file_exists($packageRoot . '/vendor')) {
    // Github clone
    $vendorPath =  $packageRoot . '/vendor';
} elseif(file_exists($packageRoot . '/../../../vendor')) {
    // Installed by composer or uploaded package
    $vendorPath =  realpath($packageRoot . '/../../../vendor');
} elseif(file_exists($packageRoot . '/../../../i18n')) {
    // Uploaded package
    $vendorPath = realpath($packageRoot . '/../../../../vendor');
} else {
    throw new Exception('Unable to find vendor directory');
}

if(!file_exists($vendorPath)) {
    throw new Exception('Unable to find vendor directory');
}

require_once $vendorPath . '/autoload.php';
