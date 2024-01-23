@extends('public.includes.layout')

@section('content')
<section id="info" class="unit-pendidikan tm-section-pad-top">

    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 text-center mx-auto mb-5">

                <h2 class="black">UNIT PENDIDIKAN</h2>

            </div>

            <div class="col-lg-6 col-12">
                <nav>
                    <div class="nav nav-tabs flex-column align-items-baseline" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-business-tab" data-bs-toggle="tab"
                            data-bs-target="#smp" type="button" role="tab" aria-controls="nav-business"
                            aria-selected="true">
                            <h3>SMP IT Multimedia</h3>

                            <span>SMP IT Multimedia berfokus pada penguasaan keahlian di bidang teknologi multimedia
                                dan konten multimedia dalam sistem terdistribusi</span>
                        </button>

                        <button class="nav-link" id="nav-strategy-tab" data-bs-toggle="tab" data-bs-target="#smk"
                            type="button" role="tab" aria-controls="nav-strategy" aria-selected="false">
                            <h3>SMK IT Multimedia</h3>

                            <span>SMK IT Multimedia berfokus pada penguasaan keahlian di bidang teknologi multimedia
                                dan konten multimedia dalam sistem terdistribusi</span>
                        </button>

                        <button class="nav-link" id="nav-video-tab" data-bs-toggle="tab" data-bs-target="#ekskul"
                            type="button" role="tab" aria-controls="nav-video" aria-selected="false">
                            <h3>Training Pemrograman</h3>

                            <span>Training pemrograman adalah unit pendidikan non formal yang diselenggarakan oleh
                                PPM IT Multimedia AL Fatih untuk membekali masyarakat agar lebih familiar dengan
                                Information Teknologi (IT)</span>
                        </button>

                        <button class="nav-link" id="nav-video-tab" data-bs-toggle="tab" data-bs-target="#aktivitas"
                            type="button" role="tab" aria-controls="nav-video" aria-selected="false">
                            <h3>Aktivitas Santri</h3>

                            <span>Dalam memenuhi pendidikan di PPM IT Multimedia Al Fatih santri akan memepelajari
                                materi umum kedinasan, Tahfidzul Qur’an, Praktek IT Mutimedia dan Materi Diniyah /
                                Agama yang kami bagi pembelajarannya</span>
                        </button>

                    </div>
                </nav>
            </div>

            <div class="col-lg-6 col-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="smp" role="tabpanel" aria-labelledby="nav-intro-tab">
                        <img src="img/smp.jpg" class="img-fluid" alt="">

                        <h5 class="mt-4 mb-2">SMP IT Multimedia</h5>

                        <p>Unit pendidikan SMP IT Multimedia AL Fatih adalah unit pendidikan lanjutan untuk santri
                            lulusan sekolah dasar yang melanjutkan di PPM IT Mutimedia AL Fatih. Pendidikan pada
                            unit SMP menekankan kepada Al-Qur’an, ilmu dasar agama, bahasa arab & bahasa inggris dan
                            dasar-dasar IT Multimedia</p>
                    </div>

                    <div class="tab-pane fade show" id="smk" role="tabpanel" aria-labelledby="nav-strategy-tab">
                        <img src="img/smk.jpg" class="img-fluid" alt="">

                        <h5 class="mt-4 mb-2">SMK IT Multimedia</h5>

                        <p>Unit pendidikan SMK IT Multimedia AL Fatih adalah unit pendidikan lanjutan untuk santri
                            lulusan sekolah menengah pertama yang melanjutkan di PPM IT Mutimedia AL Fatih.
                            Pendidikan pada unit SMK menekankan kepada Al-Qur’an, ilmu lanjutan agama , bahasa arab
                            & bahasa inggris dan praktikum IT Multimedia lebih banyak karena memang dipersiapkan
                            untuk siap dalam dunia dakwah dan kerja </p>
                    </div>

                    <div class="tab-pane fade show" id="aktivitas" role="tabpanel" aria-labelledby="nav-video-tab">
                        <img src="img/smp.jpg" class="img-fluid" alt="">

                        <h5 class="mt-4 mb-2">Aktivitas Santri</h5>

                        <p>Dalam memenuhi pendidikan di PPM IT Multimedia Al Fatih santri akan memepelajari materi
                            umum kedinasan, Tahfidzul Quran, Praktek IT Mutimedia dan Materi Diniyah / Agama yang
                            kami bagi pembelajarannya sebagai berikut : <br></p>
                        <table class="table table-bordered">

                            <thead>
                                <th>JAM</th>
                                <th>kegiatan</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="4" class="align-middle">07.30 – 12.00</td>
                                    <td>Materi Kedinasan</td>
                                </tr>
                                <tr>
                                    <td>Tahfidzul Qur’an</td>
                                </tr>
                                <tr>
                                    <td>Bahasa Arab & Inggris</td>
                                </tr>
                                <tr>
                                    <td>Materi Praktikum IT Multimedia</td>
                                </tr>

                                <tr>
                                    <td>12.00 – 13.00 : </td>
                                    <td>Sholat dan Makan</td>
                                </tr>
                                <tr>
                                    <td>13.00 – 15.30 : </td>
                                    <td>Istirahat & Sholat Ashar</td>
                                </tr>
                                <tr>
                                    <td>15.30 – 17.30 : </td>
                                    <td>Materi Agama</td>
                                </tr>
                                <tr>
                                    <td>17.30 – 18.15 : </td>
                                    <td>Makan Sore / Malem</td>
                                </tr>
                                <tr>
                                    <td>18.15 – 19.00 : </td>
                                    <td>Sholat Maghrib dan Hapalan Al Qur’an</td>
                                </tr>
                                <tr>
                                    <td rowspan="2" class="align-middle">19.30 – 21.00 : </td>
                                    <td>Belajar Mandiri</td>
                                </tr>
                                <tr>
                                    <td>Praktikum IT Multimedia</td>
                                </tr>
                            </tbody>
                            
                            
                            
                            
                            
                            
                            

                        </table>
                    </div>

                    <div class="tab-pane fade show" id="ekskul" role="tabpanel" aria-labelledby="nav-video-tab">
                        <img src="img/coding.jpg" class="img-fluid" alt="">

                        <h5 class="mt-4 mb-2">Training Pemrograman</h5>

                        <p>Training pemrograman adalah unit pendidikan non formal yang diselenggarakan oleh PPM IT
                            Multimedia AL Fatih untuk membekali masyarakat agar lebih familiar dengan Information
                            Teknologi (IT) dengan melakukan pelatihan – pelatihan pemrograman diantaranya :
                            Pemrograman pembuatan website, Pelatihan video editing, Pelatihan desighn Grafis,
                            Pemrograman berbasis android, dll</p>

                    </div>


                </div>
            </div>

        </div>
    </div>

</section>

<section class="projects section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 text-center mx-auto mb-5">

                <h2 class="black">Ekstrakurikuler</h2>

            </div>

            <div class="col-lg-10 col-12 mb-5">

                <p>Untuk menciptakan santri yang aktif dalam kegiatan diluar jam pembelajaran maka dibentuk
                    Ekstrakurikuler di PPM IT Multimedia AL Fatih</p>

            </div>

            <div class="col-lg-4 col-12">
                <img src="img/pramuka.png" class="img-fluid projects-image" alt="">

                <h3 class="mt-3 mb-1">Pramuka</h3>

                <p>Untuk melatih santri agar bisa disiplin, bisa baris berbaris dan tali menali maka santri wajib
                    mengikuti ekstrakurikuler pramuka </p>
            </div>

            <div class="col-lg-4 col-12 my-lg-0 my-5">
                <img src="img/silat.png" class="img-fluid projects-image" alt="">

                <h3 class="mt-3 mb-1">Pencak silat</h3>

                <p>Untuk santri yang senang dengan bela diri dan ingin membekali dirinya dengan ilmu dan kemampuan
                    bela diri santri bisa memilih ektrakurikuler pencak silat dari Tapak suci putra muhammadiyah</p>
            </div>

            <div class="col-lg-4 col-12">
                <img src="img/memanah.png" class="img-fluid projects-image" alt="">

                <h3 class="mt-3 mb-1">Memanah</h3>

                <p>Salah satu olah raga sunnah yang hari ini digemari adalah memanah, maka santri bisa memilih
                    ektrakurikuler ini untuk melatih fokus dan ketangkasan</p>
            </div>

            <div class="col-lg-4 col-12">
                <img src="img/language-club.png" class="img-fluid projects-image" alt="">

                <h3 class="mt-3 mb-1">English & Arabic Club</h3>

                <p>Ektrakurikuler ini diperuntukkan untuk santri yang senang denga bahasa dan ingin memperdalam
                    bahasa Inggris dan Arab atau keduanya </p>
            </div>

            <div class="col-lg-4 col-12">
                <img src="img/agriculture.png" class="img-fluid projects-image" alt="">

                <h3 class="mt-3 mb-1">Agriculture Club</h3>

                <p>PPM IT Multimedia Al Fatih yang terletak diatas lahan 3 Hektar perkebunan membuka peluang santri
                    untuk mengambil ekstrakurikuler berkebun</p>
            </div>

        </div>
    </div>
</section>
@endsection

