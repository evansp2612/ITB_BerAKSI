<?php
    require 'db.php';
    $userid = $_GET["userid"];
    $result = $mysqli->query("SELECT * FROM user WHERE userid='$userid'");
    $user = $result->fetch_assoc();
    $username = $user['username'];
    $fullname = $user['fullname'];
    $banstatus = $user['banstatus'];
?>

<!DOCTYPE html>

<html>

    <head>
        <link rel="stylesheet" href="css/report.css">
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
        if ($banstatus == 1)
            echo "<br><br><center>You're banned</center>";
        else {
        echo "<center>
        <form action='reportproses.php' method='get'>
            <input type='hidden' name='userid' value=". $userid ." />
            <table>
                <tr><td><b>Jenis Pelanggaran</b></td></tr>
                <tr><td>
                <select name='type'>
                    <option value='Pelanggaran 1'>Pelanggaran 1</option>
                    <option value='Pelanggaran 2'>Pelanggaran 2</option>
                    <option value='Pelanggaran 3'>Pelanggaran 3</option>
                    <option value='Pelanggaran 4'>Pelanggaran 4</option>
                    <option value='Lain-lain'>Lain-lain</option>
                </select>
                </td></tr>
                <tr><td height='5'></td></tr>
                <tr><td><b>Detail</b></td></tr>
                <tr><td>
                <textarea name='detail' rows='5' cols='50' required></textarea>
                </td></tr>
                <tr><td height='10'></td></tr>
                <tr><td><center><button type='submit'>REPORT!</button></center></td></tr>
            </table>
        </form>
        </center>";
    }
    ?>
    </body>

</html>