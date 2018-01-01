<?php
   
      $mysqli = mysqli_connect("localhost","user_stufa","Stufa@2017","stufa");

      if(!$mysqli){
      		die("Connection failed: ".mysqli_connect_error());
      }
?>