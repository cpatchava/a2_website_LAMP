<!DOCTYPE html>
<?php
require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Algebra Squared</title>
    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->

    <link href="css/business-casual.css" rel="stylesheet">
</head>


<body>

<div class="brand">Algebra Squared
</div>
<div class="address-bar">  Park Circle E | Cupertino, California 95014 | algebrasquared@gmail.com
</div>
<nav class="navbar navbar-default" role="navigation">
<div class="container">
	<div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
				<span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Business Casual</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a>
				</li>
				<li><a href="about.php">About</a>
				</li>
				<li><a href="register.php">Register</a>
				</li>
				<li><a href="contact.php">Contact</a>
				</li>
				<li><a href="courses.php">Courses</a>
				</li>
				<li><a href="login.php">Login</a>
				</li>
				</ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

</body>

<body>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Untitled Document</title>
    <style type="text/css">
    <!--
    .style1 {
     font-size: 36px;
     font-weight: bold;
    }
    -->
    </style>
</head>
    
<body>

<div class="container-default">
		<div class="row">
				<div class="box">
						<div class="col-lg-12">
						<hr><h2 class="intro-text text-center">Course Information<strong><?php echo $fname ?></strong></h2><hr>
						</div>
						<div class="col-md-12">
							<div class="bs-example">
							<table class="table">
								<thead>
									<tr>
										<th>Course</th>
										<th>Course #</th>
										<th>Capacity</th>
										<th>Due Date</th>
										<th>Price</th>
										<th>Assignment</th>
										<th>Update</th>
									</tr>
								</thead>
								<tbody>

									<?php
										$remarks=$_GET['remarks'];
										if ($remarks==null and $remarks=="")
										{
										//echo 'Register Here';
										}
										if ($remarks=="wrong")
										{
										echo 'Course Name or ID already exists';
										}
										if ($remarks=='success')
										{
										echo 'Course information was added successfully!';
										}
										?>	
	
								<?php
								$con=mysqli_connect("localhost","root","admin","simple_login");
								// Check connection
								if (mysqli_connect_errno()) {
									echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}

								$result = mysqli_query($con,"SELECT * FROM course_info");
								while($row = mysqli_fetch_array($result)) {

echo"									<form name=\"admin_course_form\" action=\"admin_exec.php\" method=\"post\">
";							
												$temp=$row['assignment'];
								echo "<tr>\n";
echo "									<td>" . $row['course'] ."<input type=\"hidden\"name=\"name\" value=" . $row['course'] .">". "</td>\n";
echo "									<td>" . $row['course_id'] . "<input type=\"hidden\"name=\"c_id\" value=" . $row['course_id'] .">". "</td>\n";
echo "									<td>" . "<input type=\"text\"name=\"cap\" value=" . $row['capacity'] .">". "</td>\n";
echo "									<td>" . "<input type=\"text\"name=\"due\" value=" . $row['due_date'] .">". "</td>\n";
echo "									<td>" . "<input type=\"text\"name=\"cost\" value=" . $row['price'] .">". "</td>\n";
echo "									<td>" . "<input type=\"text\"name=\"update_assign\" value=\"$temp\">". "</td>\n";
echo "									<td><input name=\"\" type=\"submit\" value=\"update\" /></td>\n";
echo " 	 						   </tr>\n";
echo"									</form>\n";
								}
								mysqli_close($con);
								?> 
								<form name="admin_add_form" action="admin_add.php" method="post">
								<tr class="active">
										<div align="center">
										<td><input type="text" name="new_c_name" ></td>
										<td><input type="text" name="new_c_id" ></td>
										<td><input type="text" name="new_cap"> </td>
										<td><input type="text" name="new_due" ></td>
										<td><input type="text" name="new_cost"></td>
										<td><input type="text" name="assign" ></td>
										<td><input name="" type="submit" value="add" /></td>									
										</div>
								</form>
								</tr>
								</tbody>
							</table>
							</div>
						</div>
  					<div class="clearfix">
						</div>
				</div>
		</div>
    <div class="row">
				<div class="box">
						<div class="col-lg-12">
            <hr><h2 class="intro-text text-center">Students enroolled</h2>
            <hr>
  							<div class="bs-example">
							<table class="table">
								<thead>
									<tr>
										<th>username</th>
										<th>Name</th>
										<th>Last name</th>
										<th>Contact</th>
										<th>Enrolled in</th>
										<th>Student Assignment</th>
										<th>Comments for Students</th>
										<th>Student Discount</th>
										<th>Amount Paid</th>
									</tr>
								</thead>
								<tbody>


	
								<?php
								$con=mysqli_connect("localhost","root","admin","simple_login");
								// Check connection
								if (mysqli_connect_errno()) {
									echo "Failed to connect to MySQL: " . mysqli_connect_error();
								}
								$remarks=$_GET['remarks'];
								if ($remarks==null and $remarks=="")
								{
								//echo 'Register Here';
								}
								if ($remarks=="wrong_update")
								{
								echo 'There was an error, try again';
								}
								if ($remarks=='user_updated_success')
								{
								echo 'Information was updated succesfully';
								}

								$result = mysqli_query($con,"SELECT * FROM member");
								while($row = mysqli_fetch_array($result)) {
									if($row['admin'] == 0){
										$stud_c = $row['comments']; 
										$assn = 	$row['assignment_unique']; 
echo"								<form name=\"admin_course_form\" action=\"admin_user_exec.php\" method=\"post\">\n";
																	echo "<tr>\n";
echo "									<td>" . $row['username'] ."<input type=\"hidden\"name=\"username\" value=" . $row['username'] .">". "</td>\n";
echo "									<td>" . $row['fname'] . "<input type=\"hidden\"name=\"fname\" value=" . $row['fname'] .">". "</td>\n";
echo "									<td>" . $row['lname'] . "<input type=\"hidden\"name=\"lname\" value=" . $row['lname'] .">". "</td>\n";
echo "									<td>" . "<input type=\"text\"name=\"contact_num\" value=" . $row['contact'] .">". "</td>\n";
echo "									<td>" . "<input type=\"text\"name=\"enrolled\" value=" . $row['enrolled_in'] .">". "</td>\n";
echo "									<td>" . "<input type=\"text\"name=\"student_assign\" value=\"$assn \"></td>\n";
echo "									<td>" . "<input type=\"text\"name=\"student_comment\" value=\"$stud_c \"></td>\n";
echo "									<td>" . "<input type=\"text\"name=\"student_discount\" value=" . $row['discount'] .">". "</td>\n";
echo "									<td>" . "<input type=\"text\"name=\"amount_paid\" value=" . $row['amnt_paid'] .">". "</td>\n";
echo "									<td><input name=\"\" type=\"submit\" value=\"update\" /></td>\n";
echo "							</tr>\n";
echo "							</form>\n";
									}
								}
								mysqli_close($con);
								?> 
								</form>
								<form name="admin_add_form" action="admin_user_add.php" method="post">
								<tr class="active">
										<div align="center">
										<td><input type="text" name="new_username" ></td>
										<td><input type="text" name="new_firstname" ></td>
										<td><input type="text" name="new_lastname"> </td>
										<td><input type="text" name="new_phonenum"></td>
										<td><input type="text" name="new_enrolledin"></td>
										<td><input type="text" name="new_assignment"></td>
										<td><input type="text" name="new_comments" ></td>
										<td><input type="text" name="discount" ></td>
										<td><input type="text" name="amount_paid" ></td>
										<td><input name="" type="submit" value="add" /></td>									
										</div>
								</form>
								</tr>
								</tbody>
							</table>
							</div>
	          </div>
        </div>
    </div>

</div>
<!-- /.container -->

<?php include 'footer.php';?>
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
