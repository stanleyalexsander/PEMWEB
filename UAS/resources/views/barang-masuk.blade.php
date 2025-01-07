@extends('layouts.dashboard')

@section('title', 'Barang Masuk - Logistock')

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
                                <div class="col p-0">
                                    <h3 class="m-0 p-0 text-b text-color-text">Barang Masuk</h3>
                                </div>
                                <div class="col-auto p-0">
                                    <a href="" class="btn bg-color-secondary  text-color-base border-0 mx-1" data-bs-toggle="modal" data-bs-target="#modalTambahData">Tambah <i class="fa-regular fa-plus"></i></a>
                                </div>
                            </div>
                            <div class="row m-0">
                                <div class="table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Kode</th>
                                                <th>Jumlah Barang</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Sumber</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($barangMasukData as $barangMasuk)
                                                <tr>
                                                    <td>{{ $barangMasuk->kode_barang }}</td>
                                                    <td>{{ $barangMasuk->jumlah_masuk }}</td>
                                                    <td>{{ $barangMasuk->tanggal_masuk }}</td>
                                                    <td>{{ $barangMasuk->sumber_barang }}</td>
                                                    <td class="text-center">
                                                        <a href="" class="btn btn-info text-color-base border-0 mx-1" data-bs-toggle="modal" data-bs-target="#modalEditData{{ $barangMasuk->id_masuk }}"><i class="fa-regular fa-pen-to-square"></i></a>
                                                        <a href="" class="btn btn-danger btn-delete text-color-base border-0 mx-1" data-id="{{ $barangMasuk->id_masuk }}"><i class="fa-regular fa-trash-can"></i></a>
                                                        <form action="{{ route('barang-masuk.destroy', $barangMasuk->id_masuk) }}" method="POST" id="delete-form-{{ $barangMasuk->id_masuk }}">
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

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambahData" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTambahDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0 p-4">
            <h3 class="text-b text-color-text m-0 p-0" id="modalTambahDataLabel">Data Barang Masuk</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('barang-masuk.store') }}" method="POST">
            @csrf
            <div class="modal-body py-0 px-4">
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Kode Barang</label>
                    <select class="form-control select2" name="kode_barang" required>
                        <option value="" selected disabled>Pilih atau masukkan kode</option>
                        @foreach($barangData as $barang)
                            <option value="{{ $barang->kode_barang }}">{{ $barang->kode_barang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Nama Barang</label>
                    <select class="form-control select2" name="nama_barang" required>
                        <option value="" selected disabled>Pilih atau masukkan nama barang</option>
                        @foreach($barangData as $barang)
                            <option value="{{ $barang->nama_barang }}">{{ $barang->nama_barang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Kategori</label>
                    <select class="form-control select2" name="kategori_barang" required>
                        <option value="" selected disabled>Pilih atau masukkan kategori</option>
                        @foreach($barangData as $barang)
                            <option value="{{ $barang->kategori_barang }}">{{ $barang->kategori_barang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Jumlah</label>
                    <input class="form-control" type="number" name="jumlah_masuk" required>
                </div>
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Tanggal Masuk</label>
                    <input class="form-control" type="date" name="tanggal_masuk" required>
                </div>
                <div class="row mx-0 mb-3">
                    <label class="text-color-text mb-2 mx-0 p-0">Sumber Barang</label>
                    <select class="form-control select2" name="sumber_barang" required>
                        <option value="" selected disabled>Pilih atau masukkan sumber barang</option>
                        @foreach($barangMasukData as $barangMasuk)
                            <option value="{{ $barangMasuk->sumber_barang }}">{{ $barangMasuk->sumber_barang }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-footer border-0 p-4">
                <button type="button" class="btn bg-color-primary text-color-base me-4" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn bg-color-secondary text-color-base">Simpan</button>
            </div>
        </form>
      </div>
    </div>
</div>


<!-- Modal Edit -->
@foreach($barangMasukData as $barangMasuk)
    <div class="modal fade" id="modalEditData{{ $barangMasuk->id_masuk }}" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditDataLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0 p-4">
                    <h3 class="text-b text-color-text m-0 p-0" id="modalEditDataLabel">Edit Barang Masuk</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('barang-masuk.update', $barangMasuk->id_masuk) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body py-0 px-4">
                        <div class="row mx-0 mb-3">
                            <label class="text-color-text mb-2 mx-0 p-0">Kode Barang</label>
                            <select class="form-control select2" name="kode_barang" required>
                                <option value="{{ $barangMasuk->kode_barang }}" selected>{{ $barangMasuk->kode_barang }}</option>
                                @foreach($barangData as $barang)
                                    @if ($barangMasuk->kode_barang != $barang->kode_barang)
                                        <option value="{{ $barang->kode_barang }}">{{ $barang->kode_barang }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="row mx-0 mb-3">
                            <label class="text-color-text mb-2 mx-0 p-0">Jumlah Masuk</label>
                            <input class="form-control" type="number" name="jumlah_masuk" value="{{ $barangMasuk->jumlah_masuk }}" required>
                        </div>
                        <div class="row mx-0 mb-3">
                            <label class="text-color-text mb-2 mx-0 p-0">Tanggal Masuk</label>
                            <input class="form-control" type="date" name="tanggal_masuk" value="{{ $barangMasuk->tanggal_masuk }}" required>
                        </div>
                        <div class="row mx-0 mb-3">
                            <label class="text-color-text mb-2 mx-0 p-0">Sumber Barang</label>
                            <input class="form-control" type="text" name="sumber_barang" value="{{ $barangMasuk->sumber_barang }}" required>
                        </div>
                    </div>
                    <div class="modal-footer border-0 p-4">
                        <button type="button" class="btn bg-color-primary text-color-base me-4" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn bg-color-secondary text-color-base">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
@endsection

@push('scripts')

@endpush
