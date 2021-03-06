--TEST--
phpunit ../../_files/ExternalProphecyIntegrationTest.php
--SKIPIF--
skip: phpspec/prophecy-phpunit required
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = __DIR__ . '/../_files/ExternalProphecyIntegrationTest.php';

require __DIR__ . '/../bootstrap.php';
PHPUnit\TextUI\Command::main();
--EXPECTF--
PHPUnit %s by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: %s, Memory: %s

OK (1 test, 2 assertions)
