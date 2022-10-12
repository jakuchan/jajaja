<?php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://cdn.tailwindcss.com"></script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<title>Home</title>
</head>

<body>
	<!-- Navbar goes here -->
	<nav class="bg-white shadow-lg">
		<div class="max-w-6xl mx-auto px-4">
			<div class="flex justify-between">
				<div class="flex space-x-7">
					<div>
						<!-- Website Logo -->
						<a href="#" class="flex py-4 px-2">
							<span class="font-semibold text-gray-500 text-lg hover:text-green-500 transition duration-300">Meong.com</span>
						</a>
					</div>
					<!-- Primary Navbar items -->
					<div class="hidden md:flex items-center space-x-1">
						<a href="index.html" class="py-4 px-2 ml-60 text-gray-500 hover:text-green-500 hover:border-b-4 border-green-500 font-semibold transition duration-300">Home</a>
						<a href="tambah.php" class="py-4 px-2 text-gray-500 hover:text-green-500 hover:border-b-4 border-green-500 font-semibold transition duration-300">Tambah Data</a>
						<a href="#" class="py-4 px-2 text-gray-500 hover:text-green-500 hover:border-b-4 border-green-500 font-semibold transition duration-300">Data Siswa</a>
						<a href="credit.php" class="py-4 px-2 text-gray-500 hover:text-green-500 hover:border-b-4 border-green-500 font-semibold transition duration-300">Credit</a>
					</div>
				</div>
				<!-- Mobile menu button -->
				<div class="md:hidden flex items-center">
					<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-gray-500 hover:text-green-500 " x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
				</div>
			</div>
		</div>
		<!-- mobile menu -->
		<div class="hidden mobile-menu">
			<ul class="">
				<li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Home</a></li>
				<li><a href="#services" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Services</a></li>
				<li><a href="#about" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">About</a></li>
				<li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Contact Us</a></li>
			</ul>
		</div>
		<script>
			const btn = document.querySelector("button.mobile-menu-button");
			const menu = document.querySelector(".mobile-menu");

			btn.addEventListener("click", () => {
				menu.classList.toggle("hidden");
			});
		</script>
	</nav>
	<div class="mt-[30px]">
			<form action="" method="get" class="">
				<label class="ml-[49rem]">Cari :</label>
				<input type="search" name="cari" class="border border-black rounded-lg">
				<input type="submit" value="cari" class="border border-black w-[45px]">
			</form>
			</div>
			<?php
			if(isset($_GET['cari'])){
				$cari = $_GET['cari'];
			}
			?>
			<div class="mt-[30px]">
			<div class="ml-[27rem]">
	<table border="1" class="">
		<tr class="border border-black bg-green-500">
		<th colspan="9">TABEL SISWA</th>
		</tr>
		<tr class="border border-black bg-green-500">
			<th class="border border-black">NO</th>
			<th class="border border-black">NIS</th>
			<th class="border border-black">Nama</th>
			<th class="border border-black">Tanggal</th>
			<th class="border border-black">Kelas</th>
			<th class="border border-black">Jurusan</th>
			<th class="border border-black">Email</th>
			<th class="border border-black">Alamat</th>
			<th class="border border-black">Aksi</th>
		</tr>
		<tr>
			<?php
			$id = 1;
			if (isset($_GET['cari'])) {
				$cari = $_GET['cari'];
				$query = "SELECT * FROM data_siswa WHERE nis like '%$cari%' OR nama_lengkap like '%$cari%' OR tgl_lahir like '%$cari%' OR kelas like '%$cari%' OR jurusan like '%$cari%' OR email like '%$cari%' OR alamat like '%$cari%'";
			} else {
				$query = "SELECT * FROM data_siswa";
			}
			$query = mysqli_query($koneksi, $query);
			while ($siswa = mysqli_fetch_array($query)) {

				echo "<tr class='border border-black hover:bg-slate-100'>";
				echo "<td class='border border-black text-center'>" . $id++ . "</td>";
				echo "<td class='border border-black'>" . $siswa['nis'] . "</td>";
				echo "<td class='border border-black'>" . $siswa['nama_lengkap'] . "</td>";
				echo "<td class='border border-black'>" . $siswa['tgl_lahir'] . "</td>";
				echo "<td class='border border-black text-center'>" . $siswa['kelas'] . "</td>";
				echo "<td class='border border-black'>" . $siswa['jurusan'] . "</td>";
				echo "<td class='border border-black'>" . $siswa['email'] . "</td>";
				echo "<td class='border border-black'>" . $siswa['alamat'] . "</td>";
				echo "<td class='border border-black'>";
				echo "<a href='form_edit.php?id=" . $siswa['id'] . "'>Edit</a> | ";
				echo "<a href='form_hapus.php?id=" . $siswa['id'] . "'>Hapus</a>";
				echo "</tr>";
			}
			?>
		</tr>
	</table>
	</div>
	</div>
</body>

</html>