<?php 
    session_start();
    $_SESSION["score"] = 0;
  
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
        <li><a href="leaderboard-page.php">Leaderboard</a></li>
        <li><a href="https://codd.cs.gsu.edu/~sglover6/Project02.pdf">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li>
            <?php

                if(isset($_SESSION["username"]))
                {
                    echo "<a href=\"logout.php\">Logout</a>";
                }
                else
                {
                    echo "<a href=\"logout.php\" style=display:none>Logout</a>";
                }
            ?>

        </li>
    </ul>
</nav>

<h1 id="welcome-header">
    Welcome to JEOPARDY!
</h1>


