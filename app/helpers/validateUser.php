<?php

function validateUser($user) {

    $errors = array();

    if(empty($user['username'])) {
        array_push($errors, 'Username Required');
    }

    if(empty($user['email'])) {
        array_push($errors, 'EMail Required');
    }

    if(empty($user['password'])) {
        array_push($errors, 'Password Required');
    }

    // if(empty($_POST['passwordConf'])) {
    //     array_push($errors, 'Please Enter Password Again');
    // }

    if($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'Passwords Do Not Match');
    }

    $existingUser = selectOne('users' , ['email' => $user['email']]);
    if (isset($existingUser)) {
        array_push($errors, 'EMail Already Exists');
    }

    return $errors;
}


function validateLogin($user) {

    $errors = array();

    if(empty($user['username'])) {
        array_push($errors, 'Username Required');
    }

    if(empty($user['password'])) {
        array_push($errors, 'Password Required');
    }

    return $errors;
}