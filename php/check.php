<?php
  $conn = mysqli_connect("localhost","root","","iu285");
  $username = $_POST["uname"];
  $pwd = $_POST["password"];
  $sql = "SELECT * from user where username='$username'";
  $result = mysqli_query($conn, $sql);


  $num = mysqli_num_rows($result);

  if ($num == 1){
      while($row=mysqli_fetch_assoc($result)){
          if ($pwd == $row['pass_word']){
              header("Location: ../4.html");
          }
          else{
              header("Location: ../3.html");
          }
      }
  }
  else{
      header("Location: ../3.html");
  }
?>
