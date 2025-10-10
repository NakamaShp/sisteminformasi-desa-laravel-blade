<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace(); // Perintah untuk memproses semua tag [data-feather]
</script>

<section class="bg-white shadow-md  ">
    <header>
        <div class="container mx-auto px-8 py-1 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <img src="images/logo-desa.jpg" alt="Logo Desa" class="rounded-full border-4 border-blue-600 w-10">
                </div>
                <div>
                    <h2 class="text-xl font-bold text-blue-800">Selamat Datang </h2>
                    <h3 class="font-medium text-blue-800">Website Resmi Desa Air Senggeris</h3>
                </div>
            </div>

            <div class="flex items-center space-x-4 text-blue-800 font-medium">
                <!-- Tanggal dan Waktu Dinamis -->
                <div class="flex items-center space-x-2">
                    <i class="far fa-calendar-alt"></i>
                    <span id="currentDateTime"></span>
                </div>

            </div>
        </div>
        </header>
</section>
    
<nav class="bg-blue-900 text-white sticky top-0 z-50" x-data="{ menuOpen: false }">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-2">
            
            <!-- Kiri: Menu Navigasi -->
            <div 
                :class="menuOpen ? 'block' : 'hidden'" 
                class="w-full md:flex md:items-center md:space-x-6 md:w-auto absolute md:static left-0 top-full bg-blue-900 md:bg-transparent px-4 md:px-0">
                
                <a href="/" class="flex items-center space-x-1 text-sm hover:bg-blue-700 px-3 py-2 rounded transition duration-300">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
                <a href="/profildesa" class="flex items-center space-x-1 text-sm hover:bg-blue-700 px-3 py-2 rounded transition duration-300">
                    <i class="fas fa-user"></i>
                    <span>Profil Desa</span>
                </a>
                <a href="/berita" class="flex items-center space-x-1 text-sm hover:bg-blue-700 px-3 py-2 rounded transition duration-300">
                    <i class="fas fa-newspaper"></i>
                    <span>Portal Berita</span>
                </a>
                <a href="/layanan" class="flex items-center space-x-1 text-sm hover:bg-blue-700 px-3 py-2 rounded transition duration-300">
                    <i class="fas fa-info-circle"></i>
                    <span>Informasi Layanan</span>
                </a>
                <a href="/pengaduan" class="flex items-center space-x-1 text-sm hover:bg-blue-700 px-3 py-2 rounded transition duration-300">
                    <i class="fas fa-book"></i>
                    <span>Pengaduan</span>
                </a>
            </div>

            <!-- Kanan: Form Pencarian -->
            <div class="hidden md:flex items-center space-x-2">
                <input type="text" placeholder="Masukkan pencarian"
                    class="px-4 py-1 border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-white">
                <button class="p-2 bg-blue-900 text-white hover:bg-blue-700 rounded-md transition duration-300">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <!-- Tombol Menu Mobile -->
            <button 
                @click="menuOpen = !menuOpen"
                class="md:hidden p-2 hover:bg-blue-700 rounded transition duration-300">
                <i class="fas fa-bars"></i>
            </button>

        </div>
    </div>
</nav>


<script>
    // Fungsi untuk memperbarui tanggal dan waktu
    function updateDateTime() {
        const now = new Date();

        // Nama hari dalam bahasa Indonesia
        const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const dayName = days[now.getDay()];

        // Nama bulan dalam bahasa Indonesia
        const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];
        const monthName = months[now.getMonth()];

        // Format tanggal
        const date = now.getDate();
        const year = now.getFullYear();

        // Format waktu dengan leading zero
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');

        // Gabungkan semua format
        const formattedDateTime = `${dayName}, ${date} ${monthName} ${year}, ${hours}:${minutes}:${seconds}`;

        // Update elemen HTML
        document.getElementById('currentDateTime').textContent = formattedDateTime;
    }

    // Panggil fungsi pertama kali
    updateDateTime();

    // Update setiap detik
    setInterval(updateDateTime, 1000);

</script>
