<?php
require_once 'session_validation.php';
?>
<!doctype html>
<html>
<head>
    <title>Dev-Salsa::User profile</title>
</head>
<body>
<h1>Welcome</h1>
<p>
<table>
    <thead>
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $_SESSION['User']['username'] ?></td>
        <td><?php  echo $_SESSION['User']['email'] ?></td>
        <td><a href="change-password.php">Change password</a></td>
    </tr>
    </tbody>
</table>
<p><a href="sign-out.php">Log out</a></p>
</body>
</html>