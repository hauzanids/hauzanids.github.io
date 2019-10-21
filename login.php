<?php 
  $db = "dblima";
  $user = "admin";
  $pass = "admin123";
  $user1 = $_POST["user"];
  $pass1 = $_POST["pass"];
  $host = "192.168.1.10"; #harus sesuai ip address

  $conn = mysqli_connect($host, $user, $pass, $db);
  if($conn){
    $q = "select * from user where user like '$user1' and pass like '$pass1'";
    $result = mysqli_query($conn, $q);
    if(mysqli_num_rows($result) > 0){
      echo "Login Success";
    }else{
      echo "Wrong ID or Pass";
    }
  }else{
    echo "Login Failed";
  }
?>