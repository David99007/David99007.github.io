<?php
	include('navbar.php');
?>
<html>
	<head>
		<title>Budget Request | PT. Kilang Pertamina Internasional</title>
		<link rel="icon" type="image/ico" href="assets/title/Pertamina.ico">
		<link rel="stylesheet" href="css/budgetrequest.css"></link>
	</head>
	<body>
		<div class="container">
			<div class="request-title">
				<h1>Pengajuan Anggaran</h1>
				<h2>Pengajuan Anggaran Program TJSL CSR SMEPP PT Kilang Pertamina Internasional</h2>
			</div>
			<form action="program-detail.php" method="post" enctype="multipart/form-data">
			<div class="request-details">
				<div class="input-box">
					<span class="details">Nama Program</span>
					<input type="text" name="programname" id="programname" placeholder="Nama Program" required>
				</div>
				<div class="input-box">
					<span class="details">Dimulai Program</span>
					<input type="date" name="programdate" id="programdate" required>
				</div>
				<div class="input-box">
					<span class="details">Selesai Program</span>
					<input type="date" name="programdate" id="programdate" required>
				</div>
				<div class="input-box">
					<span class="details">Deskripsi Program</span>
					<textarea type="text" name="description" id="description" placeholder="Deskripsi Program" required></textarea>
					<span class="description">Max. 2000 characters</span>
				</div>
				<div class="input-box">
					<span class="details">Target Program</span>
					<input type="text" name="target-program" id="target-program" placeholder="Target Program" required>
				</div>
				<div class="input-box">
					<span class="details">Jumlah Target</span>
					<input type="text" name="target-amount" id="target-amount" placeholder="Jumlah Target" required>
				</div>
				<div class="input-box">
					<span class="details">Pilar TPB</span>
					<select class="formdrop" name="pillar-drop" id="pillar-drop" required>
						<option value=""					selected>						</option>
						<option value="Sosial" 				>			Sosial				</option>
						<option value="Lingkungan" 			>			Lingkungan			</option>
						<option value="Ekonomi" 			>			Ekonomi				</option>
						<option value="Hukum & Tata Kelola"	>			Hukum & Tata Kelola	</option>
					</select>
				</div>
				<div class="input-box">
					<span class="details">Prioritas TPB</span>
					<select class="formdrop" name="priority-drop" id="priority-drop" required>
						<option value=""													selected>														</option>
						<option value="Tanpa Kemiskinan"								>	Tanpa Kemiskinan								</option>
						<option value="Tanpa Kelaparan"									>	Tanpa Kelaparan									</option>
						<option value="Kesehatan dan Kesejahteraan"						>	Kesehatan dan Kesejahteraan						</option>
						<option value="Pendidikan Berkualitas"							>	Pendidikan Berkualitas							</option>
						<option value="Kesetaraan Gender"								>	Kesetaraan Gender								</option>
						<option value="Air Bersih dan Sanitasi"							>	Air Bersih dan Sanitasi							</option>
						<option value="Energi Bersih dan Terjangkau"					>	Energi Bersih dan Terjangkau					</option>
						<option value="Pekerjaan Layak dan Pertumbuhan Ekonomi"			>	Pekerjaan Layak dan Pertumbuhan Ekonomi			</option>
						<option value="Industri, Inovasi, dan Infrastruktur"			>	Industri, Inovasi, dan Infrastruktur			</option>
						<option value="Mengurangi Ketidaksetaraan"						>	Mengurangi Ketidaksetaraan						</option>
						<option value="Kota dan Masyarakat Berkelanjutan"				>	Kota dan Masyarakat Berkelanjutan				</option>
						<option value="Konsumsi dan Produksi yang Bertanggung Jawab"	>	Konsumsi dan Produksi yang Bertanggung Jawab	</option>
						<option value="Aksi Lingkungan"									>	Aksi Lingkungan									</option>
						<option value="Kehidupan Air"									>	Kehidupan Air									</option>
						<option value="Kehidupan Darat"									>	Kehidupan Darat									</option>
						<option value="Perdamaian, Keadilan, dan Institusi yang Kuat"	>	Perdamaian, Keadilan, dan Institusi yang Kuat	</option>
						<option value="Kemitraan untuk Tujuan"							>	Kemitraan untuk Tujuan							</option>
					</select>
				</div>
				<div class="input-box">
					<span class="details">Refinery Unit</span>
					<select class="formdrop" name="refinery-drop" id="refinery-drop" required>
						<option value=""													selected>														</option>
						<option value="Refinery Unit II Dumai"								>			Refinery Unit II Dumai								</option>
						<option value="Refinery Unit II Sei Pakning"						>			Refinery Unit II Sei Pakning						</option>
						<option value="Refinery Unit III Plaju"								>			Refinery Unit III Plaju								</option>
						<option value="Refinery Unit IV Cilacap"							>			Refinery Unit IV Cilacap							</option>
						<option value="Refinery Unit V Balikpapan"							>			Refinery Unit V Balikpapan							</option>
						<option value="Refinery Unit VI Balongan"							>			Refinery Unit VI Balongan							</option>
						<option value="Refinery Unit VII Kasim"								>			Refinery Unit VII Kasim								</option>
					</select>
				</div>
				<div class="input-box">
					<span class="details">Tipe TJSL</span>
					<select class="formdrop" name="type-drop" id="type-drop" required>
						<option value=""						selected>							</option>
						<option value="TJSL Terprogram" 		>			TJSL Terprogram			</option>
						<option value="TJSL Tidak Terprogram" 	>			TJSL Tidak Terprogram	</option>
					</select>
				</div>
				<div class="upload-data">
					<span class="details">Dokumen</span>
					<input type="button" name="upload-data" id="request-data" value="Choose File">
				</div>
				<div class="request-data">
					<input type="submit" name="request-data" id="request-data" value="Ajukan Anggaran">
				</div>
			</div>
		</div>
	</body>
</html>