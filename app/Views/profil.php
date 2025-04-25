<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio Fadhil</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            font-family: Georgia;
        }
    </style>
</head>

<body class="font-sans bg-gray-100">
    <header>
        <nav class="bg-blue-900 text-white shadow-md">
            <div class="container mx-auto px-20 py-4 flex justify-between items-center">
                <h1 class="text-2xl font-bold">Portofolio</h1>
                <ul class="flex space-x-4">
                    <li><a href="#home" class="hover:text-black">Home</a></li>
                    <li><a href="#Portofolio" class="hover:text-black">Portofolio</a></li>
                    <li><a href="#pengalaman" class="hover:text-black">Pengalaman</a></li>
                    <li><a href="#Organisasi" class="hover:text-black">Organisasi</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="bg-gray-100 py-10" id="home">
            <div class="container mx-auto px-20 flex flex-col md:flex-row items-center">
                <div class="w-full md:w-1/2 mb-4 md:mb-0 flex justify-center" data-aos="fade-right" data-aos-duration="1000">
                    <img src="<?= base_url('assets/Profil.jpeg'); ?>" alt="Foto Saya"
                        class="max-w-xs w-full h-auto object-cover rounded-lg shadow-lg">
                </div>
                <div class="w-full md:w-1/2 text-center md:text-left md:pl-6" data-aos="fade-left" data-aos-duration="1000">
                    <h2 class="text-3xl font-bold text-blue-900 mb-2">Hi, It's Me!</h2>
                    <h3 class="text-xl font-bold text-blue-900 mb-2">Achmad Fadhil Adhyaksa</h3>
                    <p class="text-base text-gray-700 mb-4">
                        Lulusan Sistem Informasi Institut Widya Pratama Pekalongan tahun 2025, <br>
                        saya memiliki minat berkarir dalam bidang web developer, <br>
                        terutama dalam pengembangan berbasis website.
                    </p>
                    <a href="https://github.com/gastara" target="_blank"
                        class="inline-flex items-center bg-blue-900 hover:bg-sky-500 text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
                        My Github
                        <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 0.297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385 0.6 0.113 0.82-0.258 0.82-0.577 0-0.285-0.01-1.04-0.015-2.04-3.338 0.724-4.042-1.61-4.042-1.61-0.546-1.387-1.333-1.757-1.333-1.757-1.089-0.745 0.083-0.729 0.083-0.729 1.205 0.084 1.84 1.236 1.84 1.236 1.07 1.835 2.809 1.305 3.495 0.998 0.108-0.776 0.418-1.305 0.762-1.605-2.665-0.3-5.466-1.335-5.466-5.93 0-1.31 0.47-2.38 1.235-3.22-0.135-0.303-0.54-1.523 0.105-3.176 0 0 1.005-0.322 3.3 1.23 0.96-0.267 1.98-0.399 3-0.405 1.02 0.006 2.04 0.138 3 0.405 2.28-1.552 3.285-1.23 3.285-1.23 0.645 1.653 0.24 2.873 0.12 3.176 0.765 0.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92 0.42 0.36 0.81 1.096 0.81 2.22 0 1.606-0.015 2.896-0.015 3.286 0 0.315 0.21 0.69 0.825 0.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
        <div class="w-full overflow-hidden leading-none -mb-1">
            <svg class="w-full h-20" viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#1c398e" fill-opacity="1"
                    d="M0,224L48,213.3C96,203,192,181,288,160C384,139,480,117,576,128C672,139,768,181,864,208C960,235,1056,245,1152,224C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>

        <!-- Portfolio Section -->
        <section class="bg-blue-900 py-20 text-white" id="Portofolio">
            <div class="container mx-auto space-y-16 px-4 md:px-20">

                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <h3 class="text-2xl font-bold mb-4">Pamsimas SugihWaras</h3>
                        <p>Website yang digunakan sebagai kebutuhan operasional Pamsimas Sugihwaras Pekalongan, yang didalamnya dapat mencatat meteran serta biaya penggunaan air milik pelanggan. Website ini merupakan hasil penelitian yang saya lakukan untuk tugas akhir yang saya lakukan.</p>
                    </div>
                    <div class="md:w-1/2 flex justify-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                        <img src="<?= base_url('assets/Pamsimas.png'); ?>" alt="Project 1" class="w-full max-w-lg h-64 object-cover rounded-xl transition-transform duration-300 hover:scale-105">
                    </div>
                </div>

                <div class="flex flex-col md:flex-row-reverse items-center gap-8">
                    <div class="md:w-1/2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <h3 class="text-2xl font-bold mb-4">ALTON Online Shop</h3>
                        <p>Alton merupakan brand pakaian dibawah naungan PT. Dakota Mitra Tama di Kabupaten Pekalongan. Website ini merupakan salah satu project yang saya kerjakan bersama Agsa.dev</p>
                    </div>
                    <div class="md:w-1/2 flex justify-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                        <img src="<?= base_url('assets/Alton.png'); ?>"
                            alt="Project 2"
                            class="w-full max-w-lg h-64 object-cover rounded-xl transition-transform duration-300 hover:scale-105">
                    </div>
                </div>

                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <h3 class="text-2xl font-bold mb-4">Website Rumah BUMN Pekalongan</h3>
                        <p>Website yang menampilkan profil serta kegiatan yang dilakukan oleh Rumah Bumn Pekalongan untuk mendukung pertumbuhan usaha mikro, kecil, dan menengah (UMKM) diwilayah pekalongan. Dalam pembuatan website ini Rumah Bumn Pekalongan berkolaborasi dengan Agsa.dev sebagai pihak developernya.</p>
                    </div>
                    <div class="md:w-1/2 flex justify-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                        <img src="<?= base_url('assets/rbPekalongan.png'); ?>"
                            alt="Project 3"
                            class="w-full max-w-lg h-64 object-cover rounded-xl transition-transform duration-300 hover:scale-105">
                    </div>
                </div>

            </div>
        </section>
        <div class="w-full overflow-hidden leading-none -mb-1 rotate-180">
            <svg class="w-full h-20" viewBox="0 0 1440 320" preserveAspectRatio="none">
                <path fill="#1c398e" fill-opacity="1"
                    d="M0,224L48,213.3C96,203,192,181,288,160C384,139,480,117,576,128C672,139,768,181,864,208C960,235,1056,245,1152,224C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>

        <section class="bg-gray-100 py-20" id="pengalaman">
            <div class="container mx-auto px-4 md:px-20">
                <h2 class="text-3xl font-bold text-center text-blue-900 mb-12" data-aos="fade-up">Pengalaman</h2>

                <div class="space-y-12">
                    <div onclick="openModal('modal1')" class="cursor-pointer bg-white rounded-xl shadow-lg p-8 flex flex-col md:flex-row items-start gap-6 hover:shadow-2xl transition" data-aos="fade-right" data-aos-duration="1000">
                        <div class="w-16 h-16 bg-blue-900 text-white flex items-center justify-center rounded-full text-xl font-bold shadow-md">1</div>
                        <div>
                            <h3 class="text-xl font-semibold text-blue-900">Agsa.Dev – Pekalongan, Indonesia</h3>
                            <span class="text-sm text-gray-500 italic">Agustus 2024 – November 2024</span>
                            <p class="text-gray-700 mt-2">Langkah awal saya menjadi seorang programmer dimulai dari sini, di mana saya belajar membangun sistem dari nol hingga siap digunakan.</p>
                        </div>
                    </div>

                    <div onclick="openModal('modal2')" class="cursor-pointer bg-white rounded-xl shadow-lg p-8 flex flex-col md:flex-row items-start gap-6 hover:shadow-2xl transition" data-aos="fade-right" data-aos-duration="1000">
                        <div class="w-16 h-16 bg-blue-900 text-white flex items-center justify-center rounded-full text-xl font-bold shadow-md">2</div>
                        <div>
                            <h3 class="text-xl font-semibold text-blue-900">PT Dakota Mitra Tama – Pekalongan, Indonesia</h3>
                            <span class="text-sm text-gray-500 italic">Maret 2024 – Juni 2024</span>
                            <p class="text-gray-700 mt-2">Magang sebagai Web Developer, saya ikut serta dalam membangun sistem internal perusahaan berbasis web dengan tim developer profesional.</p>
                        </div>
                    </div>

                    <div onclick="openModal('modal3')" class="cursor-pointer bg-white rounded-xl shadow-lg p-8 flex flex-col md:flex-row items-start gap-6 hover:shadow-2xl transition" data-aos="fade-right" data-aos-duration="1000">
                        <div class="w-16 h-16 bg-blue-900 text-white flex items-center justify-center rounded-full text-xl font-bold shadow-md">3</div>
                        <div>
                            <h3 class="text-xl font-semibold text-blue-900">Raja Elektrik Service Handphone – Pekalongan, Indonesia</h3>
                            <span class="text-sm text-gray-500 italic">Juni 2020 – September 2021</span>
                            <p class="text-gray-700 mt-2">Bekerja sebagai teknisi hardware handphone, memperkuat kemampuan saya dalam analisis dan troubleshooting perangkat keras.</p>
                        </div>
                    </div>

                    <div onclick="openModal('modal4')" class="cursor-pointer bg-white rounded-xl shadow-lg p-8 flex flex-col md:flex-row items-start gap-6 hover:shadow-2xl transition" data-aos="fade-right" data-aos-duration="1000">
                        <div class="w-16 h-16 bg-blue-900 text-white flex items-center justify-center rounded-full text-xl font-bold shadow-md">4</div>
                        <div>
                            <h3 class="text-xl font-semibold text-blue-900">Konveksi Batik – Pekalongan, Indonesia</h3>
                            <span class="text-sm text-gray-500 italic">September 2019 – November 2019</span>
                            <p class="text-gray-700 mt-2">Bagian logistik dan gudang, saya belajar pentingnya manajemen stok dan ketelitian dalam alur distribusi barang.</p>
                        </div>
                    </div>

                    <div onclick="openModal('modal5')" class="cursor-pointer bg-white rounded-xl shadow-lg p-8 flex flex-col md:flex-row items-start gap-6 hover:shadow-2xl transition" data-aos="fade-right" data-aos-duration="1000">
                        <div class="w-16 h-16 bg-blue-900 text-white flex items-center justify-center rounded-full text-xl font-bold shadow-md">5</div>
                        <div>
                            <h3 class="text-xl font-semibold text-blue-900">Toko Anta 2 Moeslim Wear – Pekalongan, Indonesia</h3>
                            <span class="text-sm text-gray-500 italic">April 2019 – Juni 2019</span>
                            <p class="text-gray-700 mt-2">Sebagai pramuniaga, saya mengasah kemampuan komunikasi, pelayanan pelanggan, dan bekerja dalam tim yang dinamis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal for Pengalaman 1 -->
        <div id="modal1" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center">
            <div class="bg-white max-w-3xl w-full rounded-xl shadow-lg p-6 relative">
                <button onclick="closeModal('modal1')" class="absolute top-3 right-3 text-gray-600 hover:text-red-500 text-xl font-bold">&times;</button>
                <h3 class="text-2xl font-bold text-blue-900 mb-2">Agsa.Dev – Web Development Internship</h3>
                <p class="text-gray-700 mb-4">Agustus 2024 – November 2024</p>
                <p class="text-gray-800 leading-relaxed mb-4">
                    Di Agsa.Dev, saya mendapat pengalaman langsung membangun aplikasi berbasis web menggunakan CodeIgniter. Saya mengerjakan sistem informasi dan melakukan testing hingga deployment. Ini adalah titik awal penting dalam karir saya sebagai web developer.
                </p>
            </div>
        </div>

        <!-- Modal for Pengalaman 2 -->
        <div id="modal2" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center">
            <div class="bg-white max-w-3xl w-full rounded-xl shadow-lg p-6 relative">
                <button onclick="closeModal('modal2')" class="absolute top-3 right-3 text-gray-600 hover:text-red-500 text-xl font-bold">&times;</button>
                <h3 class="text-2xl font-bold text-blue-900 mb-2">PT Dakota Mitra Tama – Web Developer Intern</h3>
                <p class="text-gray-700 mb-4">Maret 2024 – Juni 2024</p>
                <p class="text-gray-800 leading-relaxed mb-4">
                    Saya berkontribusi dalam proyek internal perusahaan untuk digitalisasi sistem operasional menggunakan PHP dan MySQL. Saya belajar bekerja secara kolaboratif dalam tim pengembang dan mendapatkan wawasan dunia kerja profesional.
                </p>
            </div>
        </div>
        <div id="modal3" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center">
            <div class="bg-white max-w-3xl w-full rounded-xl shadow-lg p-6 relative">
                <button onclick="closeModal('modal3')" class="absolute top-3 right-3 text-gray-600 hover:text-red-500 text-xl font-bold">&times;</button>
                <h3 class="text-2xl font-bold text-blue-900 mb-2">Raja Elektrik – Teknisi Handphone</h3>
                <p class="text-gray-700 mb-4">Juni 2020 – September 2021</p>
                <p class="text-gray-800 leading-relaxed mb-4">
                    Selama bekerja di Raja Elektrik, saya menangani berbagai kerusakan perangkat keras handphone dari berbagai merek. Kemampuan analisis, ketelitian, dan kesabaran sangat dibutuhkan di bidang ini. Pengalaman ini membentuk dasar teknis saya sebelum terjun ke dunia pemrograman.
                </p>
            </div>
        </div>
        <div id="modal4" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center">
            <div class="bg-white max-w-3xl w-full rounded-xl shadow-lg p-6 relative">
                <button onclick="closeModal('modal4')" class="absolute top-3 right-3 text-gray-600 hover:text-red-500 text-xl font-bold">&times;</button>
                <h3 class="text-2xl font-bold text-blue-900 mb-2">Konveksi Batik – Staf Gudang</h3>
                <p class="text-gray-700 mb-4">September 2019 – November 2019</p>
                <p class="text-gray-800 leading-relaxed mb-4">
                    Di konveksi batik ini, saya bertugas mengatur stok bahan, pengepakan produk jadi, dan mendukung alur distribusi. Pengalaman ini mengajarkan saya pentingnya manajemen waktu dan efisiensi dalam pekerjaan fisik dan administratif.
                </p>
            </div>
        </div>
        <div id="modal5" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden items-center justify-center">
            <div class="bg-white max-w-3xl w-full rounded-xl shadow-lg p-6 relative">
                <button onclick="closeModal('modal5')" class="absolute top-3 right-3 text-gray-600 hover:text-red-500 text-xl font-bold">&times;</button>
                <h3 class="text-2xl font-bold text-blue-900 mb-2">Toko Anta 2 Moeslim Wear – Pramuniaga</h3>
                <p class="text-gray-700 mb-4">April 2019 – Juni 2019</p>
                <p class="text-gray-800 leading-relaxed mb-4">
                    Berinteraksi langsung dengan pelanggan setiap hari membantu saya meningkatkan keterampilan komunikasi dan pelayanan. Saya juga dilatih untuk mengatur display toko dan membantu dalam kegiatan promosi produk. Modal sosial yang sangat berharga dalam dunia kerja apa pun.
                </p>
            </div>
        </div>

        <!-- Organisasi -->
        <section id="Organisasi" class="py-20 px-6 md:px-20 bg-gradient-to-b from-white to-gray-100" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-10">Organisasi</h2>

            <div class="grid md:grid-cols-2 gap-10">
                <!-- Card 1 -->
                <a href="https://www.instagram.com/p/C0_u-cwyea2/">
                    <div class="bg-white shadow-xl rounded-2xl p-6 flex flex-col md:flex-row items-center transition-transform duration-300 hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?= base_url('assets/logo/bemIwima.jpg'); ?>" alt="Logo BEM" class="w-24 h-24 md:w-28 md:h-28 rounded-full object-cover border-4 border-indigo-500 mb-4 md:mb-0 md:mr-6">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">BEM IWIMIA</h3>
                            <p class="text-sm text-gray-600">Staff Divisi Kominfo (2023 - 2024)</p>
                            <p class="mt-2 text-gray-700 text-sm leading-relaxed">Memantau kegiatan yang dilakukan UKM.</p>
                        </div>
                    </div>
                </a>

                <!-- Card 2 -->
                <a href="https://www.instagram.com/ukmpk.wp/">
                    <div class="bg-white shadow-xl rounded-2xl p-6 flex flex-col md:flex-row items-center transition-transform duration-300 hover:scale-105" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?= base_url('assets/logo/ukmPK.jpg'); ?>" alt="Logo UKM PK" class="w-24 h-24 md:w-28 md:h-28 rounded-full object-cover border-4 border-orange-600 mb-4 md:mb-0 md:mr-6">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">UKM Pengembangan Komputer</h3>
                            <p class="text-sm text-gray-600">Wakil Ketua Umum (2022 - 2023)</p>
                            <p class="mt-2 text-gray-700 text-sm leading-relaxed">Membantu mengembangkan UKM dan mengkoordinasi kegiatan.</p>
                        </div>
                    </div>
                </a>
                <a href="https://www.instagram.com/uptkomputer_/">
                    <div class="bg-white shadow-xl rounded-2xl p-6 flex flex-col md:flex-row items-center transition-transform duration-300 hover:scale-105" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?= base_url('assets/logo/uptKomp.jpg'); ?>" alt="Logo UKM PK" class="w-24 h-24 md:w-28 md:h-28 rounded-full object-cover border-4 border-blue-600 mb-4 md:mb-0 md:mr-6">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">UPT Komputer</h3>
                            <p class="text-sm text-gray-600">Asisten UPT Komputer (2022 - 2023)</p>
                            <p class="mt-2 text-gray-700 text-sm leading-relaxed">Membantu mengelola dan memelihara fasilitas komputer di kampus.</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <section class="bg-gray-100 py-12">
            <div class="container mx-auto text-center">
                <div class="flex justify-center items-center gap-8">
                    <!-- Laravel -->
                    <img src="https://raw.githubusercontent.com/laravel/art/master/laravel-logo.svg"
                        alt="Laravel" class="w-16 h-16 grayscale hover:grayscale-0 hover:scale-110 transition duration-300 hover:drop-shadow-[0_0_10px_#FF2D20]">

                    <!-- CodeIgniter 4 -->
                    <img src="https://www.svgrepo.com/show/353579/codeigniter.svg"
                        alt="CodeIgniter" class="w-16 h-16 grayscale hover:grayscale-0 hover:scale-110 transition duration-300 hover:drop-shadow-[0_0_10px_#EF4223]">

                    <!-- MySQL -->
                    <img src="https://www.mysql.com/common/logos/logo-mysql-170x115.png"
                        alt="MySQL" class="w-20 h-16 grayscale hover:grayscale-0 hover:scale-110 transition duration-300 hover:drop-shadow-[0_0_10px_#00758F]">

                    <!-- HTML -->
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                        alt="HTML" class="w-16 h-16 grayscale hover:grayscale-0 hover:scale-110 transition duration-300 hover:drop-shadow-[0_0_10px_#E34F26]">

                    <!-- CSS -->
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"
                        alt="CSS" class="w-16 h-16 grayscale hover:grayscale-0 hover:scale-110 transition duration-300 hover:drop-shadow-[0_0_10px_#1572B6]">

                    <!-- Bootstrap -->
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg"
                        alt="Bootstrap" class="w-16 h-16 grayscale hover:grayscale-0 hover:scale-110 transition duration-300 hover:drop-shadow-[0_0_10px_#7952B3]">

                    <!-- Tailwind CSS -->
                    <img src="https://cdn.worldvectorlogo.com/logos/tailwind-css-2.svg"
                        alt="Tailwind" class="w-16 h-16 grayscale hover:grayscale-0 hover:scale-110 transition duration-300 hover:drop-shadow-[0_0_10px_#38BDF8]">

                    <!-- PHP -->
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg"
                        alt="PHP" class="w-16 h-16 grayscale hover:grayscale-0 hover:scale-110 transition duration-300 hover:drop-shadow-[0_0_10px_#777BB4]">
                </div>
            </div>
        </section>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
            document.getElementById(id).classList.add('flex');
        }

        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
            document.getElementById(id).classList.remove('flex');
        }
    </script>
</body>

</html>