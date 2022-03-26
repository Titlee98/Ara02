<?php include("header.php");?>

<link rel = "stylesheet" href = "style.css">

<div class="questionDiv">
    <h2 class="blinking">Leader Board</h2><br>
<?php include_once "common.php";

    sortData();
?>

        <pre><?php echo file_get_contents("leaderboard2.txt");?></pre>

</div>


<?php include("footer.php");?>