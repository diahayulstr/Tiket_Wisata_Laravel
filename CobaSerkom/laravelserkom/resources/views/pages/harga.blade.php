@include('template.theme')
@extends('layouts.dashbar')

@section('content')

    <body>
        <article id="tabelHarga">
            <div class="w3-opacity">
                <div class="w3-clear"></div>
                <header class="w3-center w3-margin-bottom">
                    <h1 style="color: black"><b>HARGA TIKET</b></h1>
                </header>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tempat Wisata</th>
                        <th scope="col">Usia Pengunjung</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" rowspan="2">1</th>
                        <td rowspan="2">Rinbow Rafting</td>
                        <td>˂ 12 Tahun</td>
                        <td>Rp 75.000</td>
                    </tr>
                    <tr>
                        <td>≥ 12 Tahun</td>
                        <td>Rp 150.000</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="2">2</th>
                        <td rowspan="2">Curug Bengkawah</td>
                        <td>˂ 12 Tahun</td>
                        <td>Rp 5.000</td>
                    </tr>
                    <tr>
                        <td>≥ 12 Tahun</td>
                        <td>Rp 10.000</td>
                    </tr>
                    <tr>
                        <th scope="row" rowspan="2">3</th>
                        <td rowspan="2">Taman Langit</td>
                        <td>˂ 12 Tahun</td>
                        <td>Rp 12.500</td>
                    </tr>
                    <tr>
                        <td>≥ 12 Tahun</td>
                        <td>Rp 25.000</td>
                    </tr>
                </tbody>
            </table>
            <p><b>Note : </b>Pengunjung usia diatas 12 tahun (anak-anak) mendapatkan potongan harga 50%</p>
        </article>
    </body>

    @include('layouts.footer')
@endsection
