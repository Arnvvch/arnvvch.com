<?php 

require 'vendor/autoload.php';

use PChess\Chess\Chess;
use \PChess\Chess\Output\ImagineOutput;

$chess = new Chess();
$imagine = new \Imagine\Gd\Imagine();   // or \Imagine\Imagick\Imagine()
$output = new ImagineOutput($imagine, dirname(__FILE__) . '/chess/', 480, true);
header('Content-Type: image/png');  
echo $output->render($chess);