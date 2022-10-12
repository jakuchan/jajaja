<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="style.css">
		<script src="https://cdn.tailwindcss.com"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<title>Home</title>
	</head>
	<body style="background-color: black;">
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
							<a href="#" class="py-4 px-2 text-gray-500 hover:text-green-500 hover:border-b-4 border-green-500 font-semibold transition duration-300">Tambah Data</a>
							<a href="list.php" class="py-4 px-2 text-gray-500 hover:text-green-500 hover:border-b-4 border-green-500 font-semibold transition duration-300">Data Siswa</a>
                            <a href="credit.php" class="py-4 px-2 text-gray-500 hover:text-green-500 hover:border-b-4 border-green-500 font-semibold transition duration-300">Credit</a>
						</div>
                    </div>
                </div>
					</div>                  
		</nav>
        <div class="container">
            <div class="p-5">
        <form class="" action="tambah_proses.php" method="POST">
            <div class="m-5">
            <label class="">NIS</label>
            <input type="text" name="nis" maxlength="11" class="border border-black rounded-md ml-[93px] w-[77rem] h-[35px]" required>
            </div>
            <div class="m-5">
            <label>Nama </label>
            <input type="text" name="nama" maxlength="100" class="border border-black rounded-md ml-[77px] w-[77rem] h-[35px]" required>
            </div>
            <div class="m-5">
            <label>Tanggal Lahir</label>
            <input type="date" name="tgl" class="border border-black rounded-md ml-[25px] w-[77rem] h-[35px]" required>
            </div>
            <div class="m-5">
            <label>Kelas</label>
            <select name="kelas" class="border border-black rounded-md ml-[82px] w-[77rem] h-[35px]">
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
            <select name="jurusan" class="border border-black rounded-md ml-[62px] w-[77rem] h-[35px]">
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
            <input type="text" name="email" maxlength="30" class="border border-black rounded-md ml-[77px] w-[77rem] h-[35px]" required>
            </div>
            <div class="m-5">
            <label>Alamat: </label>
            <textarea type="text" name="alamat" maxlength="100" class="border border-black rounded-md ml-[65px] w-[77rem]" required></textarea>
            </div>
            <button type="submit" class="rounded-xl ml-[20px] p-[10px 20px] w-[85rem] text-2xl bg-green-500 hover:tracking-widest hover:bg-green-700 duration-150">Simpan</button>
            </div>
            </div>
	</body>
</html>