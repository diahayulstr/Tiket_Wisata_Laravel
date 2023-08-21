@include('template.theme')
@extends('layouts.dashbar')

@section('content')

    <body>
        <main>
            <!-- ======= Hero Section ======= -->
            <section id="hero" class="hero d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4">
                            <h2 data-aos="fade-up">Wisata Pemalang</h2>
                            <blockquote data-aos="fade-up" data-aos-delay="100">
                                <p>WisataPemalang sebagai media promosi pariwisata Kabupaten Pemalang.
                                    Jelajahi pesona Kabupaten Pemalang yang belum pernah Anda kunjungi dan pesan tiketnya
                                    disini.
                                </p>
                            </blockquote>
                            <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                                <a href="{{ route('login') }}" class="btn-get-started"><b>Beli Tiket</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Hero Section -->

            <!-- Example Code -->
            <article id="kategoriWisata">
                <div class="w3-opacity">
                    <div class="w3-clear"></div>
                    <header class="w3-center w3-margin-bottom">
                        <h1 style="color: black"><b>KATEGORI WISATA</b></h1>
                    </header>
                </div>

                <div class="container p-5 m-15 border-0 bd-example">
                    <div class="row">
                        <div class="col">
                            <div class="card" style="width: 20rem">
                                <img src="img/rafting/rainbowrafting.svg" alt="" width="100%" height="180">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Rainbow Rafting</b></h5>
                                    <p class="card-text">
                                        Bagi kalian yang ingin akhir pekannya penuh dengan keseruan dan menguji adrenalin,
                                        tidak ada salahnya mencoba wisata arung jeram atau rafting nih, shobat wisata.
                                    </p>
                                    <a href="{{ route('pages.rafting') }}" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 20rem">
                                <img src="img/curug/curugbengkawah.svg" alt="" width="100%" height="180">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Curug Bengkawah</b></h5>
                                    <p class="card-text">
                                        Curug Bengkawah merupakan wisata air terjun atau curug yang berada di Desa Sikasur,
                                        Kecamatan Belik, Kabupaten Pemalang.
                                    </p>
                                    <a href="{{ route('pages.curug') }}" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 20rem">
                                <img src="img/taman/tamanlangit.svg" alt="" width="100%" height="180">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Taman Langit</b></h5>
                                    <p class="card-text">
                                        Taman langit menjadi salah satu destinasi favorit pengunjung semua kalangan baik
                                        anak-anak, kaum muda, kaum pelajar hingga orang dewasa. Siapapun dapat menikmati
                                        aneka wahana yang ada di Taman Langit.
                                    </p>
                                    <a href="{{ route('pages.taman') }}" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- End Example Code -->

        </main>
        @include('layouts.footer')
    </body>
@endsection
