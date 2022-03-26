
<?php 
    session_start();

    include_once "common.php";

    if($_SESSION["qNums"] == 0) {
        header('Location: game-over.php');
        saveScore();
        sortData();
        exit();
    }

    if(isset($_POST['quit'])) {
        logoutPlayer();
    }
?>

<html> 
<head>
    <link rel = "stylesheet" href = "style.css">
</head>
<body id="boarder-body">
    <div class = "tableDiv">
        <div class = "leaderboardplayer">
            <?php 
                echo "<h1>{$_SESSION["username"]}</h1>";
                echo "<h1>{$_SESSION["score"]}</h1>";
                echo "<h1> Number of questions left: {$_SESSION["qNums"]}</h1>";
                echo "<form method=post>
                          <input type=submit name=quit value=QUIT>
                        </form>";
            ?>
        </div>
    </div>
    <div class = "tableDiv">
        <table>
            <tr>
                <th><p class = "fadeIn1">Board Games</p></th>
                <th><p class = "fadeIn2">Movies</p></th>
                <th><p class = "fadeIn3">Pop Music</p></th>
                <th><p class = "fadeIn4">Soda Brands</p></th>
                <th><p class = "fadeIn5">Popular Books</p></th>
            </tr>
            <tr>
                <td><a href = "BoardGames/b100.php" class = "fadeIn1">100</a></td>
                <td><a href = "Movies/m100.php" class = "fadeIn2">100</a></td>
                <td><a href = "PopMusic/pop100.php" class = "fadeIn3">100</a></td>
                <td><a href = "SodaBrands/s100.php" class = "fadeIn4">100</a></td>
                <td><a href = "PopularBooks/book100.php" class = "fadeIn5">100</a></td>
            </tr>
            <tr>
                <td ><a href = "BoardGames/b200.php" class = "fadeIn1">200</a></td>
                <td><a href = "Movies/m200.php" class = "fadeIn2">200</a></td>
                <td><a href = "PopMusic/pop200.php" class = "fadeIn3">200</a></td>
                <td><a href = "SodaBrands/s200.php" class = "fadeIn4">200</a></td>
                <td><a href = "PopularBooks/book200.php" class = "fadeIn5">200</a></td>
            </tr>
            <tr>
                <td><a href = "BoardGames/b300.php" class = "fadeIn1">300</a></td>
                <td><a href = "Movies/m300.php" class = "fadeIn2">300</a></td>
                <td><a href = "PopMusic/pop300.php" class = "fadeIn3">300</a></td>
                <td><a href = "SodaBrands/s300.php" class = "fadeIn4">300</a></td>
                <td><a href = "PopularBooks/book300.php" class = "fadeIn5">300</a></td>
            </tr>
            <tr>
                <td><a href = "BoardGames/b400.php" class = "fadeIn1">400</a></td>
                <td><a href = "Movies/m400.php" class = "fadeIn2">400</a></td>
                <td><a href = "PopMusic/pop400.php" class = "fadeIn3">400</a></td>
                <td><a href = "SodaBrands/s400.php" class = "fadeIn4">400</a></td>
                <td><a href = "PopularBooks/book400.php" class = "fadeIn5">400</a></td>
            </tr>
            <tr>
                <td><a href = "BoardGames/b500.php" class = "fadeIn1">500</a></td>
                <td><a href = "Movies/m500.php" class = "fadeIn2">500</a></td>
                <td><a href = "PopMusic/pop500.php" class = "fadeIn3">500</a></td>
                <td><a href = "SodaBrands/s500.php" class = "fadeIn4">500</a></td>
                <td><a href = "PopularBooks/book500.php" class = "fadeIn5">500</a></td>
            </tr>
        </table>
    </div>
<body>
</html>