<?php
  session_start();
  include('connection.php');
  $user_name=$_POST['user_name'];
  $f_name=$_POST['fname'];
  $l_name=$_POST['lname'];

  $contact_num=$_POST['contact_num'];
  $enrolled=$_POST['enrolled'];
  $student_assign=$_POST['student_assign'];
  $student_comment=$_POST['student_comment'];
  $discount=$_POST['discount'];
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
	echo "$user_name, $f_name, $l_name, $contact_num, $enrolled, $student_assign, $student_comment";

	mysql_query("UPDATE member SET contact=$contact_num	WHERE course='$user_name' ");
	mysql_query("UPDATE member SET enrolled_in=$enrolled	WHERE course='$user_name' ");
	mysql_query("UPDATE member SET assignment_unique=$student_assign	WHERE course='$user_name' ");
	mysql_query("UPDATE member SET comments=$student_comments	WHERE course='$user_name' ");
	mysql_query("UPDATE member SET discount=$discount	WHERE course='$user_name' ");

  header("location: admin_page.php?remarks=success");
//  }
  mysql_close($con);
?>

