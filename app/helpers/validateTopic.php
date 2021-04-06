<?php
function validateTopic($topic){
    $errors = array();
    if (empty($topic['name'])){
        array_push($errors, "Topic name is required");
    }
    if (!isset($topic['id'])){
        $existingTopic = selectOne('topics',['name'=>$topic['name']]);
    }
    if ($existingTopic){
        array_push($errors,"Topic already exists");
    }
    return $errors;
}