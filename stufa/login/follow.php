<?php
include 'student-session.php';
$sid = $user_sid;
$sid2 = $_GET['sid2']
$sql ="INSERT INTO `following` (`following_sid`, `followed_sid`) VALUES ('$sid', '$sid2')";
$result = $mysqli->query($sql);
$sql1 ="SELECT * from students where sid = $sid2";
$result1 = $mysqli->query($sql1);
$row = $resuly->fetch_assoc();
echo '<script type ="text/javascript"> alert ("Started following '.$row["f_name"].' '.$row["l_name"]'");document.location="someoneprofile.php?search='.$sid2.'"</script>'; 
?>