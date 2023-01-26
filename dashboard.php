<?php
	include('dbconnect.php');
	include('navbar.php');
?>
<html>
	<head>
		<title>Dashboard | PT. Kilang Pertamina Internasional</title>
		<link rel="icon" type="image/ico" href="assets/title/Pertamina.ico">
		<link rel="stylesheet" href="css/dashboard.css"></link>
	</head>
	<body>
		<div class="container">
			<div class="TPB-Pillar">
				<div class="title">
					<h3> Prioritas TPB </h3>
				</div>
				<div class="sub-title">
					<h5> Jumlah Program Terkait Prioritas TPB </h5>
				</div>
				<div class="row1">
					<div class="column">
						<img src="assets/priority/1.png" alt="Tanpa Kemiskinan" style="width:100%"></img>
						<span> Program: 12 </span>
					</div>
					<div class="column">
						<img src="assets/priority/2.png" alt="Tanpa Kelaparan" style="width:100%"></img>
						<span> Program: 10 </span>
					</div>
					<div class="column">
						<img src="assets/priority/3.png" alt="Kesehatan dan Kesejahteraan" style="width:100%"></img>
						<span> Program: 7 </span>
					</div>
					<div class="column">
						<img src="assets/priority/4.png" alt="Pendidikan Berkualitas" style="width:100%"></img>
						<span> Program: 5 </span>
					</div>
					<div class="column">
						<img src="assets/priority/5.png" alt="Kesetaraan Gender" style="width:100%"></img>
						<span> Program: 21 </span>
					</div>
					<div class="column">
						<img src="assets/priority/6.png" alt="Air Bersih dan Sanitasi" style="width:100%"></img>
						<span> Program: 25 </span>
					</div>
					<div class="column">
						<img src="assets/priority/7.png" alt="Energi Bersih dan Terjangkau" style="width:100%"></img>
						<span> Program: 7 </span>
					</div>
					<div class="column">
						<img src="assets/priority/8.png" alt="Pekerjaan Layak dan Pertumbuhan Ekonomi" style="width:100%"></img>
						<span> Program: 8 </span>
					</div>
					<div class="column">
						<img src="assets/priority/9.png" alt="Industri, Inovasi, dan Infrastruktur" style="width:100%"></img>
						<span> Program: 9 </span>
					</div>
				</div>
				<div class="row2">
					<div class="column">
						<img src="assets/priority/10.png" alt="Mengurangi Ketidaksetaraan" style="width:100%"></img>
						<span> Program: 2 </span>
					</div>
					<div class="column">
						<img src="assets/priority/11.png" alt="Kota dan Masyarakat Berkelanjutan" style="width:100%"></img>
						<span> Program: 5 </span>
					</div>
					<div class="column">
						<img src="assets/priority/12.png" alt="Konsumsi dan Produksi yang Bertanggung Jawab" style="width:100%"></img>
						<span> Program: 1 </span>
					</div>
					<div class="column">
						<img src="assets/priority/13.png" alt="Aksi Lingkungan" style="width:100%"></img>
						<span> Program: 3 </span>
					</div>
					<div class="column">
						<img src="assets/priority/14.png" alt="Kehidupan Air" style="width:100%"></img>
						<span> Program: 12 </span>
					</div>
					<div class="column">
						<img src="assets/priority/15.png" alt="Kehidupan Darat" style="width:100%"></img>
						<span> Program: 11 </span>
					</div>
					<div class="column">
						<img src="assets/priority/16.png" alt="Perdamaian, Keadilan, dan Institusi yang Kuat" style="width:100%"></img>
						<span> Program: 7 </span>
					</div>
					<div class="column">
						<img src="assets/priority/17.png" alt="Kemitraan untuk Tujuan" style="width:100%"></img>
						<span> Program: 5 </span>
					</div>
				</div>
			</div>
			<div class="chart">
				<div class="pie-chart" id="pie-chart">
				</div>
				<div class="text-chart">
					<div class="box1">
					</div>
					<pre class="tab1">Realisasi					: 100 Program</pre>
					<br>
					<div class="box2">
					</div>
					<pre class="tab2">Rencana Kerja Anggaran	: 55 Program</pre>
				</div>
			</div>
		</div>
	</body>
</html>