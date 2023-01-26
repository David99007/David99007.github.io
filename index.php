<html>
	<head>
		<title>Login | PT. Kilang Pertamina Internasional</title>
		<link rel="icon" type="image/ico" href="assets/title/Pertamina.ico">
		<link rel="stylesheet" href="css/login.css"></link>
	</head>
	<body>
		<div class="container">
			<div class="title">
				<img src="assets/logo.png"><img>
				<h1>CSR SMEPP</h1>
			</div>
			
			<form action="functions/login.php" method="post" enctype="multipart/form-data">
			<div class="instance-details">
				<div class="input-box">
					<span class="details">Username</span>
					<input type="text" name="username" id="username" placeholder="Username" required>
				</div>
				<div class="input-box">
					<span class="details">Password</span>
					<input type="password" name="password" id="password" placeholder="Password">
				</div>
				<div class="add-data">
					<input type="submit" name="submit-data" id="submit-data" value="Login">
				</div>
			</div>
		</div>
	</body>
</html>