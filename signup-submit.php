<?php include("header.php"); ?>
<?php 

    // This conditional statement checks if the form fields are empty .
    // If true, the user is redirected to a try again page.
    if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])){
        header('Location: error_page.php');

    }
    if(strpos(file_get_contents('players.txt'), $_POST['username']) !== false){
        header('Location: error_page.php');
    }
    else{
        $file = 'players.txt';
        // Open the file to get existing content
        $current = file_get_contents($file);
        // Append a new person to the file
        $current .= "${_POST['username']},${_POST['email']}, ${_POST['password']}\n";
        // Write the contents back to the file
        file_put_contents($file, $current);
   }

?>

<div style="color: black; padding: 10px; margin-left: auto; margin-right: auto; text-align: center; margin-top: 100px;">
<h1>Thank you!</h1>
<p>
    Welcome to Jeopardy, <?= $_POST["username"] ?><br/><br/>
    Now <a href="index.php">log in to to play!</a>
</p>

<?php include("footer.php"); ?>