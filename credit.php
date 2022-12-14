<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script src="https://cdn.tailwindcss.com"></script>
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
							<a href="list.php" class="py-4 px-2 text-gray-500 hover:text-green-500 hover:border-b-4 border-green-500 font-semibold transition duration-300">Data Siswa</a>
							<a href="#" class="py-4 px-2 text-gray-500 hover:text-green-500 hover:border-b-4 border-green-500 font-semibold transition duration-300">Credit</a>
						</div>
					</div>
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
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
					<li><a href="list.php" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Data Siswa</a></li>
					<li><a href="credit.php" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Credit</a></li>
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

	</body>
</html>