<?php
	$username = $_POST["uname"];
	$pwd = $_POST["password"];
	$cpwd = $_POST["cpassword"];
	$fName = $_POST["fname"];
	$lName = $_POST["lname"];
	$Email = $_POST["email"];
	$Phoneno = $_POST["phone"];
	$COUNTRY = $_POST["country"];
	$conn = mysqli_connect("localhost","root","","iu285");

	$existSql = "SELECT * FROM `user` WHERE username = '$username'";
	$result = mysqli_query($conn, $existSql);
	$numExistRows = mysqli_num_rows($result);
	   if($numExistRows > 0){
				 header("Location: ../2.html");
	   }
	   else{
	    if($pwd == $cpwd){

					$s = "INSERT INTO `user`(`First_Name`, `Last_name`, `username`, `pass_word`, `Phone`, `Email`,
					`Country`) VALUES ('$fName', '$lName', '$username', '$pwd', '$Phoneno', '$Email', '$COUNTRY')";
	        $result = mysqli_query($conn, $s);
	        if ($result){
	              header("location: ../3.html");
	        }
	    }
	    else{
					header("Location: ../2.html");
	    }
	}
?>
