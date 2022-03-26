<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="main.css" rel="stylesheet">
    <title>JEOPARDY!</title>
</head>
<body>
<nav>
    <div class="logo">
        <p>Jeopardy!</p>
    </div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="https://codd.cs.gsu.edu/~sglover6/Project02.pdf">About</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>
<div style="color: black; padding: 10px; margin-left: auto; margin-right: auto; text-align: center; margin-top: 100px;">
<h1>Game over, <?php echo $_SESSION["username"]?>!</h1><br>


   <h1>Final score <?php echo $_SESSION["score"]?><br><a href="index.php">Try again?</a><h1>


</div>
</body>
</html>