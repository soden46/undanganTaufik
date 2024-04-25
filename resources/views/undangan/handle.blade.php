    @extends('undangan.app')
    @section('content')
    <!-- Navbar Bottom -->
    <nav class="navbar navbar-dark bg-dark navbar-expand fixed-bottom rounded-top-4 p-0" id="navbar-menus">
        <ul class="navbar-nav nav-justified w-100 align-items-center">
            <li class="nav-item">
                <a class="nav-link" href="#home">
                    <i class="fas fa-home"></i>
                    <span class="d-block" style="font-size: 0.7rem">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#mempelai">
                    <i class="fa-solid fa-user-group"></i>
                    <span class="d-block" style="font-size: 0.7rem">Mempelai</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tanggal">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span class="d-block" style="font-size: 0.7rem">Tanggal</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#galeri">
                    <i class="fa-solid fa-images"></i>
                    <span class="d-block" style="font-size: 0.7rem">Galeri</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <main class="text-light" data-bs-spy="scroll" data-bs-target="#navbar-menus" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">
        <!-- Home -->
        <section class="container" id="home">
            <div class="text-center pt-4">
                <h1 class="font-esthetic my-4" style="font-size: 2.5rem">
                    Undangan Pernikahan
                </h1>

                <div class="py-4">
                    <div class="img-crop border border-3 border-light shadow mx-auto">
                        <img src="./assets/images/10.jpg" alt="bg" class="w-100" onclick="util.modal(this)" />
                    </div>
                </div>

                <h1 class="font-esthetic my-4" style="font-size: 3rem">
                    Taufik & Citra
                </h1>
                <p class="mb-0" style="font-size: 1.5rem">Selasa, 02 Juli 2024</p>

                <a class="btn btn-outline-light btn-sm shadow rounded-pill px-3 my-2" target="_blank" href="https://www.google.com/calendar/render?action=TEMPLATE&sf=true&output=xml&text=The%20Wedding%20Of%20Taufik%20And%20Citra&location=https://maps.app.goo.gl/8qdyLGZyiVqwzo2u7&details=The%20Wedding%20of%20Taufik%20and%20Citra%7C%2015%20Maret%202023%20%7C%20RT%20001%20RW%20001,%20Desa%20Saptomulyo,%20Kec.%20Kota%20Gajah,%20Kab.%20Lampung%20Tengah,%20Lampung%2034153%20%20%20%7C%2010.00%20-%2011.30%20WIB&dates=20240702T030000Z/20240424T043000Z">
                    <i class="fa-solid fa-calendar-check me-2"></i>Save The Date
                </a>

                <div class="d-flex justify-content-center align-items-center mt-4 mb-2">
                    <div class="mouse-animation">
                        <div class="scroll-animation"></div>
                    </div>
                </div>

                <p class="m-0">Scroll Down</p>
            </div>
        </section>

        <!-- Wave Separator -->
        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#111111" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,106.7C384,117,480,171,576,165.3C672,160,768,96,864,96C960,96,1056,160,1152,154.7C1248,149,1344,75,1392,37.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>

        <!-- Mempelai -->
        <section class="dark-section" id="mempelai">
            <div class="text-center">
                <h1 class="font-arabic py-4 px-2" style="font-size: 2rem">
                    بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ
                </h1>

                <!-- Love animation -->
                <div class="position-relative">
                    <div class="position-absolute" style="top: 0%; right: 10%">
                        <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="opacity-50" onload="util.animate(this, 500, 'animate-love')" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                        </svg>
                    </div>
                </div>

                <h1 class="font-esthetic py-4 px-2" style="font-size: 2rem">
                    Assalamualaikum Warahmatullahi Wabarakatuh
                </h1>

                <p class="pb-3 px-3">
                    Tanpa mengurangi rasa hormat. Kami mengundang Bapak/Ibu/Saudara/i
                    serta kerabat sekalian untuk menghadiri acara pernikahan kami:
                </p>

                <!-- Love animation -->
                <div class="position-relative">
                    <div class="position-absolute" style="top: 0%; left: 10%">
                        <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="opacity-50" onload="util.animate(this, 2000, 'animate-love')" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                        </svg>
                    </div>
                </div>

                <div class="overflow-x-hidden">
                    <div data-aos="fade-right" data-aos-duration="2000">
                        <div class="img-crop border border-3 border-light shadow my-4 mx-auto">
                            <img src="./assets/images/11.jpg" alt="taufik" onclick="util.modal(this)" />
                        </div>
                        <h1 class="font-esthetic" style="font-size: 3rem">Taufik Baharsyah</h1>
                        <p class="mt-3 mb-0" style="font-size: 1.25rem">Putra Pertama</p>
                        <p class="mb-0">Bapak Mursihono & Ibu Supatmi</p>
                    </div>

                    <!-- Love animation -->
                    <div class="position-relative">
                        <div class="position-absolute" style="top: 0%; right: 10%">
                            <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="opacity-50" onload="util.animate(this, 3000, 'animate-love')" viewBox="0 0 16 16">
                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                            </svg>
                        </div>
                    </div>

                    <h1 class="font-esthetic my-4" style="font-size: 4rem">&</h1>

                    <!-- Love animation -->
                    <div class="position-relative">
                        <div class="position-absolute" style="top: 0%; left: 10%">
                            <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="opacity-50" onload="util.animate(this, 2000, 'animate-love')" viewBox="0 0 16 16">
                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                            </svg>
                        </div>
                    </div>

                    <div data-aos="fade-left" data-aos-duration="2000">
                        <div class="img-crop border border-3 border-light shadow my-4 mx-auto">
                            <img src="./assets/images/12.jpg" alt="citra" onclick="util.modal(this)" />
                        </div>
                        <h1 class="font-esthetic" style="font-size: 3rem">Citra Dwi Nur Afni Oktafiana</h1>
                        <p class="mt-3 mb-0" style="font-size: 1.25rem">Putri Kedua</p>
                        <p class="mb-0">Bapak Yulianto & Ibu Surati</p>
                    </div>
                </div>

                <!-- Ballon animation -->
                <div class="position-relative">
                    <div class="position-absolute" style="top: 0%; right: 5%">
                        <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="opacity-50" onload="util.animate(this, 1500, 'animate-love')" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063q.068.062.132.129.065-.067.132-.129c3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3 3 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <!-- Wave Separator -->
        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#111111" fill-opacity="1" d="M0,192L40,181.3C80,171,160,149,240,149.3C320,149,400,171,480,165.3C560,160,640,128,720,128C800,128,880,160,960,186.7C1040,213,1120,235,1200,218.7C1280,203,1360,149,1400,122.7L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
        </svg>

        <!-- Firman Allah Subhanahu Wa Ta'ala -->
        <div class="container">
            <div class="text-center" data-aos="fade-up" data-aos-duration="2000">
                <h1 class="font-esthetic mt-0 mb-3" style="font-size: 2rem">
                    Allah Subhanahu Wa Ta'ala berfirman
                </h1>

                <p style="font-size: 0.9rem" class="px-2">
                    Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan
                    pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung
                    dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa
                    kasih dan sayang. Sungguh, pada yang demikian itu benar-benar
                    terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.
                </p>

                <span class="mb-0"><strong>QS. Ar-Rum Ayat 21</strong></span>
            </div>
        </div>

        <!-- Ballon animation -->
        <div class="position-relative">
            <div class="position-absolute" style="top: 0%; left: 5%">
                <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="opacity-50" onload="util.animate(this, 4000, 'animate-love')" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063q.068.062.132.129.065-.067.132-.129c3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3 3 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398"></path>
                </svg>
            </div>
        </div>

        <!-- Wave Separator -->
        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#111111" fill-opacity="1" d="M0,96L30,106.7C60,117,120,139,180,154.7C240,171,300,181,360,186.7C420,192,480,192,540,181.3C600,171,660,149,720,154.7C780,160,840,192,900,208C960,224,1020,224,1080,208C1140,192,1200,160,1260,138.7C1320,117,1380,107,1410,101.3L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        </svg>

        <!-- Tanggal -->
        <section class="dark-section" id="tanggal">
            <div class="container">
                <div class="text-center">
                    <h1 class="font-esthetic py-3" style="font-size: 2rem">
                        Waktu Menuju Acara
                    </h1>
                    <div class="border rounded-pill shadow py-2 px-4 mx-2 mb-4">
                        <!-- Ganti waktunya pada data-waktu (sesuai format tersebut) -->
                        <div class="row justify-content-center" data-waktu="2024-07-02 00:00:00" id="tampilan-waktu">
                            <div class="col-3 p-1">
                                <h2 class="d-inline m-0 p-0" id="hari">0</h2>
                                <small class="ms-1 me-0 my-0 p-0 d-inline">Hari</small>
                            </div>
                            <div class="col-3 p-1">
                                <h2 class="d-inline m-0 p-0" id="jam">0</h2>
                                <small class="ms-1 me-0 my-0 p-0 d-inline">Jam</small>
                            </div>
                            <div class="col-3 p-1">
                                <h2 class="d-inline m-0 p-0" id="menit">0</h2>
                                <small class="ms-1 me-0 my-0 p-0 d-inline">Menit</small>
                            </div>
                            <div class="col-3 p-1">
                                <h2 class="d-inline m-0 p-0" id="detik">0</h2>
                                <small class="ms-1 me-0 my-0 p-0 d-inline">Detik</small>
                            </div>
                        </div>
                    </div>

                    <p style="font-size: 0.9rem" class="mt-4 py-2">
                        Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta'ala,
                        insyaAllah kami akan menyelenggarakan acara :
                    </p>

                    <!-- Love animation -->
                    <div class="position-relative">
                        <div class="position-absolute" style="top: 0%; right: 10%">
                            <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="opacity-50" onload="util.animate(this, 3000, 'animate-love')" viewBox="0 0 16 16">
                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                            </svg>
                        </div>
                    </div>

                    <div class="overflow-x-hidden">
                        <div class="py-2" data-aos="fade-right" data-aos-duration="1500">
                            <h1 class="font-esthetic" style="font-size: 2rem">Ngunduh Mantu</h1>
                            <p>Pukul 10.00 WIB - Selesai</p>
                        </div>
                    </div>

                    <div class="py-2" data-aos="fade-up" data-aos-duration="1500">
                        <a href="https://maps.app.goo.gl/z3XkHb9a9WiqqF2Y8" target="_blank" class="btn btn-outline-light btn-sm rounded-pill shadow-sm mb-2 px-3">
                            <i class="fa-solid fa-map-location-dot me-2"></i>Lihat Google
                            Maps
                        </a>

                        <p class="mb-0 mt-1 mx-1 pb-4" style="font-size: 0.9rem">
                            RT 001 RW 001, Desa Saptomulyo, Kec. Kota Gajah, Kab. Lampung Tengah, Lampung 34153
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Love animation -->
        <div class="position-relative">
            <div class="position-absolute" style="top: 0%; left: 10%">
                <svg xmlns="https://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="opacity-50" onload="util.animate(this, 2000, 'animate-love')" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                </svg>
            </div>
        </div>

        <!-- Maps -->
        <section class="dark-section" id="galeri">
            <div class="container pb-2 pt-4">
                <div class="card-body border rounded-4 shadow p-3">
                    <h1 class="font-esthetic text-center py-3" data-aos="fade-down" data-aos-duration="1500" style="font-size: 2rem">
                        Lokasi
                    </h1>

                    <div id="carousel-foto-satu" data-aos="fade-up" data-aos-duration="1500" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded-4">
                            <div class="carousel-item active">
                                <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d15897.726769369583!2d105.29182587777996!3d-5.033527740255039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMDInMDAuNyJTIDEwNcKwMTgnMzcuMCJF!5e0!3m2!1sen!2sus!4v1713891935669!5m2!1sen!2sus"><a href="https://www.gps.ie/">gps tracker sport</a></iframe></div>
                            </div>
                        </div>
                    </div>
        </section>

        <!-- Galeri Foto -->
        <section class="dark-section" id="galeri">
            <div class="container pb-2 pt-4">
                <div class="card-body border rounded-4 shadow p-3">
                    <h1 class="font-esthetic text-center py-3" data-aos="fade-down" data-aos-duration="1000" style="font-size: 2rem">
                        Galeri
                    </h1>

                    <div id="carousel-foto-satu" data-aos="fade-up" data-aos-duration="1000" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-foto-satu" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel-foto-satu" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-foto-satu" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner rounded-4">
                            <div class="carousel-item active">
                                <img src="./assets/images/1.jpg" alt="gambar 1" class="d-block w-100" onclick="util.modal(this)" />
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/3.jpg" alt="gambar 2" class="d-block w-100" onclick="util.modal(this)" />
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/4.jpg" alt="gambar 3" class="d-block w-100" onclick="util.modal(this)" />
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-foto-satu" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carousel-foto-satu" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Wave Separator -->
        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#111111" fill-opacity="1" d="M0,96L30,106.7C60,117,120,139,180,154.7C240,171,300,181,360,186.7C420,192,480,192,540,181.3C600,171,660,149,720,154.7C780,160,840,192,900,208C960,224,1020,224,1080,208C1140,192,1200,160,1260,138.7C1320,117,1380,107,1410,101.3L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
        </svg>

        <!-- Hadiah -->
        <div class="container">
            <div class="py-4">
                <div class="text-center">
                    <h1 class="font-esthetic mt-0 mb-3" style="font-size: 3rem">
                        Love Gift
                    </h1>

                    <p class="mb-1" style="font-size: 0.9rem">
                        Tanpa mengurangi rasa hormat, bagi anda yang ingin memberikan
                        tanda kasih untuk kami, dapat melalui :
                    </p>

                    <div class="overflow-x-hidden">
                        <div class="row justify-content-center">
                            <div class="col-5 card-body border rounded-4 shadow p-3 m-3" data-aos="fade-down" data-aos-duration="1500">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Bank_Central_Asia.svg/799px-Bank_Central_Asia.svg.png" class="img-fluid w-50 rounded" alt="bca" />

                                <p class="card-text mt-3 mb-0" style="font-size: 0.9rem">
                                    No. Rekening 1170984532
                                </p>
                                <p class="card-text" style="font-size: 0.9rem">
                                    a.n Taufik Baharsyah
                                </p>

                                <!-- Ubah juga data-nomer sesuai dengan no rekening -->
                                <button class="btn btn-light btn-sm rounded-3" data-nomer="1170984532" onclick="util.salin(this)" autofocus>
                                    Salin No. Rekening
                                </button>
                            </div>

                            <!-- <div class="col-5 card-body border rounded-4 shadow p-3 m-3" data-aos="fade-down" data-aos-duration="1500">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/640px-BANK_BRI_logo.svg.png" class="img-fluid w-50 rounded" alt="bri" />

                                <p class="card-text mt-3 mb-0" style="font-size: 0.9rem">
                                    No. Rekening belom tersedia
                                </p>
                                <p class="card-text" style="font-size: 0.9rem">
                                    a.n Lorem ipsum dolor
                                </p> -->

                            <!-- Ubah juga data-nomer sesuai dengan no rekening -->
                            <!-- <button class="btn btn-light btn-sm rounded-3" data-nomer="belom tersedia" onclick="util.salin(this)" autofocus>
                                    Salin No. Rekening
                                </button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Ucapan -->
        <!-- <section class="m-0 p-0" id="ucapan">
            <div class="container">
                <div class="card-body border rounded-4 shadow p-3">
                    <h1 class="font-esthetic text-center mb-3" style="font-size: 3rem">
                        Ucapan & Doa
                    </h1>
                    <div class="mb-1" id="balasan"></div>

                    <div class="mb-3">
                        <label for="form-nama" class="form-label">Nama</label>
                        <input type="text" class="form-control shadow-sm" id="form-nama" placeholder="Isikan Nama Anda" />
                    </div>

                    <div class="mb-3">
                        <label for="form-kehadiran" class="form-label" id="label-kehadiran">Kehadiran</label>
                        <select class="form-select shadow-sm" id="form-kehadiran">
                            <option value="0" selected>Konfirmasi Kehadiran</option>
                            <option value="1">Hadir</option>
                            <option value="2">Berhalangan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="form-pesan" class="form-label">Ucapan & Doa</label>
                        <textarea class="form-control shadow-sm" id="form-pesan" rows="4" placeholder="Tulis Ucapan & Doa"></textarea>
                    </div>

                    <div class="d-flex">
                        <button class="flex-fill btn btn-danger btn-sm rounded-3 shadow m-1" style="display: none" onclick="comment.batal()" id="batal">
                            Batal<i class="fa-solid fa-xmark ms-1"></i>
                        </button>
                        <button class="flex-fill btn btn-success btn-sm rounded-3 shadow m-1" style="display: none" onclick="comment.balas()" id="balas">
                            Balas<i class="fa-solid fa-reply ms-1"></i>
                        </button>
                        <button class="flex-fill btn btn-warning btn-sm rounded-3 shadow m-1" style="display: none" onclick="comment.ubah()" id="ubah">
                            Ubah<i class="fa-solid fa-pen-to-square ms-1"></i>
                        </button>
                        <button class="flex-fill btn btn-primary btn-sm rounded-3 shadow m-1" onclick="comment.kirim()" id="kirim">
                            Kirim<i class="fa-solid fa-paper-plane ms-1"></i>
                        </button>
                    </div>
                </div>

                <div class="rounded-4 mt-4 mb-2" id="daftar-ucapan"></div>

                <nav class="d-flex justify-content-center mb-0">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled" id="previous">
                            <button class="page-link" onclick="pagination.previous(this)" aria-label="Sebelumnya">
                                <i class="fa-solid fa-circle-left me-1"></i>Sebelumnya
                            </button>
                        </li>
                        <li class="page-item disabled">
                            <span class="page-link text-light" id="page">1</span>
                        </li>
                        <li class="page-item" id="next">
                            <button class="page-link" onclick="pagination.next(this)" aria-label="Selanjutnya">
                                Selanjutnya<i class="fa-solid fa-circle-right ms-1"></i>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
        </section> -->

        <!-- Wave Separator -->
        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#111111" fill-opacity="1" d="M0,224L34.3,234.7C68.6,245,137,267,206,266.7C274.3,267,343,245,411,234.7C480,224,549,224,617,213.3C685.7,203,754,181,823,197.3C891.4,213,960,267,1029,266.7C1097.1,267,1166,213,1234,192C1302.9,171,1371,181,1406,186.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
        </svg>

    </main>

    <!-- Footer Undangan -->
    <footer>
        <div class="container">
            <div class="text-center">
                <p style="font-size: 0.9rem" class="pt-2 pb-1 px-2" data-aos="fade-up" data-aos-duration="1500">
                    Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila, Bapak
                    / Ibu / Saudara / i. berkenan hadir untuk memberikan do'a restunya
                    kami ucapkan terimakasih.
                </p>

                <h1 class="font-esthetic" data-aos="fade-up" data-aos-duration="2000">
                    Wassalamualaikum Warahmatullahi Wabarakatuh
                </h1>
                <h1 class="font-arabic py-4 px-2" data-aos="fade-up" data-aos-duration="2000" style="font-size: 2rem">
                    اَلْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِيْنَۙ
                </h1>

                <hr class="mt-2 mb-1" />

                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto">
                        <small class="text-light">
                            Made By<i class="fa-solid fa-heart mx-1"></i>Syarif Syarifuddin
                        </small>
                    </div>
                    <div class="col-auto">
                        <small>
                            <i class="fa-brands fa-github me-1"></i><a target="_blank" href="https://github.com/soden46">Syarif Soden</a>
                            <i class="fa-brands fa-blogger-b me-1"></i><a target="_blank" href="https://rebrand.ly/imzjxs0">Syarif Soden</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Welcome Page -->
    <div class="loading-page" id="welcome" style="opacity: 1">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh !important">
            <div class="text-center">
                <h1 class="font-esthetic mb-4" style="font-size: 2.5rem">
                    The Wedding Of
                </h1>

                <div class="img-crop border border-3 border-light shadow mb-4 mx-auto">
                    <img src="./assets/images/10.jpg" alt="bg" />
                </div>

                <h1 class="font-esthetic my-4" style="font-size: 2.5rem">
                    Taufik & Citra
                </h1>
                <span>{{$parameters}}</span>

                <button type="button" class="btn btn-light shadow rounded-4 mt-4" onclick="util.buka(this)">
                    <i class="fa-solid fa-envelope-open me-2"></i>Buka Undangan
                </button>
            </div>
        </div>
    </div>

    <!-- Audio Button -->
    <button type="button" id="tombol-musik" style="display: none" class="btn btn-light btn-sm rounded-circle btn-music" onclick="util.music(this)" data-status="true" data-url="./assets/music/sound.mp3">
        <i class="fa-solid fa-circle-pause spin-button"></i>
    </button>

    <!-- Loading page -->

    <!-- Modal Foto Large -->
    <div class="modal fade" id="modal-image" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                        <img src="./assets/images/bg.jpeg" class="w-100" alt="foto" id="show-modal-image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection