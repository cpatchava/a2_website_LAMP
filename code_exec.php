<?php
  session_start();
  include('connection.php');
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $mname=$_POST['mname'];
  $address=$_POST['address'];
  $contact=$_POST['contact'];
  $pic=$_POST['pic'];
  $code=$_POST['code'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $query = mysql_query("SELECT * FROM member WHERE username='".$username."'");
  if($code != "AlgebraSquared4.0")
  {

  header("location: register.php?remarks=wrong");

  }

  elseif (mysql_num_rows($query) != 0)
  {
      echo "Username already exists";
  }
  
  else
  {
  mysql_query("INSERT INTO member(fname, lname, gender, address, contact, picture, username, password)VALUES('$fname', '$lname', '$mname', '$address', '$contact', '$pic', '$username', '$password')");
  header("location: register.php?remarks=success");
  }
  mysql_close($con);
?>
