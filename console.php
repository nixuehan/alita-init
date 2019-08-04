<?php
require (__DIR__ . "/vendor/autoload.php");

$console = (new \Alita\App([
    'project_root' => __DIR__
]))->getConsole($argc,$argv);

$console->run();