<!doctype html>
<html>
<head>
    <script type="text/javascript" src="js/sign-up.js"></script>

    <title>Dev-Salsa Test::Register</title>
</head>
<body>
<h1>Register</h1>
<p>
<form autocomplete="on" action="dispatchers/register.php" method="post" id="registerform">

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter your username" name="username" id="username" required>

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter your email address" name="email" id="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
        <hr>
        <button type="submit">Register</button>



</form>
</p>
</body>
</html>

<?php

