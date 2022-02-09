<?php

require_once __DIR__ . '/vendor/autoload.php';

use Shahkar\GoogleSearchMetaData\Index;

$greeting = new Index();

echo $greeting->greet("Hello Composer");

