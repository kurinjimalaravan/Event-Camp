<?php

  $Userid = $_POST['Userid'];
  $Password = $_POST['Password'];
   
    $con = new mysqli('localhost','root','','login');
  if($con->connect_error)
  {
      die("Failed to connect:".$con->connect_error);
  }else {
      $stmt = $con->prepare("insert into info (Userid,Password) values(?,?)");
      $stmt->bind_param("ss", $Userid,$Password);
      $stmt->execute();
      echo "Successfully";
      $stmt->close();
      $con->close();
  }

?>