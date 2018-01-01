<?php
session_start();
$sid = $_GET['sid'];
$mysqli = new mysqli("localhost", "root", "rahul@1997", "stufa");
/* check connection */
if (!mysqli_connect_errno()) {
echo "connected";
}
else
	echo " ******** not connected******yayy!!!:)";
$mysqli->select_db("stufa");
$sql = "SELECT * FROM ead_students WHERE sid = $sid";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
$var1 = $row["sid"];
echo $var1;
$var2 = $row["user_name"];
echo $var2;
$var3 = $row["fullname"];
echo $var3;
$var4 = $row["dept_id"];
echo $var4;
$var5 = $row["dob"];
echo $var5;
$var6 = $row["sem_no"];
echo $var6;
$var7 = $row["year_no"];
echo $var7;
$var8 = $row["branch"];
echo $var8;
$var9 = base64_encode( $row["profile_pic"]);
//echo '<img src="data:image/jpeg;base64,'.base64_encode( $row["profile_pic"] ).'"/>';
$mysqli->close();
?>