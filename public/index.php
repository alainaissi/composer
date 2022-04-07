<?php

require '../vendor/autoload.php';
use App\Wcs\Hello;

$newMessage = new Hello();

echo $newMessage->talk();