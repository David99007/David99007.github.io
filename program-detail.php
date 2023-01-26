<?php
	include('navbar.php');
?><html>
	<head>
		<title>List Program | PT. Kilang Pertamina Internasional</title>
		<link rel="icon" type="image/ico" href="assets/title/Pertamina.ico">
		<link rel="stylesheet" href="css/prorgamsdetail.css"></link>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	</head>
	<body>
		<section class="container">
			<div class="slider-wrapper">
				<div class="slider">
					<img id="slide-1" src="assets\carousel\1.png" />
					<img id="slide-2" src="assets\carousel\2.png" />
					<img id="slide-3" src="assets\carousel\3.png" />
					<img id="slide-4" src="assets\carousel\4.png" />
					<img id="slide-5" src="assets\carousel\5.png" />
				</div>
				<div class="slider-nav">
					<a href="#slide-1"></a>
					<a href="#slide-2"></a>
					<a href="#slide-3"></a>
					<a href="#slide-4"></a>
					<a href="#slide-5"></a>
				</div>
			</div>
			<div class="program-details">
				<div class="program-title">
					<h1>Program Budidaya Madu Hutan Biene</h1>
				</div>
				<div class="program-description">
					<p>
						Program Budidaya Madu Hutan Biene adalah sebuah program
						pembantuan budidaya madu hutan Biene yang bertujuan untuk
						meningkatkan produksi dan kualitas madu hutan Biene supaya
						dapat digunakan sebagai penghasilan pasif masyarakat
					</p>
				</div>
			</div>
			<div class="target">
				<table>
					<thead>
						<tr>
							<th colspan="2" style="text-align:justify">Detail Target</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="width:180px"> Target Penerima 	</td>
							<td> Masyarakat								</td>
						</tr>
						<tr>
							<td style="width:180px"> Jumlah Penerima 	</td>
							<td> 24 orang								</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="back-button">
				<input type="button" class="button" name="back-butt" id="back-butt" onclick="back()" value="Kembali">
			</div>
			<div class="download-button">
				<input type="button" class="button" name="down-butt" id="down-butt" value="Download PR">
			</div>
		</section>
	</body>
	<script>
		function request() {
			window.location.href="budget-request.php";
		}
		function back() {
			window.location.href="program-list.php";
		}
	</script>
</html>