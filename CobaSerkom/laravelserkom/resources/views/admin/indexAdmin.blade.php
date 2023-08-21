@include('template.theme')
@extends('layouts.dashbarAdmin')

@section('content')

    <body>

        <section>
            <div class="py-3 gy-3 container">
                <h1 class="py-3">Dashboard Admin Wisata Pemalang</h1>
            </div>

            <div class="container">
                <br>
                <canvas id="myChart" width="100%"></canvas>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Pengunjung Anak-anak', 'Pengunjung Dewasa'],
                    datasets: [{
                        label: 'Jumlah Pengunjung',
                        data: [{{ $pengunjunganakanak }}, {{ $pengunjungdewasa }}],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </body>
    <br><br><br><br>
    @include('layouts.footer')
@endsection
