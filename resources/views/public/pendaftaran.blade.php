@extends('public.includes.layout')

@section('content')
    <section id="info" class="about tm-section-pad-top">

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="about-image-wrap h-100">
                        <img src="img/pendaftaran.jpeg" class="img-fluid about-image" alt="">


                    </div>
                </div>

                <div class="col-lg-6 col-12 d-flex flex-column">
                    <div class="about-thumb bg-white shadow-lg">

                        <div class="about-info">

                            <h2 class="mb-3 text-warning">Pendaftaran</h2>

                            <h5 class="mb-3">Pendaftaran Santri Tahun 2024</h5>

                            <p>Telah dibuka penerimaan santri baru pondok pesantren moderen IT Multimedia Al-Fatih tahun
                                ajaran 2024/2025 </p>
                            <ul class="kuota-pendaftaran">
                                <li>Kuota hanya untuk :</li>
                                <ul class="jumlah-kuota">
                                    <li>SMP : 25 santri</li>
                                    <li>SMK : 25 santri</li>
                                </ul>
                            </ul>

                            <p>Gelombang 1 : 1 Sept - 20 Des 2023</p>
                            <p>Gelombang 2 : 1 Januari 2024 - 20 Maret 2024 </p>
                            <p>Gelombang 3 : 1 April 2024 - 31 Mei (Dibuka Jika kuota belum terpenuhi) </p>
                        </div>
                    </div>

                    <div class="row h-100">
                        <div class="col-lg-6 col-12">
                            <div class="about-thumb about-bg d-flex flex-column justify-content-center mb-lg-0 h-100">
                                <div class="about-info">
                                    <h5 class="text-white mb-4">Daftar Sekarang</h5>

                                    <a class="custom-btn btn bg-success"
                                        href="https://bit.ly/PPDBSMPSMKALFATIH2024">Daftar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="about-thumb2 about-bg d-flex flex-column justify-content-center mb-lg-0 h-100">

                                <div class="about-info">
                                    <h5 class="text-white mb-4">Download Brosur</h5>

                                    <a class="custom-btn btn bg-orange" href="https://bit.ly/PPDBALFATIH2024">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
