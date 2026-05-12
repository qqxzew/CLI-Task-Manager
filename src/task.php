<?php
namespace TaskManager;

    
const PATH_TO_STORAGE = 'data/tasks.json';

class Tasks{
    function initializeStorage(){
    
        if(!file_exists(PATH_TO_STORAGE)){
            mkdir('data', 0777, true);
            file_put_contents(PATH_TO_STORAGE, json_encode([]));
        }
    }
    function add($argv){
        if ($argv[1] =="add"){
            $json = file_get_contents(PATH_TO_STORAGE);
            $tasks = json_decode($json, true);
            $tasks[] = $argv[2];
            $jsonToSave = json_encode($tasks);
            file_put_contents(PATH_TO_STORAGE, $jsonToSave);
        }
    }   

    function remove($argv){
        if ($argv[1] =="remove"){
            $json = file_get_contents(PATH_TO_STORAGE);
            $tasks = json_decode($json, true);
            $taskToFind = $argv[2];
            $key = array_search($taskToFind, $tasks);
            unset($tasks[$key]);
            $jsonToSave = json_encode($tasks);
            file_put_contents(PATH_TO_STORAGE, $jsonToSave);
        }
    }
}
