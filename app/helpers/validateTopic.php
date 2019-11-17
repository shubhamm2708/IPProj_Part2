<?php

function validateTopic($topic) {

    $errors = array();

    if(empty($topic['name'])) {
        array_push($errors, 'Name is Required');
    }



    $existingTopic = selectOne('topics' , ['name' => $topic['name']]);
    if (isset($existingTopic)) {
        if(isset($post['update-topic']) && $existingTopic['id'] != $post['id']) {
            array_push($errors, 'Name Already Exists');
        }

        if(isset($post['add-topic'])) {
            array_push($errors, 'Nmae Already Exists');
        }
    }    

    return $errors;
}


