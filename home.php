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
<div class="container">
    <div class="row">
	<div class="box">
	    <div class="col-lg-12">
            <hr><h2 class="intro-text text-center">Login Succesful, <strong>Welcome</strong></h2><hr>
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
		}
	    ?>
	    <table width="398" border="0" align="center" cellpadding="0">
	    <tr>
	    <td height="26" colspan="2">Your Profile Information </td>
	    <td><div align="right"><a href="login.php">logout</a></div></td>
	    </tr>
	    <tr>
	    <td width="129" rowspan="5"><img src="<?php echo $picture ?>" width="129" height="129" alt="no image found"/></td>
	    <td width="82" valign="top"><div align="left">FirstName:</div></td>
	    <td width="165" valign="top"><?php echo $fname ?></td>
	    </tr>
	    <tr>
	    <td valign="top"><div align="left">LastName:</div></td>
	    <td valign="top"><?php echo $lname ?></td>
	    </tr>
	    <tr>
	    <td valign="top"><div align="left">Gender:</div></td>
	    <td valign="top"><?php echo $gender ?></td>
	    </tr>
	    <tr>
	    <td valign="top"><div align="left">Address:</div></td>
	    <td valign="top"><?php echo $address ?></td>
	    </tr>
	    <tr>
	    <td valign="top"><div align="left">Contact No.: </div></td>
	    <td valign="top"><?php echo $contact ?></td>
	    </tr>
	    </table>
	    <p align="center"><a href="login.php"></a></p>
	    </div>
	    <div class="clearfix">
	    </div>
	</div>
    </div>
</div>    

<?php include 'footer.php';?>
</body>
</html>
