<?php
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
        <link rel="stylesheet" href="style.css">
		<script src="https://cdn.tailwindcss.com"></script>
		<title>Edit</title>
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
								<img src="img/meong-removebg-preview.png" alt="Logo" class="h-8 w-14 mr-2">
								<span class="font-semibold text-gray-500 text-lg hover:text-green-500 transition duration-300">Meong.com</span>
							</a>
						</div>
					<!-- Primary Navbar items -->
					<div class="hidden md:flex items-center space-x-1">
						<a href="index.html" class="py-4 px-2 ml-60 text-gray-500 hover:text-green-500 hover:border-b-4 border-green-500 font-semibold transition duration-300">Home</a>
						<a href="tambah.php" class="py-4 px-2 text-gray-500 hover:text-green-500 hover:border-b-4 border-green-500 font-semibold transition duration-300">Tambah Data</a>
						<a href="#" class="py-4 px-2 text-gray-500 hover:text-green-500 hover:border-b-4 border-green-500 font-semibold transition duration-300">Data Siswa</a>
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
				<li class="active"><a href="index.html" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Home</a></li>
				<li><a href="tambah.php" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Tambah Data</a></li>
				<li><a href="#" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Data Siswa</a></li>
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
        <?php
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM data_siswa where id='$id'");
        while($d = mysqli_fetch_array($data)){
        ?>
        <div class="container animate__animated animate__fadeIn animate__slow shadow-xl">
            <div class="p-5">
        <form class="" action="edit_proses.php" method="POST">
            <div class="m-5">
            <label class="">NIS</label>
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
            <input type="text" name="nis" maxlength="11" class="border border-black rounded-md ml-[93px] w-[77rem] h-[35px]" value="<?php echo $d['nis']; ?>">
            </div>
            <div class="m-5">
            <label>Nama </label>
            <input type="text" name="nama" maxlength="100" class="border border-black rounded-md ml-[77px] w-[77rem] h-[35px]" value="<?php echo $d['nama_lengkap']; ?>">
            </div>
            <div class="m-5">
            <label>Tanggal Lahir</label>
            <input type="date" name="tgl" class="border border-black rounded-md ml-[25px] w-[77rem] h-[35px]" value="<?php echo $d['tgl_lahir']; ?>">
            </div>
            <div class="m-5">
            <label>Kelas</label>
            <select name="kelas" class="border border-black rounded-md ml-[82px] w-[77rem] h-[35px]" value="<?php echo $d['kelas']; ?>" >
                <option name="kelas">-------------------------------------------------------------------------------------------Kelas-------------------------------------------------------------------------------------------</option>
                <option name="kelas">XA</option>
                <option name="kelas">XB</option>
                <option name="kelas">XC</option>
                <option name="kelas">XD</option>
                <option name="kelas">XE</option>
                <option name="kelas">XF</option>
                <option name="kelas">XG</option>
                <option name="kelas">XIA</option>
                <option name="kelas">XIB</option>
                <option name="kelas">XIC</option>
                <option name="kelas">XID</option>
                <option name="kelas">XIE</option>
                <option name="kelas">XIF</option>
                <option name="kelas">XIIA</option>
                <option name="kelas">XIIB</option>
                <option name="kelas">XIIC</option>
                <option name="kelas">XIID</option>
                <option name="kelas">XIIE</option>
                <option name="kelas">XIIF</option>
            </select>
            </div>
            <div class="m-5">
            <label>Jurusan: </label>
            <select name="jurusan" class="border border-black rounded-md ml-[62px] w-[77rem] h-[35px]" value="<?php echo $d['jurusan']; ?>" >
                <option name="jurusan">------------------------------------------------------------------------------------------Jurusan------------------------------------------------------------------------------------------</option>
                <option name="jurusan">TEKNIK JARINGAN AKSES & TELEKOMUNIKASI</option>
                <option name="jurusan">TEKNIK KERJA JARINGAN</option>
                <option name="jurusan">REKAYASA PERANGKAT LUNAK</option>
                <option name="jurusan">DESAIN KOMUNIKASI VISUAL</option>
                <option name="jurusan">ANIMASI</option>
            </select>
            </div>
            <div class="m-5">
            <label>Email: </label>
            <input type="text" name="email" maxlength="30" class="border border-black rounded-md ml-[77px] w-[77rem] h-[35px]" value="<?php echo $d['email']; ?>">
            </div>
            <div class="m-5">
            <label>Alamat: </label>
            <textarea type="text" name="alamat" maxlength="100" class="border border-black rounded-md ml-[65px] w-[77rem]" value=""><?php echo $d['alamat']; ?></textarea>
            </div>
            <button type="submit" class="rounded-xl ml-36 p-[10px 20px] w-[77rem] h-8 text-2xl bg-green-500 hover:tracking-widest hover:bg-green-700 duration-150" value="simpan">Simpan</button>
            </div>
            </div>
</form>
<?php
        }
        ?>
	</body>
</html>