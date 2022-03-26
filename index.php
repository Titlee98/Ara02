<?php include("header.php");?>
<div id="container">
    <div id="form-spacing">
    <h1>Player's Information</h1>
    <br>
    <p>Please fill in this form to play.</p>
    <hr><br>
    <form action="login-submit.php" method="post">
        <label for="username"><b>Username</b></label><br>
        <input type="text" name="username" required><br>
        <label for="password"><b>Password</b></label><br>
        <input type="password" name="password" required><br>
        <input type="submit" name="submit" value="Login">
        <br>
    </form> <br>
    <h3>No Account yet? <a style="color: black;" href="signup.php">Create one!</a></h3>
    </div>
</div>
<?php include("footer.php");?>