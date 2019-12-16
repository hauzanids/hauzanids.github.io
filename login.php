<?php
  $json = file_get_contents('https://hauzanids.github.io/api/users.json');
  $obj = json_decode($json);
  $count = sizeof($obj->data);
  $user = $_POST["user"];
  $pass = $_POST["pass"];
  $i = 0;

  while($i < $count){ 
    if ($user == $obj->data[$i]->name) {
      if (password_verify($pass, $obj->data[$i]->password)){
        if ($obj->data[$i]->role == "admin"){
          echo "Login Admin Success";
        }elseif ($obj->data[$i]->role == "mahasiswa") {
          echo "Login User Success";
        }
      }
    }
    $i++;
  }

  // $db = "dblima";
  // $user = "admin";
  // $pass = "admin123";
  // $user1 = $_POST["user"];
  // $pass1 = $_POST["pass"];
  // $host = "192.168.1.11"; #harus sesuai ip address

  // $conn = mysqli_connect($host, $user, $pass, $db);
  // if($conn){
  //   $q = "select * from user where user like '$user1' and pass like '$pass1'";
  //   $result = mysqli_query($conn, $q);
  //   while($row = mysqli_fetch_assoc($result)){
  //     $role = $row['role'];
  //   }
  //   if(mysqli_num_rows($result) > 0){
  //     if($role == 'admin'){
  //       echo "Login Admin Success";
  //     }else if($role == 'user'){
  //       echo "Login User Success";
  //     }
  //   }else{
  //     echo "Wrong ID or Pass";
  //   }
  // }else{
  //   echo "Login failed";
  // }
?>