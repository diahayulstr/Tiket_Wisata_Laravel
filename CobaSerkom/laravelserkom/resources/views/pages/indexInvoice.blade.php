@extends('layouts.app')
@include('template.theme')

@section('content')

    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="py-4 d-flex justify-content-end align-items-center">
                        <h2 class="mr-auto">Pesanan Tiket Anda</h2>
                    </div>
                    @if (session()->has('pesan'))
                        <div class="alert alert-success">
                            {{ session()->get('pesan') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tempat Wisata</th>
                                <th>Tanggal Kunjungan</th>
                                <th>Harga Tiket</th>
                                <th>Total Bayar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pesans as $data)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td><a href="{{ route('pages.invoice',['pesan' => $data->id]) }}">{{ $data->wisata }}</a></td>
                                    <td>{{ $data->tanggal }}</td>
                                    <td>Rp. {{ $data->harga_tiket }}</td>
                                    <td>Rp. {{ $data->total_bayar }}</td>
                                </tr>
                            @empty
                                <td colspan="6" class="text-center">Tidak ada data...</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>

    <br><br><br>
    @include('layouts.footer')
@endsection
