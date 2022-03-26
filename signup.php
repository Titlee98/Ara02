<?php include("header.php");?>
<div id="container">
    <div id="form-spacing">
    <h1>Create an Account </h1>
    <br>
    <p>Please fill in this form to register.</p>
    <hr><br>
    <form action="signup-submit.php" method="post">
        <label for="username"><b>Username</b></label><br>
        <input type="text" name="username" required><br>
        <label for="email"><b>Email</b></label><br>
        <input type="email" name="email" required><br>
        <label for="password"><b>Password</b></label><br>
        <input type="password" name="password" reqiured><br>
        
        <input type="submit" name="submit" value="Register">
        <br>
    </form>
    </div>
</div>
<?php include("footer.php");?>