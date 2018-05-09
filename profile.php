<?php
	require 'db.php';
	$userid = $_GET["userid"];
	$result = $mysqli->query("SELECT * FROM user WHERE userid='$userid'");
	$user = $result->fetch_assoc();
	$username = $user['username'];
	$fullname = $user['fullname'];
	$email = $user['email'];
	$image = $user['image'];
?>

<!DOCTYPE html>

<html>

    <head>
        <link rel="stylesheet" href="css/profile.css">
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
		<?php
			echo '<img id="ppicture" alt="Edit" src="img/'.$image.'.jpg">';
		?>
		<div class="show-profile">
			<label id="pusername">@<?php echo $username ?></label><br>
			<label id="pname"><?php echo $fullname ?></label><br>
			<label id="pemail"><?php echo $email ?></label><br>
		</div><br>
		<br>
		<label id="profile"><b>MY REPORTS</b></label>
		<br><br>

		<?php
		$con=mysqli_connect("85.10.205.173:3306", "itb_beraksi_db", "itb_beraksi_db", "itb_beraksi_db");
		$result = mysqli_query($con,"SELECT * FROM report WHERE userid = $userid");
		if (mysqli_num_rows($result) == 0){
			echo "<center>You haven't reported anything</center>";
		}
		else {
			echo "<table>";
			while($row = mysqli_fetch_array($result)) {
			    echo "<tr>";
			    echo "<td>•</td><td><b>" . $row['date'] . "</b></td>";
			    echo "</tr>";
			    echo "<tr>";
			    echo "<td></td><td>" . $row['type'] . ": " . $row['detail'] . "</td>";
			    echo "</tr>";
			    echo "<tr><td height='10'></td></tr>";
	   		}
	   		echo "</table>";
		}
		?>
    </body>

</html>