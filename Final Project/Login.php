<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<Title>Login Form</Title>
		<style>
			* {box-sizing: border-box;}
		</style>

		<style>
			.fb{background-color: #3B5998;color:white;}
			.tw {background-color: #55ACEE;color:white;}
			.gg {background-color: #dd4b39;color:white;}
		</style>
		
		<style>
			input,.btn 
			{
				width: 100%;
				padding: 12px;border: none;
				border-radius: 4px;
				margin: 5px 0;
				opacity: 0.85;
				display: inline-block;
				font-size: 17px;
				line-height: 20px;
				text-decoration: none;
			}
		</style>
		<style>
			.vl-innertext 
			{
			  position: absolute;
			  top: 50%;
			  transform: translate(-50%, -50%);
			  background-color: #f1f1f1;
			  border: 1px solid #ccc;
			  border-radius: 50%;
			  padding: 8px 10px;
			}
		</style>
		<style>
			/* Giao dien nen */
			.container 
			{
				position: relative;
				border-radius: 5px;
				background-color: #f2f2f2;
				padding: 20px 0 30px 0;
				margin-top: 10%;
			} 
		</style>
		<style>
				
				.col1
				{
					float:left;margin:auto;
					padding: 0 50px;
					margin-top: 5px;
				}
				.col2
				{
					float:right;margin:auto;
					padding: 0 50px;
					margin-top: 5px;
				}
				.row
				{
					position:center;
					content:"";
					display:table;
					clear:both;
				}
		</style>
	</head>
	<body>
		<div class="container">
			<form action="" method="POST">
				<div class="row">
					<h2><center> Login with Socail Media or Manually </center></h2>
					<div class="col">
						<div class="col-sm-6">
							<div class="col1">
								<a href="#" class="fb btn">
									<i class="fa fa-facebook fa-fw"></i>Login with Facebook
								</a>
								<a href="#" class="tw btn">
									<i class="fa fa-twitter fa-fw"></i>Login with Twitter
								</a>
								<a href="#" class="gg btn">
									<i class="fa fa-google fa-fw"></i>Login with Google+
								</a>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="col2">
								<label for="inputUsername" class="sr-only">Username</label>
								<input type="text" name="username" id="inputUsername" placeholder="Tên Đăng Nhập" required autofocus>
								<label for="inputPassword" class="sr-only">Username</label>
								<input type="password" name="password" id="inputPassword" placeholder="Mật khẩu" required>
								<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
							  <?php
								if (isset($_POST["username"]) && isset($_POST["password"])) {
									$username = $_POST["username"];
									$password = $_POST["password"];
									$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
									require_once("conn.php");
									
									$result = $conn->query($sql);
									if ($result->num_rows > 0) {
										$_SESSION["username"] = $username;
										header("Location: Final.php");
									} else {
										echo "Login Failed";
									}
								}
								?>
							</div>
						</div>
					</div>
				</div>	
			</form>
		</div>		
	</body>
</html>