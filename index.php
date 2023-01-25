<?php

require_once('vendor/autoload.php');


use SimpleSoftwareIO\QrCode\Generator;

$qrcode = new Generator;
$d = $qrcode->size(200)->generate('Crie um QrCode sem Laravel!');
echo $d;

// example format e style
$z = new Generator;
$z->format('png');
$h = $z->style('round')->size(100)->generate('Ce sem Laravel!', 'qrcode.png');

// exemplo do merge não se esqueça que o gd tem que está habilitado.
$z = new Generator;
$z->format('png')->merge('https://camo.githubusercontent.com/69644ec5ba6ed563eb0543cc1ad6519ab08ba4b38383de321fc83555cdf41f5a/68747470733a2f2f6e61726d616d656e742e636f6d2f7372632f696d6167656d2f6c6f676f2e706e67', .3, true)->generate('fsdfwefwef','teste.png');











?>