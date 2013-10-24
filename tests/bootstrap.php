<?php

$autoloader = require_once __DIR__.'/../vendor/autoload.php';
$autoloader->add('deit\\platform', [ __DIR__.'/../src', __DIR__.'/../tests' ]);
