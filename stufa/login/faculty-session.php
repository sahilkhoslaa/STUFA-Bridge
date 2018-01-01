<?php
   include('config.php');
   session_start();   
   $user_fid = $_SESSION['unique_fid'];
   //echo $user_sid;  
   //$sql="select sid from students where sid = '$user_sid' "; 
   //$result = $conn->query($sql);//$ses_sql = mysqli_query($db,"select sid from admin where sid = '$user_sid' ");   
   //$row= $result->fetch_assoc();//$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);   
   //$float_sid = $row['sid'];   
   if(!isset($_SESSION['unique_fid'])){
      //header("location:index.html");
      echo '<script type ="text/javascript"> alert ("login to access STUFA-BRIDGE ");document.location="http://stufa.projectead.com/stufa/login/";</script>'; 
   }
?>


