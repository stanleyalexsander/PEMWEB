@extends('layouts.app')

@section('title', 'Login - Logistock')

@push('styles')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid bg-color-base m-0 p-0">
        <div class="row h-100 w-100 m-0">

            <div class="col-12 col-md-6 bg-color-primary justify-content-center align-items-center d-flex" id="left-col">
                <div class="row m-0 w-100">
                    <div class="col w-100 p-0">
                        <div class="row mx-0 mb-4 text-center">
                            <h1 class="text-color-base m-0 p-0 text-b">
                                Logi<span class="text-color-secondary">stock</span>
                            </h1>
                        </div>
        
                        <div class="row mx-0 mb-5 text-center">
                            <p class="text-color-base m-0 p-0">
                                Kelola barang masuk dan keluar dengan mudah. Silahkan login untuk melanjutkan.
                            </p>
                        </div>
        
                        <form action="{{ route('login.process') }}" method="POST">
                            @csrf
                            <div class="row mx-0 mb-4">
                                <label class="text-color-base mb-2 p-0">
                                    Email
                                </label>
                                <input type="text" class="form-control" name="email" required>
                            </div>
                            
                            <div class="row mx-0 mb-128 position-relative">
                                <label class="text-color-base mb-2 p-0">
                                    Password
                                </label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                <i class="fa-regular fa-eye end-0" id="togglePassword"></i>
                            
                            </div>
        
                            <div class="row m-0">
                                <button class="btn bg-color-secondary text-color-base text-b" type="submit">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 d-none d-md-flex justify-content-center align-item-center d-flex" id="right-col">
                <div class="row m-0">
                    <div class="col p-0 m-auto">
                        <img src="{{ asset('img/login-illustration.png') }}" alt="Login illustration">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

    @push('scripts')
        <script src="{{ asset('js/show-password.js') }}"></script>
    @endpush

