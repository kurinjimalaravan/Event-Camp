<?php
  $Name = $_POST['Name'];
  $Rollno = $_POST['Rollno'];
  $Email = $_POST['Email'];
  $EventName = $_POST['EventName'];
  $PhoneNumber = $_POST['PhoneNumber']
   

    $con = new mysqli('localhost','root','','login');
  if($con->connect_error)
  {
      die("Failed to connect:".$con->connect_error);
  }else {
      $stmt = $con->prepare("insert into info (Name, Rollno, Email, EventName, PhoneNumber)
      values(?,?,?,?,?)");
      $stmt->bind_param("ssssi", $Name, $Rollno, $Email, $EventName, $PhoneNumber);
      $stmt->execute();
      echo "Successfully";
      $stmt->close();
      $con->close();
  }

?>