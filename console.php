<?php

require_once 'src/task.php';
use TaskManager\Tasks;

$setStorage = new Tasks();
$setStorage->initializeStorage();
$tasks = new Tasks();

switch ($argv[1]) {
    case 'add':
        $tasks->add($argv[2]);
        break;
    case 'remove':
        $tasks->remove($argv[2]);
        break;
    case 'list':
        $tasks->list($argv);
        break;}