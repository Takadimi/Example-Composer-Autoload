<?php

require __DIR__ . '/vendor/autoload.php';

use Acme\SubDirTest\Person as Person;
use Acme\Logger as Logger;

Logger::d("TEST", "This is only a test yall.");

echo "\n\n";

$me = new Person("Ethan Woodward", 25);
$me->greeting();
