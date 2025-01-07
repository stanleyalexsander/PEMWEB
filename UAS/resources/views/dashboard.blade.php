@extends('layouts.dashboard')

@section('title', 'Dashboard - Logistock')

@push('styles')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="container-fluid m-0 p-0" id="wrap">
    <div class="row m-0">

        <!-- SIDEBAR -->
        @include('sidebar')
        <!-- END SIDEBAR -->

        <div class="col" id="wrap-right">

            <!-- NAVBAR -->
            @include('navbar')
            <!-- NAVBAR -->

            <div class="row m-0">
                <div class="col pt-5 px-4 pb-4">
                    <div class="row m-0" id="data-row">

                        <div class="col-12 col-lg-6 p-0">
                            <div class="row mb-3 mx-0">
                                <h3 class="m-0 p-0 text-b text-color-text">Barang Tersedia</h3>
                            </div>
                            <div class="row m-0">
                                <canvas class="p-0" id="barangTersediaChart"></canvas>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 p-0">
                            <div class="row mb-3 mx-0">
                                <h3 class="m-0 p-0 text-b text-color-text">Hampir Habis</h3>
                            </div>
                            <div class="row m-0">
                                <canvas class="p-0" id="barangHampirHabisChart"></canvas>
                            </div>
                        </div>

                        <div class="col-12 p-0">
                            <div class="row mb-3 mx-0">
                                <h3 class="m-0 p-0 text-b text-color-text">Riwayat Barang</h3>
                            </div>
                            <div class="row m-0">
                                <table id="riwayatTable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama Barang</th>
                                            <th>Stok</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($barangData as $barang)
                                            <tr>
                                                <td>{{ $barang->kode_barang }}</td>
                                                <td>{{ $barang->nama_barang }}</td>
                                                <td>{{ $barang->stok }}</td>
                                                <td>{{ \Carbon\Carbon::parse($barang->tanggal)->format('d-m-Y') }}</td>
                                                <td>{{ $barang->keterangan }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const barangTersedia = {
        labels: @json($labelBarangTersedia),
        datasets: [{
            data: @json($stokBarangTersedia),
            backgroundColor: '#F79279'
        }]
    };

    const barangHampirHabis = {
        labels: @json($labelHampirHabis),
        datasets: [{
            data: @json($stokHampirHabis),
            backgroundColor: '#4682B4'
        }]
    };

    const configBarangTersedia = {
        type: 'bar',
        data: barangTersedia,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                },
                title: {
                    display: false
                }
            }
        }
    };

    const configBarangHampirHabis = {
        type: 'bar',
        data: barangHampirHabis,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                },
                title: {
                    display: false
                }
            }
        }
    };

    new Chart(document.getElementById('barangTersediaChart'), configBarangTersedia);
    new Chart(document.getElementById('barangHampirHabisChart'), configBarangHampirHabis);
</script>

<script>
    $(document).ready(function() {
        $('#riwayatTable').DataTable({
            pageLength: 5,
            lengthMenu: [5, 10, 20, 50],
            order: [[3, 'desc']],
            language: {
                search: "Cari:",
                lengthMenu: "Tampilkan _MENU_ entri",
                info: "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
                paginate: {
                    first: "Pertama",
                    last: "Terakhir",
                    next: "Berikutnya",
                    previous: "Sebelumnya"
                }
            }
        });
    });
</script>
@endpush
