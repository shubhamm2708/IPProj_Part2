<?php

// $_SESSION['id'] = 1;
// $_SESSION['username'] = 'dyno'; 

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");

$errors = array();
$username = '';
$email = '';
$password = '';
$passwordConf = '';
$table = 'users';

function loginUser($user) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are now Logged In';
    $_SESSION['type'] = 'success' ;

    if($_SESSION['admin']) {
        header('location: ' . BASE_URL . '/admin/dashboard.php');
    } else {
        header('location: ' . BASE_URL . '/index.php');
    }
        
    exit();
}

if(isset($_POST['register-btn']) || isset($_POST['create-admin'])) {

    $errors = validateUser($_POST);

    if(count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['passwordConf'], $_POST['create-admin']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        if(isset($_POST['admin'])) {
            $_POST['admin'] = 1;
            $user_id = create($table, $_POST);
            $_SESSION['message'] = "Admin Created Successfully";
            $_SESSION['type'] = "success";
            header('location: ' . BASE_URL . "/admin/users/index.php");
            exit();
        } else {
            $_POST['admin'] = 0;
            $user_id = create($table, $_POST);
            $user = selectOne($table, ['id' => $user_id]);
            loginUser($user);
        } 
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}


if(isset($_POST['login-btn'])) {
    //dd($_POST); for testing purpose
    $errors = validateLogin($_POST);

    if(count($errors) === 0) {
            $user = selectOne($table , ['username' => $_POST['username']]);

            if ($user && password_verify($_POST['password'], $user['password'])) {
                //log user in
                loginUser($user);
            } else {
                array_push($errors, 'Wrong Credentials');
            }
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

}