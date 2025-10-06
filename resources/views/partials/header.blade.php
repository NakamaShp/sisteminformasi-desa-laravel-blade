 <section class="bg-white shadow-md  ">
     <header>
         <div class="container mx-auto px-4 py-3 flex justify-between items-center">
             <div class="flex items-center space-x-4">
                 <!-- Logo dengan desain bulat seperti referensi -->
                 <div class="relative">
                     <img src="https://placehold.co/60x60/003366/ffffff?text=DS" alt="Logo Desa" class="rounded-full border-4 border-blue-600">
                     <!-- Simbol kuda seperti di referensi -->
                     <div class="absolute bottom-0 right-0 transform translate-x-1 translate-y-1">
                         <img src="https://placehold.co/24x24/FFA500/FFFFFF?text=🐎" alt="Simbol kuda" class="rounded-full">
                     </div>
                 </div>

                 <div>
                     <h2 class="text-xl font-bold text-blue-800">Selamat Datang </h2>
                     <h3 class="text-lg font-medium text-blue-700">Website Resmi Desa Air Senggeris</h3>
                 </div>
             </div>

             <!-- Tanggal dan Waktu -->
             <div class="flex items-center space-x-2 text-blue-600 font-medium">
                 <i class="far fa-calendar-alt"></i>
                 <span>Selasa, 30 September 2025, 17:20:05</span>
             </div>
         </div>
 </section>

 </header>
 <nav class="bg-blue-900 text-white sticky top-0 z-50">
     <div class="container mx-auto px-4">
         <div class="flex justify-between items-center py-3">
             <div :class="{'hidden': !menuOpen}" class="md:flex space-x-6 w-full md:w-auto">
                 <a href="/" class="flex items-center space-x-1 hover:bg-blue-700 px-3 py-2 rounded transition duration-300">
                     <i class="fas fa-home"></i>
                     <span>HOME</span>
                 </a>
                 <a href="/profildesa" class="flex items-center space-x-1 hover:bg-blue-700 px-3 py-2 rounded transition duration-300">
                     <i class="fas fa-user"></i>
                     <span>PROFIL DESA</span>
                 </a>
                 <a href="/berita" class="flex items-center space-x-1 hover:bg-blue-700 px-3 py-2 rounded transition duration-300">
                     <i class="fas fa-newspaper"></i>
                     <span>PORTAL BERITA</span>
                 </a>
                 <a href="#" class="flex items-center space-x-1 hover:bg-blue-700 px-3 py-2 rounded transition duration-300">
                     <i class="fas fa-info-circle"></i>
                     <span>INFORMASI</span>
                 </a>
                 <a href="#" class="flex items-center space-x-1 hover:bg-blue-700 px-3 py-2 rounded transition duration-300">
                     <i class="fas fa-images"></i>
                     <span>GALERI</span>
                 </a>
                 <a href="/pengaduan" class="flex items-center space-x-1 hover:bg-blue-700 px-3 py-2 rounded transition duration-300">
                     <i class="fas fa-book"></i>
                     <span>PENGADUAN</span>
                 </a>
             </div>

             <!-- Mobile Menu Toggle -->
             <button @click="menuOpen = !menuOpen" class="md:hidden p-2 hover:bg-blue-700 rounded transition duration-300">
                 <i class="fas fa-bars"></i>
             </button>

             <!-- Search Button -->
             <button class="p-2 hover:bg-blue-700 rounded transition duration-300">
                 <i class="fas fa-search"></i>
             </button>
         </div>
     </div>
 </nav>