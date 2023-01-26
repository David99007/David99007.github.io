<?php
	include('navbar.php');
?><html>
	<head>
		<title>List Program | PT. Kilang Pertamina Internasional</title>
		<link rel="icon" type="image/ico" href="assets/title/Pertamina.ico">
		<link rel="stylesheet" href="css/prorgamslist.css"></link>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	</head>
	<body>
		<div class="container">
			<div class="title">
				<h1>Data Program TJSL PT Kilang Pertamina Internasional</h1>
			</div>
			<div class="search">
				<div class="search-bar1">
					<span class="search-icon"><i class='bx bx-search-alt-2'></i></span>
				</div>
				<div class="search-bar">
					<input type="text" name="search-input" id="search-input" placeholder="Cari Nama Program...">
				</div>
				<div class="add-button" onclick="request()">
					<i class='bx bx-add-to-queue'></i>
					<span class="add-data">Tambah Program</span>
				</div>
				<div class="search-button">
					<i class='bx bx-search-alt-2'></i>
					<span class="search-data">Cari Program</span>
				</div>
			</div>
			<div class="table-list">
				<table class="program-table" cellspacing="0">
					<tr>
						<th style="text-align:left; width:320px">
							Nama Program
						</th>
						<th style="width:240px">
							Tanggal Pelaksanaan
						</th>
						<th>	Unit				</th>
						<th style="width:240px">
							Status
						</th>
						<th style="width:120px">	</th>
					</tr>
					<tr>
						<td style="text-align:left">
							Program Bantuan Pendidikan
						</td>
						<td>	26-06-2022										</td>
						<td style="text-align:left">
							RU II Dumai
						</td>
						<td>
							<div class="w3-grey w3-tiny">
								<div class="w3-container w3-blue" style="width:80%">80%</div>
							</div>
						</td>
						<td>
							<div class="btn-container">
								<div class="btn-wrapper">
									<button>
										<i class='bx bx-dots-horizontal-rounded'></i>
									</button>
									<div class="dropdown">
										<ul>
											<li>
												<a href="#">
													<span> Download PR </span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td style="text-align:left">
							Program Budidaya Madu Hutan Biene
						</td>
						<td>	13-07-2022										</td>
						<td style="text-align:left">
							RU III Plaju
						</td>
						<td>
							<div class="w3-grey w3-tiny">
								<div class="w3-container w3-green" style="width:100%">100%</div>
							</div>
						</td>
						<td>
							<div class="btn-container">
								<div class="btn-wrapper">
									<button>
										<i class='bx bx-dots-horizontal-rounded'></i>
									</button>
									<div class="dropdown">
										<ul>
											<li>
												<a href="program-detail.php">
													<span> Detail Program </span>
												</a>
											</li>
											<li>
												<a href="#">
													<span> Download PR </span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td style="text-align:left">
							Program Bantuan Keamanan Masyarakat
						</td>
						<td>	21-09-2022										</td>
						<td style="text-align:left">
							RU V Balikpapan
						</td>
						<td>
							<div class="w3-grey w3-tiny">
								<div class="w3-container w3-blue" style="width:80%">80%</div>
							</div>
						</td>
						<td>
							<div class="btn-container">
								<div class="btn-wrapper">
									<button>
										<i class='bx bx-dots-horizontal-rounded'></i>
									</button>
									<div class="dropdown">
										<ul>
											<li>
												<a href="#">
													<span> Download PR </span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td style="text-align:left">
							Program Bantuan Pemulihan Fasilitas
						</td>
						<td>	13-10-2022										</td>
						<td style="text-align:left">
							RU VII Kasim
						</td>
						<td>
							<div class="w3-grey w3-tiny">
								<div class="w3-container w3-blue" style="width:80%">80%</div>
							</div>
						</td>
						<td>
							<div class="btn-container">
								<div class="btn-wrapper">
									<button>
										<i class='bx bx-dots-horizontal-rounded'></i>
									</button>
									<div class="dropdown">
										<ul>
											<li>
												<a href="#">
													<span> Download PR </span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td style="text-align:left">
							Program Bantuan Mitigasi Bencana Alam
						</td>
						<td>	15-10-2022										</td>
						<td style="text-align:left">
							RU IV Cilacap
						</td>
						<td>
							<div class="w3-grey w3-tiny">
								<div class="w3-container w3-blue" style="width:80%">80%</div>
							</div>
						</td>
						<td>
							<div class="btn-container">
								<div class="btn-wrapper">
									<button>
										<i class='bx bx-dots-horizontal-rounded'></i>
									</button>
									<div class="dropdown">
										<ul>
											<li>
												<a href="#">
													<span> Download PR </span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td style="text-align:left">
							Program Bantuan Penyediaan Bahan Makanan
						</td>
						<td>	21-11-2022										</td>
						<td style="text-align:left">
							RU II Sei Pakning
						</td>
						<td>
							<div class="w3-grey w3-tiny">
								<div class="w3-container w3-green" style="width:100%">100%</div>
							</div>
						</td>
						<td>
							<div class="btn-container">
								<div class="btn-wrapper">
									<button>
										<i class='bx bx-dots-horizontal-rounded'></i>
									</button>
									<div class="dropdown">
										<ul>
											<li>
												<a href="program-detail.php">
													<span> Detail Program </span>
												</a>
											</li>
											<li>
												<a href="#">
													<span> Download PR </span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td style="text-align:left">
							Program Bantuan Penyediaan Bahan Bakar
						</td>
						<td>	20-12-2022										</td>
						<td style="text-align:left">
							RU VI Balongan
						</td>
						<td>
							<div class="w3-grey w3-tiny">
								<div class="w3-container w3-green" style="width:100%">100%</div>
							</div>
						</td>
						<td>
							<div class="btn-container">
								<div class="btn-wrapper">
									<button>
										<i class='bx bx-dots-horizontal-rounded'></i>
									</button>
									<div class="dropdown">
										<ul>
											<li>
												<a href="program-detail.php">
													<span> Detail Program </span>
												</a>
											</li>
											<li>
												<a href="#">
													<span> Download PR </span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td style="text-align:left">
							Program Bantuan Penyediaan Bahan Bakar
						</td>
						<td>	20-12-2022										</td>
						<td style="text-align:left">
							RU VI Balongan
						</td>
						<td>
							<div class="w3-grey w3-tiny">
								<div class="w3-container w3-green" style="width:100%">100%</div>
							</div>
						</td>
						<td>
							<div class="btn-container">
								<div class="btn-wrapper">
									<button>
										<i class='bx bx-dots-horizontal-rounded'></i>
									</button>
									<div class="dropdown">
										<ul>
											<li>
												<a href="program-detail.php">
													<span> Detail Program </span>
												</a>
											</li>
											<li>
												<a href="#">
													<span> Download PR </span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<div class="back-button">
				<input type="button" class="button" name="back-butt" id="back-butt" onclick="back()" value="Kembali">
			</div>
		</div>
	</body>
	<script>
		function request() {
			window.location.href="budget-request.php";
		}
		function back() {
			window.location.href="dashboard.php";
		}
	</script>
</html>