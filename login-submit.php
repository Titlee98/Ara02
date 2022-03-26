<?php include("header.php");?>
<?php 

if(strpos(file_get_contents('players.txt'), $_POST['username']) == false && strpos(file_get_contents('players.txt'), $_POST['password']) == false){
    header('Location: login-error.php');
}
    else{
        header('Location: jeopardyBoard.php');
        
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["qNums"] = 25;
       
   }

?>
<?php include("footer.php");?>