#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';

use Acme\Life;

$universe = new Acme\Life\Universe([
    [0, 0]
]);

echo (new Life\ConsoleUniverseWriter())->write($universe);

