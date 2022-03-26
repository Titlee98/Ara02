<?php 
function addScore($score) {
    $_SESSION["score"] = $_SESSION["score"] + $score;
 }
 
 function subScore($score) {
     $_SESSION["score"] = $_SESSION["score"] - $score;
  }

  function decrementQuestions(){
    $_SESSION["qNums"] = $_SESSION["qNums"] - 1;
  }

  function logoutPlayer() {
    session_start();
    session_unset();
    session_destroy();
    header('Location: index.php');
  }


  function saveScore(){
    $file = 'leaderboard.txt';
    // Open the file to get existing content
    $current = file_get_contents($file);
    // Append a new person to the file
    $current .= "${_SESSION['score']},${_SESSION['username']}\n";
    // Write the contents back to the file
    file_put_contents($file, $current);
}



  function sortData(){
    $data = file('leaderboard.txt');
    krsort($data);
    file_put_contents('leaderboard2.txt', implode("\n", $data));
  }
?>
