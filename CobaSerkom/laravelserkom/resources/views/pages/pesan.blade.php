@extends('layouts.app')
@include('template.theme')

@section('content')

    <body id="formpesan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div id="btnBack">
                        <a class="nav-link" href="{{ route('home') }}">&laquo; Back</a>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header">
                            Pesan Tiket
                        </div>

                        <div class="card-body">
                            <div class="container pt-8">
                                <div class="row">
                                    <div class="col-md-8 col-xl-8">
                                        <form action="{{url('pesan')}}" method="POST" enctype="multipart/form-data" id="pesanTiket">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Nama Lengkap</label>
                                                <input type="text" placeholder="Nama Lengkap"
                                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                                    name="name" value="{{ Auth::user()->name }}" readonly>
                                            </div>

                                            <div class="form-group">
                                                <label for="no_identitas">Nomor Identitas</label>
                                                <input type="text" placeholder="Nomor Identitas"
                                                    class="form-control @error('no_identitas') is-invalid @enderror"
                                                    id="no_identitas" name="no_identitas" value="{{ old('no_identitas') }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="no_hp">No. Hp</label>
                                                <input type="text" placeholder="62893xxxx"
                                                    class="form-control @error('no_hp') is-invalid @enderror" id="no_hp"
                                                    name="no_hp" value="{{ old('no_hp') }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="wisata">Tempat Wisata</label>
                                                <select class="form-control" name="wisata" id="wisata"
                                                    onchange="hargaTiket()" required>
                                                    <option hidden>Pilih Wisata</option>
                                                    <option value="Rainbow Rafting"
                                                        {{ old('rainbowrafting') == 'Rainbow Rafting' ? 'selected' : '' }}>
                                                        Rainbow Rafting
                                                    </option>
                                                    <option value="Curug Bengkawah"
                                                        {{ old('curugbengkawah') == 'Curug Bengkawah' ? 'selected' : '' }}>
                                                        Curug Bengkawah
                                                    </option>
                                                    <option value="Taman Langit"
                                                        {{ old('tamanlangit') == 'Taman Langit' ? 'selected' : '' }}>
                                                        Taman Langit
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="tanggal">Tanggal Kujungan</label>
                                                <input type="date"
                                                    class="form-control @error('tanggal') is-invalid @enderror"
                                                    id="tanggal" name="tanggal" value="{{ old('tanggal') }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="dewasa">Pengunjung Dewasa</label>
                                                <input type="number" name="dewasa" id="dewasa" class="form-control"
                                                    min="0" placeholder="Jumlah Pengunjung Dewasa">
                                            </div>

                                            <div class="form-group">
                                                <label for="anakanak">Pengunjung Anak-anak</label><br>
                                                <small style="font-size: 10px;">Usia dibawah 12 tahun</small>

                                                <input type="number" name="anakanak" id="anakanak" class="form-control"
                                                    min="0" placeholder="Jumlah Pengunjung Anak-anak">
                                            </div>

                                            <div class="form-group">
                                                <label for="harga_tiket">Harga Tiket</label>
                                                <p class="mt-1" style="display: flex;">
                                                    Rp. <input type="number" name="harga_tiket" id="harga_tiket"
                                                        class="form-control" readonly required
                                                        style="border: none; margin-top: -5px;">
                                                </p>
                                            </div>


                                            <div class="form-group">
                                                <label for="total_bayar">Total Bayar</label>
                                                <p class="mt-1" style="display: flex;">
                                                    Rp. <input type="number" name="total_bayar" id="total_bayar"
                                                        class="form-control" readonly required
                                                        style="border: none; margin-top: -5px;">
                                                </p>
                                            </div>

                                            <p><input type='checkbox' name='s&k' value='s&k'> Saya dan/atau
                                                rombongan memahami, dan setuju berdasarkan syarat dan ketentuan yang
                                                telah ditetapkan</p>

                                            <input class="hitungTotalBayar btn btn-warning" type="button" id="btnForm"
                                                value="Hitung Total Bayar" onclick="enableButton2()">
                                            <button type="submit" id="button2" class="btn btn-primary"
                                                disabled>Pesan Tiket</button>
                                            <a class="hitungTotalBayar btn btn-danger" type="button" id="btnForm"
                                                href="{{ url('/pemesanan') }}">Cancel</a>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
    <br><br><br>
    @include('layouts.footer')
@endsection
