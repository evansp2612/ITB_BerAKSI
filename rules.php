<?php
    require 'db.php';
    $userid = $_GET["userid"];
    $result = $mysqli->query("SELECT * FROM user WHERE userid='$userid'");
    $user = $result->fetch_assoc();
    $username = $user['username'];
    $fullname = $user['fullname'];
?>

<!DOCTYPE html>

<html>

    <head>
        <link rel="stylesheet" href="css/rules.css">
    </head>

    <body>
        
        <div class="header">
            <div class="logo">
                <img src="img/gojek.png" alt="Logo" style="height:50px">
            </div>
            <div class="username">        
                <p>Hi, <b><?php echo $fullname ?></b>!</p>
                <a href="index.php">Logout</a>
            </div>
        </div>
        
        <div class="menubar">
            <div id="menu-order" onclick="location.href='report.php?userid=<?php echo $userid ?>'">REPORT
            </div><div id="menu-history" onclick="location.href='rules.php?userid=<?php echo $userid ?>'">RULES
            </div><div id="menu-profile" onclick="location.href='profile.php?userid=<?php echo $userid ?>'">MY PROFILE
            </div>
        </div>
        <br>
		<div>
			<iframe src="http://docs.google.com/viewer?url=https://akademik.itb.ac.id/files/publik/Peraturan_Akademik_ITB_2015.pdf&embedded=true" width="500" height="700" style="border: none;"></iframe>
		</div>
    </body>

</html>