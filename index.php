<?php

require_once('vendor/autoload.php');


use SimpleSoftwareIO\QrCode\Generator;

$qrcode = new Generator;
$d = $qrcode->size(200)->generate('Crie um QrCode sem Laravel!');
echo $d;















?>