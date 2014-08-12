<!DOCTYPE html>
<html lang="en">
    
<div class="menu">
<?php include 'header.php';?>
</div>
<div class="container">
		<div class="row">
				<div class="box">
						<div class="col-lg-12">
            <hr><h2 class="intro-text text-center"><strong>My Profile!</strong></h2>

						<form name="loginform" action="login_exec.php" method="post">
						<table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
						<tr>
								<td colspan="2">
								<!--the code bellow is used to display the message of the input validation-->
								<?php
										if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
										echo '<ul class="err">';
										foreach($_SESSION['ERRMSG_ARR'] as $msg) {
										echo '<li>',$msg,'</li>';
										}
										echo '</ul>';
										unset($_SESSION['ERRMSG_ARR']);
										}
								?>
								</td>
						</tr>
						<tr>
								<td width="116"><div align="right">Username</div></td>
								<td width="177"><input name="username" type="text" /></td>
				    </tr>
				    <tr>
								<td><div align="right">Password</div></td>
								<td><input name="password" type="password" /></td>
				    </tr>
						<tr>
						    <td><div align="right"></div></td>
						    <td><input name="" type="submit" value="login" /></td>
						</tr>
				    </table>
				    </form>
            <hr><hr class="visible-xs">
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
