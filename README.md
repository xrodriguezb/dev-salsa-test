# dev-salsa-test

Dev Salsa Code assestment using PHP version 7.4

Linked in profile: https://www.linkedin.com/in/ing-xavier-rodriguez/

**TEST INSTRUCTIONS**

Build a small website with the following pages:
* index.php: public, contains link to sign-up.php , sign-in.php.
* sign-up.php: public , contains a form to register (user name , email , password) and a link to
sign-in.php.
* sign-in.php: public , on success redirects to user.php.
* lost-password.php: public, shows “enter email”.
* If email is submitted by $_GET to lost-password.php? email=”EMAIL”, shows reset
password link to lost-password.php?code=”CODE” (CODE must be in $_SESSION!).
* if CODE is received, signin and redirect to change-password.php.
* user.php: available only when signed in, else redirect to signin.php. Shows the user name and
email, and a link to change-password.php, and a link to sign-out.php.
* change-password.php: available only when signed in, else redirect to signin.php.
* sign-out.php: closes the session, redirects to index.php .

**Pay attention to the following:**

* Class structuring.
* Database setup and usage(MySQL – host: localhost / user:base / pas: base / db: exam).
* PHP data validation.
* PHP Security.
* Coding style (object oriented, clean and simple) .

**Rules**:
• Focus mainly on basic HTML and PHP.
• Some CSS in encouraged if you can , but no required.
• PHP version to use:7.2+
• Add to the read me file, Linkendin profile and what versión on PHP you used.

**Remember**
• You will NOT have Internet!.
• You cannot look up documentation online.
• You cannot include online libraries.
• You may not us you phone.
