<?php

function validatePost($post){
    global  $conn;
    $errors = array();
    if (empty($post['title'])){
        array_push($errors, "Title is required");
    }
    if (empty($post['body'])){
        array_push($errors, "Body is required");
    }
    if (empty($post['topic_id'])){
        array_push($errors, "Please check category");
    }
    if (!isset($post['topic_id'])) {
        $existingPost = selectOne('users',['email'=>$post['title']]);
    }
    if ($existingPost){
        array_push($errors,"Post with that title already exists");
    }
    return $errors;
}