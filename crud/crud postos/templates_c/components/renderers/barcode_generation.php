<?php

include_once dirname(__FILE__) . '/../../libs/php_barcode_generator/autoload.php';

function generateBarcode ($data, $barcodeType, $singleBarWidth, $barHeight) {
    $barcodeGenerator = new \Picqer\Barcode\BarcodeGeneratorPNG();
    return $barcodeGenerator->getBarcode($data, $barcodeType, $singleBarWidth, $barHeight);
}

