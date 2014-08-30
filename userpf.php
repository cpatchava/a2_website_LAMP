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
<div class="address-bar">  Park Circle E | Cupertino, California 95014 | algebrasquare@gmail.com
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
<?php
	require_once('connection.php');
	$id=$_SESSION['SESS_MEMBER_ID'];
	$result3 = mysql_query("SELECT * FROM member where mem_id='$id'");
	while($row3 = mysql_fetch_array($result3)){
		$fname=$row3['fname'];
		$lname=$row3['lname'];
		$address=$row3['address'];
		$contact=$row3['contact'];
		$picture=$row3['picture'];
		$gender=$row3['gender'];
		$assign=$row3['assignment_unique'];
		$comments=$row3['comments'];
		$disc=$row3['discount'];
		$enrolled=$row3['enrolled_in'];
		$amnt_paid=$row3['amnt_paid'];
		$spaces = explode(",", $enrolled);
		$total= count($spaces);
	}
?>
	
<div class="container">
		<div class="row">
				<div class="box">
						<div align="right"><a href="login.php">logout</a></div>
						<div class="col-lg-12">
						<hr><h2 class="intro-text text-center">Welcome <strong><?php echo $fname ?></strong></h2><hr>
						</div>
						<div class="col-md-4">
						<div class="bs-example">
										<table class="table">
										<thead>
										<tr>
										<th>Course </th>
										<th>Course #</th>
										<th>Due date</th>
										<th>Amount</th>
										</tr>
										</thead>
										<tbody>
<?php
$i=0;
$tot=0;
$assignment;
$con=mysqli_connect("localhost","root","admin","simple_login");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
while($i<$total){
//danger, active, success, info, warning
$result = mysqli_query($con,"SELECT * FROM course_info WHERE course_id='$spaces[$i]'");

while($row = mysqli_fetch_array($result)) {
echo"										<tr class=\"danger\">";
echo"										<td>" . $row['course'] . "</td>";
echo"										<td>" . $spaces[$i] . "</td>";
echo"										<td>" . $row['due_date'] . "</td>";
echo"										<td>+$" . $row['price'] . "</td>";
echo"										</tr>	";
$temp= $row['due_date']; 
$tot=$row['price'] + $tot;
$cou = $row['course'];
$assignment = $row['assignment'];
$fn = "$cou : $assignment <br> $fn";
}						

$i++;
}
echo"										<tr class=\"success\">";
echo"										<td>Discount</td>";
echo"										<td>D</td>";
echo"										<td>$temp</td>";
echo"										<td>-$$disc </td>";
echo"										</tr>	";
if($amnt_paid > '0'){
	$string = "danger";
}
else{
	$string = "success";
}
$tot = $tot - $disc;
echo"										<tr class=\"$string\">";
echo"										<td>Total</td>";
echo"										<td>-</td>";
echo"										<td>$temp</td>";
echo"										<td> $$tot </td>";
echo"										</tr>	";

?>
										</tbody>
										</table>
								</div>
						</div>

						<div class="col-md-8">
						<h1 class="intro-text text-center">Comments<strong></strong></h1>
						 <center><?php echo $comments ?></center>
						<h1 class="intro-text text-center">Assignments<strong></strong></h1>
						 <center><?php echo "Personal:  $assign  <br> $fn"?></center>

					</div>
  					<div class="clearfix">
						</div>
				</div>
		</div>
    <div class="row">
				<div class="box">
						<div class="col-lg-12">
            <hr><h2 class="intro-text text-center">Course<strong>calendar</strong></h2>
            <hr>
						<iframe src="https://www.google.com/calendar/embed?src=4ckivl327u1j841vgnkb2orgiv6r33qi%40import.calendar.google.com&ctz=America/Los_Angeles" style="border: 0" width="1100" height="600" frameborder="0" scrolling="no"></iframe>
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
