<?php session_start();?>
<?php
	include("common/connection.php"); 
?>
<?php
	if(!empty($_POST['Submit']))
	{
		$npass=$_POST['npass'];
		$repass=$_POST['repass'];
		if ($npass != $repass) {
		?>
			<script>
				alert("Both password is different");
			</script>
			<?php
		}
		else
		{
			$query="update signup set password='$npass'";
			if(mysqli_query($connect,$query))
			{
				?>
				<script>
					alert("password update sucessful")
				</script>
				<?php
			}
			else
			{
				?>
				<script>
					alert("password Not completed.Try Again")
				</script>
				<?php
			}
		}
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ENEST-2</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="main-div">
		<?php include('common/header1.php');?>
			<div class="sign-up">
				<div class="sign">
					<p> <a href=""> Change Password</a></p>
					<div  class="user-info">
						<form method="post" action="">
							<table class="login-1">
								<tr class="inpt-1">
									<td ><span>New Password</span></td>
									<td><input type="text" name="npass"></td>
								</tr>
								<tr class="inpt-1">
									<td ><span>Re-Type Password</span></td>
									<td><input type="password" name="repass"></td>
								</tr>
								<tr class="logn-btn" >
									<td></td>
									<td><input class="log" type="submit" name="Submit" value="Submit">
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-1">
				<div class="list-1">
					<ul>
						<a href="index.php"><li>HOME</li></a>
						<li>NEW PROJECT</li>
						<li>SPECIAL</li>
						<li>ALL PRODUCTS</li>
						<li>REVIEWS</li>
						<li>CONTACT</li>
						<li>FAQS</li>
					</ul>
				</div>
				<div class="footer-2">
					<p>Copyright <i class="fa fa-copyright" aria-hidden="true"></i>2013 Enest.Privacy Notice</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html> 