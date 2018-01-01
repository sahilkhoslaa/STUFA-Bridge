<?php


$sid = $user_sid;

$mysqli->select_db("stufa");


$sql1 = "SELECT * FROM students WHERE sid = $sid";
$result = $mysqli->query($sql1);
$row = $result->fetch_assoc();
$var1 = $row["sid"];
$var2 = $row["user_name"];
$var3 = $row["f_name"];
$var4 = $row["m_name"];
$var5 = $row["l_name"];
$var6 = $row["email"];
$var7 = $row["dob"];
$var8 = $row["year_of_join"];
$var9 = $row["hostel_id"];
$var10 = $row["dept_id"];
$var11 = $row["image"];
$var12 = $row["phone"];
$var13 = $row["semester"];
$var17 = $row["address"];
$var18 = $row["about"];
$var19 = $row["cover"];
$var20 = $row["last_login"];
//echo 'src="data:image/jpeg;base64,'.base64_encode( $row["profile_pic"] ).'"';

$sql2 = "SELECT name FROM department,students WHERE did = dept_id and sid = $sid";
$result = $mysqli->query($sql2);
$row = $result->fetch_assoc();
$var14 = $row["name"];

$sql3 = "SELECT name FROM hostel,students WHERE hostel.hostel_id = students.hostel_id and sid = $sid";
$result = $mysqli->query($sql3);
$row = $result->fetch_assoc();
$var15 = $row["name"];




$sql4 = "SELECT count(course_id) as rahul from master_table where sid=$var1 and sem_no=16172";
$result = $mysqli->query($sql4);
$row = $result->fetch_assoc();
$var16 = $row["rahul"];
$sysyear = date("Y");
//$var21 = $row["sem_no"];
$var21=16172;

//date_default_timezone_set('Asia/Kolkata');
//$year = year();
//$month=month();

//$yr=$year%100;
//if($month>6)
//	$yr=$yr*1000+(($yr+1)*10)+1;
//else
//	$yr=($yr-1)*1000+(($yr)*10)+1;

//echo $yr;





$mysqli->close();

?>
