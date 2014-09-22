<?php include 'includes/header.inc.php'; ?>

<form onSubmit="user.registerUser($(this).find('#login').val(), $(this).find('#password').val());" action="#">
    <label for="login">Login</label><input id="login" /><br />
    <label for="password">Password</label><input id="password" type="password" />
    <input type="submit" />
</form>

<?php include 'includes/footer.inc.php';