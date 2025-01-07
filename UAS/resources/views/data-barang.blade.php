@extends('layouts.dashboard')

@section('title', 'Data Barang - Logistock')

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

                        <div class="col-12 p-0">
                            <div class="row mb-3 mx-0">
                                <h3 class="m-0 p-0 text-b text-color-text">Data Barang</h3>
                            </div>
                            <div class="row m-0">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Kode</th>
                                                <th>Nama Barang</th>
                                                <th>Kategori</th>
                                                <th>Stok</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>     
                                                @foreach($barangData as $barang)
                                                    <tr>
                                                        <td>{{ $barang->kode_barang }}</td>
                                                        <td>{{ $barang->nama_barang }}</td>
                                                        <td>{{ $barang->kategori_barang }}</td>
                                                        <td>{{ $barang->stok }}</td>
                                                        <td class="text-center">
                                                            <a href="" class="btn btn-info text-color-base border-0 mx-1" data-bs-toggle="modal" data-bs-target="#modalEditData{{ $barang->id_barang }}"><i class="fa-regular fa-pen-to-square"></i></a>
                                                            <a href="" class="btn btn-danger btn-delete text-color-base border-0 mx-1" data-id="{{ $barang->id_barang }}"><i class="fa-regular fa-trash-can"></i></a>
                                                            <form action="{{ route('data-barang.destroy', $barang->id_barang) }}" method="POST" id="delete-form-{{ $barang->id_barang }}">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        </td>
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
</div>

<!-- Modal -->
@foreach($barangData as $barang)
    <div class="modal fade" id="modalEditData{{ $barang->id_barang }}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditDataLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 p-4">
                <h3 class="text-b text-color-text m-0 p-0" id="modalEditDataLabel">Edit Data Barang</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('data-barang.update', $barang->id_barang) }}" method="POST">
                @csrf
                <div class="modal-body py-0 px-4">
                    <div class="row mx-0 mb-3">
                        <label class="text-color-text mb-2 mx-0 p-0">Kode</label>
                        <input class="form-control" type="text" name="kode_barang" value="{{ $barang->kode_barang }}" required>
                    </div>
                    <div class="row mx-0 mb-3">
                        <label class="text-color-text mb-2 mx-0 p-0">Nama Barang</label>
                        <input class="form-control" type="text" name="nama_barang" value="{{ $barang->nama_barang }}" required>
                    </div>
                    <div class="row mx-0 mb-3">
                        <label class="text-color-text mb-2 mx-0 p-0">Kategori</label>
                        <select class="form-control select2" id="mySelect2" name="kategori_barang" required>
                            <option value="{{ $barang->kategori_barang }}" selected>{{ $barang->kategori_barang }}</option>
                            @foreach($kategoriBarang as $kategori)
                                @if ($barang->kategori_barang != $kategori->kategori_barang)
                                    <option value="{{ $kategori->kategori_barang }}">{{ $kategori->kategori_barang }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="row mx-0 mb-3">
                        <label class="text-color-text mb-2 mx-0 p-0">Stok</label>
                        <input class="form-control" type="number" name="stok" value="{{ $barang->stok }}" required>
                    </div>
                </div>
                <div class="modal-footer border-0 p-4">
                    <button type="button" class="btn bg-color-primary text-color-base me-4" data-bs-dismiss="modal">Batal</button>
                    <button class="btn bg-color-secondary text-color-base" type="submit">Simpan</button>
                </div>
            </form>
        </div>
        </div>
    </div>
@endforeach
@endsection

@push('scripts')

@endpush
