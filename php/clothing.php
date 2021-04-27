<?php
session_start();

if ($_SESSION["session_id"]) {
    $username = $_SESSION["email"];
    $name = $_SESSION["name"];
} else {
    echo "<script> alert('Session not available. Please login')</script>";
    echo "<script> window.location.replace('../html/login.html')</script>";
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Main Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/depositori.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="header">
    <h1>DEFENDER SPORT STORE</h1>
        <center>
			<img src="../images/bta.png">
		</center>

    </div>
    <div class="topnavbar" id="myTopnav">
        <a href="defenderstore.php">Clothing</a>
        <a href="#">My Profile</a>
        <a href="#">Contact Us</a>
        <a href="../html/login.html" onclick="logout()" class="right">Logout</a>
        <a href="javascript:void(0);" class="icon" onclick="mytopnavFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <div class="main">
        <div class="row-single">
            <div class="card-header" type="submit">
                <h3>Welcome</h3>
                <p><?php echo $name ?></p>
                <p>Please choose the clothes you want</p>
            </div>
        </div>
        <div class="row">
            <div class="column-card">
                <a href="subjectspage.php?yearform=Form 1" style="text-decoration:none; color:#000000">
                    <div class="card" type="submit">
                        <center>
			            <img src="../images/bajujual1.jpeg">
		                </center>
                        <h3>RM 24</h3>
                        <p>Roundneck Shortsleeve</p>
                    </div>
                </a>
            </div>

            <div class="column-card">
                <a href="subjectspage.php?yearform=Form 2" style="text-decoration:none; color:#000000">
                    <div class="card">
                        <center>
			            <img src="../images/bajujual2.jpeg">
		                </center>
                        <h3>RM 30</h3>
                        <p>Roundneck Shortsleeve</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="column-card">
                <a href="subjectspage.php?yearform=Form 3" style="text-decoration:none; color:#000000">
                    <div class="card">
                        <center>
			            <img src="../images/bajujual3.jpeg">
		                </center>
                        <h3>RM 36</h3>
                        <p>Roundneck Shortsleeve</p>
                    </div>
                </a>
            </div>

            <div class="column-card">
                <a href="subjectspage.php?yearform=Form 4" style="text-decoration:none; color:#000000">
                    <div class="card">
                        <center>
			            <img src="../images/bajujual4.jpeg">
		                </center>
                        <h3>RM 30</h3>
                        <p>Roundneck Shortsleeve</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>