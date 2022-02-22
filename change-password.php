<?php
require_once 'session_validation.php'
?>
<!doctype html>
<html>
<head>
    <script type="text/javascript" src="js/change-password.js"></script>
    <title>Dev-Salsa::Change password</title>
</head>
<body>
<h1>Change my password</h1>
<p>
<form autocomplete="off" action="dispatchers/update-password.php" method="post" id="updateForm">

    <label for="new_password"><b>New Password</b></label>
    <input type="password" placeholder="Enter your new password" name="new_password" id="new_password" required>

    <label for="confirm_new_password"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm your current password" name="confirm_new_password" id="confirm_new_password" required>


    <hr>
    <button type="submit">Update</button>



</form>
</body>
</html>