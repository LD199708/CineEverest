<?php
require('qrlib.php');

$path = './qrcodefile/';
$file = $path.basename('QRcodetest').".png";

$text = 'Tu Codigo de compra';

QRcode::png ($text, $file);

?>