<?php
$packagePath = realpath(__DIR__ . '/../../../..');
define('LALBERT_FR_FR_ROOT', $packagePath . '/lalbert/fr_fr');
$parent = realpath($packagePath . '/..');

if(file_exists($parent . '/vendor')) {
    // Installed by composer
    $vendorPath =  $parent . '/vendor';
} elseif(file_exists($parent . '/i18n')) {
    // Uploaded package
    $vendorPath = realpath($parent . '/../vendor');
} else {
    throw new Exception('Unable to find vendor directory');
}

if(!file_exists($vendorPath)) {
    throw new Exception('Unable to find vendor directory');
}

require_once $vendorPath . '/autoload.php';