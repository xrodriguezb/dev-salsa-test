<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Invalid Request');
}
 require '../classes/User.php';

try {
    if($_POST['type']=="by_code" && !empty($_SESSION['code'])){
        $user=new User();
        $user->setEmail($_SESSION['email']);
        $_SESSION['User'] = $user->loginByCode()->toArray();

    }else{
        $user=new User();
        $user->setUsername($_POST['username']);
        $user->setPassword(md5($_POST['password']));
        $_SESSION['User']=$user->login()->toArray();
    }

    if(!empty($_SESSION['User']['id']))
        echo 'success';
    else
        echo 'User not found';

} catch (PDOException $e) {
    echo $e->getMessage();
}









