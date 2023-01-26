<?php
	include('dbconnect.php');
	session_start();
?>
<html lang="en-US">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<link rel="stylesheet" href="css/navbar.css" />
	</head>
	
	<body>
		<div class="sidebar">
			<div class="logo-details">
				<a href="#"><img src="assets/Logo.png"></a>
			</div>
			<ul class="nav-links">
				<li>
					<a href="dashboard.php">
						<i class='bx bx-grid-alt'></i>
						<span class="link-name">Dashboard</span>
					</a>
					<ul class="sub-menu blank">
						<li><a class="link-name" href="dashboard.php">Dashboard</a></li>
					</ul>
				</li>
				<li>
					<a href="budget-request.php">
						<i class='bx bx-detail'></i>
						<span class="link-name">Pengajuan</span>
					</a>
					<ul class="sub-menu blank">
						<li><a class="link-name" href="budget-request.php">Pengajuan</a></li>
					</ul>
				</li>
				<li>
					<a href="program-list.php">
						<i class='bx bx-file' ></i>
						<span class="link-name">Report</span>
					</a>
					<ul class="sub-menu blank">
						<li><a class="link-name" href="program-list.php">Report</a></li>
					</ul>
				</li>
				<li>
					<a href="upload-reimbursement.php">
						<i class='bx bx-upload' ></i>
						<span class="link-name">Reimbursement</span>
					</a>
					<ul class="sub-menu blank">
						<li><a class="link-name" href="upload-reimbursement.php">Reimbursement</a></li>
					</ul>
				</li>
				<li>
					<div class="profile-details">
						<div class="profile-content">
							<img src="assets/placeholder/Profile-Admin.png" alt="profile">
						</div>
							<div class="name-status">
								<div class="profile-name">
									<?php
										$username=stripslashes($_SESSION['username']);
										$username=mysqli_real_escape_string($con, $username);
										$query = "SELECT username FROM `users` WHERE username='$username' OR email='$username'";
										$result = mysqli_query($con, $query);
										$rows = mysqli_num_rows($result);
										while ($row = $result->fetch_assoc()) {
											$_SESSION['username'] = $username;
											echo "$row[username]";
										}
									?>
								</div>
								<div class="profile-status">
									<?php
										$username=stripslashes($_SESSION['username']);
										$username=mysqli_real_escape_string($con, $username);
										$query = "SELECT status FROM `users` WHERE username='$username' OR email='$username'";
										$result = mysqli_query($con, $query);
										$rows = mysqli_num_rows($result);
										while ($row = $result->fetch_assoc()) {
											$_SESSION['username'] = $username;
											echo "$row[status]";
										}
									?>
								</div>
							</div>
						<a href="index.php">
							<i class='bx bx-log-out'></i>
						</a>
					</div>
				</li>
			</ul>
		</div>
		<script>
			let arrow = document.querySelectorAll(".arrow");
			for (var i=0; i<arrow.length; i++) {
				arrow[i].addEventListener("click", (e)=>{
					let arrowParent = e.target.parentElement.parentElement;
					console.log(arrowParent);
					arrowParent.classList.toggle("showMenu");
				});
			}
			
			let sidebar = document.querySelector(".sidebar");
			console.log(sidebar);
		</script>
	</body>
</html>