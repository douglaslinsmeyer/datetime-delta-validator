<?php

use DLinsmeyer\DateTimeDeltaValidator\DateTime;
use DLinsmeyer\DateTimeDeltaValidator\Validator;

require __DIR__ . '/vendor/autoload.php';

$validator = new Validator();

$testOneDateAlpha = DateTime::createFromPickDateTime(17452, 43200);
$testOneDateBeta = DateTime::createFromPickDateTime(17452, 44040);
$resultOne = $validator->validate($testOneDateAlpha, $testOneDateBeta, 15);

$testTwoDateAlpha = DateTime::createFromPickDateTime(17451, 54000);
$testTwoDateBeta = DateTime::createFromPickDateTime(17452, 55800);
$resultTwo = $validator->validate($testTwoDateAlpha, $testTwoDateBeta, 60);

$testThreeDateAlpha = DateTime::createFromPickDateTime(17452, 180);
$testThreeDateBeta = DateTime::createFromPickDateTime(17451, 86340);
$resultThree = $validator->validate($testThreeDateAlpha, $testThreeDateBeta, 5);

echo 'Result 1: ' . (($resultOne) ? 'true' : 'false') . PHP_EOL;
echo 'Result 2: ' . (($resultTwo) ? 'true' : 'false') . PHP_EOL;
echo 'Result 3: ' . (($resultThree) ? 'true' : 'false') . PHP_EOL;
