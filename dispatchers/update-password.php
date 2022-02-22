<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Invalid Request');
}

//Sanitize post params
$password = trim($_POST['password']);
$new_password=trim($_POST['new_password']);
$confirm_new_password=trim($_POST['confirm_new_password']);

$errors='';
if(empty($new_password)){
    $errors.='Please enter a valid password.';
}
if($new_password != $confirm_new_password){
    $errors.='Password does not match.';
}
if(!empty($errors)){
    exit("Please check the following errors: ".$errors);
}else{

    require '../classes/User.php';
    $user = new User();
    $user->setId($_SESSION['User']['id']);
    $user->setPassword(md5($new_password));
    try {
        if ($user->updatePassword()) {
            $_SESSION['User']['password'] = md5($new_password);
           echo 'success';
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}