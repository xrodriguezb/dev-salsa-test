<!doctype html>
<html>
<head>
    <script type="text/javascript" src="js/sign-in.js"></script>

    <title>Dev-Salsa Test::Register</title>
</head>
<body>
<h1>Sign in</h1>
<p>
<form autocomplete="on" action="dispatchers/login.php" method="post" id="loginForm">

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter your username" name="username" id="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter your password" name="password" id="password" required>

    <hr>
    <button type="submit">Login</button>



</form>
</p>
</body>
</html>

<?php

