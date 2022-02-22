<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Invalid Request');
}

//Sanitize post params
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_EMAIL);
$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$password = trim($_POST['password']);

//Valid post params
$errors='';
if(empty($email)){
    $errors.='Please enter a valid email address';
}
if(empty($username)){
    $errors.='Please enter a valid username';
}
if(empty($password)){
    $errors.='Please enter a valid password';
}
if(!empty($errors)){
    exit($errors);
}else{

    require '../classes/User.php';

    $user = new User();
    $user->setUsername($username);
    $user->setEmail($email);
    $user->setPassword(md5($password));
    try {
        if ($user->create()) {
            $_SESSION['User'] = $user->toArray();
            echo 'success';
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}


