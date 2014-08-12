<?php
  session_start();
  include('connection.php');
  $code=$_POST['code'];
  $name=$_POST['name'];
  $u_cap=$_POST['cap'];
  $u_due=$_POST['due'];
  $u_cost=$_POST['cost'];
  $u_assign=$_POST['update_assign'];
//	$date = new date('Y-m-d', $u_due);
//  $query = mysql_query("SELECT * FROM course_info WHERE course='".$new_class."'");

//	if (mysql_num_rows($query) != 0)
//  {
//      echo "Username already exists";
//  }
  
//  else
 // {
//$formatteddate = date("Y-m-d", strtotime($u_due));
//	$future_date = $u_date->format('Y-m-d');
	echo "$u_cap, $u_cost, $u_due, $u_assign, $name, $formatteddate";

	mysql_query("UPDATE course_info SET capacity=$u_cap	WHERE course='$name' ");
	mysql_query("UPDATE course_info SET price=$u_cost	WHERE course='$name' ");
	mysql_query(" UPDATE course_info SET due_date='$u_due' WHERE course='$name' ");
//	mysql_query("UPDATE course_info SET due_date='{$u_date->format('Y-m-d H:i:s')}' WHERE course=$name ");
	mysql_query("UPDATE course_info SET assignment='$u_assign'	WHERE course='$name' ");

  header("location: admin_page.php?remarks=success");
//  }
  mysql_close($con);
?>

