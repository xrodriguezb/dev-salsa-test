<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <script type="text/javascript" src="js/lost-password.js"></script>

    <title>Dev-Salsa Test::Recovery</title>
</head>
<body>
<?php
$show_recovery_link=false;
if(!empty($_GET['email'])){
    $email=urldecode($_GET['email']);
    $show_recovery_link=true;
    $_CODE=uniqid();
    $_SESSION['email']=$email;
    $_SESSION['code']=$_CODE;
}

if(!empty($_GET['code']) && $_SESSION['code']==$_GET['code']){
    exit('<script>loginByCode();</script>');
}

if(!$show_recovery_link){

    ?>
    <h1>Password recovery</h1>
    <p>
    <form autocomplete="on" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" id="recoveryForm">

        <label for="username"><b>Email</b></label>
        <input type="email" placeholder="Enter your email" name="email" id="email" required>

        <button type="submit">Recover</button>



    </form>
    </p>
    <?php
}else{
    ?>
 <a href="lost-password.php?code=<?php echo $_CODE; ?>">Recovery password</a>
    <?php
}

?>



</body>
</html>

<?php

