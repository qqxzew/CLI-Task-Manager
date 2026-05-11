<?php
namespace TaskManager;

    
const PATH_TO_STORAGE = '../data/tasks.json';

class Tasks{
    function initializeStorage(){
    
        if(!file_exists(PATH_TO_STORAGE)){
            mkdir('../data', 0777, true);
            file_put_contents(PATH_TO_STORAGE, json_encode([]));
        }
    }
}

$storage = new Tasks();
$storage->initializeStorage();