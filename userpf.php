<!DOCTYPE html>
<?php
//require_once('auth.php');
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

<div class="container">
		<div class="row">
				<div class="box">
						<div class="col-lg-12">
						<hr><h2 class="intro-text text-center">Welcome<strong><?php echo $fname ?></strong></h2><hr>
						</div>
						<div class="col-md-4">
								<div class="bs-example">
										<table class="table">
										<thead>
										<tr>
										<th>Course</th>
										<th>#</th>
										<th>Payment</th>
										<th>Status</th>
										</tr>
										</thead>
										<tbody>
										<tr class="active">
										<td>1</td>
										<td>Credit Card</td>
										<td>04/07/2014</td>
										<td>Call in to confirm</td>
										</tr>
										<tr class="success">
										<td>2</td>
										<td>Water</td>
										<td>01/07/2014</td>
										<td>Paid</td>
										</tr>
										<tr class="info">
										<td>3</td>
										<td>Internet</td>
										<td>05/07/2014</td>
										<td>Change plan</td>
										</tr>
										<tr class="warning">
										<td>4</td>
										<td>Electricity</td>
										<td>03/07/2014</td>
										<td>Pending</td>
										</tr>
										<tr class="danger">
										<td>5</td>
										<td>Telephone</td>
										<td>06/07/2014</td>
										<td>Due</td>
										</tr>
										</tbody>
										</table>
								</div>
						</div>

						<div class="col-md-8">

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
