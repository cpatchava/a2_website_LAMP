<?php
  session_start();
  include('connection.php');
  $new_class=$_POST['new_c_name'];
  $new_c_id=$_POST['new_c_id'];
  $new_cap=$_POST['new_cap'];
  $new_due=$_POST['new_due'];
  $new_cost=$_POST['new_cost'];
  $assign=$_POST['assign'];

  $query = mysql_query("SELECT * FROM course_info WHERE course='".$new_class."'");
  $query_1 = mysql_query("SELECT * FROM course_info WHERE course_id='".$new_c_id."'");
	if (mysql_num_rows($query) != 0 || mysql_num_rows($query_1) != 0)
  {
     echo "Course, or Course ID already exists";
 // header("location: admin_page.php?remarks=Wrong");
  }
  
  else
  {
	echo "$new_class, $new_c_id, $new_cost, $new_cap, $assign, $new_due";
  mysql_query("INSERT INTO course_info(course, course_id, price, capacity, assignment, due_date)VALUES('$new_class', '$new_c_id', '$new_cost', '$new_cap', '$assign', '$new_due')");
  header("location: admin_page.php?remarks=success");
  }
  mysql_close($con);
?>
