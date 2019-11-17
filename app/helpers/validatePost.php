<?php

function validatePost($post) {

    $errors = array();

    if(empty($post['title'])) {
        array_push($errors, 'Title is Required');
    }

    if(empty($post['body'])) {
        array_push($errors, 'Body is Required');
    }

    if(empty($post['topic_id'])) {
        array_push($errors, 'Please Select A Topic');
    }

    $existingPost = selectOne('posts' , ['title' => $post['title']]);
    if (isset($existingPost)) {
        array_push($errors, 'Post with this title Already Exists');
    }

    return $errors;
}