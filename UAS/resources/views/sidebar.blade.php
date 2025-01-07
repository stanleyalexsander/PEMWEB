<div class="col position-fixed desktop-item bg-color-primary p-0" id="wrap-left">
    <div class="row mx-auto my-0 text-center py-3 px-3" id="wrap-left-brand">
        <h2 class="text-color-base text-b m-auto p-0">Logi<span class="text-color-secondary">stock</span></h2>
    </div>
    <hr class="m-0 p-0 bg-color-active">
    <div class="row m-auto" id="wrap-left-link">
        <div class="col mx-auto mt-5 p-0">

            @if(Auth::user()->hasRole('admin'))
                <div class="row mb-3 mx-3">
                    <a class="btn d-flex align-items-center text-color-base text-semi-b py-2 px-3" id="dashboard-side"
                        href="{{ route('dashboard') }}">
                        <i class="fa-solid fa-chart-line text-color-base me-2"></i> Dashboard
                    </a>
                </div>

                <div class="row mb-3 mx-3">
                    <a class="btn d-flex align-items-center text-color-base text-semi-b text-color-base text-semi-b py-2 px-3" id="data-barang-side"
                        href="{{ route('data-barang') }}">
                        <i class="fa-solid fa-boxes-stacked text-color-base me-2"></i> Data Barang
                    </a>
                </div>

                <div class="row mb-3 mx-3">
                    <a class="btn d-flex align-items-center text-color-base text-semi-b text-color-base text-semi-b py-2 px-3" id="barang-masuk-side"
                        href="{{ route('barang-masuk') }}">
                        <i class="fa-solid fa-box-open text-color-base me-2"></i> Barang Masuk
                    </a>
                </div>

                <div class="row mb-3 mx-3">
                    <a class="btn d-flex align-items-center text-color-base text-semi-b text-color-base text-semi-b py-2 px-3" id="barang-keluar-side"
                        href="{{ route('barang-keluar') }}">
                        <i class="fa-solid fa-dolly text-color-base me-2"></i> Barang Keluar
                    </a>
                </div>

                <div class="row mb-5 mx-3">
                    <a class="btn d-flex align-items-center text-color-base text-semi-b text-color-base text-semi-b py-2 px-3" id="pengguna-side"
                        href="{{ route('pengguna') }}">
                        <i class="fa-solid fa-users text-color-base me-2"></i> Pengguna
                    </a>
                </div>
            @endif

            @if(Auth::user()->hasRole('petugas'))
                <div class="row mb-3 mx-3">
                    <a class="btn d-flex align-items-center text-color-base text-semi-b text-color-base text-semi-b py-2 px-3" id="barang-masuk-side"
                        href="{{ route('barang-masuk') }}">
                        <i class="fa-solid fa-box-open text-color-base me-2"></i> Barang Masuk
                    </a>
                </div>

                <div class="row mb-5 mx-3">
                    <a class="btn d-flex align-items-center text-color-base text-semi-b text-color-base text-semi-b py-2 px-3" id="barang-keluar-side"
                        href="{{ route('barang-keluar') }}">
                        <i class="fa-solid fa-dolly text-color-base me-2"></i> Barang Keluar
                    </a>
                </div>
            @endif

            <hr class="m-0 p-0">

            <div class="row mt-4 mx-3">
                <form action="{{ route('logout') }}" id="logout-form" class="p-0" method="POST">
                    @csrf
                    <a class="btn btn-logout d-flex align-items-center text-color-base text-semi-b text-color-base text-semi-b py-2 px-3"
                        href="{{ route('logout') }}">
                        <i class="fa-solid fa-arrow-right-from-bracket text-color-base me-2"></i> Logout
                    </a>
                </form>
            </div>

        </div>
    </div>
</div>
