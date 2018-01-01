<?php
   session_start();
?>

<?php
   include 'config.php';//echo "hello1 ";

   $u_name = $_POST['user'];
   $p_word = $_POST['pass'];
   //echo "hello2";

   //$conn->select_db("stufa");    //not required as we have only 1 database
   $sql = "SELECT * FROM faculty WHERE username='$u_name' AND password='$p_word'";
   $result = $mysqli->query($sql);// echo "hello4 ";//   echo " $result->num_rows";

   if(!$row = $result->fetch_assoc())
      {  echo '<script type ="text/javascript"> alert ("Incorrect Username or password");document.location="faculty.html";</script>'; 		
   		//http_redirect("index.html");//   echo "your username or password is incorrect!!";:
         //header("Location: index.html");
   }  
   else{
   		$_SESSION['unique_fid'] = $row['fid'];
         echo "good";
   		header("Location: stufa_main/faculty/index.php");
   		//echo "Welcome: ";echo $_SESSION['unique_sid'];echo " : ";echo $row['user_name'];
   }
$mysqli->close(); 
?>