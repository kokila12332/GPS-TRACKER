<?php
session_start();
if(!isset($_SESSION['user'])){ header("Location: login.php"); exit(); }
?>
<h2>Vanakkam <?php echo $_SESSION['user']['username'];?> Pa! 🙏</h2>
<p><a href="report_missing.php">➕ Missing Report Pannu Pa</a></p>
<p><a href="track.php">🔍 Phone Track Pannu Pa</a></p>
<p><a href="logout.php">Logout</a></p>