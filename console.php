<?php
require_once 'src/task.php';
use TaskManager\Tasks;

$setStorage = new Tasks();
$setStorage->initializeStorage();

$addTask = new Tasks();
$addTask->add($argv);

$removeTask = new Tasks();
$removeTask->remove($argv);