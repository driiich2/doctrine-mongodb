<?php

use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;
use Test\Documents\Product;

if (!file_exists($file = __DIR__ . '/vendor/autoload.php')) {
    throw new RuntimeException('Install dependencies to run this script.');
}

require_once $file;


$product = new Product();
$product->setName('Test Product');

$config = new Configuration();
$config->setProxyDir(__DIR__ . '/src/Proxies');
$config->setProxyNamespace('Proxies');
$config->setHydratorDir(__DIR__ . '/src/Hydrators');
$config->setHydratorNamespace('Hydrators');
$config->setDefaultDB('doctrine_odm');
$config->setMetadataDriverImpl(AnnotationDriver::create(__DIR__ . '/src/Documents'));

$dm = DocumentManager::create(null, $config);

$dm->persist($product);
$dm->flush();

echo "Product created with ID: " . $product->getId() . "\n";
