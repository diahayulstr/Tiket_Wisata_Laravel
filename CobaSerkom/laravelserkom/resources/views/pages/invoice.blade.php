@extends('layouts.app')
@include('template.theme')

@section('content')

    <body id="formpesan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div id="btnBack">
                        <a class="nav-link" href="{{ route('pages.indexInvoice') }}">&laquo; Back</a>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header">
                            Tiket Anda
                        </div>

                        <div class="card-body">
                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-12">
                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session()->get('message') }}
                                            </div>
                                        @endif
                                        <ol>Nama Lengkap : {{$pesan->name}} </ol>
                                        <ol>Nomor Identitas : {{$pesan->no_identitas}} </ol>
                                        <ol>No. Hp : {{$pesan->no_hp}} </ol>
                                        <ol>Tempat Wisata : {{$pesan->wisata}} </ol>
                                        <ol>Pengunjung Dewasa : {{$pesan->dewasa}} Orang</ol>
                                        <ol>Pengunjung Anak-anak : {{$pesan->anakanak}} Orang</ol>
                                        <ol>Harga Tiket : Rp. {{$pesan->harga_tiket}} </ol>
                                        <ol>Total Bayar : Rp. {{$pesan->total_bayar}} </ol>
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
